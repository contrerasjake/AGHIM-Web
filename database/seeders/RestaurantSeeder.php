<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'name' => "Jabi",
            ],
            [
                'name' => "Wacdo",
            ],
            [
                'name' => "Winde",
            ],
            [
                'name' => "Mam Inasal",
            ],
        ]);
    }
}
