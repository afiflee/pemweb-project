@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <hr>
                <form method="POST" action="/index/asesi">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama" value="{{old('nama')}}">
                        @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Masukkan nim" value="{{old('nim')}}">
                        @error('nim') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan nik" value="{{old('nik')}}">
                        @error('nik') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}">
                        @error('tempat_lahir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}">
                        @error('tanggal_lahir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" placeholder="Laki-Laki/Perempuan" value="{{old('jenis_kelamin')}}">
                        @error('jenis_kelamin') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_ref_negara">id ref negara</label>
                        <input type="text" class="form-control @error('id_ref_negara') is-invalid @enderror" id="id_ref_negara" name="id_ref_negara" placeholder="id negara" value="{{old('id_ref_negara')}}">
                        @error('id_ref_negara') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="masukkan alamat" value="{{old('alamat')}}">
                        @error('alamat') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="no_telpon">No Telepon</label>
                        <input type="tel" class="form-control @error('no_telpon') is-invalid @enderror" id="no_telpon" name="no_telpon" placeholder="masukkan nomor telepon" value="{{old('no_telpon')}}">
                        @error('no_telpon') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="masukkan email" value="{{old('email')}}">
                        @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="kualifikasi_pendidikan">Kualifikasi Pendidikan</label>
                        <input type="text" class="form-control @error('kualifikasi_pendidikan') is-invalid @enderror" id="kualifikasi_pendidikan" name="kualifikasi_pendidikan" placeholder="Pendidikan" value="{{old('kualifikasi_pendidikan')}}">
                        @error('kualifikasi_pendidikan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_unit">Nomor Unit</label>
                        <select class="form-control @error('id_unit') is-invalid @enderror" name="id_unit" id="id_unit">
                            @foreach($unit as $unit)
                                <option value="{{$unit->id}}">{{$unit->id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    @hasrole('admin')
                    <a href="{{ url('/index/dataasesi') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
                    @else
                    @endhasrole
                    <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
                </form>
            </div>
        </div>
    </div>
@endsection
