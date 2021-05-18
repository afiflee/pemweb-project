@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/ap">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_asesor_jenis_sertifikasi">id asesor jenis sertifikasi</label>
                        <input type="number" class="form-control" id="id_asesor_jenis_sertifikasi" name="id_asesor_jenis_sertifikasi" placeholder="id asesor jenis sertifikasi">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_pendaftar">id pendaftar</label>
                        <input type="number" class="form-control" id="id_pendaftar" name="id_pendaftar" placeholder="id pendaftar">
                    </div>
					<div class="form-group my-3">
                        <label for="hasil">hasil</label>
                        <input type="text" class="form-control" id="hasil" name="hasil" placeholder="masukkan hasil">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
					<a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
				</form>
            </div>
        </div>
    </div>
@endsection