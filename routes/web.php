<?php

use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog-detail', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop-detail', [ShopController::class, 'detail'])->name('shop.detail');
Route::get('/shop-cart', [ShopController::class, 'cart'])->name('shop.cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
