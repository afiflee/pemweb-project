<?php

namespace App\Http\Controllers;

use App\Models\syaratsertifikasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sscontroller extends Controller
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
        return view('create.ss');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ss = new syaratsertifikasi;
		// $ss->id_ref_jenis_sertifikasi = $request->id_ref_jenis_sertifikasi;
        // $ss->syarat = $request->syarat;
        // $ss->is_aktif = $request->is_aktif;

        syaratsertifikasi::create($request->all());

		return redirect('/index/ss')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\syaratsertifikasi  $syaratsertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(syaratsertifikasi $syaratsertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\syaratsertifikasi  $syaratsertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(syaratsertifikasi $syaratsertifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\syaratsertifikasi  $syaratsertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, syaratsertifikasi $syaratsertifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\syaratsertifikasi  $syaratsertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(syaratsertifikasi $syaratsertifikasi)
    {
        //
    }
}
