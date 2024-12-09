<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessioningController;

Route::middleware('guest')->group(function () {

    Route::post('/login', [SessioningController::class, 'login'])->name('login');
    Route::get('/login', [SessioningController::class, 'pageLogin'])->name('login');
    Route::get('/register', [SessioningController::class, 'pageRegister'])->name('register');
    Route::post('/register', [SessioningController::class, 'register'])->name('register');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dashboardAdmin');
    Route::get('/admin/customer', [AdminController::class, 'customer'])->middleware('user_access:customer');
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('user_access:admin');

    Route::post('/logout', [SessioningController::class, 'logout'])->name('logout');

});



Route::get('/dashboardCustomer', [SessioningController::class, 'index'])->name('dashboardCustomer');
