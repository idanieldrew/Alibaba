<?php

namespace Module\Question\Repositories;

use Illuminate\Support\Facades\Redis;
use Module\Question\Entity\Question;
use Module\Question\Http\Resources\v1\QuestionCollection;

class QuestionRepository
{
    public function index()
    {
        // first check redis
        $questions = Redis::get('questions.all');

        // second check main db
        if ($questions === null){

            $questions = Question::all();

            // set 12 hour
            Redis::setex('questions.all',60 * 60 * 3,$questions);
        }

        $questions = json_decode($questions);

        return new QuestionCollection($questions);
    }
}