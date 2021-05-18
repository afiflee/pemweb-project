<?php

namespace App\Http\Controllers;

use App\Models\asesorpendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apcontroller extends Controller
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
        return view('create.ap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ap = new asesorpendaftar();
		// $ap->id_asesor_jenis_sertifikasi = $request->id_asesor_jenis_sertifikasi;
		// $ap->id_pendaftar = $request->id_pendaftar;
		// $ap->hasil = $request->hasil;

        asesorpendaftar::create($request->all());

		return redirect('/index/ap')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asesorpendaftar  $asesorpendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(asesorpendaftar $asesorpendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asesorpendaftar  $asesorpendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(asesorpendaftar $asesorpendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asesorpendaftar  $asesorpendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asesorpendaftar $asesorpendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asesorpendaftar  $asesorpendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(asesorpendaftar $asesorpendaftar)
    {
        //
    }
}
