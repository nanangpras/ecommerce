<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Service\RajaOngkirService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $rajaOngkirService;

    public function __construct(RajaOngkirService $rajaOngkirService)
    {
        $this->rajaOngkirService = $rajaOngkirService;
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
        $weight_total = collect($cart)->sum(function($q){
            return $q['qty'] * $q['weight'];
        });
        $provinsi = $this->rajaOngkirService->getProvince();
        return view('home.pages.checkout.data',compact('cart', 'subtotal', 'weight_total','provinsi'));
    }
}
