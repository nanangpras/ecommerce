<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CartController extends Controller
{
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
        return view('home.pages.cart.index',compact('cart', 'subtotal'));
    }

    public function addToCart(Request $request)
    {
        $cart = $this->getCarts();
        if ($cart && array_key_exists($request->id, $cart)) {
            $cart[$request->id]['qty'] += $request->qty;
        }else{
            $product = Product::with(['productImages'])->find($request->id);
            $cart [$request->id] = [
                'qty' => $request->qty,
                'product_id' => $product->id,
                'title' => $product->title,
                'price' => $product->price,
                'weight' => $product->weight,
                'image' => $product->productImages->first()->image
            ];
        }

        $cookie = cookie('konveksi-carts',json_encode($cart),2880);
        // return $cart;

        // return view('home.pages.cart.modal.add-to-cart',compact('cart'));
        return redirect()->back()->with(['success' => 'Produk ditambahkan ke keranjang'])->cookie($cookie);
    }
}
