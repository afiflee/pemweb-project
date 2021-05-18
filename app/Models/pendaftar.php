<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $fillable = ['id_penawaran_sertifikasi', 'id_asesi', 'status_akhir_sertifikasi', 'tanggal_status_akhir', 'created_by', 'edited_by', 'status_pendaftaran'];
    use HasFactory;
}
