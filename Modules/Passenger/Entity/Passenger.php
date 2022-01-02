<?php

namespace Module\Passenger\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Module\Passenger\Database\factories\PassengerFactory;

class Passenger extends Model
{
    use HasApiTokens, HasFactory, Notifiable,UsesUuid;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return PassengerFactory::new();
    }
}
