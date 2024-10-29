<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class regionsSeeder extends Seeder
{

    public function run(): void
    {

        DB::table('regions')->insert([
            ['nombre' => 'Arica y Parinacota'],
            ['nombre' => 'Tarapacá'],
            ['nombre' => 'Antofagasta'],
            ['nombre' => 'Atacama'],
            ['nombre' => 'Coquimbo'],
            ['nombre' => 'Valparaíso'],
            ['nombre' => 'Metropolitana de Santiago'],
            ['nombre' => 'O’Higgins'],
            ['nombre' => 'Maule'],
            ['nombre' => 'Biobío'],
            ['nombre' => 'La Araucanía'],
            ['nombre' => 'Los Ríos'],
            ['nombre' => 'Los Lagos'],
            ['nombre' => 'Aysén del General Carlos Ibáñez del Campo'],
            ['nombre' => 'Magallanes y de la Antártica Chilena'],
        ]);
    }
}
