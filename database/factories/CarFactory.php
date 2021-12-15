<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'model_year' => $this->faker->year($max='now'),
            'brand' => $this->faker->company,
            'color' => $this->faker->colorName,
            'capacity' => $this->faker->numberBetween($min = 4, $max = 20),
            'plate_number' => $this->faker->secondaryAddress,
            'rate' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
        ];
    }
}
