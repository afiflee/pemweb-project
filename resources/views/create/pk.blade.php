@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/pk">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_pendaftar">nomor pendaftar</label>
                        <input type="number" class="form-control" id="id_pendaftar" name="id_pendaftar" placeholder="nomor pendaftar">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_kuesioner">nomor kuesioner</label>
                        <input type="number" class="form-control" id="id_kuesioner" name="id_kuesioner" placeholder="nomor kuesioner">
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban">jawaban</label>
                        <textarea type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Masukkan jawaban kuesioner"></textarea>
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index/datapk') }}" class="btn bg-warning my-3">Lihat Data</a>
					<a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
				</form>
            </div>
        </div>
    </div>
@endsection