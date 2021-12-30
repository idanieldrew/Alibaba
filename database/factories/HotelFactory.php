<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker;
        return [
            'name' => $name = $faker->name,
            'slug' => Str::slug($name),
            'postal_code' => $faker->numberBetween(1000000,999999999),
            'city' => $faker->country,
            'address' => $faker->address,
            'room_number' => $faker->numberBetween(1,300),
            'count' => $faker->numberBetween('1,10')
        ];
    }
}
