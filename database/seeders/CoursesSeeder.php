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
        ]);
    }
}
