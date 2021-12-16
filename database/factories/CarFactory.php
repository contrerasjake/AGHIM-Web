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
            'speed' => (string) $this->faker->numberBetween($min = 200, $max = 700),
            'transmission' => $this->faker->randomElement($array = array ('Automatic','Manual')),
            'engine' => $this->faker->randomElement($array = array ('Diesel','Gas')),
            'capacity' => $this->faker->randomElement($array = array ('4','6')),
            'plate_number' => $this->faker->secondaryAddress,
            'rate' => (string) $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
        ];
    }
}
