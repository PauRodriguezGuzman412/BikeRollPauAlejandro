<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->insert([
            [
                'nombre' => 'Movistar',
                'CIF' => 'A78923125',
                'logo' => 'sponsorsImg/movistar.png',
                'address' => 'Ronda de la Comunicación s/n, Distrito C, Edificio Sur 3, 28050 Madrid',
                'principal_page' => true,
            ],
            [
                'nombre' => 'Maxxis',
                'CIF' => 'B17527524',
                'logo' => 'sponsorsImg/maxxisLogo.png',
                'address' => 'C/ Pirineus, 9, 17460 Celrà',
                'principal_page' => true,
            ],
            [
                'nombre' => 'Motul',
                'CIF' => 'A58721218',
                'logo' => 'sponsorsImg/motulLogo.png',
                'address' => 'CALLE DIPUTACIO, 303 - P.4, 08009, BARCELONA',
                'principal_page' => true,
            ],
            [
                'nombre' => 'Michelin',
                'CIF' => 'A20003570',
                'logo' => 'sponsorsImg/michelinLogo.png',
                'address' => 'GLORIETA DE BIBENDUM, 1, 47009, VALLADOLID',
                'principal_page' => true,
            ],
            [
                'nombre' => 'Pirelli',
                'CIF' => 'A08958399',
                'logo' => 'sponsorsImg/pirelliLogo.png',
                'address' => 'AVENIDA DE LES CORTS VALENCIANES, 58 - 5, 46015, VALENCIA',
                'principal_page' => true,
            ],
        ]);
    }
}
