<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hakim>
 */
class HakimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hakim_ketua' => fake()->name,
            'hakim_anggota_1' => fake()->name,
            'hakim_anggota_2' => fake()->name,
            'panitera_pengganti' => fake()->name,
        ];
    }
}
