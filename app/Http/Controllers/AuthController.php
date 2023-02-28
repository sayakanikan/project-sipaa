<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Tampil halaman login
    public function index(){
        return view('dashboard/auth/login', [
            'title' => 'Login',
        ]);
    }

    // Verifikasi login
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required',
        ]);

        if(Auth::attempt($credentials) ){
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->with('loginError', 'Username atau password anda salah');
    }

    // Logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
