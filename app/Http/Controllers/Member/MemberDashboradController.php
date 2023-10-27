<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Service\ProductService;
use App\Service\RajaOngkirService;
use App\Service\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberDashboradController extends Controller
{
    protected $trxService;
    protected $rajaOngkirService;
    protected $productService;

    public function __construct(
        TransactionService $trxService,
        RajaOngkirService $rajaOngkirService,
        ProductService $productService
    )
    {
        $this->trxService        = $trxService;
        $this->rajaOngkirService = $rajaOngkirService;
        $this->productService = $productService;
    }

    public function index()
    {
        $popularProduct = $this->productService->popularProduct();
        $pending = $this->trxService->transactionPendingUser(Auth::user()->id);
        $success = $this->trxService->transactionSuccessUser(Auth::user()->id);
        $cancel = $this->trxService->transactionCancelUser(Auth::user()->id);
        return view('member.pages.dashboard.dashboard-member',compact('popularProduct','pending','success','cancel'));
    }

    public function detailTransaction($code)
    {
        $detail = $this->trxService->getByCode($code);
        // dd($detail);
        return view('member.pages.transaction.detail',compact('detail'));
    }

    public function myTransaaction($id)
    {
        $user_id = Auth::user()->id;
        $data = $this->trxService->getMyTransaction($user_id);
        return view('member.pages.transaction.data',compact('data'));
    }
}
