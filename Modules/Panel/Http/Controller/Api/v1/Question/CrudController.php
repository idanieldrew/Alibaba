<?php

namespace Module\Panel\Http\Controller\Api\v1\Question;

use Illuminate\Http\Request;
use Module\Panel\Repositories\Question\QuestionRepository;
use Module\Question\Entity\Question;

class CrudController
{
    public function index()
    {
        $questions = Question::all();

        return $questions;
    }

    public function store(Request $request,QuestionRepository $repository)
    {
        $repository->Store($request);
    }
}