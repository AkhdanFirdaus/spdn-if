<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_kuliah_id',
        'mahasiswa_id',
        'kelas_id',
        "tugas",
        "uts",
        "uas",
    ];
}
