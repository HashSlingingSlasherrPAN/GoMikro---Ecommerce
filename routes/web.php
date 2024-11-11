<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananBaruController;
use App\Http\Controllers\PasarkanProdukController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/productDetail', function () {
    return view('productDetail');
});


Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware(RedirectIfAuthenticated::class); // Only guests can access the login page

Route::post('/login',  [LoginController::class, 'authenticate']);

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/registerCustomer', function () {
    return view('registerCustomer');
});
Route::get('/registerMerchant', function () {
    return view('registerMerchant');
});

Route::get('/dashboardMerchant', function () {
    return view('dashboardMerchant');
})->name('dashboard');

// Rute untuk Pesanan Baru
Route::get('/pesananBaru', [pesananBaruController::class, 'index'])->name('pesananBaru');

// Rute untuk Pasarkan Produk
Route::get('/pasarkanProduk', [pasarkanProdukController::class, 'index'])->name('pasarkanProduk');

// Rute untuk List Produk
Route::get('/listProduk', [listProdukController::class, 'index'])->name('listProduk');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');