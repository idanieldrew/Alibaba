<?php

namespace Module\Airplane\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class AirplaneResource extends JsonResource
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
            'details' => $this->details,
            'code' => $this->code,
            'floor' => $this->floor,
        ];
    }
}