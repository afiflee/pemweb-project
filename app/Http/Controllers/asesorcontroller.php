<?php

namespace App\Http\Controllers;

use App\Models\asesor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class asesorcontroller extends Controller
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
        $asesor = asesor::all();
        return view('read.asesor', compact('asesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.asesor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $asesor = new asesor;
        // $asesor->nama = $request->nama;
        // $asesor->nim = $request->nim;
        // $asesor->nik = $request->nik;
        // $asesor->tempat_lahir = $request->tempat_lahir;
        // $asesor->tanggal_lahir = $request->tanggal_lahir;
        // $asesor->jenis_kelamin = $request->jenis_kelamin;
        // $asesor->alamat = $request->alamat;
        // $asesor->no_telpon = $request->no_telpon;
        // $asesor->email = $request->email;

        asesor::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email
        ]);
        return redirect('/index/asesor')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function show(asesor $asesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function edit(asesor $asesor)
    {
        return view('edit.asesor', compact('asesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asesor $asesor)
    {
        asesor::where('id', $asesor->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'nik' => $request->nik,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'no_telpon' => $request->no_telpon,
                'email' => $request->email
            ]);
        return redirect('/index/dataasesor')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(asesor $asesor)
    {
        asesor::destroy($asesor->id);
        return redirect('/index/dataasesor')->with('status', 'data berhasil dihapus');
    }
}
