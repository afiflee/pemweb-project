<?php

namespace App\Http\Controllers;

use App\Models\pendaftarsyarat;
use App\Http\Controllers\Controller;
use App\Models\pendaftar;
use Illuminate\Http\Request;

class psycontroller extends Controller
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
        return view('create.psy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $psy = new pendaftarsyarat;
		// $psy->id_syarat_sertifikasi = $request->id_syarat_sertifikasi;
		// $psy->id_pendaftar = $request->id_pendaftar;
		// $psy->status_verifikasi_syarat = $request->status_verifikasi_syarat;
		// $psy->path_bukti = $request->path_bukti;
		// $psy->verifikasi_asesor = $request->verifikasi_asesor;
		// $psy->komentar_asesor = $request->komentar_asesor;
		// $psy->verified_by = $request->verified_by;
		// $psy->verified_at = $request->verified_at;
		// $psy->created_by = $request->created_by;
		// $psy->edited_by = $request->edited_by;
        // $psy->save();

        pendaftarsyarat::create($request->all());

		return redirect('/index/psy')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftarsyarat  $pendaftarsyarat
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftarsyarat $pendaftarsyarat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftarsyarat  $pendaftarsyarat
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftarsyarat $pendaftarsyarat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftarsyarat  $pendaftarsyarat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftarsyarat $pendaftarsyarat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftarsyarat  $pendaftarsyarat
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftarsyarat $pendaftarsyarat)
    {
        //
    }
}
