<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'thumbnail' => $faker->imageUrl(),
                'author' => $faker->name,
                'publisher' => $faker->company,
                'publication' => $faker->date,
                'price' => $faker->randomFloat(2, 1, 1000),
                'quantity' => $faker->numberBetween(1, 1000),
                'cate_id' => $faker->numberBetween(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
