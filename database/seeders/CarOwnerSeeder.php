<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CarOwner::factory(5)->create();
    }
}
