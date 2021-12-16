<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rental_date' => $this->faker->date($format = 'M-d-Y', $max = 'now'),
            'rental_time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'return_date' => $this->faker->date($format = 'M-d-Y', $max = 'now')
        ];
    }
}
