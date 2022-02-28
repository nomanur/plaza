<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/stripe', [FrontController::class, 'pay']);
Route::get('/confirmstripe', [FrontController::class, 'confirmpayment']);

Route::get('/', [FrontController::class, 'index']);

Route::get('/product/{id}', [FrontController::class, 'singleproduct'])->name('singleproduct');

Route::get('/addtocart/{id}', [FrontController::class, 'addtocart'])->name('addtocart')->middleware('auth');

Route::get('/cart', [FrontController::class, 'cart'])->name('cart');
Route::post('/clearcart', [FrontController::class, 'clearcart'])->name('clear.cart');
Route::post('/updatecart', [FrontController::class, 'updatecart'])->name('update.cart');

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product');

    Route::post('/prodcut/store', [ProductController::class, 'store'])->name('product.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
