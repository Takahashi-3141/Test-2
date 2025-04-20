<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'キウイ', 'price' => 800, 'image' => 'kiwi.jpg'],
            ['name' => 'ストロベリー', 'price' => 1200, 'image' => 'strawberry.jpg'],
            ['name' => 'オレンジ', 'price' => 850, 'image' => 'orange.jpg'],
            ['name' => 'スイカ', 'price' => 700, 'image' => 'watermelon.jpg'],
            ['name' => 'ピーチ', 'price' => 1000, 'image' => 'peach.jpg'],
            ['name' => 'シャインマスカット', 'price' => 1400, 'image' => 'muscat.jpg'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
