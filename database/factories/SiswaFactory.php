<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis'   => fake()->numberBetween(100000, 999999),
            'no_nik' => fake()->numberBetween(100000000, 999999999),
            'no_kk' => fake()->numberBetween(100000000, 999999999),
            'nama'  => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['laki-laki','perempuan']),
            'tempat_lahir' => fake()->address(),
            'tanggal_lahir' => fake()->date('Y-m-d'),
            'domisili_id' => mt_rand(1,2),
            'ortu_id' => mt_rand(1,7),
            'diniyyah_id' => mt_rand(1,3),
            'alamat' => fake()->address(),
            'kamar_id' => mt_rand(1,2),
        ];
    }
}
