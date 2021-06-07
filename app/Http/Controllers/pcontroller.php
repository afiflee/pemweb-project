<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pcontroller extends Controller
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
        $pendaftar = pendaftar::all();
        return view('read.p', compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.p');
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
                'id_asesi' => 'required',
                'status_akhir_sertifikasi' => 'required',
                'tanggal_status_akhir' => 'required',
                'status_pendaftaran' => 'required'
        ]);

        pendaftar::create([
                'id_penawaran_sertifikasi' => $request->id_penawaran_sertifikasi,
                'id_asesi' => $request->id_asesi,
                'status_akhir_sertifikasi' => $request->status_akhir_sertifikasi,
                'tanggal_status_akhir' => $request->tanggal_status_akhir,
                'created_by' => Auth::user()->name,
                'edited_by' => Auth::user()->name,
                'status_pendaftaran' => $request->status_pendaftaran
            ]);

		return redirect('/index/p')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftar $pendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftar $pendaftar)
    {
        return view('edit.p', compact('pendaftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftar $pendaftar)
    {
        $request->validate([
            'id_penawaran_sertifikasi' => 'required',
            'id_asesi' => 'required',
            'status_akhir_sertifikasi' => 'required',
            'tanggal_status_akhir' => 'required',
            'status_pendaftaran' => 'required'
        ]);
    
        pendaftar::where('id', $pendaftar->id)
            ->update([
                'id_penawaran_sertifikasi' => $request->id_penawaran_sertifikasi,
                'id_asesi' => $request->id_asesi,
                'status_akhir_sertifikasi' => $request->status_akhir_sertifikasi,
                'tanggal_status_akhir' => $request->tanggal_status_akhir,
                'edited_by' => Auth::user()->name,
                'status_pendaftaran' => $request->status_pendaftaran
            ]);
        return redirect('/index/datap')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftar $pendaftar)
    {
        pendaftar::destroy($pendaftar->id);
        return redirect('/index/datap')->with('status', 'data berhasil dihapus');
    }
}
