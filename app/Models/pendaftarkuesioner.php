<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftarkuesioner extends Model
{
    protected $table = 'pendaftar_kuesioner';
    protected $fillable = ['id_pendaftar', 'id_kuesioner', 'jawaban', 'created_by', 'edited_by'];
    use HasFactory;
}
