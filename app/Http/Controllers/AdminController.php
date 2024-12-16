<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboardCustomer');
    }
    public function dashboardCustomer()
    {
        $products = Product::all();
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id',$userid)->count();

        return view('dashboardCustomer', compact('products','count'));
    }

    public function admin()
    {
        return view('dashboardAdmin');

    }
}
