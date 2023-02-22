<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        return view('dashboard/content/berita/index', [
            'title' => 'Berita'
        ]);
    }

    public function create(){
        return view('dashboard/content/berita/create', [
            'title' => 'Tambah Berita'
        ]);
    }

    public function edit(){
        return view('dashboard/content/berita/edit', [
            'title' => 'Edit Berita'
        ]);
    }
}
