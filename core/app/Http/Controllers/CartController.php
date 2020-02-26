<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting;
use App\WebsiteSetting;
use App\Category;
use App\SubCategory;
use App\Attribute;
use App\Product;
use App\ShippingLocation;
use Cart;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        // return $request;
    	$validatedData = $request->validate([
    		'productID' => 'required',
    		'numProduct' => 'required',
            'checkboxarr.*' => 'required',
    	]);

    	$Product = Product::find($request->productID);
    	$Category = Category::find($Product->category_id);
    	$SubCategory = SubCategory::find($Product->sub_category_id);

    	$rowId = rand(10,100); // generate a unique() row ID
    	$userId = 100; // the user ID to bind the cart contents
    	// Cart::add($rowId, $Product->name, $Product->present_price, $request->numProduct, array());
    	Cart::session(100)->add(array(
    	    'id' => $request->productID, 
    	    'name' => $Product->name,
    	    'price' => $Product->present_price,
    	    'quantity' => $request->numProduct,
    	    'attributes' => array($request->checkboxarr),
    	    'associatedModel' => $Product
    	));
    	$cart_badge = Cart::session(100)->getContent()->count();
        // return $cart_badge = Cart::session(100)->getContent();
		return back()->with('cart_badge',$cart_badge);
    }

    public function viewCart()
    {
    	// Cart::session(100)->clear();
    	return Cart::session(100)->getContent();
    }
    public function clearCart()
    {
    	Cart::session(100)->clear();
    	return back();
    }

    public function allInCart()
    {
    	$cart_badge = Cart::session(100)->getContent()->count();
        $cart_items = Cart::session(100)->getContent();
        $sub_total = Cart::session(100)->getSubTotal();
        $total = Cart::session(100)->getTotal();
        $g_settings = GeneralSetting::find(1);
    	$w_settings = WebsiteSetting::find(1);
    	$categories = Category::all();
        $s_location = ShippingLocation::all();
    	return view('shoppingcart',['g_settings' => $g_settings, 
    								'w_settings' => $w_settings ,
    								'cart_badge'=>$cart_badge, 
    								'cart_items'=>$cart_items, 
    								'sub_total' =>$sub_total,
    								'categories' => $categories,
    								'total'=>$total,
                                    's_location' => $s_location,
    				]);
    }

    public function updateCart(Request $request)
    {
        // return $request;
    	$validatedData = $this->validate($request, [
    				'productID' => 'required|array',
    				'productPrice' => 'required|array',
    				'numProduct' => 'required|array',
		    	    'productID.*' => 'required',
		    	    'productPrice.*' => 'required',
		    	    'numProduct.*'    => 'required',
    	]);
    	for ( $i=0; $i < sizeof($request->productID); $i++ ) { 
    		$old_qty = 0;
            $new_qty = 0;
    		$old_qty = Cart::session(100)->get($request->productID[$i])->quantity;
    		$new_qty = $request->numProduct[$i] - $old_qty;
    		if ( $new_qty == -1*($old_qty) )
    		{
    			Cart::session(100)->remove($request->productID[$i]);
    		}
    		else
    		{
    			Cart::session(100)->update($request->productID[$i], array(
	  					'quantity' => $new_qty ,
					));
    		}

    	}
    	return back();
    }

}
