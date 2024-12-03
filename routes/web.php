<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardCustomerController;

// Public Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Login Form
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // Login Submit
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register'); // Registration Form
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit'); // Registration Submit

// Authenticated Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboardAdmin');
    })->name('adminDashboard');

});

Route::middleware(['auth', 'role:customer'])->group(function () {

    Route::get('/dashboardCustomer', [DashboardCustomerController::class, 'dashboardCustomer'])->name('dashboardCustomer');

});

Route::get('/registerMerchant', function () {
    return view('registerMerchant');
});
Route::get('/login', function () {
    return view('login');
});
//Route::get('/dashbordCustomer',[CustomerController::class, 'dashboardCustomer'])->name('dashboardCustomer')->middleware([isLogin::class]);


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
