<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        
        DB::table('projects')->insert([
            'title'       => $faker->text(),
            'img-path'       => $faker->text(),
            'description' => $faker->text(),
            'active'        => true,
        ]);
    }
}


// 4.3.2 SEEDER