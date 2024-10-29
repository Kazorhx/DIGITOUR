<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class voucherstatusesSeeder extends Seeder
{

    public function run(): void
    {

        DB::table('voucher_statuses')->insert([
            ['descripcion' => 'E'], //Emitido
            ['descripcion' => 'V'], //Validado
            ['descripcion' => 'C'], //Caducado
        ]);

    }
}
