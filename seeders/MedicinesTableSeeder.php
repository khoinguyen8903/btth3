<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->word, // Tên thuốc
                'brand' => $faker->company, // Thương hiệu (có thể null)
                'dosage' => $faker->randomElement(['250mg', '500mg', '1g']), // Liều dùng
                'form' => $faker->randomElement(['tablet', 'syrup', 'capsule', 'injection']), // Dạng thuốc
                'price' => $faker->randomFloat(2, 10, 1000), // Giá
                'stock' => $faker->numberBetween(0, 500), // Tồn kho
                'created_at' => now(), // Thời gian tạo
                'updated_at' => now(), // Thời gian cập nhật
            ]);
        }
    }
}
