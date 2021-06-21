@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row"> <!--justify-content-center-->
            <div class="col-12" id="tabel-menu">
                <h1 class="mt-3">Lembaga Sertifikasi</h1>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama Tabel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fs-5">Ref Jenis Sertifikasi</td>
                            <td>
                                <a href="{{ url('/index/rjs') }}" class="badge bg-primary">Tambah</a>
                                <a href="{{ url('/index/datarjs') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Unit Kompetensi Sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/uksertif') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datauksertif') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Ref Unit Kompetensi</td>
                            <td>
                                <a href="{{ url('/index/ruk') }}" class="badge bg-primary">Tambah</a>
                                <a href="{{ url('/index/dataruk') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Syarat Sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/ss') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datass') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Instrumen Asesmen Kompetensi</td>
                            <td>
                            <a href="{{ url('/index/iak') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataiak') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Penawaran Sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/ps') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataps') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Asesi</td>
                            <td>
                            <a href="{{ url('/index/asesi') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataasesi') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Pendaftar</td>
                            <td>
                            <a href="{{ url('/index/p') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datap') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Pendaftar Syarat</td>
                            <td>
                            <a href="{{ url('/index/psy') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datapsy') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Pendaftar Instrumen</td>
                            <td>
                            <a href="{{ url('/index/pi') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datapi') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Asesor</td>
                            <td>
                            <a href="{{ url('/index/asesor') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataasesor') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Asesor Jenis Sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/ajs') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataajs') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Asesor Pendaftar</td>
                            <td>
                            <a href="{{ url('/index/ap') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataap') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Jadwal</td>
                            <td>
                            <a href="{{ url('/index/jadwal') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datajadwal') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Ref Kegiatan</td>
                            <td>
                            <a href="{{ url('/index/rk') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datark') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Pendaftar Kuesioner</td>
                            <td>
                            <a href="{{ url('/index/pk') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datapk') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">Ref Kuesioner</td>
                            <td>
                            <a href="{{ url('/index/rku') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datarku') }}" class="badge bg-success">List</a>
                            </td>
                        </tr>
                    </tbody>
                 </table>
            </div>
        </div>
    </div>
@endsection
