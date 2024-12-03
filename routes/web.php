<?php

<<<<<<< HEAD
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
=======
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
>>>>>>> fce8b58a19512971e6eae223c7be3327743ff254

});

Route::middleware(['auth', 'role:customer'])->group(function () {
  
    Route::get('/dashboardCustomer', [DashboardCustomerController::class, 'dashboardCustomer'])->name('dashboardCustomer');

});
<<<<<<< HEAD

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
=======
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
>>>>>>> fce8b58a19512971e6eae223c7be3327743ff254
