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
 





    public function delete_cart($id){

        $data = Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message_sent', $data->id . ' berhasil di hapus dari keranjang!');


    }

}
