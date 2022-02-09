<?php

namespace Module\Passenger\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Module\Cart\Entity\Cart;
use Module\Passenger\Database\factories\PassengerFactory;
use Module\User\Entity\User;

class Passenger extends Model
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
        return PassengerFactory::new();
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'passenger_user','passengerId');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class,'passengerId','identification_code');
    }
}
