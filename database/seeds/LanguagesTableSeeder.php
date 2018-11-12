<?php

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'code'=>'en',
    			'name'=>'English'
    		],
    		[
    			'code'=>'ru',
    			'name'=>'Русский'
    		]
    	];
    	Language::insert($data);
    }
}
