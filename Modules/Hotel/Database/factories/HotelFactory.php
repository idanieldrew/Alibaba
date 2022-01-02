<?php

namespace Module\Hotel\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Module\Hotel\Entity\Hotel;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

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