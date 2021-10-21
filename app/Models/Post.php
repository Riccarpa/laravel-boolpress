<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = ['title','content','slug','image','category_id'];
    use SoftDeletes;

    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
