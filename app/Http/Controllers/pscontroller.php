<?php

namespace App\Http\Controllers;

use App\Models\penawaransertifikasi;
use App\Http\Controllers\Controller;
use App\Models\refjenissertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $ps = penawaransertifikasi::all();
        return view('read.ps', compact('ps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = refjenissertifikasi::all();
        return view('create.ps', compact('jenis'));
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
            'id_ref_jenis_sertifikasi' => 'required',
            'deskripsi_penawaran' => 'required',
            'periode' => 'required',
        ]);

        penawaransertifikasi::create([
            'id_ref_jenis_sertifikasi' => $request->id_ref_jenis_sertifikasi,
            'deskripsi_penawaran' => $request->deskripsi_penawaran,
            'periode' => $request->periode,
            'created_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name,
        ]);

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
        $jenis = refjenissertifikasi::all();
        return view('edit.ps', compact('penawaransertifikasi', 'jenis'));
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
        $request->validate([
            'id_ref_jenis_sertifikasi' => 'required',
            'deskripsi_penawaran' => 'required',
            'periode' => 'required',
            'is_aktif' => 'required'
        ]);

        penawaransertifikasi::where('id', $penawaransertifikasi->id)
        ->update([
            'id_ref_jenis_sertifikasi' => $request->id_ref_jenis_sertifikasi,
            'deskripsi_penawaran' => $request->deskripsi_penawaran,
            'periode' => $request->periode,
            'edited_by' => Auth::user()->name,
            'is_aktif' => $request->is_aktif
        ]);
    return redirect('/index/dataps')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penawaransertifikasi  $penawaransertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(penawaransertifikasi $penawaransertifikasi)
    {
        penawaransertifikasi::destroy($penawaransertifikasi->id);
        return redirect('/index/dataps')->with('status', 'data berhasil dihapus');
    }
}
