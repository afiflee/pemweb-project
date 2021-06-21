<?php

namespace App\Http\Controllers;

use App\Models\refkegiatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class rkcontroller extends Controller
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
        $rk = refkegiatan::all();
        return view('read.rk', compact('rk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.rk');
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
            'nama_kegiatan' => 'required',
                'deskripsi' => 'required',
        ]);

        refkegiatan::create([
                'nama_kegiatan' => $request->nama_kegiatan,
                'deskripsi' => $request->deskripsi,
                'created_by' => Auth::user()->name
            ]);

	    return redirect('/index/rk')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\refkegiatan  $refkegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(refkegiatan $refkegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\refkegiatan  $refkegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(refkegiatan $refkegiatan)
    {
        return view('edit.rk', compact('refkegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\refkegiatan  $refkegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, refkegiatan $refkegiatan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
                'deskripsi' => 'required',
        ]);
        
        refkegiatan::where('id', $refkegiatan->id)
            ->update([
                'nama_kegiatan' => $request->nama_kegiatan,
                'deskripsi' => $request->deskripsi,
            ]);
        return redirect('/index/datark')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\refkegiatan  $refkegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(refkegiatan $refkegiatan)
    {
        refkegiatan::destroy($refkegiatan->id);
        return redirect('/index/datark')->with('status', 'data berhasil dihapus');
    }
}
