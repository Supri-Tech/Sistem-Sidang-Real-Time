<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perkara>
 */
class PerkaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_perkara' => 'PN-' . fake()->unique()->numerify('####/2025'),
            'jenis_perkara' => fake()->word,
            'terdakwa' => fake()->name,
            'korban' => fake()->name,
            'status_perkara' => fake()->randomElement(['aktif', 'ditutup', 'banding', 'kasasi']),
        ];
    }
}
