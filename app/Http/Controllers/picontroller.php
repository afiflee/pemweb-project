<?php

namespace App\Http\Controllers;

use App\Models\pendaftarinstrumen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class picontroller extends Controller
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
        $pendaftarinstrumen = pendaftarinstrumen::all();
        return view('read.pi', compact('pendaftarinstrumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.pi');
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
            'id_pendaftar' => 'required',
            'id_instrumen_asesmen' => 'required',
            'jawaban_self_asesmen' => 'required',
            'path_bukti' => 'required',
            'komentar_bukti' => 'required',
            'jawaban_asesor_verifikasi' => 'required',
            'verified_by' => 'required',
            'verified_at' => 'required'
        ]);

        pendaftarinstrumen::create([
                'id_pendaftar' => $request->id_pendaftar,
                'id_instrumen_asesmen' => $request->id_instrumen_asesmen,
                'jawaban_self_asesmen' => $request->jawaban_self_asesmen,
                'path_bukti' => $request->path_bukti,
                'komentar_bukti' => $request->komentar_bukti,
                'jawaban_asesor_verifikasi' => $request->jawaban_asesor_verifikasi,
                'verified_by' => $request->verified_by,
                'verified_at' => $request->verified_at,
                'created_by' => Auth::user()->name,
                'edited_by' => Auth::user()->name
            ]);

		return redirect('/index/pi')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftarinstrumen  $pendaftarinstrumen
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftarinstrumen $pendaftarinstrumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftarinstrumen  $pendaftarinstrumen
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftarinstrumen $pendaftarinstrumen)
    {
        return view('edit.pi', compact('pendaftarinstrumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftarinstrumen  $pendaftarinstrumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftarinstrumen $pendaftarinstrumen)
    {
        $request->validate([
            'id_pendaftar' => 'required',
            'id_instrumen_asesmen' => 'required',
            'jawaban_self_asesmen' => 'required',
            'path_bukti' => 'required',
            'komentar_bukti' => 'required',
            'jawaban_asesor_verifikasi' => 'required',
            'verified_by' => 'required',
            'verified_at' => 'required'
        ]);

        pendaftarinstrumen::where('id', $pendaftarinstrumen->id)
            ->update([
                'id_pendaftar' => $request->id_pendaftar,
                'id_instrumen_asesmen' => $request->id_instrumen_asesmen,
                'jawaban_self_asesmen' => $request->jawaban_self_asesmen,
                'path_bukti' => $request->path_bukti,
                'komentar_bukti' => $request->komentar_bukti,
                'jawaban_asesor_verifikasi' => $request->jawaban_asesor_verifikasi,
                'verified_by' => $request->verified_by,
                'verified_at' => $request->verified_at,
                'edited_by' => Auth::user()->name
            ]);
        return redirect('/index/datapi')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftarinstrumen  $pendaftarinstrumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftarinstrumen $pendaftarinstrumen)
    {
        pendaftarinstrumen::destroy($pendaftarinstrumen->id);
        return redirect('/index/datapi')->with('status', 'data berhasil dihapus');
    }
}
