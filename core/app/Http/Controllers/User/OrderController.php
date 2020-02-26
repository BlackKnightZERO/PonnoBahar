<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Cart;
use Auth;
class OrderController extends Controller
{
    //
    public function order(Request $request)
    {
    	// return $request;
    	$validatedData = $request->validate([
    		'user_id' => 'required',
    		'p_sub_total' => 'required',
    		'shipping_location' => 'required',
    		'address' => 'required',
    		'shipping_cost' => 'required',
    		'ship_to' => 'required',
    		'total' => 'required',
    		'product_id.*' => 'required',
    	    'product_price.*' => 'required',
    	    'product_qty.*'    => 'required',
            'product_atts.*'    => 'required',
    	]);
    	// return $validatedData;
    	$order_id = time() . rand(1,999) . $request->user_id;
        
    	for ( $i=0; $i < sizeof($request->product_id); $i++ ) { 
            // print_r(json_decode($request->product_atts[$i]));
    		$order = new Order();
    		$order->user_id = $request->user_id ;
    		$order->order_u_id = $order_id ;
    		$order->shipping_location_id = $request->shipping_location ;
    		$order->ship_to = $request->ship_to ;
    		$order->shipping_cost = $request->shipping_cost ;
    		$order->order_subtotal = $request->p_sub_total ;
    		$order->order_total = $request->total ;
    		$order->address = $request->address ;

    		$order->product_id = $request->product_id[$i] ;
    		$order->product_price = $request->product_price[$i] ;
    		$order->product_qty = $request->product_qty[$i] ;
            $order->attributes = $request->product_atts[$i] ;

    		$order->save();
    	}
        // exit;
    	Cart::session(Auth::user()->id)->clear();
    	return redirect()->route('user.land');
    }
}
