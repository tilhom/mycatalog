<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $guarded = ['*'];
	protected $dates = [
		'created_at', 'updated_at', 'hired_at'
	];
}
