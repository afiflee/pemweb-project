@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card"> --}}
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Selamat Datang di website Sertifikasi!</p>

                    @hasrole('admin')
                    <p>Role anda adalah admin.</p>
                    @endhasrole
                    @hasrole('asesor')
                    <p>Role anda adalah asesor.</p>
                    @endhasrole
                    @hasrole('asesi')
                    <p>Role anda adalah asesi.</p>
                    @endhasrole
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
        @hasrole('asesi')
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar</h5>
                    <p class="card-text">Anda Sudah Terdaftar Sebagai Asesi</p>
                    <a href="{{ url('/index/p') }}" class="btn bg-primary my-3" style="color: white">Daftar Sertifikasi</a>
                    <a href="/dataasesi/{{$idasesi}}/edit" class="btn bg-primary my-3" style="color: white">Edit Informasi Asesi</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Isi berkas Syarat</h5>
                    <p class="card-text">Isi berkas-berkas syarat yang diperlukan untuk sertifikasi yang anda daftar.</p>
                    <a href="{{ url('/index/psy') }}" class="btn bg-primary my-3" style="color: white">Isi berkas</a>
                    <a href="{{ url('/index/datapsy') }}" class="btn bg-primary my-3" style="color: white">List berkas yang sudah anda daftarkan</a>
                    <a href="{{ url('/index/datass') }}" class="btn bg-primary my-3" style="color: white">List Syarat</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Isi Self Asesmen</h5>
                    <p class="card-text">Self asesmen</p>
                    <a href="{{ url('/index/pi') }}" class="btn bg-primary my-3" style="color: white">Isi Self asesmen</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mengisi Kuesioner Kepuasan</h5>
                    <p class="card-text">Isi kuesioner-kuesioner yang berkaitan dengan layanan sertifikasi kami</p>
                    <a href="{{ url('/index/pk') }}" class="btn bg-primary my-3" style="color: white">Isi Kuesioner</a>
                    <a href="{{ url('/index/datarku') }}" class="btn bg-primary my-3" style="color: white">List Kuesioner</a>
                </div>
                </div>
            </div>
        @else
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar</h5>
                    <p class="card-text">Daftarkan data diri anda.</p>
                    <a href="{{ url('/index/asesi') }}" class="btn bg-primary my-3" style="color: white">Daftar Asesi</a>
                    <a href="{{ url('/index/asesor') }}" class="btn bg-primary my-3" style="color: white">Daftar Asesor</a>
                </div>
                </div>
            </div>
        @endhasrole
        @hasrole('asesor')
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Verifikasi Berkas Pendaftaran</h5>
                    <p class="card-text">Berikan keterangan verifikasi berkas pendaftaran untuk para asesi yang sudah terdaftar</p>
                    <a href="{{ url('/index/datapsy') }}" class="btn bg-primary my-3" style="color: white">List Asesi</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Verifikasi Instrumen</h5>
                    <p class="card-text">Berikan keterangan verifikasi instrumen yang sudah terdaftar</p>
                    <a href="{{ url('/index/datapi') }}" class="btn bg-primary my-3" style="color: white">List instrumen</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Menilai Hasil Ujian</h5>
                    <p class="card-text">Berikan nilai hasil ujian untuk para asesi yang telah mengikuti ujian</p>
                    <a href="{{ url('/index/datapi') }}" class="btn bg-primary my-3" style="color: white">Beri Nilai</a>
                    <a href="{{ url('/index/dataajs') }}" class="btn bg-primary my-3" style="color: white">List Asesor Jenis Sertifikasi</a>
                    <a href="{{ url('/index/datap') }}" class="btn bg-primary my-3" style="color: white">List Pendaftar</a>
                </div>
                </div>
            </div>


        @endhasrole
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Sertifikasi</h5>
                    <p class="card-text">Lihat sertifikasi yang tersedia.</p>
                    <a href="{{ url('/index/datarjs') }}" class="btn bg-primary my-3" style="color: white">Sertifikasi</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jadwal Kegiatan</h5>
                    <p class="card-text">Lihat jadwal dan keterangan kegiatan dari sertifikasi yang tersedia.</p>
                    <a href="{{ url('/index/datark') }}" class="btn bg-primary my-3" style="color: white">List</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Penawaran</h5>
                    <p class="card-text">Penawaran Sertifikasi</p>
                    <a href="{{ url('/index/datark') }}" class="btn bg-primary my-3" style="color: white">List</a>
                </div>
                </div>
            </div>
        @hasrole('admin')
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Asesor</h5>
                    <p class="card-text">Manage data-data dari asesor yang terdaftar</p>
                    <a href="{{ url('/index/dataasesor') }}" class="btn bg-primary my-3" style="color: white">Lihat Data Asesor yang terdaftar</a>
                    <a href="{{ url('/index/asesor') }}" class="btn bg-primary my-3" style="color: white">Tambah Asesor</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen jenis Bidang Sertifikasi Asesor</h5>
                    <p class="card-text">Manage data-data jenis bidang sertifikasi asesor yang sedang aktif</p>
                    <a href="{{ url('/index/dataajs') }}" class="btn bg-primary my-3" style="color: white">Lihat bidang sertifikasi asesor</a>
                    <a href="{{ url('/index/ajs') }}" class="btn bg-primary my-3" style="color: white">Tambah Bidang sertifikasi asesor</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Penawaran Sertifikasi</h5>
                    <p class="card-text">Membuka penawaran sertifikasi serta manage penawaran sertifikasi yang sedang aktif</p>
                    <a href="{{ url('/index/dataps') }}" class="btn bg-primary my-3" style="color: white">List Penawaran</a>
                    <a href="{{ url('/index/ps') }}" class="btn bg-primary my-3" style="color: white">Buka Penawaran Baru</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jadwal Kegiatan</h5>
                    <p class="card-text">Buat jadwal kegiatan dan manage jadwal kegiatan</p>
                    <a href="{{ url('/index/datark') }}" class="btn bg-primary my-3" style="color: white">List Kegiatan</a>
                    <a href="{{ url('/index/datajadwal') }}" class="btn bg-primary my-3" style="color: white">List Jadwal</a>
                    <a href="{{ url('/index/rk') }}" class="btn bg-primary my-3" style="color: white">Tambah Kegiatan</a>
                    <a href="{{ url('/index/jadwal') }}" class="btn bg-primary my-3" style="color: white">Tambah Jadwal</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Unit Kompetensi Sertifikasi</h5>
                    <p class="card-text">Manage data unit kompetensi sertifikasi</p>
                    <a href="{{ url('/index/datauksertif') }}" class="btn bg-primary my-3" style="color: white">List Unit Kompetensi</a>
                    <a href="{{ url('/index/rk') }}" class="btn bg-primary my-3" style="color: white">Tambah Unit</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Referensi Unit</h5>
                    <p class="card-text">Manage data referensi unit</p>
                    <a href="{{ url('/index/datauksertif') }}" class="btn bg-primary my-3" style="color: white">List referensi unit</a>
                    <a href="{{ url('/index/rk') }}" class="btn bg-primary my-3" style="color: white">Tambah Referensi Unit</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Syarat Sertifikasi</h5>
                    <p class="card-text">Manage data terkait syarat sertifikasi</p>
                    <a href="{{ url('/index/datauksertif') }}" class="btn bg-primary my-3" style="color: white">List Syarat Sertifikasi</a>
                    <a href="{{ url('/index/rk') }}" class="btn bg-primary my-3" style="color: white">Tambah Syarat Sertifikasi</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Instrumen Asesmen</h5>
                    <p class="card-text">Manage Instrumen asesmen</p>
                    <a href="{{ url('/index/datauksertif') }}" class="btn bg-primary my-3" style="color: white">List Instrumen asesmen</a>
                    <a href="{{ url('/index/rk') }}" class="btn bg-primary my-3" style="color: white">Tambah Instrumen asesmen</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Plotting Pendaftar dan Asesor</h5>
                    <p class="card-text">Generate Asesor Pendaftar</p>
                    <a href="{{ url('/index/dataap') }}" class="btn bg-primary my-3" style="color: white">List Asesor Pendaftar</a>
                    <a href="{{ url('/index/ap') }}" class="btn bg-primary my-3" style="color: white">Tambah Asesor Pendaftar</a>
                </div>
                </div>
            </div>
        @endhasrole
        </div>
    </div>
</div>
@endsection
