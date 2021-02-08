<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Product::create([
            'category_id'=>1,
            'title'=>'produit 1',
            'price'=>100,
            'description'=>'produit 1 bien cool',
            'image'=>'1.jpg',
        ]);
        Product::create([
            'category_id'=>2,
            'title'=>'produit 2',
            'price'=>500,
            'description'=>'produit 2 bien cool',
            'image'=>'2.jpg',
        ]);
        Product::create([
            'category_id'=>3,
            'title'=>'produit 3',
            'price'=>500,
            'description'=>'produit 3 bien cool',
            'image'=>'3.jpg',
        ]);
        Product::create([
            'category_id'=>4,
            'title'=>'produit 4',
            'price'=>200,
            'description'=>'produit 4 bien cool',
            'image'=>'4.png',
        ]);
        Product::create([
            'category_id'=>5,
            'title'=>'produit 5',
            'price'=>300,
            'description'=>'produit 5 bien cool',
            'image'=>'5.jpg',
        ]);
        Product::create([
            'category_id'=>6,
            'title'=>'produit 6',
            'price'=>700,
            'description'=>'produit 1 bien cool',
            'image'=>'6.jpg',
        ]);
        Product::create([
            'category_id'=>7,
            'title'=>'produit 7',
            'price'=>800,
            'description'=>'produit 7 bien cool',
            'image'=>'7.jpg',
        ]);
        Product::create([
            'category_id'=>10,
            'title'=>'produit 8',
            'price'=>400,
            'description'=>'produit 8 bien cool',
            'image'=>'8.jpg',
        ]);
        Product::create([
            'category_id'=>5,
            'title'=>'produit 9',
            'price'=>500,
            'description'=>'produit 9 bien cool',
            'image'=>'9.jpg',
        ]);
        Product::create([
            'category_id'=>4,
            'title'=>'produit 8',
            'price'=>1200,
            'description'=>'produit 10 bien cool',
            'image'=>'10.jpg',
        ]);
        Product::create([
            'category_id'=>6,
            'title'=>'produit 11',
            'price'=>400,
            'description'=>'produit 11 bien cool',
            'image'=>'11.jpg',
        ]);
        Product::create([
            'category_id'=>3,
            'title'=>'produit 12',
            'price'=>5000,
            'description'=>'produit 12 bien cool',
            'image'=>'12.jpg',
        ]);
        Product::create([
            'category_id'=>1,
            'title'=>'produit 13',
            'price'=>150,
            'description'=>'produit 13 bien cool',
            'image'=>'13.jpg',
        ]);
        Product::create([
            'category_id'=>2,
            'title'=>'produit 14',
            'price'=>950,
            'description'=>'produit 14 bien cool',
            'image'=>'14.jpg',
        ]);
    }
}
