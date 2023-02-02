<?php

namespace App\Http\Controllers\Perangkat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerangkatController extends Controller
{
//          GET TAMPILAN BERANDA
    public function index() {
        return view('Perangkat.DashboardPerangkat');
    }

//          CRUD DATA PENDUDUK
    public function getPenduduk() {
        return view('Perangkat.Penduduk.index');
    }
//          CRUD DATA KELAHIRAN
    public function getKelahiran() {
            return view('Perangkat.Kelahiran.index');
    }
//          CRUD DATA KEDATANGAN
    public function getKedatangan() {
            return view('Perangkat.Kedatangan.index');
        }
//          CRUD DATA PINDAHAN
    public function getPindahan() {
            return view('Perangkat.Pindahan.index');
        }
//          CRUD DATA KEWAFATAN
    public function getKewafatan() {
            return view('Perangkat.Kewafatan.index');
        }
//          CRUD DATA RONDA
    public function getRonda() {
            return view('Perangkat.Ronda.index');
        }
//          CRUD DATA BERITA
    public function getBerita() {
            return view('Perangkat.Berita.index');
        }
//          CRUD DATA KRITIK DAN SARAN
    public function getKritik() {
            return view('Perangkat.Kritik.index');
        }
//          CRUD DATA EVENT DESA
    public function getEvent() {
            return view('Perangkat.Event.index');
        }



}
