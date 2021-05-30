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
        return view('edit.pk', compact('pendaftarkuesioner'));
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
        pendaftarkuesioner::where('id', $pendaftarkuesioner->id)
            ->update([
                'id_pendaftar' => $request->id_pendaftar,
                'id_kuesioner' => $request->id_kuesioner,
                'jawaban' => $request->jawaban,
                'created_by' => $request->created_by,
                'edited_by' => $request->edited_by
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
