<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\GeneralSetting;
use App\WebsiteSetting;
use App\Blog;
use Image;

class BlogController extends Controller
{
    //
    public function addBlogForm()
    {
    	$categories = Category::all();
        $g_settings = GeneralSetting::find(1);
        return view('back-end.super-admin.add_blog', [ 'categories' => $categories , 'g_settings' => $g_settings, ]);
    
    }
    public function add(Request $request)
    {
    	$validatedData = $request->validate([
    		'author' => 'required',
    		'title' => 'required',
    		'description' => 'required',
			'b_image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:4000',
        ]);
        if($request->hasFile('b_image'))
    	{ 
    		$img_path = $this->storeImage($request);
            
            $blog = new Blog();
            $blog->author = $request->author;
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->b_image = $img_path;   
            $blog->save();
               
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
        $path = $request->file('b_image')->store('blog_image/','public');
   		$img = Image::make(public_path('storage/'.$path))->fit(1200,600);
        $img->save();
        return $path;	
       
    }

    public function allTable()
    {
        $categories = Category::all();
        $g_settings = GeneralSetting::find(1);
        $blogs = Blog::where('status',1)->orderBy('id', 'DESC')->get();
        return view('back-end.super-admin.blogs', [ 'categories' => $categories , 'g_settings' => $g_settings, 'blogs' => $blogs ]);
    }

    public function getBlog($id)
    {
        $blog = Blog::where('status',1)->find($id);
        return $blog;
    }
}
