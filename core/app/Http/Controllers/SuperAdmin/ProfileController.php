<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;
//use Illuminate\Support\Facades\DB;
use App\User;
use App\UserDetail;
use App\UserType;
use App\Category;
use App\GeneralSetting;

class ProfileController extends Controller
{
    //
    public function index()
    {
    	$user_detail = User::find(Auth::user()->id)->user_detail;
		$user_type = User::find(Auth::user()->id)->user_type;
		$categories = Category::all();
		$g_settings = GeneralSetting::find(1);
    	return view('back-end.super-admin.profile')->with(['user_detail'=>$user_detail ,'user_type'=>$user_type, 'categories' => $categories, 'g_settings' => $g_settings]);
    }
    public function updateProfile(Request $request)
    {
    	$validatedData = $request->validate([
    		'name' => 'required',
    		'user_name' => 'required',
    		// 'email' => 'unique:users,email,Auth::user()->id',
    		'email' => 'required',
    		'contact' => 'required',
    		'flat_no' => 'required',
    		'house_no' => 'required',
    		'road_no' => 'required',
    		'state' => 'required',
    		'zip_code' => 'required',
    		'country' => 'required',
			'profile_picture' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:5000',
    	]);
    	if($request->hasFile('profile_picture'))
    	{ 
    		$this->storeImage($request);
    	}	
    		$user = User::find(Auth::user()->id);
	   		$user->name = $request->name;
	   		$user->email = $request->email;
	   		$user->contact = $request->contact;
	   		$user->save();
	   		$userdetail = UserDetail::where('user_id', Auth::user()->id)->update([
	   		'flat_no'=> $request->flat_no,
	   		'house_no' => $request->house_no,
	   		'road_no'=> $request->road_no,
	   		'state' => $request->state,
	   		'zip_code' => $request->zip_code,
	   		'country'=> $request->country,
	   		]);
	   		$notification = array(
			    'message' => 'Successful !',
			    'alert-type' => 'success',
			);

			return back()->with($notification);
    }
   	public function storeImage($request)
   	{
		// $origin = Auth::user()->id .'.'. $request->file("profile_picture")->getClientOriginalExtension();   
		$path = $request->file('profile_picture')->store('user_image/','public');
		Storage::disk('public')->delete($request->oldPic);
		$user = User::find(Auth::user()->id);
   		$user->profile_picture = $path;
   		$check = $user->save();
   		$img = Image::make(public_path('storage/'.$path))->fit(400,400);
		$img->save();	
   	}

    public function updatePassword(Request $request)
    {
    	$validatedData = $request->validate([
    		'old_pass' => 'required|min:6',
    		'new_pass' => 'required|min:6',
    		'conf_pass' => 'required|min:6|same:new_pass',
    	]);

    	// return $validatedData;
    	 // return Auth::user()->password;
    	 // dd(Hash::check($request->old_pass,Auth::user()->password)) ;

    	$user = User::find(Auth::user()->id);
    	if (Hash::check($request->old_pass,Auth::user()->password)) {
    		$user->password = Hash::make($request->conf_pass);
    		$check = $user->save();

	    	if( $check ){
	    		$notification = array(
				    'message' => 'Successful !',
				    'alert-type' => 'success',
				);
	    	}else{
	    		$notification = array(
				    'message' => 'Ooops, Something went wrong !',
				    'alert-type' => 'error',
				);
	    	}

		}else{
			$notification = array(
			    'message' => 'Old Password Did Not Match !',
			    'alert-type' => 'warning',
			);
		}
    	
    	return back()->with($notification);
    }
}
