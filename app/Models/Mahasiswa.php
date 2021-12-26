<?php

namespace App\Models;

use Database\Factories\MahasiwaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        "nim",
        "nama",
        "kelas",
        "email",
        "password",
        "no_telp",
        "alamat",
        "tanggal_lahir",
    ];

    protected static function  newFactory()
    {
        return new MahasiwaFactory();
    }

    public function nilais()
    {
        return $this->hasMany(Nilai::class);
    }
}
