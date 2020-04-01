<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Post owned by one user only
    public function user(){
        return $this->belongsTo('App\User');
    }

    //Post Has Many Comments
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
