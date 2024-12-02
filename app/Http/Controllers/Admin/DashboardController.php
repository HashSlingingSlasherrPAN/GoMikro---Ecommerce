<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalOrders = Order::count();
        $totalProducts = Product::count();
        $totalUsers = User::count();
        
        return view('admin.dashboard',  compact('totalOrders', 'totalProducts', 'totalUsers'));
    }
}
