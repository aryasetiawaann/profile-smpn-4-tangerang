<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('name', 'password');

    if (Auth::attempt($credentials)) {
        // Jika login berhasil, redirect ke halaman /admin
        return redirect('/admin');
    }

    // Jika login gagal, kembalikan ke halaman login dengan pesan error
    return redirect('/login')->with('error', 'Username atau password salah.');
}


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
