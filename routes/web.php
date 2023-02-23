<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DojoController;
use App\Http\Controllers\PengcapController;
use App\Http\Controllers\PengdaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::resource('/pengda', PengdaController::class);

Route::resource('/pengcab', PengcapController::class);

Route::resource('/dojo', DojoController::class);

Route::resource('/anggota', AnggotaController::class);
