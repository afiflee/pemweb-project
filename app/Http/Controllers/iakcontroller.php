<?php

namespace App\Http\Controllers;

use App\Models\instrumenasesmenkompetensi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class iakcontroller extends Controller
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
        return view('create.iak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $iak = new instrumenasesmenkompetensi;
		// $iak->id_ref_unit_kompetensi = $request->id_ref_unit_kompetensi;
		// $iak->instrumen_pertanyaan = $request->instrumen_pertanyaan;
		// $iak->status_instrumen = $request->status_instrumen;
		// $iak->is_aktif = $request->is_aktif;

        instrumenasesmenkompetensi::create($request->all());
        
		return redirect('/index/iak')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instrumenasesmenkompetensi  $instrumenasesmenkompetensi
     * @return \Illuminate\Http\Response
     */
    public function show(instrumenasesmenkompetensi $instrumenasesmenkompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instrumenasesmenkompetensi  $instrumenasesmenkompetensi
     * @return \Illuminate\Http\Response
     */
    public function edit(instrumenasesmenkompetensi $instrumenasesmenkompetensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\instrumenasesmenkompetensi  $instrumenasesmenkompetensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instrumenasesmenkompetensi $instrumenasesmenkompetensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instrumenasesmenkompetensi  $instrumenasesmenkompetensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(instrumenasesmenkompetensi $instrumenasesmenkompetensi)
    {
        //
    }
}
