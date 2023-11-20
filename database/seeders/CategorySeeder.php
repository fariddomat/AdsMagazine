<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            ['name' => 'Electronics', 'img' => 'electronics.jpg'],
            ['name' => 'Clothing', 'img' => 'clothing.jpg'],
            ['name' => 'Furniture', 'img' => 'furniture.jpg'],
            ['name' => 'Cooking', 'img' => 'cooking.jpg'],
            ['name' => 'Sport', 'img' => 'sport.jpg'],

        ];

        foreach ($categories as $category) {
           Category::create($category);
        }
    }
}
