<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\Attribute;
use App\Product;
use Image;
use App\GeneralSetting;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getProduct($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
