<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\CheckoutController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ShopController;
use App\Http\Controllers\ProfileController;
use Faker\Provider\ar_EG\Company;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/detail/{slug}',[ShopController::class,'productDetailSlug'])->name('product.detail');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/add-cart',[CartController::class,'addToCart'])->name('add.to.cart');
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout.index');
// Rajaongkir
Route::get('/city/{id}',[HomeController::class, 'getCity'])->name('city');
Route::get('/subdistrict/{id}',[HomeController::class, 'getSubdistrict'])->name('subdistrict');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('banner', BannerController::class);
Route::resource('user', UserController::class);
Route::get('/setting-company',[CompanyProfileController::class,'index'])->name('setting-company');
Route::post('/setting-company/add',[CompanyProfileController::class,'store'])->name('setting-company.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
