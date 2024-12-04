<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();  // Logout user
        $request->session()->invalidate();  // Hapus sesi
        $request->session()->regenerateToken();  // Regenerasi token CSRF

        return redirect()->route('login');  // Arahkan ke halaman login
    }
    
}
