<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $guarded = [];
    // protected $fillable = [''];
    public function users()
    {
        return $this->belongsTo('App\User','id');
    }
}
