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

// Route::get('/', function () {
//     return ('Home Page');
// });

Route::get('/', [HomeController::class, 'index']);

// Route::get('/product', function () {
//     return ('Liste des produits');
// });

Route::get('/product', [ProductController::class, 'product']);

Route::get('/product/list', [ProductController::class, 'list']);

// Route::get('/product/{id}', function () {
//     return ('Fiche du produit {id}');
// });

Route::get('/product/{id}', [ProductController::class, 'productId']);

Route::get('/product/show/{id}', [ProductController::class, 'show']);

// Route::get('/cart', function () {
//     return ('Panier');
// });

Route::get('/cart', [CartController::class, 'cart']);





 