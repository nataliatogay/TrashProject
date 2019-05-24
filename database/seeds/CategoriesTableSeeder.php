<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['title' => 'Laptops', 'slug' => 'laptops'],
            ['title' => 'Desktops', 'slug'  => 'desktops'],
            ['title' => 'Mobile Phones', 'slug' => 'mobile-phones'],
            ['title' => 'Tablets', 'slug' => 'tablets'],
            ['title' => 'TVs', 'slug' => 'tvs'],
            ['title' => 'Digital Cameras', 'slug' => 'digital-cameras',],
            ['title' => 'Appliances', 'slug' => 'appliances'],
        ]);
    }
}
