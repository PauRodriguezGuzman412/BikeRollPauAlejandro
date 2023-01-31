<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'description' => 'Sant Cugat - Vallter 2000 Experience',
                'slope' => 3400,
                'map_image' => '',
                'maxim_participants' => 25,
                'km' => 180,
                'start_date' => '2021-04-01',
                'start_point' => '41.473782,2.084934999999973',
                'promotion_banner' => 'resources/img/santCugat.png',
                'sponsoring_money' => 500,
                'course_duration' => '00:00:00',
                'active' => 1,
            ],
            [
                'description' => 'Desafío 132 - Cicloturista',
                'slope' => 1500,
                'map_image' => '',
                'maxim_participants' => 50,
                'km' => 132,
                'start_date' => '2021-03-26',
                'start_point' => '42.03039,-1.653715',
                'promotion_banner' => 'resources/img/desafio132.png',
                'sponsoring_money' => 1000,
                'course_duration' => '00:00:00',
                'active' => 1,
            ],
            [
                'description' => 'Brevet 400 km. Linares - LAGUNAS DE RUIDERA',
                'slope' => 2936,
                'map_image' => '',
                'maxim_participants' => 50,
                'km' => 400,
                'start_date' => '2021-04-08',
                'start_point' => '38.09362,-3.635844',
                'promotion_banner' => 'resources/img/brevet400km.png',
                'sponsoring_money' => 2500,
                'course_duration' => '00:00:00',
                'active' => 1,
            ],
            [
                'description' => 'Mallorca Cycling Xperience Pirenaica',
                'slope' => 7250,
                'map_image' => '',
                'maxim_participants' => 50,
                'km' => 740,
                'start_date' => '2021-04-09',
                'start_point' => '39.808032,3.116647',
                'promotion_banner' => 'resources/img/xperiencePirenaica.png',
                'sponsoring_money' => 3500,
                'course_duration' => '00:00:00',
                'active' => 1,
            ],
            [
                'description' => 'Marcha Ciclodeportiva La Gamba',
                'slope' => 2630,
                'map_image' => '',
                'maxim_participants' => 500,
                'km' => 139,
                'start_date' => '2021-04-23',
                'start_point' => '38.8397598,0.0977513',
                'promotion_banner' => 'resources/img/laGamba.png',
                'sponsoring_money' => 750,
                'course_duration' => '00:00:00',
                'active' => 1,
            ]
        ]);
    }
}
