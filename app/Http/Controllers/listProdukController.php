<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listProdukController extends Controller
{
    public function index()
    {
        return view('listProduk.index'); 
    }

    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->get();

            // Kirim $count dari keranjang
        $count = Cart::where('user_id', Auth::id())->count();

    
        // return view('listProduk.index', compact('products'));
        return view('search.hasilSearch', ['products' => $products, 'query' => $query, 'count' => $count]);

    }
}
