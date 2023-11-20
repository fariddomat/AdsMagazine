<?php

namespace Database\Seeders;

use App\Models\AdSlot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adSlots = [
            ['name' => 'Premium', 'description' => 'Top-tier ad placement', 'price' => 50.00, 'duration' => 30],
            ['name' => 'Standard', 'description' => 'Regular ad placement', 'price' => 30.00, 'duration' => 15],
            ['name' => 'Basic', 'description' => 'Entry-level ad placement', 'price' => 20.00, 'duration' => 7],
        ];

        foreach ($adSlots as $adSlot) {
            AdSlot::create($adSlot);
        }
    }
}
