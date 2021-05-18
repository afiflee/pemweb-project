<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesorpendaftar extends Model
{
    public $timestamps =false;
    protected $table = 'asesor_pendaftar';
    protected $fillable = ['id_asesor_jenis_sertifikasi', 'id_pendaftar', 'hasil'];
    use HasFactory;
}
