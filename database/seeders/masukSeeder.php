<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        DB::table('masuks')->insert([
            'kd_masuk' => 'M001',
            'tgl_masuk' => $faker->date(),
            'kd_supplier' => 'S001',
            'total_masuk' => 10,
        ]);

        DB::table('masuks')->insert([
            'kd_masuk' => 'M002',
            'tgl_masuk' => $faker->date(),
            'kd_supplier' => 'S002',
            'total_masuk' => 10,
        ]);

        DB::table('masuks')->insert([
            'kd_masuk' => 'M003',
            'tgl_masuk' => $faker->date(),
            'kd_supplier' => 'S003',
            'total_masuk' => 10,
        ]);
    }
}
