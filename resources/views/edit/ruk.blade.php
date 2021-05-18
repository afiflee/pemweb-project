@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/dataruk/{{$refunitkompetensi->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Sertifikasi" value="{{$refunitkompetensi -> nama}}">
                    </div>
					<div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false" value="{{$refunitkompetensi -> is_aktif}}">
                    </div>
                    <button type="submit" class="btn bg-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection