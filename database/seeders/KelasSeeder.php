<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                'nama' => 'A',
                'kapasitas' => 31,
            ],
            [
                'nama' => 'B',
                'kapasitas' => 31,
            ],
            [
                'nama' => 'C',
                'kapasitas' => 30,
            ],
            [
                'nama' => 'D',
                'kapasitas' => 30,
            ],
            [
                'nama' => 'E',
                'kapasitas' => 28,
            ],
        ];

        Kelas::insert($kelas);
    }
}
