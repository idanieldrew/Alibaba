<?php

namespace Module\Panel\tests\Feature\Crud\Question;

use Module\Question\Entity\Question;
use Tests\TestCase;

class CrudTest extends TestCase
{
    /** @test */
    public function see_all_questions()
    {
        $questions = Question::factory()->create();

        $this->get(route('question.index'))
            ->assertSee($questions->answer);
    }
}
