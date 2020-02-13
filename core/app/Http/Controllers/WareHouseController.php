<?php

namespace App\Http\Controllers;
use App\WareHouse;
use Illuminate\Http\Request;

class WareHouseController extends Controller
{
    //
    public function getDistance($id)
    {
    	$ware_house = WareHouse::find($id);
        return $ware_house;
    }
}
