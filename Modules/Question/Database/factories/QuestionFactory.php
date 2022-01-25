<?php

namespace Module\Question\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Question\Entity\Question;

class QuestionFactory extends Factory
{
    /**
     * The name of the factories's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        ];
    }

}
