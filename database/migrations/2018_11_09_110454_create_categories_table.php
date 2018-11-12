<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->index()->nullable();
            $table->integer('sort_order');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
        Schema::create('category_descriptions', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('language_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->primary(['category_id','language_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_descriptions');
    }
}
