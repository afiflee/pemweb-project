<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Http\Controllers\Controller;
use App\Models\penawaransertifikasi;
use App\Models\refkegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Permission;

class jadwalcontroller extends Controller
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
        $jadwal = jadwal::all();
        return view('read.jadwal', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penawaran = penawaransertifikasi::all();
        $kegiatan = refkegiatan::all();
        return view('create.jadwal', compact('penawaran', 'kegiatan'));
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
                'id_penawaran_sertifikasi' => 'required',
                'id_kegiatan' => 'required',
                'tanggal_awal' => 'required',
                'tanggal_akhir' => 'required',
                'deskripsi' => 'required'
        ]);

        jadwal::create([
                'id_penawaran_sertifikasi' => $request->id_penawaran_sertifikasi,
                'id_kegiatan' => $request->id_kegiatan,
                'tanggal_awal' => $request->tanggal_awal,
                'tanggal_akhir' => $request->tanggal_akhir,
                'created_by' => Auth::user()->name,
                'deskripsi' => $request->deskripsi
            ]);

		return redirect('/index/jadwal')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {
        $penawaran = penawaransertifikasi::all();
        $kegiatan = refkegiatan::all();
        return view('edit.jadwal', compact('jadwal', 'penawaran', 'kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        $request->validate([
            'id_penawaran_sertifikasi' => 'required',
            'id_kegiatan' => 'required',
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
            'is_show' => 'required',
            'deskripsi' => 'required'
        ]);
        
        jadwal::where('id', $jadwal->id)
            ->update([
                'id_penawaran_sertifikasi' => $request->id_penawaran_sertifikasi,
                'id_kegiatan' => $request->id_kegiatan,
                'tanggal_awal' => $request->tanggal_awal,
                'tanggal_akhir' => $request->tanggal_akhir,
                'is_show' => $request->is_show,
                'deskripsi' => $request->deskripsi
            ]);
        return redirect('/index/datajadwal')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        jadwal::destroy($jadwal->id);
        return redirect('/index/datajadwal')->with('status', 'data berhasil dihapus');
    }
}
