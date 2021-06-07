@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datapi/{{$pendaftarinstrumen->id}}">
                    @csrf
                    @method('put')
					<div class="form-group my-3">
                        <label for="id_pendaftar">id pendaftar</label>
                        <input type="number" class="form-control @error('id_pendaftar') is-invalid @enderror" id="id_pendaftar" name="id_pendaftar" placeholder="id pendaftar" value="{{$pendaftarinstrumen->id_pendaftar}}">
                        @error('id_pendaftar') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_instrumen_asesmen">id instrumen asesmen</label>
                        <input type="number" class="form-control @error('id_instrumen_asesmen') is-invalid @enderror" id="id_instrumen_asesmen" name="id_instrumen_asesmen" placeholder="id instrumen asesmen" value="{{$pendaftarinstrumen->id_instrumen_asesmen}}">
                        @error('id_instrumen_asesmen') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban_self_asesmen">jawaban self asesmen</label>
                        <textarea type="text" class="form-control @error('jawaban_self_asesmen') is-invalid @enderror" id="jawaban_self_asesmen" name="jawaban_self_asesmen" placeholder="jawaban self asesmen">{{$pendaftarinstrumen->jawaban_self_asesmen}}</textarea>
                        @error('jawaban_self_asesmen') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="path_bukti">path_bukti</label>
                        <input type="text" class="form-control @error('path_bukti') is-invalid @enderror" id="path_bukti" name="path_bukti" placeholder="Masukkan path bukti" value="{{$pendaftarinstrumen->path_bukti}}">
                        @error('path_bukti') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="komentar_bukti">komentar bukti</label>
                        <textarea type="text" class="form-control @error('komentar_bukti') is-invalid @enderror" id="komentar_bukti" name="komentar_bukti" placeholder="komentar bukti">{{$pendaftarinstrumen->komentar_bukti}}</textarea>
                        @error('komentar_bukti') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban_asesor_verifikasi">jawaban asesor verifikasi</label>
                        <textarea type="text" class="form-control @error('jawaban_asesor_verifikasi') is-invalid @enderror" id="jawaban_asesor_verifikasi" name="jawaban_asesor_verifikasi" placeholder="jawaban asesor verifikasi">{{$pendaftarinstrumen->jawaban_asesor_verifikasi}}</textarea>
                        @error('jawaban_asesor_verifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_by">verify</label>
                        <input type="text" class="form-control @error('verified_by') is-invalid @enderror" id="verified_by" name="verified_by" placeholder="Masukkan verify" value="{{$pendaftarinstrumen->verified_by}}">
                        @error('verified_by') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_at">Tanggal verify</label>
                        <input type="date" class="form-control @error('verified_at') is-invalid @enderror" id="verified_at" name="verified_at" placeholder="Tanggal verify" value="{{$pendaftarinstrumen->verified_at}}">
                        @error('verified_at') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection