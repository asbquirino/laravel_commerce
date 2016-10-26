<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->truncate();

        Category::create([
            'name' => 'Category 1',
            'description' => 'Description Category 1'
        ]);

        Category::create([
            'name' => 'Category 2',
            'description' => 'Description Category 2'
        ]);

    }

}