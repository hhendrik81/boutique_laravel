<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/product/list', [ProductController::class, 'productList']);

Route::get('/product/productByName', [ProductController::class, 'getByName']);

Route::get('/product/productByPrice', [ProductController::class, 'getByPrice']);

Route::get('/product/{id}', [ProductController::class, 'productId']);



Route::get('/', [HomeController::class, 'index']);

Route::get('/cart', [CartController::class, 'cart']);





 