<?php

namespace App\Http\Controllers;

use App\Models\pendaftarkuesioner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pkcontroller extends Controller
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
        return view('create.pk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pk = new pendaftarkuesioner;
		// $pk->id_pendaftar = $request->id_pendaftar;
		// $pk->id_kuesioner = $request->id_kuesioner;
		// $pk->jawaban = $request->jawaban;
		// $pk->created_by = $request->is_aktif;
		// $pk->edited_by = $request->edited_by;
        // $pk->save();

        pendaftarkuesioner::create($request->all());

		return redirect('/index/pk')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftarkuesioner  $pendaftarkuesioner
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftarkuesioner $pendaftarkuesioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftarkuesioner  $pendaftarkuesioner
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftarkuesioner $pendaftarkuesioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftarkuesioner  $pendaftarkuesioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftarkuesioner $pendaftarkuesioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftarkuesioner  $pendaftarkuesioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftarkuesioner $pendaftarkuesioner)
    {
        //
    }
}
