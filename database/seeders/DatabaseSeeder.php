<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FoodSeeder::class);
        $this->call(CarOwnerSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(RestaurantFoodSeeder::class);
    }
}
