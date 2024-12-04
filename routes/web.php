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

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
