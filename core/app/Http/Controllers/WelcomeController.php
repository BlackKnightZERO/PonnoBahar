<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\GeneralSetting;
use App\WebsiteSetting;
use App\Product;
use App\Blog;

class WelcomeController extends Controller
{
    //
    public function index()
    {
    	$categories = Category::all();
    	$g_settings = GeneralSetting::find(1);
    	$w_settings = WebsiteSetting::find(1);
    	$featured = Product::where('featured_status', 1)->limit(8)->get();
    	$on_sale = Product::where('on_sale_status', 1)->limit(8)->orderBy('id', 'DESC')->get();
    	$top_rate = Product::where('top_rate', 1)->limit(8)->get();
        $product_img_9 = Product::select('p_image')->where('status',1)->limit(9)->get();
        $blogs = Blog::where('status',1)->limit(3)->orderBy('id', 'DESC')->get();
    	return view('welcome',['categories' => $categories, 'g_settings' => $g_settings, 'w_settings' => $w_settings, 'featured'=>$featured , 'on_sale'=>$on_sale , 'top_rate'=>$top_rate, 'product_img_9' => $product_img_9, 'blogs' => $blogs, ]);
    }
}
