<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jadwalcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.jadwal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $jadwal = new jadwal;
		// $jadwal->id_penawaran_sertifikasi = $request->id_penawaran_sertifikasi;
		// $jadwal->id_kegiatan = $request->id_kegiatan;
		// $jadwal->tanggal_awal = $request->tanggal_awal;
		// $jadwal->tanggal_akhir = $request->tanggal_akhir;
		// $jadwal->created_by = $request->created_by;
		// $jadwal->is_show = $request->is_show;
		// $jadwal->deskripsi = $request->deskripsi;
        // $jadwal->save();

        jadwal::create($request->all());

		return redirect('/index/jadwal')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        //
    }
}
