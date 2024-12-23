<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class InicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('objetivos')->insert([
            'objetivo1' => $faker->text,
            'objetivo2' => $faker->text,
            'objetivo3' => $faker->text
        ]);
        
        $faker = Faker::create();
        DB::table('misionvisions')->insert([
            'mision' => $faker->text,
            'vision' => $faker->text
        ]);
    }
}
