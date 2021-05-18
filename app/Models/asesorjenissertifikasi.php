<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesorjenissertifikasi extends Model
{
    public $timestamps = false;
    protected $table = 'asesor_jenis_sertifikasi';
    protected $fillable = ['id_asesor', 'id_ref_jenis_sertifikasi', 'tanggal_awal_berlaku', 'tanggal_akhir_berlaku', 'nomor_sertifikat'];
    use HasFactory;
}
