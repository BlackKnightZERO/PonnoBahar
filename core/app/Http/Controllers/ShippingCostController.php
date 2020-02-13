<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingLocation;

class ShippingCostController extends Controller
{
    public function getShippingCost($id)
    {
        $cost = ShippingLocation::find($id);
        return $cost;
    }
}
