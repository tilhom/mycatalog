<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index();
            $table->integer('user_id')->index();
            $table->integer('quantity');
            $table->decimal('price',8,2);
            $table->integer('status')->default(0);
            $table->integer('viewed');
            $table->timestamps();
        });

        Schema::create('product_descriptions', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('language_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->primary(['product_id','language_id']);           
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->index();
            $table->string('image');
            $table->integer('sort_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_descriptions');
        Schema::dropIfExists('product_images');
    }
}
