<?php

namespace Module\Cart\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
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
            'ticket_id' => $this->ticket_id,
            'cart_id' => $this->cart_id,
            'quantity' => $this->quantity,
            'count' => $this->count,
            'price' => $this->price,
            'total' => $this->total,
            'active' => $this->active,
        ];
    }
}