<?php

namespace Module\Question\Repositories;

use Illuminate\Support\Facades\Redis;
use Module\Question\Entity\Question;

class QuestionRepository
{
    public function index()
    {
        // first check redis
        $questions = Redis::get('questions.all');

        if ($questions === null){
            $questions = Question::all();
            Redis::setex('questions.all',60 * 60 * 3,$questions);
        }

        return $questions;
    }
}