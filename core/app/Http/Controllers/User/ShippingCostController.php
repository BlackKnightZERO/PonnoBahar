<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShippingLocation;

class ShippingCostController extends Controller
{
    public function getShippingCost($id)
    {
        $cost = ShippingLocation::find($id);
        return $cost;
    }
}
