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

    public function users()
    {
        return $this->belongsToMany(User::class,'flights','identification_code');
    }
}
