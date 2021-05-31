@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/pi">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_pendaftar">id pendaftar</label>
                        <input type="number" class="form-control" id="id_pendaftar" name="id_pendaftar" placeholder="id pendaftar">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_instrumen_asesmen">id instrumen asesmen</label>
                        <input type="number" class="form-control" id="id_instrumen_asesmen" name="id_instrumen_asesmen" placeholder="id instrumen asesmen">
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban_self_asesmen">jawaban self asesmen</label>
                        <textarea type="text" class="form-control" id="jawaban_self_asesmen" name="jawaban_self_asesmen" placeholder="jawaban self asesmen"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="path_bukti">path_bukti</label>
                        <input type="text" class="form-control" id="path_bukti" name="path_bukti" placeholder="Masukkan path bukti">
                    </div>
                    <div class="form-group my-3">
                        <label for="komentar_bukti">komentar bukti</label>
                        <textarea type="text" class="form-control" id="komentar_bukti" name="komentar_bukti" placeholder="komentar bukti"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban_asesor_verifikasi">jawaban asesor verifikasi</label>
                        <textarea type="text" class="form-control" id="jawaban_asesor_verifikasi" name="jawaban_asesor_verifikasi" placeholder="jawaban asesor verifikasi"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_by">verify</label>
                        <input type="text" class="form-control" id="verified_by" name="verified_by" placeholder="Masukkan verify">
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_at">Tanggal verify</label>
                        <input type="date" class="form-control" id="verified_at" name="verified_at" placeholder="Tanggal verify">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index/datapi') }}" class="btn bg-warning my-3">Lihat Data</a>
					<a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
				</form>
            </div>
        </div>
    </div>
@endsection