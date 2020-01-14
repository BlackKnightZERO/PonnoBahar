<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\Attribute;
use App\GeneralSetting;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $g_settings = GeneralSetting::find(1);
    	return view('back-end.super-admin.dashboard', ['categories' => $categories, 'g_settings' => $g_settings ]);
    }
}
