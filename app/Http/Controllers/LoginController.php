<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate login credentials
        $request->validate([
            'name' => 'required', // Assuming you are using email for login
            'password' => 'required|string|min:8'
        ]);

        // Check credentials
        $credentials = $request->only('name', 'password'); // Use email, not username

        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = Auth::user();

            // Redirect based on user role
            if ($user->role === 'admin') {
                return redirect()->route('adminDashboard')->with('success', 'Selamat datang Admin');
            } elseif ($user->role === 'customer') {
                return redirect()->route('dashboardCustomer')->with('success', 'Login Berhasil, Selamat datang ' . $user->name . '!');
            }
        }

        // If authentication fails
        return back()->withErrors(['name' => 'Invalid credentials'])->withInput();
    }
=======
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
>>>>>>> fce8b58a19512971e6eae223c7be3327743ff254

    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate session token for security
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
