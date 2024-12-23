<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            RegionsSeeder::class,
            ProvincesSeeder::class,
            CommunesSeeder::class,
            RolesSeeder::class,
            UserstatusesSeeder::class,
            VoucherstatusesSeeder::class,
            categoriesSeeder::class
        ]);
    }
}
