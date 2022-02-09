<?php

namespace Module\Cart\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Cart\Database\factories\CartFactory;
use Module\Passenger\Entity\Passenger;

class Cart extends Model
{
    use HasFactory;

    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return CartFactory::new();
    }

    public function passenger()
    {
        return $this->hasOne(Passenger::class,'identification_code','passengerId');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}