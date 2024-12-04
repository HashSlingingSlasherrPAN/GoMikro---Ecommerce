<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class SessionController extends Controller
{
    function index(){

        $userName = Auth::user()->name ?? 'Guest';

        return view("dashboard", compact('userName'));
      }

    function dashboardMerchant() {
        return view("dashboardMerchant");
    }

     function registerCustomer(){
        return view('registerCustomer');
     }
     function register(){
        return view('register');
     }
     function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout Berhasil');
     }
     function cart(){
        return view('cart');
     }
     function profilePage(){
        return view('profile');
     }


    //  function registerMerchant(){

    //     return view('registerMerchant');
    //  }
     function create(Request $request){
        Session::flash('name', $request->name);

        Session::flash('email', $request->email);

        $request->validate([
            'name'=>'required|unique:users',
            'email' => 'required|email|unique:users',
            'password'=>'required|min:8|max:16'


        ], [
            'name.required'=>'Username Tidak Boleh Kosong',
            'email.required'=>'Email Tidak Boleh Kosong',
            'email.email'=>'Email Tidak Valid',
            'email.unique'=>'Email Sudah Pernah Digunakan',
            'password.required'=>'Password Tidak Boleh Kosong',
            'password.min'=>'Password Minimal 8 Karakter',
            'password.max'=>'Password Maksimal 16 Karakter',
            'name.unique'=>'Username Sudah Pernah Digunakan'
        ]);

        $data = [
            'name'=>$request->name,
            'email' => $request->email,
            'password'=>Hash::make($request->password)
        ];

        User::create($data);

        $infoLogin = [
            'name'=>$request->name,
            'email' => $request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infoLogin)){
            return redirect()->route('session')->with('success',Auth::user()->name.' Berhasil Login');
        }else{
            return redirect()->route('login')->with('error', 'Login Gagal');
        }
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
                return redirect()->route('dashboardMerchant')->with('success', 'Login Berhasil! Selamat Datang Admin, ' . $user->name);
            } elseif ($user->role === 'customer') {
                return redirect()->route('customer.dashboard')->with('success', 'Login Berhasil! Selamat Datang ' . $user->name);
            } else {
                // Jika role tidak dikenali
                Auth::logout();
                return redirect()->route('login')->with('error', 'Role pengguna tidak valid.');
            }
        }

        // Jika kredensial salah
        return redirect()->route('login')->with('error', 'Email atau password salah.');

        }


}
