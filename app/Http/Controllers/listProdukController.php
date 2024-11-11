<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listProdukController extends Controller
{
    public function index()
    {
        return view('listProduk.index'); 
    }
}
