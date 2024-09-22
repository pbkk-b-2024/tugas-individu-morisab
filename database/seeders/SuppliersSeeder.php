<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('suppliers')->insert([
                'name' => $faker->unique()->company, // Unique supplier name
                'email' => $faker->unique()->safeEmail, // Unique email
                'phone' => $faker->phoneNumber, // Random phone number
                'company' => $faker->company, // Company name
                'address' => $faker->address, // Supplier address
                'product' => $faker->word, // Product associated with supplier
                'description' => $faker->sentence(6, true), // Random description
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
