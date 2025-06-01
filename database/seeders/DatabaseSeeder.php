<?php

namespace Database\Seeders;

use App\Models\AgendaSidang;
use App\Models\Hakim;
use App\Models\Notifikasi;
use App\Models\Panitera;
use App\Models\Perkara;
use App\Models\Putusan;
use App\Models\Sidang;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Hakim::factory(60)->create();
        Perkara::factory(150)->create();

        $sidang = Sidang::factory(50)->create();
        $sidang->each(function ($data) {
            AgendaSidang::factory(2)->create(['id_sidang' => $data->id]);
        });

        Putusan::factory(20)->create([
            'id_sidang' => fn() => Sidang::inRandomOrder()->first()->id
        ]);
    }
}
