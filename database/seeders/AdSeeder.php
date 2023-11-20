<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ads = [
            [
                'title' => 'Laptop for Sale',
                'description' => 'Powerful laptop with the latest features',
                'media_url' => 'laptop.jpg',
                'price' => 1200.00,
                'user_id' => 3,
                'category_id' => 1,
                'ad_slot_id' => 1,
                'status' => 'approved',
            ],
            [
                'title' => 'Fashionable Clothing',
                'description' => 'Trendy clothes for all occasions',
                'media_url' => 'clothing.jpg',
                'price' => 50.00,
                'user_id' => 3,
                'category_id' => 2,
                'ad_slot_id' => 2,
                'status' => 'approved',
            ],
            [
                'title' => 'Homemade Furniture',
                'description' => 'Trendy Furniture for NEw Houses',
                'media_url' => 'furniture.jpg',
                'price' => 50.00,
                'user_id' => 3,
                'category_id' => 3,
                'ad_slot_id' => 3,
                'status' => 'approved',
            ],
            [
                'title' => 'Cooking Materials',
                'description' => 'Trendy Cooking for delecious food',
                'media_url' => 'cooking.jpg',
                'price' => 550.00,
                'user_id' => 3,
                'category_id' => 4,
                'ad_slot_id' => 1,
                'status' => 'approved',
            ],
            [
                'title' => ' Sport Tool',
                'description' => 'Trendy Sport tools for amazing training',
                'media_url' => 'cooking.jpg',
                'price' => 90.00,
                'user_id' => 3,
                'category_id' => 5,
                'ad_slot_id' => 1,
                'status' => 'approved',
            ],


            [
                'title' => 'Mobile for Sale',
                'description' => 'Powerful mobile with the latest features',
                'media_url' => 'mobile.jpg',
                'price' => 1000.00,
                'user_id' => 3,
                'category_id' => 1,
                'ad_slot_id' => 1,
                'status' => 'approved',
            ],
            [
                'title' => 'New tshirts',
                'description' => 'Trendy clothes for all occasions',
                'media_url' => 'tshirts.jpg',
                'price' => 50.00,
                'user_id' => 3,
                'category_id' => 2,
                'ad_slot_id' => 2,
                'status' => 'approved',
            ],
            [
                'title' => 'Rest chair',
                'description' => 'Trendy Furniture for NEw Houses',
                'media_url' => 'furniture.jpg',
                'price' => 50.00,
                'user_id' => 3,
                'category_id' => 3,
                'ad_slot_id' => 3,
                'status' => 'approved',
            ],
            [
                'title' => 'Food Holder',
                'description' => 'Food Holder for delecious food',
                'media_url' => 'holder.jpg',
                'price' => 550.00,
                'user_id' => 3,
                'category_id' => 4,
                'ad_slot_id' => 1,
                'status' => 'approved',
            ],
            [
                'title' => 'Sport Ball',
                'description' => 'Trendy Ball for amazing training',
                'media_url' => 'ball.jpg',
                'price' => 90.00,
                'user_id' => 3,
                'category_id' => 5,
                'ad_slot_id' => 1,
                'status' => 'approved',
            ],
            // Add more ads as needed
        ];
        foreach ($ads as $ad) {
            Ad::create($ad);
         }
    }
}
