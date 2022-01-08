<?php

namespace Module\Passenger\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Module\Passenger\Entity\Passenger;

class PassengerFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = Passenger::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->name,
            'lastName' => $this->faker->lastName,
            'gender' => $this->faker->boolean,
            'identification_code' => $this->faker->numberBetween(100000000,999999999),
            'birthday' => $this->faker->date()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
