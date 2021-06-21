@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <hr>
                <form method="POST" action="/index/pi">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="id_instrumen_asesmen">id instrumen asesmen</label>
                        <select class="form-control @error('id_instrumen_asesmen') is-invalid @enderror" id="id_instrumen_asesmen" name="id_instrumen_asesmen">
                            @foreach($instrumen as $instrumen)
                                <option value="{{$instrumen->id}}">{{$instrumen->instrumen_pertanyaan}}</option>
                            @endforeach
                        </select>

                        @error('id_instrumen_asesmen') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban_self_asesmen">jawaban self asesmen</label>
                        <textarea type="text" class="form-control @error('jawaban_self_asesmen') is-invalid @enderror" id="jawaban_self_asesmen" name="jawaban_self_asesmen" placeholder="jawaban self asesmen"> {{old('jawaban_self_asesmen')}}</textarea>
                        @error('jawaban_self_asesmen') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="path_bukti">path_bukti</label>
                        <input type="text" class="form-control @error('path_bukti') is-invalid @enderror" id="path_bukti" name="path_bukti" placeholder="Masukkan path bukti" value="{{old('path_bukti')}}">
                        @error('path_bukti') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="komentar_bukti">komentar bukti</label>
                        <textarea type="text" class="form-control @error('komentar_bukti') is-invalid @enderror" id="komentar_bukti" name="komentar_bukti" placeholder="komentar bukti"> {{old('komentar_bukti')}}</textarea>
                        @error('komentar_bukti') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    <a href="{{ url('/index/datapi') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
					<a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
				</form>
            </div>
        </div>
    </div>
@endsection
