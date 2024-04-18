<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eleve;
use App\Models\Club;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // Club::factory()
        // ->count(10)
        // ->has(Eleve::factory()->count(2))
        // ->create();

        // $this->call([
        //     ActiviteSeeder::class
        // ]);

    }
}
