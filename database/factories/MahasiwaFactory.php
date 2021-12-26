<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MahasiwaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Mahasiswa::class;

    public function definition()
    {
        $number = $this->faker->unique()->numberBetween(1, 137);
        $stringlength = Str::length((string) $number);
        $cast = "";
        if ($stringlength > 2) {
            $cast = (string) $number;
        } else if ($stringlength > 1) {
            $cast = "0" . (string) $number;
        } else {
            $cast = "00" . (string) $number;
        }

        return [
            "nim" => "1197050" . $cast,
            "nama" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "password" => bcrypt('password'),
            "no_telp" => $this->faker->phoneNumber(),
            "alamat" => $this->faker->address(),
            "tanggal_lahir" => $this->faker->date($max = '2002-12-31'),
        ];
    }
}
