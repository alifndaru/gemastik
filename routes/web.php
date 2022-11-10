<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SmartMonitoringController;
use App\Http\Controllers\SmartMonitoringSosmedController;
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

Route::get('/', function () {
    return view('home');
});

//dashboard
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/data-masyarakat', [MasyarakatController::class, 'index'])->name('data-masyarakat');
Route::get('/data-petugas', [PetugasController::class, 'index'])->name('data-petugas');
Route::get('/smart-monitoring', [SmartMonitoringController::class, 'index'])->name('smart-monitoring');
Route::get('/smart-monitoring-sosmed', [SmartMonitoringSosmedController::class, 'index'])->name('smart-monitoring-sosmed');
Route::get('/smart-gis', [SmartMonitoringController::class, 'gis'])->name('smart-gis');


//create laporan  user
// Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

//bermita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

//laporan routes
Route::get('/laporan', [PengaduanController::class, 'index'])->name('pengaduan');
Route::get('/detail-laporan', [PengaduanController::class,'show'])->name('detail-pengaduan');
Route::get('/lihat', [PengaduanController::class,'cetak'])->name('cetak');

//lapor instansi
Route::get('/lapor-instansi', [PengaduanController::class, 'laporInstansi'])->name('lapor-instansi');
// Route::get('/detail-pengaduan/{id}', [PengaduanController::class,'show'])->name('detail-pengaduan');
