<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftarinstrumen extends Model
{
    protected $table = 'pendaftar_instrumen';
    protected $fillable = ['id_pendaftar', 'id_instrumen_asesmen', 'jawaban_self_asesmen', 'path_bukti', 'komentar_bukti', 'jawaban_asesor_verifikasi', 'verified_by', 'verified_at', 'created_by', 'edited_by'];
    use HasFactory;
}
