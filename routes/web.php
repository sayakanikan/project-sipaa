<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\StatusTindakanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route yang bisa diakses tanpa login
Route::middleware(['guest'])->group(function () {
  // Controller Landing Page
  Route::controller(LandingPageController::class)->group(function () {
    // Halaman awal
    Route::get('/', 'index');
    // Halaman berita
    Route::get('/news', 'berita');
    
    // halaman aduan
    Route::get('/aduan', 'aduan');
    // Halaman prosedur aduan
    Route::get('/prosedur', 'prosedur');
    
    // Halaman tentang SIPAA
    Route::get('/about', 'about');
    
    // Halaman FAQ
    Route::get('/faq', 'faq');
  });

  // Controller Login Dashboard
  Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/authenticate', 'authenticate');
  });
});

// Route yang harus login untuk mengaksesnya
Route::middleware(['auth'])->group(function () {
  // Logout
  Route::post('/logout', [AuthController::class, 'logout']);

  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  // Laporan
  Route::get('/laporan', [LaporanController::class, 'index']);
  Route::get('/laporan/show', [LaporanController::class, 'show']);
  Route::get('/laporan/bukti', [LaporanController::class, 'bukti']);

  // Status Tindakan
  Route::get('/tindakan', [StatusTindakanController::class, 'index']);
  Route::get('/tindakan/email', [StatusTindakanController::class, 'email']);

  // Halaman Berita
  Route::get('/berita', [BeritaController::class, 'index']);
  Route::get('/berita/create', [BeritaController::class, 'create']);
  Route::get('/berita/edit', [BeritaController::class, 'edit']);
});
