<?php

namespace Module\Airplane\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Airplane\Database\factories\CartFactory;
use Module\User\Entity\User;

class Cart extends Model
{
    use HasFactory,UsesUuid;

    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return CartFactory::new();
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}