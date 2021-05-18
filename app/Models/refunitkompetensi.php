<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refunitkompetensi extends Model
{
    public $timestamps = false;
    protected  $table = 'ref_unit_kompetensi';
    protected $fillable = ['nama', 'is_aktif'];
    use HasFactory;
}
