<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Service\CouponService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class CartController extends Controller
{
    protected $getCoupon;

    public function __construct(CouponService $getCoupon)
    {
        $this->getCoupon = $getCoupon;
    }

    private function getCarts()
    {
        $cart = json_decode(request()->cookie('konveksi-carts'), true);
        $cart = $cart != '' ? $cart:[];
        return $cart;
    }

    public function index()
    {
        $cart = $this->getCarts();
        $subtotal = collect($cart)->sum(function($q){
            return $q['qty'] * $q['price'];
        });
        return view('home.pages.cart.index',compact('cart', 'subtotal'));
    }

    public function addToCart(Request $request)
    {

        if (Auth::check()) {
            $cart = $this->getCarts();
            if ($cart && array_key_exists($request->id, $cart)) {
                $cart[$request->id]['qty'] += $request->qty;
            }else{
                $product = Product::with(['productImages'])->find($request->id);
                $cart [$request->id] = [
                    'qty' => $request->qty,
                    'product_id' => $product->id,
                    'title' => $product->title,
                    'price' => $product->price,
                    'weight' => $product->weight,
                    'image' => $product->productImages->first()->image,
                    'coupon' => 0,
                    'coupon_rate' => 0,
                    'type_coupon' => '',
                    'domain'=>''
                ];
            }
            $cookie = cookie('konveksi-carts',json_encode($cart),2880);
            // return $cart;

            // return view('home.pages.cart.modal.add-to-cart',compact('cart'));
            return redirect()->route('cart.index')->cookie($cookie);
            // return redirect()->back()->with(['success' => 'Produk ditambahkan ke keranjang'])->cookie($cookie);
        } else {
            return redirect()->route('login.user');
        }
    }

    public function applyCoupon(Request $request)
    {
        $code = $request->code;
        $cart = $this->getCarts();
        $coupon = $this->getCoupon->getByCode($code);
        $subtotal = collect($cart)->sum(function($q) use ($coupon) {
            return ($q['qty'] * $q['price']);
        });
        if ($coupon->type == 'numeric') {
            $reesult_coupon = $subtotal - $coupon->discount_rate;
        }
        if ($coupon->type == 'percentage') {
            $percent = $coupon->discount_rate / 100 * $subtotal;
            $reesult_coupon = $subtotal - $percent;
        }
        $arr[] = array(
            'result_total' => $reesult_coupon,
            'rate'  => $coupon->discount_rate,
            'type'  => $coupon->type,
        );
        // if ($reesult_coupon) {
        //     $cookies = json_decode(request()->cookie('konveksi-carts'), true);
        //     foreach ($arr as $key => $value) {
        //         $cookies['coupon']=$value['rate'];
        //         $cookies['coupon_rate']=$value['result_total'];
        //         $cookies['type_coupon']=$value['type'];
        //     }
        //     // $cart[]= [
        //     //     'result_coupon' => $reesult_coupon
        //     // ];
        //     cookie('konveksi-carts',json_encode($cart),2880);
        // }
        return $arr;
    }

    public function updateCart(Request $request)
    {
        $cart = json_decode(request()->cookie('konveksi-carts'), true);
        foreach ($request->product_id as $key => $item) {
            if ($request->qty[$key] == 0) {
                unset($cart[$item]);
            }else{
                $cart[$item]['qty']=$request->qty[$key];
            }
        }

        $cookie = cookie('konveksi-carts',json_encode($cart),2880);
        return redirect()->back()->cookie($cookie);
    }
}
