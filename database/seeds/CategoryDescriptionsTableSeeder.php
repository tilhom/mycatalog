<?php

use App\Models\CategoryDescription;
use Illuminate\Database\Seeder;

class CategoryDescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		['category_id'=>1,'language_id'=>1,'name'=>'For women'],
    		['category_id'=>1,'language_id'=>2,'name'=>'Для женщин'],

    		['category_id'=>2,'language_id'=>1,'name'=>'For men'],
    		['category_id'=>2,'language_id'=>2,'name'=>'Для мужчин'],

    		['category_id'=>3,'language_id'=>1,'name'=>'For kids'],
    		['category_id'=>3,'language_id'=>2,'name'=>'Для детей'],		
    	];
        CategoryDescription::insert($data);
    }
}
