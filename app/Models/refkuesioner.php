<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refkuesioner extends Model
{
    public $timestamps = false;
    protected $table = 'ref_kuesioner';
    protected $fillable = ['pertanyaan', 'is_aktif'];
    use HasFactory;
}
