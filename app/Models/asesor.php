<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesor extends Model
{
    public $timestamps = false;
    protected $table = 'asesor';
    protected $fillable = ['nama', 'nim', 'nik', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'no_telpon', 'email'];
    use HasFactory;
}
