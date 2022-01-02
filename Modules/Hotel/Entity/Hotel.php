<?php

namespace Module\Hotel\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Hotel\Database\factories\HotelFactory;

class Hotel extends Model
{
    use HasFactory,UsesUuid;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return HotelFactory::new();
    }
}
