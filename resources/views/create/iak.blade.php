@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/iak">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="id_ref_unit_kompetensi">nomor id unit kompetensi</label>
                        <input type="number" class="form-control" id="id_ref_unit_kompetensi" name="id_ref_unit_kompetensi" placeholder="nomor id unit kompetensi">
                    </div>
                    <div class="form-group my-3">
                        <label for="instrumen_pertanyaan">instrumen pertanyaan</label>
                        <input type="text" class="form-control" id="instrumen_pertanyaan" name="instrumen_pertanyaan" placeholder="masukkan instrumen pertanyaan">
                    </div>
                    <div class="form-group my-3">
                        <label for="status_instrumen">status instrumen</label>
                        <input type="text" class="form-control" id="status_instrumen" name="status_instrumen" placeholder="masukkan status instrumen">
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index/dataiak') }}" class="btn bg-warning my-3">Lihat Data</a>
                    <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
                </form>
            </div>
        </div>
    </div>
@endsection