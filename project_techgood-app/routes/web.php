<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomAutjController;
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
Route::get('login', [CustomAuthController::class, 'loginPage'])->name('login');
Route::get('register', [CustomAuthController::class, 'registerPage'])->name('register');
Route::get('product_list', [CustomAuthController::class, 'productsPage'])->name('product_list');
Route::get('product_detail', [CustomAuthController::class, 'productDetailPage'])->name('product_detail');
Route::get('product_cart', [CustomAuthController::class, 'productCartPage'])->name('product_cart');

Route::get('/', function () {
    return view('auth.product_list');
});
