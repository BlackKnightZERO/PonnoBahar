<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\GeneralSetting;
use Image;
use Illuminate\Support\Facades\Storage;

class GeneralSettingsController extends Controller
{
    public function showSettings()
    {
    	$categories = Category::all();
        $g_settings = GeneralSetting::find(1);
        // return $g_settings;
    	return view('back-end.super-admin.generalSettingsLogo',['categories' => $categories, 'g_settings' => $g_settings ]);
    }

    public function updateLogoTitle(Request $request)
    {
    	$validatedData = $request->validate([
    		'title' => 'required',
			'logo' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:2000',
    	]);
    	if($request->hasFile('logo'))
    	{ 
    		$this->storeImage($request);
    	}	
    		$g_settings = GeneralSetting::find(1);
	   		$g_settings->title = $request->title;
	   		$g_settings->save();
	   		$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);
			return back()->with($notification);
    }
   	public function storeImage($request)
   	{
		$path = $request->file('logo')->store('settings_image/','public');
		Storage::disk('public')->delete($request->logo_old);
		$g_settings = GeneralSetting::find(1);
   		$g_settings->logo = $path;
   		$g_settings->save();
   		$img = Image::make(public_path('storage/'.$path))->fit(290,130);
		$img->save();	
       }
       
       public function updateContactSettings(Request $request)
       {

       }
}
