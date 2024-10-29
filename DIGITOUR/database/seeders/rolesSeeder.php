<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('roles')->insert([
            ['descripcion' => 'Administrador'],
            ['descripcion' => 'Suscriptor'],
            ['descripcion' => 'Súper Usuario'],
        ]);
    }
}
