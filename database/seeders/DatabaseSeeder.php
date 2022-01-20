<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //  \App\Models\User::factory(10)->create();

       //  \App\Models\Product::factory(20)->create();

        //Product::factory(30)->for(Category::factory(5)->create())->create();

        \App\Models\Category::factory(5)->create();
        \App\Models\Product::factory(20)->create();
    }
}
