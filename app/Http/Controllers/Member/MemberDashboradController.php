<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Service\ArticleService;
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
    protected $articleService;

    public function __construct(
        TransactionService $trxService,
        RajaOngkirService $rajaOngkirService,
        ProductService $productService,
        ArticleService $articleService
    )
    {
        $this->trxService        = $trxService;
        $this->rajaOngkirService = $rajaOngkirService;
        $this->productService = $productService;
        $this->articleService = $articleService;
    }

    public function index()
    {
        $popularProduct = $this->productService->popularProduct();
        // dd($popularProduct);
        $pending        = $this->trxService->transactionPendingUser(Auth::user()->id);
        $success        = $this->trxService->transactionSuccessUser(Auth::user()->id);
        $cancel         = $this->trxService->transactionCancelUser(Auth::user()->id);
        $productUser    = self::categoryProductTransaction(Auth::user()->id);
        $article        = $this->articleService->newsMember();
        $listTransaction= $this->trxService->fiveTransactionMember(Auth::user()->id);
        return view('member.pages.dashboard.dashboard-member',compact('popularProduct','pending','success','cancel','productUser','article','listTransaction'));
    }

    public function detailTransaction($code)
    {
        $detail = $this->trxService->getByCode($code);
        $productUser    = self::categoryProductTransaction(Auth::user()->id);
        // dd($detail);
        return view('member.pages.transaction.invoice',compact('productUser','detail'));
        // return view('member.pages.transaction.detail',compact('detail','productUser'));
    }

    public function myTransaction()
    {
        $user_id = Auth::user()->id;
        $data = $this->trxService->getMyTransaction($user_id);
        $productUser    = self::categoryProductTransaction(Auth::user()->id);
        return view('member.pages.transaction.data',compact('data','productUser'));
    }

    public function myTransactionProduct($category)
    {
        $data = $this->trxService->productUserBuy(Auth::user()->id,$category);
        $productUser    = self::categoryProductTransaction(Auth::user()->id);
        return view('member.pages.transaction.product.data',compact('data','productUser'));
        // return dd($data);
    }

    public function myTransactionProductDetail($code)
    {
        $data = $this->trxService->productUserBuyDetail($code);
        // dd($data);
        $productUser    = self::categoryProductTransaction(Auth::user()->id);
        return view('member.pages.transaction.product.detail',compact('data','productUser'));
    }

    public function categoryProductTransaction($user)
    {
        $user = Auth::user()->id;
        $data = $this->trxService->cekCategoryProductTransaction($user);
        return $data;
        // dd($data);
    }
}
