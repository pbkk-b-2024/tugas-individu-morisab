<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        // Assuming you have at least 100 purchases in the purchases table
        $purchaseIds = DB::table('purchases')->pluck('id')->toArray(); // Get all purchase IDs

        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'purchase_id' => $faker->randomElement($purchaseIds), // Randomly select a valid purchase_id
                'price' => $faker->randomFloat(2, 100, 10000), // Random price between 100 and 10000
                'discount' => $faker->randomFloat(2, 0, 5000), // Random discount between 0 and 5000
                'description' => $faker->sentence(6, true), // Random description
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
