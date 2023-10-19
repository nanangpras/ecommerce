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
        $domain         = $request->domain;
        $ekstensi       = $request->ekstensi;
        $combinedInput  = $domain.$ekstensi;
        // print $combinedInput;
        $whois = Factory::get()->createWhois();
        // // Checking availability
        if ($whois->isDomainAvailable($combinedInput)) {
            $arr = [
                'domain' => $combinedInput,
                'tersedia' => 'ya',
                'result' => 'Selamat domain '.$combinedInput.' masih tersedia'
            ];
            return json_encode($arr);
        }else{
            $arr = [
                'domain' => $combinedInput,
                'tersedia' => 'tidak',
                'result' => 'Maaf domain '.$combinedInput.' tidak tersedia'
            ];
            return json_encode($arr);
        }
    }

    public function addDomainCookie(Request $request)
    {
        $carts = json_decode(request()->cookie('konveksi-carts'), true);
        foreach ($carts as $key => $value) {
            $carts[$key]['domain'] = $request->domain;
        }
        $cookie = cookie('konveksi-carts', json_encode($carts), 2880);
        cookie($cookie);

        // return $carts;
        // foreach ($request->domain as $key => $row) {
        //     //DI CHECK, JIKA QTY DENGAN KEY YANG SAMA DENGAN PRODUCT_ID = 0
        //     if ($request->qty[$key] == 0) {
        //         //MAKA DATA TERSEBUT DIHAPUS DARI ARRAY
        //         unset($carts[$row]);
        //     } else {
        //         //SELAIN ITU MAKA AKAN DIPERBAHARUI
        //         $carts[$row]['domain'] = $request->qty[$key];
        //     }
        // }
    }
}
