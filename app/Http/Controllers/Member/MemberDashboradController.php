<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Service\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberDashboradController extends Controller
{
    protected $trxService;

    public function __construct(TransactionService $trxService)
    {
        $this->trxService = $trxService;
    }

    public function index()
    {
        return view('member.pages.dashboard.dashboard-member');
    }

    public function detailTransaction($id)
    {
        $detail = $this->trxService->getById($id);
        return view('member.pages.transaction.detail',compact('detail'));
    }

    public function myTransaaction($id)
    {
        $user_id = Auth::user()->id;
        $data = $this->trxService->getMyTransaction($user_id);
        return view('member.pages.transaction.data',compact('data'));
    }
}
