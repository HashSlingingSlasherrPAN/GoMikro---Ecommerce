<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/productDetail', function () {
    return view('productDetail');
});

Route::get('/login', function () {
    return view('login');
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

