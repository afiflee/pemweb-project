<?php

namespace App\Http\Controllers;

use App\Models\pendaftarinstrumen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // $pi = new pendaftarinstrumen;
		// $pi->id_pendaftar = $request->id_pendaftar;
		// $pi->id_instrumen_asesmen = $request->id_instrumen_asesmen;
		// $pi->jawaban_self_asesmen = $request->jawaban_self_asesmen;
		// $pi->path_bukti = $request->path_bukti;
		// $pi->komentar_bukti = $request->komentar_bukti;
		// $pi->jawaban_asesor_verifikasi = $request->jawaban_asesor_verifikasi;
		// $pi->verified_by = $request->verified_by;
		// $pi->verified_at = $request->verified_at;
		// $pi->created_by = $request->created_by;
		// $pi->edited_by = $request->edited_by;
        // $pi->save();

        pendaftarinstrumen::create($request->all());

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
        pendaftarinstrumen::where('id', $pendaftarinstrumen->id)
            ->update([
                'id_pendaftar' => $request->id_pendaftar,
                'id_instrumen_asesmen' => $request->id_instrumen_asesmen,
                'jawaban_self_asesmen' => $request->jawaban_self_asesmen,
                'path_bukti' => $request->path_bukti,
                'komentar_bukti' => $request->komentar_bukti,
                'jawaban_asesor_sertifikasi' => $request->jawaban_asesor_sertifikasi,
                'verified_by' => $request->verified_by,
                'verified_at' => $request->verified_at,
                'created_by' => $request->created_by,
                'edited_by' => $request->edited_by
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
