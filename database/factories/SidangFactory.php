<?php

namespace Database\Factories;

use App\Models\Perkara;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sidang>
 */
class SidangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_perkara' => Perkara::factory(),
            'waktu_sidang' => fake()->dateTimeBetween('+1 days', '+30 days'),
            'ruang_sidang' => 'Ruang ' . fake()->randomElement(['A', 'B', 'C']),
            'status_sidang' => fake()->randomElement(['terjadwal', 'ditunda', 'selesai', 'batal']),
        ];
    }
}
