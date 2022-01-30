<?php

namespace Module\Airplane\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'postal_code' => $this->postal_code,
            'city' => $this->city,
            'address' => $this->address,
            'room_number' => $this->room_number,
            'count' => $this->count,
        ];
    }
}