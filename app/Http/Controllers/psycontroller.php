<?php

namespace App\Http\Controllers;

use App\Models\pendaftarsyarat;
use App\Http\Controllers\Controller;
use App\Models\syaratsertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $pendaftarsyarat = pendaftarsyarat::all();
        return view('read.psy', compact('pendaftarsyarat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $syarat = syaratsertifikasi::all();
        return view('create.psy', compact('syarat'));
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
            'id_syarat_sertifikasi' => 'required',
            'status_verifikasi_syarat' => 'required',
            'path_bukti' => 'required',
        ]);

        $idasesi = DB::table('asesi')
        ->join('users', 'asesi.id_user', '=', 'users.id')
        ->where('users.id', Auth::user()->id)
        ->value('asesi.id');

        $idpendaftar = DB::table('pendaftar')
        ->join('asesi', 'pendaftar.id_asesi', '=', 'asesi.id')
        ->where('asesi.id', $idasesi)
        ->value('pendaftar.id');

        pendaftarsyarat::create([
                'id_syarat_sertifikasi' => $request->id_syarat_sertifikasi,
                'id_pendaftar' => $idpendaftar,
                'status_verifikasi_syarat' => $request->status_verifikasi_syarat,
                'path_bukti' => $request->path_bukti,
                'verified_by' => Auth::user()->name,
                'verified_at' => now(),
                'created_by' => Auth::user()->name,
                'edited_by' => Auth::user()->name
            ]);

		return redirect('/syaratanda')->with('status', 'Anda berhasil menambahkan berkas');
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
        return view('edit.psy', compact('pendaftarsyarat'));
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
        $request->validate([
            'status_verifikasi_syarat' => 'required',
            'path_bukti' => 'required',
            'verifikasi_asesor' => 'required',
            'komentar_asesor' => 'required',
        ]);
        
        pendaftarsyarat::where('id', $pendaftarsyarat->id)
            ->update([
                'status_verifikasi_syarat' => $request->status_verifikasi_syarat,
                'path_bukti' => $request->path_bukti,
                'verifikasi_asesor' => $request->verifikasi_asesor,
                'komentar_asesor' => $request->komentar_asesor,
                'verified_by' => Auth::user()->name,
                'verified_at' => now(),
                'edited_by' => Auth::user()->name
            ]);
            return redirect('/index/datapsy')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftarsyarat  $pendaftarsyarat
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftarsyarat $pendaftarsyarat)
    {
        pendaftarsyarat::destroy($pendaftarsyarat->id);
        return redirect('/index/datapsy')->with('status', 'data berhasil dihapus');
    }
}
