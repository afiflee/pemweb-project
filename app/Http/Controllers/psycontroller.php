<?php

namespace App\Http\Controllers;

use App\Models\pendaftarsyarat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('create.psy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $psy = new pendaftarsyarat;
		// $psy->id_syarat_sertifikasi = $request->id_syarat_sertifikasi;
		// $psy->id_pendaftar = $request->id_pendaftar;
		// $psy->status_verifikasi_syarat = $request->status_verifikasi_syarat;
		// $psy->path_bukti = $request->path_bukti;
		// $psy->verifikasi_asesor = $request->verifikasi_asesor;
		// $psy->komentar_asesor = $request->komentar_asesor;
		// $psy->verified_by = $request->verified_by;
		// $psy->verified_at = $request->verified_at;
		// $psy->created_by = $request->created_by;
		// $psy->edited_by = $request->edited_by;
        // $psy->save();

        pendaftarsyarat::create([
                'id_syarat_sertifikasi' => $request->id_syarat_sertifikasi,
                'id_pendaftar' => $request->id_pendaftar,
                'status_verifikasi_syarat' => $request->status_verifikasi_syarat,
                'path_bukti' => $request->path_bukti,
                'verifikasi_asesor' => $request->verifikasi_asesor,
                'komentar_asesor' => $request->komentar_asesor,
                'verified_by' => $request->verified_by,
                'verified_at' => $request->verified_at,
                'created_by' => Auth::user()->name,
                'edited_by' => Auth::user()->name
            ]);

		return redirect('/index/psy')->with('status', 'data berhasil masuk');
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
        pendaftarsyarat::where('id', $pendaftarsyarat->id)
            ->update([
                'id_syarat_sertifikasi' => $request->id_syarat_sertifikasi,
                'id_pendaftar' => $request->id_pendaftar,
                'status_verifikasi_syarat' => $request->status_verifikasi_syarat,
                'path_bukti' => $request->path_bukti,
                'verifikasi_asesor' => $request->verifikasi_asesor,
                'komentar_asesor' => $request->komentar_asesor,
                'verified_by' => $request->verified_by,
                'verified_at' => $request->verified_at,
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
