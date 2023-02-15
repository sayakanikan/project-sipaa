<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

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
  Route::get('/', [LandingPageController::class, 'index']);
  
  Route::get('/aduan', [LandingPageController::class, 'aduan']);
  Route::get('/prosedur', [LandingPageController::class, 'prosedur']);
  
  Route::get('/about', [LandingPageController::class, 'about']);
  
  Route::get('/faq', [LandingPageController::class, 'faq']);
});
