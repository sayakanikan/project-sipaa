<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('landing/content/index', [
            'title' => 'Beranda',
        ]);
    }

    public function berita(){
        return view('landing/content/berita', [
            'title' => 'Berita',
        ]);
    }

    public function aduan(){
        return view('landing/content/aduan', [
            'title' => 'Daftar Aduan',
        ]);
    }

    // Captcha Validation
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'g-recaptcha-response' => 'recaptcha',
    //     ]);
    // }
    
    public function prosedur(){
        return view('landing/content/prosedur', [
            'title' => 'Prosedur Pengaduan',
        ]);
    }

    public function about(){
        return view('landing/content/about', [
            'title' => 'Tentang Kami',
        ]);
    }

    public function faq(){
        return view('landing/content/faq', [
            'title' => 'FAQ',
        ]);
    }
}
