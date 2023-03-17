<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            CoursesSeeder::class,
            InsurancesSeeder::class,
            RunnersSeeder::class,
            SponsorsSeeder::class,
        ]);
    }
}
