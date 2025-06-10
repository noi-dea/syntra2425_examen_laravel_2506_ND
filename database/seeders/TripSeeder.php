<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trips = [[
            'title' => 'musea marathon',
            'region' => 'west',
            'start_date' => '2026-03-14',
            'duration_days' => 2,
            'price_per_person' => 42
        ],[
            'title' => 'Mountaineering',
            'region' => 'east',
            'start_date' => '2025-09-13',
            'duration_days' => 5,
            'price_per_person' => 156
        ],[
            'title' => 'skeeing',
            'region' => 'north',
            'start_date' => '2025-08-05',
            'duration_days' => 3,
            'price_per_person' => 93 
        ],[
            'title' => 'Historical city tour',
            'region' => 'central',
            'start_date' => '2025-10-27',
            'duration_days' => 1,
            'price_per_person' => 30 
        ],[
            'title' => 'snowboarding',
            'region' => 'north',
            'start_date' => '2026-07-15',
            'duration_days' => 2,
            'price_per_person' => 56 
        ],[
            'title' => 'New Years Hike',
            'region' => 'west',
            'start_date' => '2026-01-01',
            'duration_days' => 3,
            'price_per_person' => 78
        ]];

        foreach($trips as $trip){
            Trip::factory()->create($trip);
        }
    }
}
