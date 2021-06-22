@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>Asesmen yang telah Anda isi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Pertanyaan Asesmen</th>
                        <th scope="col">Jawaban Anda</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($asesmen as $asesmen)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$asesmen -> instrumen_pertanyaan}}</td>
                        <td>{{$asesmen -> jawaban_self_asesmen}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>

    </div>
@endsection
