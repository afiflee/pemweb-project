<?php

namespace App\Http\Controllers;

use App\Models\refunitkompetensi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rukcontroller extends Controller
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
        $ruk = refunitkompetensi::all();
        return view('read.ruk', compact('ruk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.ruk');
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
            'nama'=>'required',
            'is_aktif'=>'required'
        ]);

        refunitkompetensi::create($request->all());

        return redirect('/index/ruk')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\refunitkompetensi  $refunitkompetensi
     * @return \Illuminate\Http\Response
     */
    public function show(refunitkompetensi $refunitkompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\refunitkompetensi  $refunitkompetensi
     * @return \Illuminate\Http\Response
     */
    public function edit(refunitkompetensi $refunitkompetensi)
    {
        return view('edit.ruk', compact('refunitkompetensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\refunitkompetensi  $refunitkompetensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, refunitkompetensi $refunitkompetensi)
    {
        $request->validate([
            'nama'=>'required',
            'is_aktif'=>'required'
        ]);

        refunitkompetensi::where('id', $refunitkompetensi->id)
            ->update([
                'nama' => $request->nama,
                'is_aktif' => $request->is_aktif
            ]);
        return redirect('/index/dataruk')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\refunitkompetensi  $refunitkompetensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(refunitkompetensi $refunitkompetensi)
    {
        refunitkompetensi::destroy($refunitkompetensi->id);
        return redirect('/index/dataruk')->with('status', 'data berhasil dihapus');
    }
}
