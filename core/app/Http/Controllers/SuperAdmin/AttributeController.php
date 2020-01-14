<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    //
    public function add(Request $request)
    {
        $validatedData = $request->validate([
    		'name' => 'required',
    		'category_id_attr' => 'required',
			'sub_category_id_attr' => 'required',
        ]);
            $attribute = new Attribute();
            $attribute->name = $request->name;
            $attribute->category_id = $request->category_id_attr;
            $attribute->sub_category_id = $request->sub_category_id_attr;
            $attribute->save();
               
	   		$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);
			return back()->with($notification);
    }

    public function getSubCategoryForParent($id)
    {
        $category = Category::find($id);
    	return $category->subcategory;
    }  
    public function getAttributesForParent($id)
    {
        $subcategory = SubCategory::find($id);
    	return $subcategory->attribute;
    }  
}
