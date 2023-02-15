<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('landing/content/index', [
            'title' => 'Home',
        ]);
    }

    public function aduan(){
        return view('landing/content/aduan', [
            'title' => 'Daftar Aduan',
        ]);
    }

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
