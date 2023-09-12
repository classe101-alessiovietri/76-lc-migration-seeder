<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\House;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        House::truncate();

        for ($i = 0; $i < 10; $i++) {
            $house = new House();
            $house->title = fake()->words(3, true);
            $house->price = fake()->randomFloat(2, 1000, 999999999);
            $house->built_year = fake()->year();
            $house->square_meters = fake()->randomNumber(2);
            $house->furnished = rand(0, 1);
            $house->description = null;
            $house->address = fake()->address();
            $house->save();
        }
    }
}
