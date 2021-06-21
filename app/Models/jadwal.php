<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table ='jadwal';
    protected $fillable = ['id_penawaran_sertifikasi', 'id_kegiatan', 'tanggal_awal', 'tanggal_akhir', 'created_by', 'is_show', 'deskripsi'];
    protected $attributes = [
        'is_show' => 1
    ];
    use HasFactory;
}
