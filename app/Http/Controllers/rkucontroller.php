<?php

namespace App\Http\Controllers;

use App\Models\refkuesioner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rkucontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:admin'])->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rku = refkuesioner::all();
        return view('read.rku', compact('rku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.rku');
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
            'pertanyaan'=>'required',
        ]);

        refkuesioner::create($request->all());

		return redirect('/index/rku')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\refkuesioner  $refkuesioner
     * @return \Illuminate\Http\Response
     */
    public function show(refkuesioner $refkuesioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\refkuesioner  $refkuesioner
     * @return \Illuminate\Http\Response
     */
    public function edit(refkuesioner $refkuesioner)
    {
        return view('edit.rku', compact('refkuesioner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\refkuesioner  $refkuesioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, refkuesioner $refkuesioner)
    {
        $request->validate([
            'pertanyaan'=>'required',
            'is_aktif'=>'required'
        ]);

        refkuesioner::where('id', $refkuesioner->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'is_aktif' => $request->is_aktif
            ]);
        return redirect('/index/datarku')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\refkuesioner  $refkuesioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(refkuesioner $refkuesioner)
    {
        refkuesioner::destroy($refkuesioner->id);
        return redirect('/index/datarku')->with('status', 'data berhasil dihapus');
    }
}
