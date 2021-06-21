@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datapsy/{{$pendaftarsyarat->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="status_verifikasi_syarat">status verifikasi syarat</label>
                        <input type="text" class="form-control @error('status_verifikasi_syarat') is-invalid @enderror" id="status_verifikasi_syarat" name="status_verifikasi_syarat" placeholder="Masukkan status verifikasi" value="{{$pendaftarsyarat->status_verifikasi_syarat}}">
                        @error('status_verifikasi_syarat') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="path_bukti">path_bukti</label>
                        <input type="text" class="form-control @error('path_bukti') is-invalid @enderror" id="path_bukti" name="path_bukti" placeholder="Masukkan path bukti" value="{{$pendaftarsyarat->path_bukti}}">
                        @error('path_bukti') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="verifikasi_asesor">verifikasi asesor</label>
                        <input type="text" class="form-control @error('verifikasi_asesor') is-invalid @enderror" id="verifikasi_asesor" name="verifikasi_asesor" placeholder="Masukkan verifikasi asesor" value="{{$pendaftarsyarat->verifikasi_asesor}}">
                        @error('verifikasi_asesor') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="komentar_asesor">komentar asesor</label>
                        <textarea type="text" class="form-control @error('komentar_asesor') is-invalid @enderror" id="komentar_asesor" name="komentar_asesor" placeholder="komentar asesor">{{$pendaftarsyarat->komentar_asesor}}</textarea>
                        @error('komentar_asesor') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection