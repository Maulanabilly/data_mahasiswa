<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses autentikasi login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk melakukan login
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/data-mahasiswa'); 
        }

        // Jika login gagal, kembali ke form login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
