<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Masyarakat.DashboardMasyarakat');
    }

      public function visimisi()
    {
        return view('Masyarakat.VisiMisi');
    }

    public function berita()
    {
        return view('Masyarakat.BeritaDesa');
    }

      public function event()
    {
        return view('Masyarakat.Event');
    }
     
      public function ronda()
    {
        return view('Masyarakat.Ronda');
    }

    public function kritik()
    {
        return view('Masyarakat.Kritik');
    }

    public function kontak()
    {
        return view('Masyarakat.Kontak');
    }

    public function permohonandokumen()
    {
        return view('Masyarakat.PermohonanDokumen');
    }

    public function unduhdokumen()
    {
        return view('Masyarakat.UnduhDokumen');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
