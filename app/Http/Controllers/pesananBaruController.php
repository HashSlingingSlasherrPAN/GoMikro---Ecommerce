<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesananBaruController extends Controller
{
    public function index()
    {
        return view('pesananBaru.index'); // Menampilkan halaman Pesanan Baru
    }
}
