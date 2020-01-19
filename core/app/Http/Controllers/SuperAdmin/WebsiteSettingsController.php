<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\GeneralSetting;
use App\WebsiteSetting;

use Illuminate\Support\Facades\Storage;
use Image;

class WebsiteSettingsController extends Controller
{
    //
    public function footerItems()
    {
    	$categories = Category::all();
    	$g_settings = GeneralSetting::find(1);
    	$w_settings = WebsiteSetting::find(1);
    	return view('back-end.super-admin.web_settings_footer',['categories' => $categories, 'g_settings' => $g_settings, 'w_settings' => $w_settings ]);
    }
    public function updateFooter(Request $request)
    {
    	$validatedData = $request->validate([
    		'footer_header_1' => 'sometimes',
			'footer_text_1' => 'sometimes',
			'footer_header_2' => 'sometimes',
			'footer_text_2' => 'sometimes',
    	]);

    	$w_settings = WebsiteSetting::find(1);
    	if( $request->footer_header_1 ){
    		$w_settings->footer_header_1 = $request->footer_header_1;
    	}
    	if( $request->footer_text_1 ){
    		$w_settings->footer_text_1 = $request->footer_text_1;
    	}
    	if( $request->footer_header_2 ){
    		$w_settings->footer_header_2 = $request->footer_header_2;
    	}
    	if( $request->footer_text_2 ){
    		$w_settings->footer_text_2 = $request->footer_text_2;
    	}
    	$w_settings->save();
    	$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);
		return back()->with($notification);
    }

    public function landingIteams1()
    {
    	$categories = Category::all();
    	$g_settings = GeneralSetting::find(1);
    	$w_settings = WebsiteSetting::find(1);
    	return view('back-end.super-admin.web_settings_ladning_1',['categories' => $categories, 'g_settings' => $g_settings, 'w_settings' => $w_settings ]);
    }

    public function updateSlider(Request $request)
    {
    	$validatedData = $request->validate([
    		'landing1_slider1' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:3000',
			'landing1_slider1_old' => 'sometimes',
			'landing1_sub_header1' => 'sometimes',
			'landing1_header1' => 'sometimes',

			'landing1_slider2' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:3000',
			'landing1_slider2_old' => 'sometimes',
			'landing1_sub_header2' => 'sometimes',
			'landing1_header2' => 'sometimes',

			'landing1_slider3' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:3000',
			'landing1_slider3_old' => 'sometimes',
			'landing1_sub_header3' => 'sometimes',
			'landing1_header3' => 'sometimes',
    	]);

    	if($request->hasFile('landing1_slider1'))
    	{ 
    		$this->storeImage1($request);
    	}
    	if($request->hasFile('landing1_slider2'))
    	{ 
    		$this->storeImage2($request);
    	}
    	if($request->hasFile('landing1_slider3'))
    	{ 
    		$this->storeImage3($request);
    	}	

    	$w_settings = WebsiteSetting::find(1);
    	if( $request->landing1_sub_header1 ){
    		$w_settings->landing1_sub_header1 = $request->landing1_sub_header1;
    	}
    	if( $request->landing1_header1 ){
    		$w_settings->landing1_header1 = $request->landing1_header1;
    	}
    	if( $request->landing1_sub_header2 ){
    		$w_settings->landing1_sub_header2 = $request->landing1_sub_header2;
    	}
    	if( $request->landing1_header2 ){
    		$w_settings->landing1_header2 = $request->landing1_header2;
    	}
    	if( $request->landing1_sub_header3 ){
    		$w_settings->landing1_sub_header3 = $request->landing1_sub_header3;
    	}
    	if( $request->landing1_header3 ){
    		$w_settings->landing1_header3 = $request->landing1_header3;
    	}
    	$w_settings->save();
    	$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);
		return back()->with($notification);
	}

    	public function storeImage1($request)
	   	{  
			$path = $request->file('landing1_slider1')->store('settings_image/','public');
			Storage::disk('public')->delete($request->landing1_slider1_old);

			$w_settings = WebsiteSetting::find(1);
	   		$w_settings->landing1_slider1 = $path;
	   		$w_settings->save();
	   		$img = Image::make(public_path('storage/'.$path))->fit(1920,930);
			$img->save();	
	   	}
	   	public function storeImage2($request)
	   	{  
			$path = $request->file('landing1_slider2')->store('settings_image/','public');
			Storage::disk('public')->delete($request->landing1_slider2_old);

			$w_settings = WebsiteSetting::find(1);
	   		$w_settings->landing1_slider2 = $path;
	   		$w_settings->save();
	   		$img = Image::make(public_path('storage/'.$path))->fit(1920,930);
			$img->save();	
	   	}
	   	public function storeImage3($request)
	   	{  
			$path = $request->file('landing1_slider3')->store('settings_image/','public');
			Storage::disk('public')->delete($request->landing1_slider3_old);

			$w_settings = WebsiteSetting::find(1);
	   		$w_settings->landing1_slider3 = $path;
	   		$w_settings->save();
	   		$img = Image::make(public_path('storage/'.$path))->fit(1920,930);
			$img->save();	
	   	}

	   	public function showAboutUs()
	   	{
	   		$categories = Category::all();
	   		$g_settings = GeneralSetting::find(1);
	   		$w_settings = WebsiteSetting::find(1);
	   		return view('back-end.super-admin.web_settings_about_us',['categories' => $categories, 'g_settings' => $g_settings, 'w_settings' => $w_settings ]);
	   	}

	   	public function updateAboutUs(Request $request)
	   	{
	    	$validatedData = $request->validate([
	    		'about_us' => 'required',
	    	]);
	    	$w_settings = WebsiteSetting::find(1);
	    	$w_settings->about_us = $request->about_us;
	    	$w_settings->save();

	    	$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);
			return back()->with($notification);
	   	}
    
}
