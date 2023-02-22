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

Route::middleware(['guest'])->group(function () {
  // Landing Page
  Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/news', 'berita');
    
    Route::get('/aduan', 'aduan');
    Route::get('/prosedur', 'prosedur');
    
    Route::get('/about', 'about');
    
    Route::get('/faq', 'faq');
  });

  // Login Dashboard
  Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/authenticate', 'authenticate');
  });
});

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
