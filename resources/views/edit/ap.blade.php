@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/dataap/{{$asesorpendaftar->id}}">
                    @csrf
                    @method('put')
					<div class="form-group my-3">
                        <label for="id_asesor_jenis_sertifikasi">id asesor jenis sertifikasi</label>
                        <input type="number" class="form-control" id="id_asesor_jenis_sertifikasi" name="id_asesor_jenis_sertifikasi" placeholder="id asesor jenis sertifikasi" value="{{$asesorpendaftar -> id_asesor_jenis_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_pendaftar">id pendaftar</label>
                        <input type="number" class="form-control" id="id_pendaftar" name="id_pendaftar" placeholder="id pendaftar" value="{{$asesorpendaftar -> id_pendaftar}}">
                    </div>
					<div class="form-group my-3">
                        <label for="hasil">hasil</label>
                        <input type="text" class="form-control" id="hasil" name="hasil" placeholder="masukkan hasil" value="{{$asesorpendaftar -> hasil}}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection