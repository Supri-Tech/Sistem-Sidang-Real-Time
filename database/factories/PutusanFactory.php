<?php

namespace Database\Factories;

use App\Models\Sidang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PutusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_sidang' => Sidang::factory(),
            'isi_putusan' => fake()->sentence(5),
            'tanggal_putusan' => fake()->date(),
            'file_putusan' => 'putusan_' . fake()->uuid . '.pdf',
            'status_putusan' => fake()->randomElement(['dalam proses', 'ditetapkan'])
        ];
    }
}
