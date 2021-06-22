<?php

namespace App\Http\Controllers;

use App\Models\asesorjenissertifikasi;
use App\Http\Controllers\Controller;
use App\Models\asesor;
use App\Models\refjenissertifikasi;
use Illuminate\Http\Request;

class ajscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:admin'])->except('index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajs = asesorjenissertifikasi::all();
        return view('read.ajs', compact('ajs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asesor = asesor::all();
        $jenis = refjenissertifikasi::all();
        return view('create.ajs', compact('asesor', 'jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_asesor' => 'required',
            'id_ref_jenis_sertifikasi' => 'required',
            'tanggal_awal_berlaku' => 'required',
            'tanggal_akhir_berlaku' => 'required',
            'no_sertifikat' => 'required'
        ]);

        asesorjenissertifikasi::create($request->all());

		return redirect('/index/ajs')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(asesorjenissertifikasi $asesorjenissertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(asesorjenissertifikasi $asesorjenissertifikasi)
    {
        $asesor = asesor::all();
        return view('edit.ajs', compact('asesorjenissertifikasi', 'asesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asesorjenissertifikasi $asesorjenissertifikasi)
    {
        $request->validate([
                'id_asesor' => 'required',
                'tanggal_awal_berlaku' => 'required',
                'tanggal_akhir_berlaku' => 'required',
                'no_sertifikat' => 'required'
        ]);
             asesorjenissertifikasi::where('id', $asesorjenissertifikasi->id)
            ->update([
                'id_asesor' => $request->id_asesor,
                'tanggal_awal_berlaku' => $request->tanggal_awal_berlaku,
                'tanggal_akhir_berlaku' => $request->tanggal_akhir_berlaku,
                'no_sertifikat' => $request->no_sertifikat
            ]);
        return redirect('/index/dataajs')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(asesorjenissertifikasi $asesorjenissertifikasi)
    {
        asesorjenissertifikasi::destroy($asesorjenissertifikasi->id);
        return redirect('/index/dataajs')->with('status', 'data berhasil dihapus');
    }
}
