<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Service\BannerService;
use App\Service\CompanyProfileService;
use App\Service\RajaOngkirService;
use Illuminate\Http\Request;
use Iodev\Whois\Factory;

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

    public function register()
    {
        $cart = $this->getCarts();
        $subtotal = collect($cart)->sum(function ($q) {
            return $q['qty'] * $q['price'];
        });
        $company = $this->companyProfile->getAll();
        $provinsi = $this->rajaOngkirService->getProvince();
        return view('home.pages.register',compact('provinsi','cart','subtotal','company'));
    }

    public function loginUser()
    {
        $cart = $this->getCarts();
        $subtotal = collect($cart)->sum(function ($q) {
            return $q['qty'] * $q['price'];
        });
        $company = $this->companyProfile->getAll();
        return view('home.pages.login',compact('company','subtotal','cart'));
    }

    public function cekDomain(Request $request)
    {
        $whois = Factory::get()->createWhois();
        $cekDomain = $request->domain;
        // Checking availability
        if ($whois->isDomainAvailable($cekDomain)) {
            print "Bingo! Domain is available! :)";
        }

        // Supports Unicode (converts to punycode)
        if ($whois->isDomainAvailable($cekDomain)) {
            print "Bingo! Domain is available! :)";
        }

        $response = $whois->lookupDomain($cekDomain);
        print $response->text;
    }
}
