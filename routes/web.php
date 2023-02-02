<?php

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


/* Route::get('/', function () {
    return redirect()->route('home');
});
 */

//Masyarakat
Route::get('/', [App\Http\Controllers\HalamanUtama::class,'index']);
//Nav Bar - Masyarakat
Route::get('/beranda', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'index']);
Route::get('/visimisi', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'visimisi']);
Route::get('/berita', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'berita']);
Route::get('/event', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'event']);
Route::get('/ronda', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'ronda']);

Route::get('/permohonandokumen', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'permohonandokumen']);
Route::get('/unduhdokumen', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'unduhdokumen']);

Route::get('/kritik', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'kritik']);
Route::get('/kontak', [App\Http\Controllers\Masyarakat\MasyarakatController::class,'kontak']);
Route::get('/login', [App\Http\Controllers\Login::class,'index']);

//Perangkat
Route::get('/perangkat', [App\Http\Controllers\Perangkat\PerangkatController::class,'index']);

//Nav Bar - Perangkat
Route::get('/perangkat-beranda', [App\Http\Controllers\Perangkat\PerangkatController::class,'index']);
Route::get('/perangkat-penduduk', [App\Http\Controllers\Perangkat\PerangkatController::class,'getPenduduk']);
Route::get('/perangkat-pindahan', [App\Http\Controllers\Perangkat\PerangkatController::class,'getPindahan']);
Route::get('/perangkat-kedatangan', [App\Http\Controllers\Perangkat\PerangkatController::class,'getKedatangan']);
Route::get('/perangkat-kelahiran', [App\Http\Controllers\Perangkat\PerangkatController::class,'getKelahiran']);
Route::get('/perangkat-kewafatan', [App\Http\Controllers\Perangkat\PerangkatController::class,'getKewafatan']);
Route::get('/perangkat-kritik', [App\Http\Controllers\Perangkat\PerangkatController::class,'getKritik']);
Route::get('/perangkat-berita', [App\Http\Controllers\Perangkat\PerangkatController::class,'getBerita']);
Route::get('/perangkat-ronda', [App\Http\Controllers\Perangkat\PerangkatController::class,'getRonda']);
Route::get('/perangkat-event', [App\Http\Controllers\Perangkat\PerangkatController::class,'getEvent']);

//Kades
Route::get('/kades', [App\Http\Controllers\Kades\KadesController::class,'index']);

//Nav Bar - Kades
Route::get('/kades-beranda', [App\Http\Controllers\Kades\KadesController::class,'index']);
Route::get('/kades-penduduk', [App\Http\Controllers\Kades\KadesController::class,'getPenduduk']);
Route::get('/kades-pindahan', [App\Http\Controllers\Kades\KadesController::class,'getPindahan']);
Route::get('/kades-kedatangan', [App\Http\Controllers\Kades\KadesController::class,'getKedatangan']);
Route::get('/kades-kelahiran', [App\Http\Controllers\Kades\KadesController::class,'getKelahiran']);
Route::get('/kades-kewafatan', [App\Http\Controllers\Kades\KadesController::class,'getKewafatan']);
Route::get('/kades-kritik', [App\Http\Controllers\Kades\KadesController::class,'getKritik']);
Route::get('/kades-berita', [App\Http\Controllers\Kades\KadesController::class,'getBerita']);
Route::get('/kades-ronda', [App\Http\Controllers\Kades\KadesController::class,'getRonda']);
Route::get('/kades-event', [App\Http\Controllers\Kades\KadesController::class,'getEvent']);
Route::get('/kades-permohonan', [App\Http\Controllers\Kades\KadesController::class,'getPermohonan']);
Route::get('/kades-unggahdokumen', [App\Http\Controllers\Kades\KadesController::class,'getDokumenTerunggah']);