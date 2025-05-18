<?php

namespace Database\Seeders;

use App\Models\Hakim;
use App\Models\Notifikasi;
use App\Models\Panitera;
use App\Models\Perkara;
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
        User::factory(1000)->create()->each(function ($user) {
            Notifikasi::factory(rand(1, 3))->create(['id_user' => $user->id]);
        });

        $hakims = Hakim::factory(30)->create();
        $paniteras = Panitera::factory(20)->create();

        Perkara::factory(300)->create()->each(function ($perkara) use ($hakims, $paniteras) {
            $sidangs = Sidang::factory(rand(1, 5))->create(['id_perkara' => $perkara->id]);

            foreach ($sidangs as $sidang) {
                $sidang->hakim()->attach($hakims->random(rand(1, 3))->pluck('id')->toArray());

                $sidang->panitera()->attach($paniteras->random(rand(1, 2))->pluck('id')->toArray());
            }
        });
    }
}
