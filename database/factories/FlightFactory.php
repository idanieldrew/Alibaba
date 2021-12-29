<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'flight_number' => $this->faker->numberBetween('10000','99999'),
            $landing = 'landing' => $this->faker->time(),
            'takeoff' => $this->faker->time("H:i:s",'$landing'),
            'source' => $this->faker->sentence,
            'destination' => $this->faker->sentence,
            'passengers' => $this->faker->numberBetween(50,500)
        ];
    }
}
