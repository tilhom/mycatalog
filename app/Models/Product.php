<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function descriptions()
    {
    	return $this->hasMany('App\Models\ProductDescription');
    }

    public function images()
    {
    	return $this->hasMany('App\Models\ProductImage');
    }

    public function reviews()
    {
    	return $this->hasMany('App\Models\Review');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

}
