<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\isGuest;
use App\Http\Middleware\isLogin;


Route::redirect('/', '/dashboardCustomer');
Route::get('/dashboardCustomer', [CustomerController::class, 'dashboardCustomer'])->name('/dashboardCustomer');
Route::get('/productDetail', [CustomerController::class, 'productDetail'])->name('/productDetail');
Route::get('/productDetail', function () {
    return view('productDetail');
});


Route::get('/register', function () {
    return view('register');
});
Route::get('/registerCustomer', function () {
    return view('registerCustomer');
});
Route::get('/registerMerchant', function () {
    return view('registerMerchant');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashbordCustomer',[CustomerController::class, 'dashboardCustomer'])->name('dashboardCustomer')->middleware([isLogin::class]);
Route::resource('customer', CustomerController::class);
Route::get('/session', [SessionController::class, 'index'])->name('session');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
Route::post('/login', [SessionController::class, 'login'])->name('login')->middleware(isGuest::class);

Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::get('/cart', [SessionController::class, 'cart'])->name('cart');
Route::get('/registerCustomer', [SessionController::class, 'registerCustomer'])->name('registerCustomer');
Route::get('/registerMerchant', [SessionController::class, 'registerMerchant'])->name('registerMerchant');
Route::post('/create', [SessionController::class, 'create'])->name('create');
