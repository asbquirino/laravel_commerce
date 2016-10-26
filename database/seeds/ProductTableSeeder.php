<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Product::create([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 99999.99),
                'featured' => $faker->numberBetween($min = 0, $max = 1),
                'recommended' => $faker->numberBetween($min = 0, $max = 1),
                'category_id' => $faker->numberBetween(1, 15)
            ]);
        }

    }

}