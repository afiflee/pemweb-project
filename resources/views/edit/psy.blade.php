@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/index/psy">
                    @csrf
                    @method('put')
					<div class="form-group my-3">
                        <label for="id_syarat_sertifikasi">id syarat sertifikasi</label>
                        <input type="number" class="form-control" id="id_syarat_sertifikasi" name="id_syarat_sertifikasi" placeholder="id syarat sertifikasi" value="{{$pendaftarsyarat->id_syarat_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_pendaftar">id pendaftar</label>
                        <input type="number" class="form-control" id="id_pendaftar" name="id_pendaftar" placeholder="id pendaftar" value="{{$pendaftarsyarat->id_pendaftar}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="status_verifikasi_syarat">status verifikasi syarat</label>
                        <input type="text" class="form-control" id="status_verifikasi_syarat" name="status_verifikasi_syarat" placeholder="Masukkan status verifikasi" value="{{$pendaftarsyarat->status_verifikasi_syarat}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="path_bukti">path_bukti</label>
                        <input type="text" class="form-control" id="path_bukti" name="path_bukti" placeholder="Masukkan path bukti" value="{{$pendaftarsyarat->path_bukti}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="verifikasi_asesor">verifikasi asesor</label>
                        <input type="text" class="form-control" id="verifikasi_asesor" name="verifikasi_asesor" placeholder="Masukkan verifikasi asesor" value="{{$pendaftarsyarat->verifikasi_asesor}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="komentar_asesor">komentar asesor</label>
                        <textarea type="text" class="form-control" id="komentar_asesor" name="komentar_asesor" placeholder="komentar asesor"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_by">verify</label>
                        <input type="text" class="form-control" id="verified_by" name="verified_by" placeholder="Masukkan verify" value="{{$pendaftarsyarat->verified_by}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_at">Tanggal verify</label>
                        <input type="date" class="form-control" id="verified_at" name="verified_at" placeholder="Tanggal verify" value="{{$pendaftarsyarat->verified_at}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda" value="{{$pendaftarsyarat->created_by}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="edited_by">Editor</label>
                        <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="Kosongkan bila pertama mengisi" value="{{$pendaftarsyarat->edited_by}}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection