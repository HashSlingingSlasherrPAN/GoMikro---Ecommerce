<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class OrdersHistoryController extends Controller
{
    public function index(Request $request)
    {
        // Fetch orders for the logged-in customer
        $customerFirstName = $request->user()->name; // Assuming the `name` field matches `customer_first_name`
        $orders = Payment::where('customer_first_name', $customerFirstName)->get();
        if (Auth::id()){

            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
            $cart = Cart::where('user_id',$userid)->get();

        }else{
            $count = '';
        }
        return view('history', compact('count','cart', 'orders'));

    }
}
