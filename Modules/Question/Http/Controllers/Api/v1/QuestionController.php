<?php

namespace Module\Question\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Module\Question\Repositories\QuestionRepository;

class QuestionController extends Controller
{
    public function index(QuestionRepository $repository)
    {
        return $repository->index();
    }
}