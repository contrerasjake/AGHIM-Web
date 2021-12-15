<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_food')->insert([
            [
                'restaurant_id' => "1",
                'food_id' => "1"
            ],
            [
                'restaurant_id' => "1",
                'food_id' => "4"
            ],
            [
                'restaurant_id' => "2",
                'food_id' => "2"
            ],
            [
                'restaurant_id' => "3",
                'food_id' => "3"
            ],
        ]);
    }
}
