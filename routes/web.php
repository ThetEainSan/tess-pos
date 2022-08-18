<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;


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

Route::get('/', function(){
    return view('auth.login');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {

    //index
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/category', [HomeController::class, 'categorySearch'])->name('categorySearch');
    Route::get('/type', [HomeController::class, 'typeSearch'])->name('typeSearch');

    //cart
    Route::get('/addtocart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/cart/delete', [CartController::class, 'deleteCart'])->name('deleteCart');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/confirm', [CartController::class, 'checkoutConfirm'])->name('checkoutConfirm');
});


