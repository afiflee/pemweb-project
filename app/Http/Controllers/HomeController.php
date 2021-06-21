<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:admin'])->only('tabel');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $idasesi = DB::table('asesi')
        ->join('users', 'asesi.id_user', '=', 'users.id')
        ->where('users.id', Auth::user()->id)
        ->value('asesi.id');
        return view('home', compact('idasesi'));
    }

    public function home(){
        return view('welcome');
    }

    public function tabel()
    {
        return view('index');
    }

    public function jadwalrk(){
        $jadwalrksertifikasi = DB::table('jadwal as j')
                            ->join('ref_kegiatan as rk', 'j.id_kegiatan', '=', 'rk.id')
                            ->join('penawaran_sertifikasi as ps', 'j.id_penawaran_sertifikasi', '=', 'ps.id')
                            ->get();

        return view('jadwalrk', compact('jadwalrksertifikasi'));
    }

    public function syaratanda(){
        $idasesi = DB::table('asesi')
                    ->join('users', 'asesi.id_user', '=', 'users.id')
                    ->where('users.id', Auth::user()->id)
                    ->value('asesi.id');

        $idpendaftar = DB::table('pendaftar')
                    ->join('asesi', 'pendaftar.id_asesi', '=', 'asesi.id')
                    ->where('asesi.id', $idasesi)
                    ->value('pendaftar.id');

        $syaratanda = DB::table('pendaftar_syarat as psy')
                    ->join('syarat_sertifikasi as ss', 'psy.id_syarat_sertifikasi', '=', 'ss.id')
                    ->where('psy.id_pendaftar', $idpendaftar)
                    ->get();

        return view('syaratanda', compact('syaratanda'));
    }
}