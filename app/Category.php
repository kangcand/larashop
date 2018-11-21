<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\Book');
    }
    use SoftDeletes;
}
