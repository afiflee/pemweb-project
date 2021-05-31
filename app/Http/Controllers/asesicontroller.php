<?php

namespace App\Http\Controllers;

use App\Models\asesi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class asesicontroller extends Controller
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
        $asesi = asesi::all();
        return view('read.asesi', compact('asesi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.asesi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $asesi = new asesi;
        // $asesi->nama = $request->nama;
        // $asesi->nim = $request->nim;
        // $asesi->nik = $request->nik;
        // $asesi->tempat_lahir = $request->tempat_lahir;
        // $asesi->tanggal_lahir = $request->tanggal_lahir;
        // $asesi->jenis_kelamin = $request->jenis_kelamin;
        // $asesi->id_ref_negara = $request->id_ref_negara;
        // $asesi->alamat = $request->alamat;
        // $asesi->no_telpon = $request->no_telpon;
        // $asesi->email = $request->email;
        // $asesi->kualifikasi_pendidikan = $request->kualifikasi_pendidikan;
        // $asesi->id_unit = $request->id_unit;
        // $asesi->created_by = $request->created_by;
        // $asesi->edited_by = $request->edited_by;
        // $asesi->id_user = $request->id_user;
        // $asesi->save();

        asesi::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_ref_negara' => $request->id_ref_negara,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email,
            'kualifikasi_pendidikan' => $request->kualifikasi_pendidikan,
            'id_unit' => $request->id_unit,
            'created_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name,
            'id_user' => Auth::user()->id
        ]);

        return redirect('/index/asesi')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asesi  $asesi
     * @return \Illuminate\Http\Response
     */
    public function show(asesi $asesi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asesi  $asesi
     * @return \Illuminate\Http\Response
     */
    public function edit(asesi $asesi)
    {
        return view('edit.asesi', compact('asesi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asesi  $asesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asesi $asesi)
    {
        asesi::where('id', $asesi->id)
        ->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_ref_negara' => $request->id_ref_negara,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email,
            'kualifikasi_pendidikan' => $request->kualifikasi_pendidikan,
            'id_unit' => $request->id_unit,
            'edited_by' => Auth::user()->name,
            'id_user' => Auth::user()->id
        ]);
    return redirect('/index/dataasesi')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asesi  $asesi
     * @return \Illuminate\Http\Response
     */
    public function destroy(asesi $asesi)
    {
        asesi::destroy($asesi->id);
        return redirect('/index/dataasesi')->with('status', 'data berhasil dihapus');
    }
}
