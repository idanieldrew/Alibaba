<?php

namespace Module\Cart\Http\Controller\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Module\Cart\Http\Resources\v1\CartItemResource;
use Module\Cart\Http\Resources\v1\CartResource;

class CartController extends Controller
{
    /*
     *  Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        // create cart
        $cart = auth()->user()->cart()->create([
            'total' => 100000,
            'status' => false
        ]);

        $cartItems = $cart->cartItems()->create([
            'ticket_id' => $request->ticket,
            'count' =>  1,
            'price' => 100000,
            'total' => 100000,
            'active' => false
        ]);

        return [
          'cart' => new CartResource($cart),
          'cartItems' => new CartItemResource($cartItems)
        ];
    }
}