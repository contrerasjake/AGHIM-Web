<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
            [
                'name' => "Nigerian Jollof Rice and Chicken",
                'description' => "Nigerian Jollof Rice and Chicken description",
                'price' => "100",
            ],
            [
                'name' => "Burger and Coke",
                'description' => "Burger and Coke description",
                'price' => "50",
            ],
            [
                'name' => "Chicken and Chips",
                'description' => "Chicken and Chips description",
                'price' => "30",
            ],
            [
                'name' => "Ghana Jollof Rice and Water",
                'description' => "Ghana Jollof Rice and Water description",
                'price' => "5",
            ],
        ]);
    }
}
