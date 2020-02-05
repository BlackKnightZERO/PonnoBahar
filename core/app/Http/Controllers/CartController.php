<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Attribute;
use App\Product;
use Cart;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
    	$validatedData = $request->validate([
    		'productID' => 'required',
    		'numProduct' => 'required',
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
    	    'attributes' => array(),
    	    'associatedModel' => $Product
    	));
    	$cart_badge = Cart::session(100)->getContent()->count();
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

}
