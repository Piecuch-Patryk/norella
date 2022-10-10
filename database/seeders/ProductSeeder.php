<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(50)->create()->each(function(\App\Models\Product $product) {
            $product->categories()->attach([
                rand(1, 2),
                rand(3, 5),
            ]);
        });
    }
}
