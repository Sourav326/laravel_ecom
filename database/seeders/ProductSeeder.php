<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['title' => 'Nordic Chair','image'=>'assets/images/product-3.png','price'=>40,'stock_available'=>100,'in_stock'=>'yes','status'=>'active'],
            ['title' => 'Nordic Chair','image'=>'assets/images/product-2.png','price'=>20,'stock_available'=>300,'in_stock'=>'yes','status'=>'active'],
            ['title' => 'Nordic Chair','image'=>'assets/images/product-1.png','price'=>100,'stock_available'=>570,'in_stock'=>'yes','status'=>'active'],
            ['title' => 'Nordic Chair','image'=>'assets/images/product-3.png','price'=>70,'stock_available'=>90,'in_stock'=>'yes','status'=>'active'],
        ];
        foreach($products as $product){

            Product::create([
                'title'=>$product['title'],
                'image'=>$product['image'],
                'price'=>$product['price'],
                'stock_available'=>$product['stock_available'],
                'in_stock'=>$product['in_stock'],
                'status'=>$product['status'],
                
            ]);
        }
    }
}
