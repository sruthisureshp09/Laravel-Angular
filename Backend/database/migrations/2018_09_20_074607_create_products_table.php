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
            $table->integer('category_id')->unsigned();
          /*   $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('cascade'); */
            $table->string('title');
            $table->string('add1'); 
            $table->string('add2')->nullable(); 
            $table->string('country');        
            $table->string('city'); 
            $table->string('state');
            $table->integer('zip');
            $table->string('phone1');
            $table->string('email')->unique();
            $table->string('phone2')->nullable();
            $table->string('imagepath')->nullable();
            $table->string('offers')->nullable();
            $table->string('type')->nullable();
            $table->string('events')->nullable();
            $table->boolean('featured');
            $table->timestamps();
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
    }
}
