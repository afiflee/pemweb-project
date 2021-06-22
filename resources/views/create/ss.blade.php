@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-12">
                <h1 class="mt-3">Tambah Syarat Sertifikasi</h1>
                <hr>
                <form method="POST" action="/index/ss">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">ID Ref Jenis Sertifikasi</label>
                        <select class="form-control @error('id_ref_jenis_sertifikasi') is-invalid @enderror" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi">
                            @foreach($jenis as $jenis)
                                <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                            @endforeach
                        </select>
                        @error('id_ref_jenis_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="syarat">Syarat</label>
                        <textarea type="text" class="form-control @error('syarat') is-invalid @enderror" id="syarat" name="syarat" placeholder="syarat">{{old('syarat')}}</textarea>
                        @error('syarat') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    @hasrole('admin')
                    <a href="{{ url('/index/datass') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
                    @endhasrole
                    <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
                </form>
            </div>
        </div>
    </div>
@endsection
