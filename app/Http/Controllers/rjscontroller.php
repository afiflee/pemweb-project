<?php

namespace App\Http\Controllers;

use App\Models\refjenissertifikasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rjscontroller extends Controller
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
        $refjenissertifikasi = refjenissertifikasi::all();
        return view('read.rjs', ['rjs' => $refjenissertifikasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.rjs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $refjenissertif = new refjenissertifikasi;
        // $refjenissertif->nama = $request->nama;
        // $refjenissertif->status_jenis_sertifikasi = $request->status_jenis_sertifikasi;
        // $refjenissertif->created_by = $request->created_by;
        // $refjenissertif->edited_by = $request->edited_by;
        // $refjenissertif->is_aktif = $request->is_aktif;
        // $refjenissertif->save();

        // refjenissertifikasi::create([
        //     'nama' => $request->nama,
        //     'status_jenis_sertifikasi' => $request->status_jenis_sertifikasi,
        //     'created_by' => $request->created_by,
        //     'edited_by' => $request->edited_by,
        //     'is_aktif' => $request->is_aktif
        // ]);
        
        refjenissertifikasi::create($request->all());

        return redirect('/index/rjs')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\refjenissertifikasi  $refjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(refjenissertifikasi $refjenissertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\refjenissertifikasi  $refjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(refjenissertifikasi $refjenissertifikasi)
    {
        return view('edit.rjs', compact('refjenissertifikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\refjenissertifikasi  $refjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, refjenissertifikasi $refjenissertifikasi)
    {
        refjenissertifikasi::where('id', $refjenissertifikasi->id)
            ->update([
                'nama' => $request->nama,
                'status_jenis_sertifikasi' => $request->status_jenis_sertifikasi,
                'created_by' => $request->created_by,
                'edited_by' => $request->edited_by,
                'is_aktif' => $request->is_aktif
            ]);
        return redirect('/index/datarjs')->with('status', 'data berhasil diubah');
        // return $refjenissertifikasi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\refjenissertifikasi  $refjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(refjenissertifikasi $refjenissertifikasi)
    {
        refjenissertifikasi::destroy($refjenissertifikasi->id);
        return redirect('/index/datarjs')->with('status', 'data berhasil dihapus');
        // return $refjenissertifikasi;
    }
}
