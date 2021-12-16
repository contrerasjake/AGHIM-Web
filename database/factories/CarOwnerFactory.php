<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarOwnerFactory extends Factory
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
            'address' => $this->faker->address,
            'contact' => $this->faker->e164PhoneNumber
        ];
    }
}
