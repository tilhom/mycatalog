<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['parent_id','sort_order','status'];

    public function descriptions()
    {
    	return $this->hasMany('App\Models\CategoryDescription');
    }

    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
}
