<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    public function category()
    {
        return $this->belongsTo('App\Category', 'id');
    }
    public function attribute()
    {
        return $this->hasMany('App\Attribute', 'sub_category_id');
    }
}
