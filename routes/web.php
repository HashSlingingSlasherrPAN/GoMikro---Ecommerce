<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfilController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardCustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\listProdukController;
use App\Http\Controllers\OrdersHistoryController;
use App\Http\Controllers\SessioningController;
use App\Http\Controllers\TransactionController;

// Route::middleware('guest')->group(function () {


// });

Route::middleware(['auth'])->group(function () {
    Route::get('/customer/dashboardCustomer', [AdminController::class, 'dashboardCustomer'])->middleware('user_access:customer');
    Route::get('mycart', [SessioningController::class, 'mycart'])->middleware('user_access:customer');
    Route::get('/profile', [SessioningController::class, 'profile'])->middleware('user_access:customer') ->name('profile');
    Route::get('/productDetail/{id}', [SessioningController::class, 'productDetail'])->middleware('user_access:customer');

    Route::get('add_cart/{id}', [CartController::class, 'add_cart'])->middleware('user_access:customer');
    Route::get('delete_cart/{id}', [CartController::class, 'delete_cart'])->middleware('user_access:customer');
    Route::post('confirm_order', [CartController::class, 'confirm_order'])->middleware('user_access:customer');
    Route::post('/payments', [PaymentController::class, 'create'])->middleware('user_access:customer');
    Route::get('history', [OrdersHistoryController::class, 'index'])->middleware('user_access:customer');

    Route::post('/webhook/midtrans', [PaymentController::class, 'webhook']);

    // Route::get('/dashboardCustomer', [ProductController::class, 'index'])->name('dashboardCustomer')->middleware('user_access:customer');

    Route::post('/logout', [SessioningController::class, 'logout'])->name('logout');


    Route::get('/dashboardCustomer', [SessioningController::class, 'index'])->name('dashboardCustomer');
    Route::get('/list-produk', [ListProdukController::class, 'index'])->name('list.produk');
    Route::get('/search', [ListProdukController::class, 'search'])->name('search');


    //MIDDLEWARE ADMIN
    Route::get('/dashboardAdmin', [DashboardController::class, 'index'])->name('dashboardAdmin')->middleware('user_access:admin');
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::resource('profil', ProfilController::class)->middleware('user_access:admin');
        Route::resource('products', ProductController::class)->middleware('user_access:admin');
        Route::resource('categories', CategoryController::class)->middleware('user_access:admin');
        Route::resource('orders', OrderController::class)->middleware('user_access:admin');
        Route::resource('payments', AdminPaymentController::class)->middleware('user_access:admin');
        Route::post('payments/{dian}/update-status', [AdminPaymentController::class, 'updateStatus'])->name('payments.update-status')->middleware('user_access:admin');
    });
});

Route::get('/', [DashboardCustomerController::class, 'index']);


Route::post('/login', [SessioningController::class, 'login'])->name('login');
Route::get('/login', [SessioningController::class, 'pageLogin'])->name('login');
Route::get('/register', [SessioningController::class, 'pageRegister'])->name('register');
Route::post('/register', [SessioningController::class, 'register'])->name('register');

Route::get('/dashboardCustomer', [ProductController::class, 'index']);

// Route::get('/dashboardCustomer', [SessioningController::class, 'index'])->name('dashboardCustomer');
Route::get('/dashboardCustomer', [CustomerController::class, 'dashboardCustomer']);
Route::get('/search', [listProdukController::class, 'search'])->name('search');
