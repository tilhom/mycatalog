<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $fillable = ['code','name'];

	public $timestamps = false;

    public function categories()
    {
    	return $this->hasMany('App\Models\CategoryDescription');
    }
    public function products()
    {
    	return $this->hasMany('App\Models\ProductDescription');
    }
}
