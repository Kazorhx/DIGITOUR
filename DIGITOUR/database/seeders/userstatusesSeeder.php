<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userstatusesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('user_statuses')->insert([
            ['descripcion' => 'A'], //Habilitado
            ['descripcion' => 'I'], //Inhabilitado
        ]);
    }
}
