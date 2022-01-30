<?php

namespace Module\Flight\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
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
            'flight_number' => $this->flight_number,
            'takeoff' => $this->takeoff,
            'landing' => $this->landing,
            'source' => $this->floor,
            'destination' => $this->destination,
            'passengers' => $this->passengers,
            'updated_at' => $this->updated_at,
        ];
    }
}