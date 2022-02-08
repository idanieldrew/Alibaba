<?php

namespace Module\Ticket\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Ticket\Database\factories\TicketFactory;

class Ticket extends Model
{
    use HasFactory;

    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return TicketFactory::new();
    }
}