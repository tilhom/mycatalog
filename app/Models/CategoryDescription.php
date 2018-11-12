<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDescription extends Model
{

	protected $fillable = ['category_id','language_id', 'name'];

	public $timestamps = false;

    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function language()
    {
    	return $this->belongsTo('App\Models\Language');
    }
}
