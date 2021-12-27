<?php

namespace App\Models;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory,UsesUuid;

    public function airplane()
    {
        return $this->belongsTo(Airplane::class,'flights','code');
    }
}
