<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\Attribute;
use App\Product;
use Image;
use App\GeneralSetting;

class ProductController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $attributes = Attribute::all();
        $g_settings = GeneralSetting::find(1);
        return view('back-end.super-admin.product', [ 'categories' => $categories , 'subcategories' => $subcategories , 'attributes' => $attributes, 'g_settings' => $g_settings ]);
    }
    public function add(Request $request)
    {
        // return $request;

        $validatedData = $request->validate([
    		'name' => 'required',
    		'in_stock' => 'required',
    		'present_price' => 'required',
    		'description_title' => 'required',
    		'category_id' => 'required',
    		'sub_category_id' => 'required',
			'p_image' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);
        // $img_path = "";
    	if($request->hasFile('p_image'))
    	{ 
    		$img_path = $this->storeImage($request);
            
            $product = new Product();
            $product->name = $request->name;
            $product->in_stock = $request->in_stock;
            $product->present_price = $request->present_price;
            $product->description_title = $request->description_title;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;

            if( $request->description_details ) {
             $product->description_details = $request->description_details;
            }
            if( $request->featured_status ) {
             $product->featured_status = 1;
            }
            if( $request->on_sale_status ) {
             $product->on_sale_status = 1;
            }
            if( $request->top_rate ) {
             $product->top_rate = 1;
            }

           if ( $request->discount ){
            $product->discount = $request->discount;
            $product->discount_status = 1;
           }

           if ( $request->checkboxarr ){
            $var = implode(",",$request->checkboxarr);
            $product->attributes = $var;
          }
            $product->vendor_id = $request->vendor_id;   
            $product->p_image = $img_path;   
            $product->save();
               
            $notification = array(
                'message' => 'Successful !',
                'alert-type' => 'success',
            );
            return back()->with($notification);
    	}
        else
        {
            $notification = array(
                'message' => 'Image Required',
                'alert-type' => 'error',
            );
            return back()->with($notification);
        }	

    }
   	public function storeImage($request)
   	{
        $path = $request->file('p_image')->store('product_image/','public');
   		$img = Image::make(public_path('storage/'.$path))->fit(500,650);
        $img->save();
        return $path;	
       
    }

    public function getProduct($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
