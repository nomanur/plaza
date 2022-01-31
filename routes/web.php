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


Route::get('/', [FrontController::class, 'index']);


//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product');

    Route::post('/prodcut/store', [ProductController::class, 'store'])->name('product.store');
});
