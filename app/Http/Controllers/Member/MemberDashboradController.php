<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Service\RajaOngkirService;
use App\Service\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberDashboradController extends Controller
{
    protected $trxService;
    protected $rajaOngkirService;

    public function __construct(TransactionService $trxService,
    RajaOngkirService $rajaOngkirService)
    {
        $this->trxService        = $trxService;
        $this->rajaOngkirService = $rajaOngkirService;
    }

    public function index()
    {
        return view('member.pages.dashboard.dashboard-member');
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
