<?php

// database/seeders/ProductsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'IPHONE 13',
            'image' => 'cart-item1.jpg',
            'price' => 880
        ]);
        Product::create([
            'name' => 'IPHONE X',
            'image' => 'insta-item1.jpg',
            'price' => 650
        ]);
       
        Product::create([
            'name' => 'IPHONE 12 PRO',
            'image' => 'insta-item3.jpg',
            'price' => 850
        ]);


        
        Product::create([
            'name' => 'IPHONE 12',
            'image' => 'product-item2.jpg',
            'price' => 800
        ]);
    }
}
