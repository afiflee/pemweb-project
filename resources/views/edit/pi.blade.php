@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datapi/{{$pendaftarinstrumen->id}}">
                    @csrf
                    @method('put')
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
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection