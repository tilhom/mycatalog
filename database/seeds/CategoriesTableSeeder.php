<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		['sort_order'=>1],
    		['sort_order'=>2],
    		['sort_order'=>3],
    	];
        Category::insert($data);
    }
}
