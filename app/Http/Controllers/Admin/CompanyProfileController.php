<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\CompanyProfileService;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    protected $comproService;

    public function __construct(CompanyProfileService $comproService)
    {
        $this->comproService = $comproService;
    }

    public function index()
    {
        return view('admin.pages.company_profile.data');
    }

    public function store(Request $request)
    {
        $this->comproService->save($request);
        return redirect()->route('setting-company')->with('success', 'Data berhasil ditambahkan');
    }
}
