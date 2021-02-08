<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::create([
            'title'=>'catégorie 1',
            'description'=>'catégorie 1 bien cool',
            'image'=>'1.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 2',
            'description'=>'catégorie 2 bien cool',
            'image'=>'2.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 3',
            'description'=>'catégorie 3 bien cool',
            'image'=>'3.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 4',
            'description'=>'catégorie 4 bien cool',
            'image'=>'4.png',
        ]);
        Category::create([
            'title'=>'catégorie 5',
            'description'=>'catégorie 5 bien cool',
            'image'=>'5.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 6',
            'description'=>'catégorie 6 bien cool',
            'image'=>'6.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 7',
            'description'=>'catégorie 7 bien cool',
            'image'=>'7.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 8',
            'description'=>'catégorie 8 bien cool',
            'image'=>'8.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 9',
            'description'=>'catégorie 9 bien cool',
            'image'=>'9.jpg',
        ]);
        Category::create([
            'title'=>'catégorie 10',
            'description'=>'catégorie 10 bien cool',
            'image'=>'10.jpg',
        ]);
    }
}
