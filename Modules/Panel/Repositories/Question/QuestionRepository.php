<?php

namespace Module\Panel\Repositories\Question;

use Module\Question\Entity\Question;

class QuestionRepository
{
    public function Store($request)
    {
        $question = Question::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return $question;
    }
}