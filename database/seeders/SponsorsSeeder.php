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
                'CIF' => 'A78923125',
                'logo' => 'movistar.png',
                'address' => 'Ronda de la Comunicación s/n, Distrito C, Edificio Sur 3, 28050 Madrid',
                'principal_page' => true,
            ],
        ]);
    }
}
