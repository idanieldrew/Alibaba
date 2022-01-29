<?php

namespace Module\Panel\tests\Feature\Crud\Question;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Module\Question\Entity\Question;
use Tests\TestCase;

class CrudTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function see_all_questions()
    {
        $firstQuestions = Question::factory()->create();
        $secondQuestions = Question::factory()->create();

        $this->get(route('question.index'))
            ->assertSee($firstQuestions->answer)
            ->assertSee($secondQuestions->question);
    }

    /** @test */
    public function create_question()
    {
        $question = Question::factory()->create();

        $this->post(route('question.store'),$question->attributesToArray());

        $this->assertDatabaseHas('questions', [
            'answer' => $question->answer,
             'question' => $question->question
            ]);
    }
}
