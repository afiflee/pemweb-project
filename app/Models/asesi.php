<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesi extends Model
{
    protected $table = 'asesi';
    protected $fillable = ['nama', 'nim', 'nik', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'id_ref_negara', 'alamat', 'no_telpon', 'email', 'kualifikasi_pendidikan', 'id_unit', 'created_by', 'edited_by', 'id_user'];
    use HasFactory;
}
