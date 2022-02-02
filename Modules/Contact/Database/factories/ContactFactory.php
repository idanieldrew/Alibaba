<?php

namespace Module\Contact\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Airplane\Entity\Airplane;
use Module\Contact\Entity\Contact;

class ContactFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address
        ];
    }
}