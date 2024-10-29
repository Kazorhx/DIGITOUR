<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provincesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('provinces')->insert([
            ['nombre' => 'Arica', 'region_id' => 1],
            ['nombre' => 'Parinacota', 'region_id' => 1],
            ['nombre' => 'Iquique', 'region_id' => 2],
            ['nombre' => 'El Tamarugal', 'region_id' => 2],
            ['nombre' => 'Antofagasta', 'region_id' => 3],
            ['nombre' => 'El Loa', 'region_id' => 3],
            ['nombre' => 'Tocopilla', 'region_id' => 3],
            ['nombre' => 'Chañaral', 'region_id' => 4],
            ['nombre' => 'Copiapó', 'region_id' => 4],
            ['nombre' => 'Huasco', 'region_id' => 4],
            ['nombre' => 'Choapa', 'region_id' => 5],
            ['nombre' => 'Elqui', 'region_id' => 5],
            ['nombre' => 'Limarí', 'region_id' => 5],
            ['nombre' => 'Isla de Pascua', 'region_id' => 6],
            ['nombre' => 'Los Andes', 'region_id' => 6],
            ['nombre' => 'Petorca', 'region_id' => 6],
            ['nombre' => 'Quillota', 'region_id' => 6],
            ['nombre' => 'San Antonio', 'region_id' => 6],
            ['nombre' => 'San Felipe de Aconcagua', 'region_id' => 6],
            ['nombre' => 'Valparaíso', 'region_id' => 6],
            ['nombre' => 'Chacabuco', 'region_id' => 7],
            ['nombre' => 'Cordillera', 'region_id' => 7],
            ['nombre' => 'Maipo', 'region_id' => 7],
            ['nombre' => 'Melipilla', 'region_id' => 7],
            ['nombre' => 'Santiago', 'region_id' => 7],
            ['nombre' => 'Talagante', 'region_id' => 7],
            ['nombre' => 'Cachapoal', 'region_id' => 8],
            ['nombre' => 'Cardenal Caro', 'region_id' => 8],
            ['nombre' => 'Colchagua', 'region_id' => 8],
            ['nombre' => 'Cauquenes', 'region_id' => 9],
            ['nombre' => 'Curicó', 'region_id' => 9],
            ['nombre' => 'Linares', 'region_id' => 9],
            ['nombre' => 'Talca', 'region_id' => 9],
            ['nombre' => 'Arauco', 'region_id' => 10],
            ['nombre' => 'Bio Bío', 'region_id' => 10],
            ['nombre' => 'Concepción', 'region_id' => 10],
            ['nombre' => 'Ñuble', 'region_id' => 10],
            ['nombre' => 'Cautín', 'region_id' => 11],
            ['nombre' => 'Malleco', 'region_id' => 11],
            ['nombre' => 'Valdivia', 'region_id' => 12],
            ['nombre' => 'Ranco', 'region_id' => 12],
            ['nombre' => 'Chiloé', 'region_id' => 13],
            ['nombre' => 'Llanquihue', 'region_id' => 13],
            ['nombre' => 'Osorno', 'region_id' => 13],
            ['nombre' => 'Palena', 'region_id' => 13],
            ['nombre' => 'Aisén', 'region_id' => 14],
            ['nombre' => 'Capitán Prat', 'region_id' => 14],
            ['nombre' => 'Coihaique', 'region_id' => 14],
            ['nombre' => 'General Carrera', 'region_id' => 14],
            ['nombre' => 'Antártica Chilena', 'region_id' => 15],
            ['nombre' => 'Magallanes', 'region_id' => 15],
            ['nombre' => 'Tierra del Fuego', 'region_id' => 15],
            ['nombre' => 'Última Esperanza', 'region_id' => 15],
        ]);
    }
}
