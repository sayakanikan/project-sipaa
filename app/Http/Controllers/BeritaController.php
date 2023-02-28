<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Halaman berita dashboard
    public function index(){
        return view('dashboard/content/berita/index', [
            'title' => 'Berita'
        ]);
    }

    // Halaman tambah berita dashboard
    public function create(){
        return view('dashboard/content/berita/create', [
            'title' => 'Tambah Berita'
        ]);
    }

    // Halaman edit berita dashboard
    public function edit(){
        return view('dashboard/content/berita/edit', [
            'title' => 'Edit Berita'
        ]);
    }
}
