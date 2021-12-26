<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mk = [
            [
                "nama" => 'Pemrograman Aplikasi Web',
                "sks" => '2',
                "semester" => '5',
            ],
            [
                "nama" => 'Praktikum Pemrograman Aplikasi Web',
                "sks" => '1',
                "semester" => '5',
            ],
            [
                "nama" => 'Pemrograman Aplikasi Mobile',
                "sks" => '2',
                "semester" => '5',
            ],
            [
                "nama" => 'Praktikum Pemrograman Aplikasi Mobile',
                "sks" => '1',
                "semester" => '5',
            ],
            [
                "nama" => 'Jaringan Komputer',
                "sks" => '2',
                "semester" => '5',
            ],
            [
                "nama" => 'Praktikum Jaringan Komputer',
                "sks" => '1',
                "semester" => '5',
            ],
            [
                "nama" => 'Manajemen Basis Data',
                "sks" => '2',
                "semester" => '5',
            ],
            [
                "nama" => 'Praktikum Manajemen Basis Data',
                "sks" => '1',
                "semester" => '5',
            ],
            [
                "nama" => 'Intelegensia Buatan',
                "sks" => '2',
                "semester" => '5',
            ],
            [
                "nama" => 'Manajemen Proyek Perangkat Lunak',
                "sks" => '1',
                "semester" => '5',
            ],
        ];

        MataKuliah::insert($mk);
    }
}
