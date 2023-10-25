<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Service\CategoryService;
use App\Service\CompanyProfileService;
use App\Service\ProductService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Helpers\CartCookie;

class ShopController extends Controller
{
    protected $productService;
    protected $categoryService;
    protected $comproService;

    public function __construct(ProductService $productService,CategoryService $categoryService,CompanyProfileService $comproService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->comproService = $comproService;
    }

    public function index(): View
    {
        $cartHelper = new CartCookie();
        $product = $this->productService->getAll();
        $category = $this->categoryService->getAll();
        $company = $this->comproService->getAll();
        $cart = $cartHelper->getCarts();
        $count_cart = $cartHelper->getTotalCart();
        $subtotal = collect($cart)->sum(function($q){
            return $q['qty'] * $q['price'];
        });
        $breadcrumb = 'Shop';
        return view('home.pages.shop.index',compact('product','category','company','cart','subtotal','breadcrumb','count_cart'));
    }

    public function productDetailSlug($slug)
    {
        $detail = $this->productService->getBySlug($slug);
        $category = $detail->category_id;
        $cart = $this->getCarts();
        $subtotal = collect($cart)->sum(function($q){
            return $q['qty'] * $q['price'];
        });
        $relateProduct = $this->productService->relatedProduct($category);
        $breadcrumb = 'Detail Product';
        return view('home.pages.shop.product-details',compact('detail','cart','subtotal','relateProduct','breadcrumb'));
    }

    public function quickViewModal($slug)
    {
        $detail = $this->productService->getBySlug($slug);
        return view('home.pages.shop.modal.quick-view',compact('detail'));
    }
}
