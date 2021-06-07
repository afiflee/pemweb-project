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
        $iak = instrumenasesmenkompetensi::all();
        return view('read.iak', compact('iak'));
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
        $request->validate([
            'id_ref_unit_kompetensi' => 'required',
            'instrumen_pertanyaan' => 'required',
            'status_instrumen' => 'required',
            'is_aktif' => 'required' 
        ]);

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
        return view('edit.iak', compact('instrumenasesmenkompetensi'));
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
        $request->validate([
            'id_ref_unit_kompetensi' => 'required',
            'instrumen_pertanyaan' => 'required',
            'status_instrumen' => 'required',
            'is_aktif' => 'required' 
        ]);
        instrumenasesmenkompetensi::where('id', $instrumenasesmenkompetensi->id)
        ->update([
            'id_ref_unit_kompetensi' => $request->id_ref_unit_kompetensi,
            'instrumen_pertanyaan' => $request->instrumen_pertanyaan,
            'status_instrumen' => $request->status_instrumen,
            'is_aktif' => $request->is_aktif
        ]);
    return redirect('/index/dataiak')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instrumenasesmenkompetensi  $instrumenasesmenkompetensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(instrumenasesmenkompetensi $instrumenasesmenkompetensi)
    {
        instrumenasesmenkompetensi::destroy($instrumenasesmenkompetensi->id);
        return redirect('/index/dataiak')->with('status', 'data berhasil dihapus');
    }
}
