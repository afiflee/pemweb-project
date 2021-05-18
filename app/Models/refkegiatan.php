<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refkegiatan extends Model
{
    protected $table = 'ref_kegiatan';
    protected $fillable = ['nama_kegiatan', 'deskripsi', 'created_by'];
    use HasFactory;
}
