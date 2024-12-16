<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;


class DashboardCustomerController extends Controller
{
    public function index(){
        $products = Product::all();

        if (Auth::id()){

            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();

        }else{
            $count = '';
        }




        return view('dashboardCustomer', compact('products','count'));
    }
}
