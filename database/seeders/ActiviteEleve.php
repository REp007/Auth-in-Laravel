<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Activite;

class ActiviteEleve extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activites = Activite::all();

        foreach($activites as $activite){
            $eleves = \App\Models\Eleve::inRandomOrder()->pluck('id');
            $activite->eleves()->attach($eleves);
        }
    }
}
