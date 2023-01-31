<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsurancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insurances')->insert([
            [
                'CIF' => 'A08055741',
                'name' => 'MAPFRE, SA',
                'address' => 'CARRETERA POZUELO DE ALARCON, 52, 28222, MAJADAHONDA',
                'price' => 75,
            ],
            [
                'CIF' => 'A28007748',
                'name' => 'ALLIANZ',
                'address' => 'C/ Ramírez de Arellano, 35, 28043, MADRID',
                'price' => 40,
            ],
            [
                'CIF' => 'A28007268',
                'name' => 'GENERALI, SA',
                'address' => 'C/ Orense, 2, 28020, Madrid',
                'price' => 50,
            ],
            [
                'CIF' => 'A60917978',
                'name' => 'AXA',
                'address' => 'CALLE EMILIO VARGAS, 6, EDIFICIO AXA, 28043, MADRID',
                'price' => 90,
            ]
        ]);
    }
}
