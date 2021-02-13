<?php

namespace Tipoff\Bookings\Http\Controllers;

use Tipoff\Bookings\Http\Controllers\Controller;
use App\Models\User;
use App\Transformers\CartTransformer;

class CartsController extends Controller
{
    public function show(User $user)
    {
        $cart = $user->cart();

        return fractal($cart, new CartTransformer)
            ->includeCartItems()
            ->respond();
    }
}
