<?php

namespace Module\Question\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Module\Question\Database\factories\QuestionFactory;

class Question extends Model
{
    use HasApiTokens, HasFactory, Notifiable,UsesUuid;

    protected $guarded = [];
    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return QuestionFactory::new();
    }
}
