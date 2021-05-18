@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/ss">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">id jenis sertifikasi</label>
                        <input type="number" class="form-control" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi" placeholder="id jenis sertifikasi">
                    </div>
                    <div class="form-group my-3">
                        <label for="syarat">syarat</label>
                        <textarea type="text" class="form-control" id="syarat" name="syarat" placeholder="syarat"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
                </form>
            </div>
        </div>
    </div>
@endsection