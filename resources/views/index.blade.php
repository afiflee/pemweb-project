@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Lembaga Sertifikasi</h1>

                <h3><span class="badge bg-primary">List Data</span></h3>

                <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ref_jenis_sertifikasi
                            <a href="{{ url('/index/rjs') }}" class="badge">Tambah</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
@endsection