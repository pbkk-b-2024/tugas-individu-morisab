<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance
        $images = [
            'product.jpg',
            'product1.jpg',
            'product10.jpg',
            'product11.jpg',
            'product12.jpg',
            'product13.jpg',
            'product14.jpg',
            'product2.jpg',
            'product3.jpg',
            'product4.jpg',
            'product5.jpg',
            'product6.jpg',
        ];
        // Make sure to adjust the numbers based on how many categories and suppliers you have seeded
        $categoryCount = DB::table('categories')->count(); // Get the count of categories
        $supplierCount = DB::table('suppliers')->count(); // Get the count of suppliers

        for ($i = 0; $i < 100; $i++) {
            DB::table('purchases')->insert([
                'name' => $faker->unique()->word, // Unique name for the purchase
                'category_id' => $faker->numberBetween(1, $categoryCount), // Random category ID
                'supplier_id' => $faker->numberBetween(1, $supplierCount), // Random supplier ID
                'price' => $faker->randomFloat(2, 100, 10000), // Random price between 100 and 10000
                'quantity' => $faker->numberBetween(1, 100), // Random quantity between 1 and 100
                'expiry_date' => $faker->dateTimeBetween('now', '+2 years')->format('Y-m-d'), // Random expiry date within the next 2 years
                'image' => $images[array_rand($images)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
