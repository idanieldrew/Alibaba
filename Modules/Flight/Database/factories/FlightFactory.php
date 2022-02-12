<?php

namespace Module\Flight\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Flight\Entity\Flight;

class FlightFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'flight_number' => $this->faker->numberBetween(10000,99999),
            'landing' => $this->faker->time(),
            'takeoff' => $this->faker->time(),
            'source' => $this->faker->country,
            'destination' => $this->faker->country,
            'passengers' => $this->faker->numberBetween(50,500),
            'price' => $this->faker->numberBetween(500000,10000000)
        ];
    }
}