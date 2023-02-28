<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // Halaman utama landing page
    public function index(){
        return view('landing/content/index', [
            'title' => 'Beranda',
        ]);
    }

    // Halaman baca berita landing page
    public function berita(){
        return view('landing/content/berita', [
            'title' => 'Berita',
        ]);
    }

    // Halaman form aduan landing page
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
    
    // Halaman prosedur aduan landing page
    public function prosedur(){
        return view('landing/content/prosedur', [
            'title' => 'Prosedur Pengaduan',
        ]);
    }

    // Halaman tentang SIPAA landing page
    public function about(){
        return view('landing/content/about', [
            'title' => 'Tentang Kami',
        ]);
    }

    // Halaman faq SIPAA landing page
    public function faq(){
        return view('landing/content/faq', [
            'title' => 'FAQ',
        ]);
    }
}
