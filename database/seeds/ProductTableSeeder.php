<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->truncate();

        $faker = Faker::create();

        foreach (range(1, 40) as $i) {

            Category::create([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'price' => $faker->sentence(),
                'featured' => $faker->boolean(),
                'recommended' => $faker->boolean()
            ]);

        }

    }

}