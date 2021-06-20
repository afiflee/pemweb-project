<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class syaratsertifikasi extends Model
{
    public $timestamps = false;
    protected $table = 'syarat_sertifikasi';
    protected $fillable = ['id_ref_jenis_sertifikasi', 'syarat', 'is_aktif'];
    protected $attributes = [
        'is_aktif' => 1
    ];
    use HasFactory;
}
