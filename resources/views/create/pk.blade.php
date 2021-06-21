@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <hr>
                <form method="POST" action="/index/pk">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="id_kuesioner">nomor kuesioner</label>
                        <select class="form-control @error('id_kuesioner') is-invalid @enderror" id="id_kuesioner" name="id_kuesioner">
                            @foreach($kuesioner as $kuesioner)
                                <option value="{{$kuesioner->id}}">{{$kuesioner->pertanyaan}}</option>
                            @endforeach
                        </select>
                        @error('id_kuesioner') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban">jawaban</label>
                        <textarea type="text" class="form-control @error('jawaban') is-invalid @enderror" id="jawaban" name="jawaban" placeholder="Masukkan jawaban kuesioner"> {{old('jawaban')}}</textarea>
                        @error('jawaban') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    <a href="{{ url('/index/datapk') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
					<a href="{{ url('/index') }}" class="btn bg-success my-3" style="color: white">kembali ke halaman utama</a>
				</form>
            </div>
        </div>
    </div>
@endsection