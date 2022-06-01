<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    public function postInfo(){
        return $this->hasOne('App\Post');
    }
}