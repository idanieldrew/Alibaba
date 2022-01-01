<?php

namespace Module\Airplane\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AirplaneFactory extends Factory
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
            'details' => $this->faker->paragraph(2),
            'code' => $this->faker->numberBetween('1000','9999'),
            'floor' => $this->faker->boolean
        ];
    }
}