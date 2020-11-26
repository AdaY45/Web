<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 20; $i++) { 
            \Illuminate\Support\Facades\DB::table('products')->insert([
                'title' => 'Product',
                'content' => 'content',
                'price' => rand(200, 2000),
                'in_stock' => 1,
                'img' => 'product_'.$i,
            ]);
        }
    }
}
