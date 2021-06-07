@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/datapk/{{$pendaftarkuesioner->id}}">
                    @csrf
                    @method('put')
					<div class="form-group my-3">
                        <label for="id_pendaftar">nomor pendaftar</label>
                        <input type="number" class="form-control @error('id_pendaftar') is-invalid @enderror" id="id_pendaftar" name="id_pendaftar" placeholder="nomor pendaftar" value="{{$pendaftarkuesioner->id_pendaftar}}">
                        @error('id_pendaftar') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_kuesioner">nomor kuesioner</label>
                        <input type="number" class="form-control @error('id_kuesioner') is-invalid @enderror" id="id_kuesioner" name="id_kuesioner" placeholder="nomor kuesioner" value="{{$pendaftarkuesioner->id_kuesioner}}">
                        @error('id_kuesioner') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban">jawaban</label>
                        <textarea type="text" class="form-control @error('jawaban') is-invalid @enderror" id="jawaban" name="jawaban" placeholder="Masukkan jawaban kuesioner">{{$pendaftarkuesioner->jawaban}}</textarea>
                        @error('jawaban') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection