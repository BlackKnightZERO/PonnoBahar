<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\GeneralSetting;
use App\WebsiteSetting;
use App\Category;
use App\SubCategory;
use App\Attribute;
use App\Product;
use Cart;
use App\Http\Controllers\Controller;
use Auth;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        // return Auth::user()->id;
    	$validatedData = $request->validate([
    		'productID' => 'required',
    		'numProduct' => 'required',
    	]);
        // return $validatedData;
    	$Product = Product::find($request->productID);
    	$Category = Category::find($Product->category_id);
    	$SubCategory = SubCategory::find($Product->sub_category_id);

    	$rowId = rand(10,100); // generate a unique() row ID
    	// $userId = 100; // the user ID to bind the cart contents
    	Cart::session(Auth::user()->id)->add(array(
    	    'id' => $request->productID, 
    	    'name' => $Product->name,
    	    'price' => $Product->present_price,
    	    'quantity' => $request->numProduct,
    	    'attributes' => array(),
    	    'associatedModel' => $Product
    	));
    	$cart_badge = Cart::session(Auth::user()->id)->getContent()->count();
		return redirect()->route('user.land')->with('cart_badge',$cart_badge);
    }

    public function viewCart()
    {
    	// Cart::session(100)->clear();
    	return Cart::session(Auth::user()->id)->getContent();
    }
    public function clearCart()
    {
    	Cart::session(Auth::user()->id)->clear();
    	return back();
    }

    public function allInCart()
    {
    	$cart_badge = Cart::session(Auth::user()->id)->getContent()->count();
        $cart_items = Cart::session(Auth::user()->id)->getContent();
        $sub_total = Cart::session(Auth::user()->id)->getSubTotal();
        $total = Cart::session(Auth::user()->id)->getTotal();
        $g_settings = GeneralSetting::find(1);
    	$w_settings = WebsiteSetting::find(1);
    	$categories = Category::all();
    	return view('front-end.shoppingcart',['g_settings' => $g_settings, 
    								'w_settings' => $w_settings ,
    								'cart_badge'=>$cart_badge, 
    								'cart_items'=>$cart_items, 
    								'sub_total' =>$sub_total,
    								'categories' => $categories,
    								'total'=>$total,
    				]);
    }

    public function updateCart(Request $request)
    {
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
            $old_qty = Cart::session(Auth::user()->id)->get($request->productID[$i])->quantity;
            $new_qty = $request->numProduct[$i] - $old_qty;
            if ( $new_qty == -1*($old_qty) )
            {
                Cart::session(Auth::user()->id)->remove($request->productID[$i]);
            }
            else
            {
                Cart::session(Auth::user()->id)->update($request->productID[$i], array(
                        'quantity' => $new_qty ,
                    ));
            }

        }
    	return back();
    }

}
