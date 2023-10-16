<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/boutique',[ProductsController::class, 'index'])->name('product.index');


Route::get('/boutique/{slug}', [ProductsController::class, 'show'])->name('product.show');

Route::get('/panier', [CartController::class, 'index'])->name('cart.index');

Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');

Route::get('/vider', function(){
    Cart::destroy();
});

Route::delete('/panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/login', [ClientsController::class, 'form_login'])->name('login');

Route::get('/category', [ClientsController::class, 'form_category'])->name('category');

Route::get('/logout', [ClientsController::class, 'logouts'])->name('logout');

Route::get('/apropos', [ClientsController::class, 'propos'])->name('apropos');

Route::get('/', [ClientsController::class, 'form_register'])->name('register');

Route::post('/register/traitement', [ClientsController::class, 'traitement_register'])->name('register');

Route::post('/login/traitement', [ClientsController::class, 'traitement_login'])->name('register');

