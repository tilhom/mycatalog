<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }

    public function language()
    {
    	return $this->belongsTo('App\Models\Language');
    }    
}
