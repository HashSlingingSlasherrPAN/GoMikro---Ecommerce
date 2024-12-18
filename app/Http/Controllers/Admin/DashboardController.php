<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalOrders = Payment::count();
        $totalProducts = Product::count();
        $totalUsers = User::count();
        
        return view('admin.dashboard',  compact('totalOrders', 'totalProducts', 'totalUsers'));
    }
}
