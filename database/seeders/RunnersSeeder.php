<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RunnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('runners')->insert([
            [
                'dni' => '51066615Z',
                'name' => 'Alberto',
                'surname' => 'Contador',
                'address' => 'Pl. Virgen Blanca 3, 08740, Sant Andreu De La Barca',
                'date_of_birth' => '1982-12-06',
                'federated' => 'PRO',
                'federated_num' => '54862',
            ],
            [
                'dni' => '03516936Y',
                'name' => 'Alejandro',
                'surname' => 'Valverde',
                'address' => 'C/ Pablo Iglesias 4, 26350, La Rioja',
                'date_of_birth' => '1984-04-24',
                'federated' => 'PRO',
                'federated_num' => '62985',
            ],
            [
                'dni' => '79665656G',
                'name' => 'Federico',
                'surname' => 'Rodríguez',
                'address' => 'C/ Andalucía 57, 04560, Almería',
                'date_of_birth' => '1972-02-15',
                'federated' => 'OPEN',
                'federated_num' => NULL,
            ],
        ]);

    }
}
