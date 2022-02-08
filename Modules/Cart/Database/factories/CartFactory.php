<?php

namespace Module\Airplane\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Airplane\Entity\Cart;

class CartFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = Cart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total' => $this->faker->numberBetween(1000,9999),
            'status' => $this->faker->boolean
        ];
    }
}