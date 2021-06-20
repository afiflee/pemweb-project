<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refjenissertifikasi extends Model
{
    public $table = 'ref_jenis_sertifikasi';
    protected $fillable = ['nama', 'status_jenis_sertifikasi', 'created_by', 'edited_by', 'is_aktif'];
    protected $attributes = [
        'is_aktif' => 1
    ];
    use HasFactory;
}
