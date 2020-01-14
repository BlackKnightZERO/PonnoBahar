<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Image;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    //
    public function add(Request $request)
    {
        
        $validatedData = $request->validate([
    		'name' => 'required',
    		'category_id' => 'required',
			's_cat_image' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);
    	if($request->hasFile('s_cat_image'))
    	{ 
    		$img_path = $this->storeImage($request);
    	}	
    		$subcategory = new SubCategory();
            $subcategory->name = $request->name;
            $subcategory->category_id = $request->category_id;
               if ( $request->discount_amount_in_pct ){
                $subcategory->discount_amount_in_pct = $request->discount_amount_in_pct;
                $subcategory->discount_status = 1;
               }
            $subcategory->s_cat_image = $img_path;   
            $subcategory->save();
               
	   		$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);
			return back()->with($notification);
    }
   	public function storeImage($request)
   	{
        $path = $request->file('s_cat_image')->store('subcategory_image/','public');
   		$img = Image::make(public_path('storage/'.$path))->fit(500,500);
        $img->save();
        return $path;	
       }

     
}
