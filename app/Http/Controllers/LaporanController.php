<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        return view('dashboard/content/laporan/index', [
            'title' => 'Laporan Masuk'
        ]);
    }

    public function show(){
        return view('dashboard/content/laporan/show', [
            'title' => 'Detail Laporan'
        ]);
    }

    public function bukti(){
        return view('dashboard/content/laporan/bukti', [
            'title' => 'Bukti Laporan'
        ]);
    }
}
