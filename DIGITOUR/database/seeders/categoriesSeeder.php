<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('categories')->insert([
            ['descripcion' => 'Hoteleria'],
            ['descripcion' => 'Gastronomia'],
            ['descripcion' => 'Actividades'],
            ['descripcion' => 'Artesanias']
        ]);
    }
}
