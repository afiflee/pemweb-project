<?php

namespace App\Http\Controllers;

use App\Models\syaratsertifikasi;
use App\Http\Controllers\Controller;
use App\Models\refjenissertifikasi;
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
        $ss = syaratsertifikasi::all();
        return view('read.ss', compact('ss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = refjenissertifikasi::all();
        return view('create.ss', compact('jenis'));
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
            'syarat' => 'required',
        ]);

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
        $jenis = refjenissertifikasi::all();
        return view('edit.ss', compact('syaratsertifikasi', 'jenis'));
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
        $request->validate([
                'id_ref_jenis_sertifikasi' => 'required',
                'syarat' => 'required',
                'is_aktif' => 'required'
        ]);

        syaratsertifikasi::where('id', $syaratsertifikasi->id)
            ->update([
                'id_ref_jenis_sertifikasi' => $request->id_ref_jenis_sertifikasi,
                'syarat' => $request->syarat,
                'is_aktif' => $request->is_aktif
            ]);
        return redirect('/index/datass')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\syaratsertifikasi  $syaratsertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(syaratsertifikasi $syaratsertifikasi)
    {
        syaratsertifikasi::destroy($syaratsertifikasi->id);
        return redirect('/index/datass')->with('status', 'data berhasil dihapus');
    }
}
