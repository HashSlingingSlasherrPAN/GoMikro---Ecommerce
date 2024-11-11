<?php

<<<<<<< HEAD
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
=======
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\isGuest;
use App\Http\Middleware\isLogin;

>>>>>>> 5d01a381b805797e62b87e0f15d768a57fa16144

Route::redirect('/', '/dashboardCustomer');
Route::get('/dashboardCustomer', [CustomerController::class, 'dashboardCustomer'])->name('/dashboardCustomer');
Route::get('/productDetail', [CustomerController::class, 'productDetail'])->name('/productDetail');
Route::get('/productDetail', function () {
    return view('productDetail');
});


<<<<<<< HEAD
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware(RedirectIfAuthenticated::class); // Only guests can access the login page

Route::post('/login',  [LoginController::class, 'authenticate']);

=======
>>>>>>> 5d01a381b805797e62b87e0f15d768a57fa16144
Route::get('/register', function () {
    return view('register');
})->name('register');
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

<<<<<<< HEAD
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
=======
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::get('/cart', [SessionController::class, 'cart'])->name('cart');
Route::get('/registerCustomer', [SessionController::class, 'registerCustomer'])->name('registerCustomer');
Route::get('/registerMerchant', [SessionController::class, 'registerMerchant'])->name('registerMerchant');
Route::post('/create', [SessionController::class, 'create'])->name('create');
>>>>>>> 5d01a381b805797e62b87e0f15d768a57fa16144
