<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusTindakanController extends Controller
{
    // Halaman tindakan dashboard
    public function index(){
        return view('dashboard/content/tindakan/index', [
            'title' => 'Status Tindakan'
        ]);
    }

    // Halaman kirim tanggapan dashboard
    public function email(){
        return view('dashboard/content/tindakan/email', [
            'title' => 'Tanggapan Email'
        ]);
    }
}
