<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusTindakanController extends Controller
{
    public function index(){
        return view('dashboard/content/tindakan/index', [
            'title' => 'Status Tindakan'
        ]);
    }

    public function email(){
        return view('dashboard/content/tindakan/email', [
            'title' => 'Tanggapan Email'
        ]);
    }
}
