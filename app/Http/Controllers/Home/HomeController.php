<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Service\BannerService;
use App\Service\CompanyProfileService;
use App\Service\RajaOngkirService;

class HomeController extends Controller
{
    protected $bannerService;
    protected $rajaOngkirService;
    protected $companyProfile;

    public function __construct(
        BannerService $bannerService,
        RajaOngkirService $rajaOngkirService,
        CompanyProfileService $companyProfile
    )
    {
        $this->bannerService = $bannerService;
        $this->rajaOngkirService = $rajaOngkirService;
        $this->companyProfile = $companyProfile;
    }

    private function getCarts()
    {
        $cart = json_decode(request()->cookie('konveksi-carts'), true);
        $cart = $cart != '' ? $cart : [];
        return $cart;
    }

    public function index()
    {
        $cart = $this->getCarts();
        $subtotal = collect($cart)->sum(function ($q) {
            return $q['qty'] * $q['price'];
        });
        $banner  = $this->bannerService->getAll();
        $company = $this->companyProfile->getAll();
        return view('home.homefront', compact('banner', 'cart', 'subtotal','company'));
    }

    public function getCity($id)
    {
        return $this->rajaOngkirService->getCity($id);
    }

    public function getSubdistrict($id)
    {
        return $this->rajaOngkirService->getSubdistrict($id);
    }
}
