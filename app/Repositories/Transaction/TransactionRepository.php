<?php

namespace App\Repositories\Transaction;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Repositories\Transaction\InterfaceTransaction;
use App\Service\Midtrans\CreateSnapTokenService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mockery\CountValidator\AtMost;

class TransactionRepository implements InterfaceTransaction
{
    protected $transaction;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    public function getAll()
    {
        return $this->transaction->get();
    }

    public function myTransaction($id)
    {
        return $this->transaction->where('user_id',$id)->get();
    }

    public function getById($id)
    {
        return $this->transaction->where('id',$id)->first();
    }

    public function save(Request $request)
    {
        $transaction = new $this->transaction;
        $transaction->code = 'INV' . '-' . time();
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_total = $request->transaction_total;
        $transaction->transaction_status = 'PENDING';
        $transaction->bank_name = 'bank';
        $transaction->va_number = 'va_number';
        $transaction->courier = 'kurir';
        $transaction->payment_type = 'type';
        $transaction->payment_url = 'url';
        $transaction->coupon_id = $request->idcoupon ?? null;


        $midtrans = new CreateSnapTokenService($transaction,Auth::user());
        $snap_token = $midtrans->getSnapToken();
        $transaction->payment_token = $snap_token;

        $transaction->save();

        return $transaction->fresh();
    }

    public function delete($id)
    {
        $trx = $this->transaction->find($id);
        $trx->delete();
    }

    public function update(Request $request, $id)
    {
        $update = $this->transaction->find($id);
        $update->code = $request->code;
        $update->save();
        return $update->fresh();

    }
}
