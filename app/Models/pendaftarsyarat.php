<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftarsyarat extends Model
{
    protected $table = 'pendaftar_syarat';
    protected $fillable = ['id_syarat_sertifikasi', 'id_pendaftar', 'status_verifikasi_syarat', 'path_bukti', 'verifikasi_asesor', 'komentar_asesor', 'verified_by', 'verified_at', 'created_by', 'edited_by'];
    protected $attributes = [
        'verifikasi_asesor' => 'belum terverifikasi',
        'komentar_asesor' => 'belum ada komentar',
    ];
    use HasFactory;
}
