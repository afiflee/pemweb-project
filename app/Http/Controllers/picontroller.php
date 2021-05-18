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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftarinstrumen  $pendaftarinstrumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftarinstrumen $pendaftarinstrumen)
    {
        //
    }
}
