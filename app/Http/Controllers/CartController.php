<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use app\Models\Product;
use App\Models\Transaction;
use app\Models\User;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function add_cart($id){
        $product_id = $id;
        $user=  Auth::user();
        $user_id = $user->id;
        $data = new Cart();
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();
        return redirect()->back()->with('message_sent', $data->id . ' berhasil ditambahkan ke keranjang!');

    }
    public function confirm_order(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $userid = Auth::user()->id;

        // Retrieve the cart items for the logged-in user
        $cart = Cart::where('user_id', $userid)->get();

        // Initialize total amount for Midtrans

        // Create a transaction record in the database


        // Loop through the cart and create orders
        foreach ($cart as $carts) {
            $order = new Order();
            $order->name = $name;
            $order->phone = $phone;
            $order->address = $address;
            $order->user_id = $userid;
            $order->product_id = $carts->product_id;
            $order->save();

            // Add the product's price to the gross amount
        }

        // Remove items from the cart
        Cart::where('user_id', $userid)->delete();


    }


    public function delete_cart($id){

        $data = Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message_sent', $data->id . ' berhasil di hapus dari keranjang!');


    }

}
