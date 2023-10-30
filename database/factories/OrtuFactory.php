<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ortu>
 */
class OrtuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_ayah' => fake()->name(),
            'nik_ayah' => fake()->numberBetween(100000000, 999999999),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'nama_ibu' => fake()->name(),
            'nik_ibu' => fake()->numberBetween(100000000, 999999999),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'penghasilan_ortu' => fake()->numberBetween(100000000, 999999999),
            'alamat_ortu' => fake()->address(),
            'nama_wali' => fake()->name(),
            'hubungan_wali' => fake()->randomElement(['Kakak','Kakek','Nenek','Paman','Bibi']),
            'pekerjaan_wali' => fake()->jobTitle(),
            'penghasilan_wali' => fake()->numberBetween(100000000, 999999999),
            'alamat_wali' => fake()->address(),
        ];
    }
}
