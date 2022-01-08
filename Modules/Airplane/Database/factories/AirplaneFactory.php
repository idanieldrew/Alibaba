<?php

namespace Module\Airplane\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Airplane\Entity\Airplane;

class AirplaneFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = Airplane::class;

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