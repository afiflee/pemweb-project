<?php

namespace App\Http\Controllers;

use App\Models\pendaftarkuesioner;
use App\Http\Controllers\Controller;
use App\Models\refkuesioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $pendaftarkuesioner = pendaftarkuesioner::all();
        return view('read.pk', compact('pendaftarkuesioner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kuesioner = refkuesioner::all();
        return view('create.pk', compact('kuesioner'));
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
                'id_kuesioner' => 'required',
                'jawaban' => 'required'
        ]);

        $idasesi = DB::table('asesi')
        ->join('users', 'asesi.id_user', '=', 'users.id')
        ->where('users.id', Auth::user()->id)
        ->value('asesi.id');

        $idpendaftar = DB::table('pendaftar')
        ->join('asesi', 'pendaftar.id_asesi', '=', 'asesi.id')
        ->where('asesi.id', $idasesi)
        ->value('pendaftar.id');

        pendaftarkuesioner::create([
                'id_pendaftar' => $idpendaftar,
                'id_kuesioner' => $request->id_kuesioner,
                'jawaban' => $request->jawaban,
                'created_by' => Auth::user()->name,
                'edited_by' => Auth::user()->name
            ]);

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
        $kuesioner = refkuesioner::all();
        return view('edit.pk', compact('pendaftarkuesioner', 'kuesioner'));
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
        $request->validate([
            'id_kuesioner' => 'required',
            'jawaban' => 'required'
        ]);
        
        pendaftarkuesioner::where('id', $pendaftarkuesioner->id)
            ->update([
                'id_kuesioner' => $request->id_kuesioner,
                'jawaban' => $request->jawaban,
                'edited_by' => Auth::user()->name
            ]);
        return redirect('/index/datapk')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftarkuesioner  $pendaftarkuesioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftarkuesioner $pendaftarkuesioner)
    {
        pendaftarkuesioner::destroy($pendaftarkuesioner->id);
        return redirect('/index/datapk')->with('status', 'data berhasil dihapus');
    }
}
