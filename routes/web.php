<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\pesananBaruController;
use App\Http\Controllers\listProdukController;
use App\Http\Controllers\pasarkanProdukController;
use App\Http\Controllers\RegMerchantController;
use App\Http\Middleware\isGuest;
use App\Http\Middleware\isLogin;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\LoginController;

Route::redirect('/', '/dashboardCustomer');
Route::get('/dashboardCustomer', [CustomerController::class, 'dashboardCustomer'])->name('/dashboardCustomer');
Route::get('/productDetail', [CustomerController::class, 'productDetail'])->name('/productDetail');
Route::get('/productDetail', function () {
    return view('productDetail');
});




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
//Route::get('/dashbordCustomer',[CustomerController::class, 'dashboardCustomer'])->name('dashboardCustomer')->middleware([isLogin::class]);
Route::resource('customer', CustomerController::class);
Route::get('/session', [SessionController::class, 'index'])->name('session');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
//Route::post('/login', [SessionController::class, 'login'])->name('login')->middleware(isGuest::class);
Route::get('/profile', [SessionController::class, 'profilePage'])->name('profile');
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::get('/cart', [SessionController::class, 'cart'])->name('cart');
Route::get('/registerCustomer', [SessionController::class, 'registerCustomer'])->name('registerCustomer');


Route::post('/create', [SessionController::class, 'create'])->name('create');


//Middleware Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboardAdmin', [DashboardController::class, 'index'])->name('dashboardAdmin');
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::resource('products', ProductController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('orders', OrderController::class);
    });
});

//Middlerware Guest
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});
