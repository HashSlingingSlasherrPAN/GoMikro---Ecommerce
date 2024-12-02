<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index(Request $request){
        return view('login');
    }

    function login(Request $request){

        Session::flash('email', $request->email);

        $request->validate([
            // 'name'=>'required',
            'email' => 'required',
            'password'=>'required'


        ]);

        $infoLogin = [
            // 'name'=>$request->name,
            'email' => $request->email,
            'password'=>$request->password
        ];

           // Cek kredensial
        if (Auth::attempt($infoLogin)) {
            $user = Auth::user(); // Mendapatkan data pengguna yang login

            // Periksa role dan arahkan ke dashboard yang sesuai
            if ($user->role === 'admin') {
                return redirect()->route('dashboardAdmin')->with('success', 'Login Berhasil! Selamat Datang Admin, ' . $user->name);
            } elseif ($user->role === 'customer') {
                return redirect()->route('dashboardCustomer')->with('success', 'Login Berhasil! Selamat Datang ' . $user->name);
            } else {
                // Jika role tidak dikenali
                Auth::logout();
                return redirect()->route('login')->with('error', 'Role pengguna tidak valid.');
            }
        }

        // Jika kredensial salah
        return redirect()->route('login')->with('error', 'Email atau password salah.');

        }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Successfully logged out.');
    }
}
