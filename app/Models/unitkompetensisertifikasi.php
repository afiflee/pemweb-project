<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitkompetensisertifikasi extends Model
{
    public $timestamps = false;
    protected $table = 'unit_kompetensi_sertifikasi';
    protected $fillable = ['id_ref_jenis_sertifikasi', 'id_ref_kompetensi', 'is_aktif'];
    use HasFactory;
}
