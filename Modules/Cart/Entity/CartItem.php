<?php

namespace Module\Cart\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Cart\Database\factories\CartItemFactory;
use Module\Flight\Entity\Flight;
use Module\Ticket\Entity\Ticket;

class CartItem extends Model
{
    protected $table = 'cartItems';
    use HasFactory;

    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return CartItemFactory::new();
    }

    public function flights()
    {
        return $this->hasMany(Flight::class,'airplanes','flight_number');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
