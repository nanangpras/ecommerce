<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Service\RajaOngkirService;
use App\Service\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    protected $rajaOngkirService;
    protected $transactionService;

    public function __construct(
        RajaOngkirService $rajaOngkirService,
        TransactionService $transactionService)
    {
        $this->rajaOngkirService = $rajaOngkirService;
        $this->transactionService = $transactionService;
    }

    private function getCarts()
    {
        $cart = json_decode(request()->cookie('konveksi-carts'), true);
        $cart = $cart != '' ? $cart:[];
        return $cart;
    }

    public function index()
    {
        if (Auth::check()) {
            $cart = $this->getCarts();
            $subtotal = collect($cart)->sum(function($q){
                return $q['qty'] * $q['price'];
            });
            $weight_total = collect($cart)->sum(function($q){
                return $q['qty'] * $q['weight'];
            });
            $provinsi = $this->rajaOngkirService->getProvince();
            return view('home.pages.checkout.data',compact('cart', 'subtotal', 'weight_total','provinsi'));
        } else {
            return redirect()->back()->with('error','Login dahulu');
        }

        // $cart = $this->getCarts();
        // $subtotal = collect($cart)->sum(function($q){
        //     return $q['qty'] * $q['price'];
        // });
        // $weight_total = collect($cart)->sum(function($q){
        //     return $q['qty'] * $q['weight'];
        // });
        // $provinsi = $this->rajaOngkirService->getProvince();
        // return view('home.pages.checkout.data',compact('cart', 'subtotal', 'weight_total','provinsi'));
    }

    public function process(Request $request)
    {
        $cart = $this->getCarts();
        $subtotal = collect($cart)->sum(function ($q)
            {
                return $q['qty'] * $q['price'];
            });

        // $book = Book::findOrFail($id);
        // $transaction = Transaction::create([
        //     // 'code_transaction' => 'INV'- Carbon::now(),
        //     'code_transaction' => 'INV' . '-' . time(),
        //     'user_id' => Auth::user()->id,
        //     'transaction_total' => $subtotal + $request->ongkir,
        //     'transaction_status' => 'In_Cart',
        //     'bank_name' => 'BNI',
        //     'va_number' => 12,
        //     'courier' => $request->courier,
        //     'cost' => $request->ongkir
        // ]);
        $trx = $this->transactionService->save($request);
        foreach ($cart as $item) {
            TransactionDetail::create([
                'transaction_id' => $trx->id,
                'qty' => $item['qty'],
                'product_id' => $item['product_id'],
                'transaction_subtotal' => $subtotal,
            ]);
        }
        //
        $cart = [];
        $cookie = cookie('konveksi-carts',json_encode($cart),2880);
        return redirect()->route('member.detail.transaction', $trx->id)->cookie($cookie);
    }

    public function postCallback(Request $request)
    {
        //  return $request;
        $get_json   = json_decode($request->get('json'));
        // return $get_json;
        if (isset($get_json->order_id)) {
            $update_order               = Transaction::where('code',$get_json->order_id)->first();
            $update_order->payment_type = $get_json->payment_type;
            if ($get_json->payment_type == "echannel") {
                $update_order->bank_name      = 'mandiri';
                $update_order->va_number      = $get_json->bill_key;
                $update_order->bill_code      = $get_json->biller_code;
            }else{
                foreach ($get_json->va_numbers as $card) {
                    $update_order->bank_name      = $card->bank ?? '';
                    $update_order->va_number      = $card->va_number ?? '';
                }
            }
            $update_order->save();
            return redirect()->route('member.dashboard')->with('success','Iklan berhasil dibuat');
        }
        return redirect()->route('member.dashboard');
    }
}
