<?php

namespace Module\Contact\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Contact\Database\factories\ContactFactory;

class Contact extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ContactFactory::new();
    }

}
