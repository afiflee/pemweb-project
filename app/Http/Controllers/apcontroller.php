<?php

namespace App\Http\Controllers;

use App\Models\asesorpendaftar;
use App\Http\Controllers\Controller;
use App\Models\asesorjenissertifikasi;
use App\Models\pendaftar;
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
        $ap = asesorpendaftar::all();
        return view('read.ap',compact('ap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asesorjenis = asesorjenissertifikasi::all();
        $pendaftar = pendaftar::all();
        return view('create.ap', compact('asesorjenis', 'pendaftar'));
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
            'id_asesor_jenis_sertifikasi' => 'required',
            'id_pendaftar' => 'required',
            'hasil' => 'required'
        ]);

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
        $asesorjenis = asesorjenissertifikasi::all();
        $pendaftar = pendaftar::all();
        return view('edit.ap',compact('asesorpendaftar', 'asesorjenis', 'pendaftar'));
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
        $request->validate([
                'id_asesor_jenis_sertifikasi' => 'required',
                'id_pendaftar' => 'required',
                'hasil' => 'required'
        ]);
        asesorpendaftar::where('id', $asesorpendaftar->id)
            ->update([
                'id_asesor_jenis_sertifikasi' => $request->id_asesor_jenis_sertifikasi,
                'id_pendaftar' => $request->id_pendaftar,
                'hasil' => $request->hasil
            ]);
        return redirect('/index/dataap')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asesorpendaftar  $asesorpendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(asesorpendaftar $asesorpendaftar)
    {
        asesorpendaftar::destroy($asesorpendaftar->id);
        return redirect('/index/dataap')->with('status','data berhasil dihapus');
    }
}
