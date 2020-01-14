<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    public function subcategory()
    {
    	return $this->hasMany('App\SubCategory', 'id');
    }
}
