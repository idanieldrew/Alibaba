<?php

namespace Module\Hotel\Observers;

use Illuminate\Support\Str;
use Module\Hotel\Entity\Hotel;

class HotelObserver
{
    /**
     * Handle the Category "creating" event.
     *
     * @param  \Module\Hotel\Entity\Hotel;  $hotel
     * @return void
     */
    public function creating(Hotel $hotel)
    {
        $hotel->slug = Str::slug($hotel->name);
    }
}