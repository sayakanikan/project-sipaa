<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Halaman laporan dashboard
    public function index(){
        return view('dashboard/content/laporan/index', [
            'title' => 'Laporan Masuk'
        ]);
    }

    // Halaman detail laporan dashboard
    public function show(){
        return view('dashboard/content/laporan/show', [
            'title' => 'Detail Laporan'
        ]);
    }

    // Halaman bukti laporan dashboard
    public function bukti(){
        return view('dashboard/content/laporan/bukti', [
            'title' => 'Bukti Laporan'
        ]);
    }
}
