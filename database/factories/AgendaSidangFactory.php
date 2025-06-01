<?php

namespace Database\Factories;

use App\Models\Sidang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AgendaSidangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = fake()->dateTimeBetween('+1 days', '+1 month');
        $end = (clone $start)->modify('+2 hours');

        return [
            'id_sidang' => Sidang::factory(),
            'judul_agenda' => fake()->sentence(3),
            'deskripsi' => fake()->paragraph(),
            'urutan' => fake()->numberBetween(1, 10),
            'waktu_mulai' => $start,
            'waktu_selesai' => $end,
            'status_agenda' => fake()->randomElement(['belum dimulai', 'selesai', 'ditunda'])
        ];
    }
}
