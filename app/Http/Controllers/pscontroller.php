<?php

namespace App\Http\Controllers;

use App\Models\penawaransertifikasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pscontroller extends Controller
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
        return view('create.ps');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ps = new penawaransertifikasi;
		// $ps->id_ref_jenis_sertifikasi = $request->id_ref_jenis_sertifikasi;
		// $ps->deskripsi_penawaran = $request->deskripsi_penawaran;
		// $ps->periode = $request->is_aktif;
		// $ps->created_by = $request->created_by;
		// $ps->edited_by = $request->edited_by;
		// $ps->is_aktif = $request->is_aktif;
        // $ps->save();

        penawaransertifikasi::create($request->all());

		return redirect('/index/ps')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penawaransertifikasi  $penawaransertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(penawaransertifikasi $penawaransertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penawaransertifikasi  $penawaransertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(penawaransertifikasi $penawaransertifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penawaransertifikasi  $penawaransertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penawaransertifikasi $penawaransertifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penawaransertifikasi  $penawaransertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(penawaransertifikasi $penawaransertifikasi)
    {
        //
    }
}
