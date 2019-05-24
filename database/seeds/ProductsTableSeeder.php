<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops
        for ($i = 1; $i <= 15; $i++) {
            Product::create([
                'title' => 'Laptop '.$i, 
                'slug' => 'laptop-'.$i,       
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'img_path' => 'images/products/laptop-'.$i.'.jpg',
                'quantity' => rand(20, 300),
                'category_id' => 1
            ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'title' => 'Desktop ' . $i,
                'slug' => 'desktop-'.$i,
                'price' => rand(249999, 449999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'img_path' => 'images/products/desktop-'.$i.'.jpg',
                'quantity' => rand(20, 300),
                'category_id' => 2
            ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'title' => 'Phone ' . $i,
                'slug' => 'phone-'.$i,
                'price' => rand(79999, 149999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'img_path' => 'images/products/phone-'.$i.'.jpg',
                'quantity' => rand(20, 300),
                'category_id' => 3
            ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'title' => 'Tablet ' . $i,
                'slug' => 'tablet-'.$i,
                'price' => rand(49999, 149999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'img_path' => 'images/products/tablet-'.$i.'.jpg',
                'quantity' => rand(20, 300),
                'category_id' => 4
            ]);
        }

        Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);
    }
}
