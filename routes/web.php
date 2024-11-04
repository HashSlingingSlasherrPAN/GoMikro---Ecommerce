<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

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

