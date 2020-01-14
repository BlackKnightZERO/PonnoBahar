<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Category;

class CategoryController extends Controller
{
    
    public function add(Request $request)
    {
        $img_path = "";
        $validatedData = $request->validate([
    		'name' => 'required',
			'cat_image' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);
    	if($request->hasFile('cat_image'))
    	{ 
            // dd($request->cat_image);
    		$img_path = $this->storeImage($request);
    	}	
    		$category = new Category();
            $category->name = $request->name;
               if ( $request->discount_amount_in_pct ){
                $category->discount_amount_in_pct = $request->discount_amount_in_pct;
                $category->discount_status = 1;
               }
            $category->cat_image = $img_path;   
            $category->save();
               
	   		$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);
			return back()->with($notification);
    }
   	public function storeImage($request)
   	{
        $path = $request->file('cat_image')->store('category_image/','public');
   		$img = Image::make(public_path('storage/'.$path))->fit(690,465);
        $img->save();
        return $path;	
       }    
}
