<?php

namespace App\Http\Controllers\Kades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KadesController extends Controller
{
    public function index(){
       return view('Kades.DashboardKades');
    }

    //          CRUD DATA PENDUDUK
    public function getPenduduk() {
        return view('Kades.Penduduk.index');
    }
//          CRUD DATA KELAHIRAN
    public function getKelahiran() {
            return view('Kades.Kelahiran.index');
    }
//          CRUD DATA KEDATANGAN
    public function getKedatangan() {
            return view('Kades.Kedatangan.index');
        }
//          CRUD DATA PINDAHAN
    public function getPindahan() {
            return view('Kades.Pindahan.index');
        }
//          CRUD DATA KEWAFATAN
    public function getKewafatan() {
            return view('Kades.Kewafatan.index');
        }
//          CRUD DATA RONDA
    public function getRonda() {
            return view('Kades.Ronda.index');
        }
//          CRUD DATA BERITA
    public function getBerita() {
            return view('Kades.Berita.index');
        }
//          CRUD DATA KRITIK DAN SARAN
    public function getKritik() {
            return view('Kades.Kritik.index');
        }
//          CRUD DATA EVENT DESA
    public function getEvent() {
            return view('Kades.Event.index');
        }
    
//          CRUD DATA PERMOHONAN DOKUMEN
    public function getPermohonan() {
            return view('Kades.PermohonanDokumen.index');
        }
//          CRUD DATA EVENT DESA
    public function getDokumenTerunggah() {
            return view('Kades.DokumenTerunggah.index');
        }
    
}
