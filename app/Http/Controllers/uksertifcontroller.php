<?php

namespace App\Http\Controllers;

use App\Models\unitkompetensisertifikasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uksertifcontroller extends Controller
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
        $uksertif = unitkompetensisertifikasi::all();
        return view('read.uksertif', compact('uksertif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.uksertif');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $uksertif = new unitkompetensisertifikasi;
		// $uksertif->id_ref_jenis_sertifikasi = $request->id_ref_jenis_sertifikasi;
		// $uksertif->id_ref_kompetensi = $request->id_ref_kompetensi;
		// $uksertif->is_aktif = $request->is_aktif;
        unitkompetensisertifikasi::create($request->all());

		return redirect('/index/uksertif')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unitkompetensisertifikasi  $unitkompetensisertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(unitkompetensisertifikasi $unitkompetensisertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unitkompetensisertifikasi  $unitkompetensisertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(unitkompetensisertifikasi $unitkompetensisertifikasi)
    {
        return view('edit.uksertif', compact('unitkompetensisertifikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unitkompetensisertifikasi  $unitkompetensisertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, unitkompetensisertifikasi $unitkompetensisertifikasi)
    {
        unitkompetensisertifikasi::where('id', $unitkompetensisertifikasi->id)
            ->update([
                'id_ref_jenis_sertifikasi' => $request->id_ref_jenis_sertifikasi,
                'id_ref_kompetensi' => $request->id_ref_kompetensi,
                'is_aktif' => $request->is_aktif
            ]);
        return redirect('/index/datauksertif')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unitkompetensisertifikasi  $unitkompetensisertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(unitkompetensisertifikasi $unitkompetensisertifikasi)
    {
        unitkompetensisertifikasi::destroy($unitkompetensisertifikasi->id);
        return redirect('/index/datauksertif')->with('status', 'data berhasil dihapus');
    }
}
