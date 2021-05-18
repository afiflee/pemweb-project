<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penawaransertifikasi extends Model
{
    protected $table = 'penawaran_sertifikasi';
    protected $fillable = ['id_ref_jenis_sertifikasi', 'deskripsi_penawaran', 'periode', 'created_by', 'edited_by', 'is_aktif'];
    use HasFactory;
}
