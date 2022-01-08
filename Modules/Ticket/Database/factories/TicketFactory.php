<?php

namespace Module\Ticket\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Ticket\Entity\Ticket;

class TicketFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'time' =>$this->faker->time()
        ];
    }
}