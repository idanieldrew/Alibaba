<?php

namespace Module\Airplane\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Airplane\Entity\CartItem;

class CartItemFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = CartItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'count' => $count = $this->faker->numberBetween(1,10),
            'price' => $price = $this->faker->buildingNumber(),
            'total' => $count * $price,
            'active' => $this->faker->boolean
        ];
    }
}