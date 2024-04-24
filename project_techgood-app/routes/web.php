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

Route::get('/', function () {
    return view('dashboard');
});
