<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('sdate'); 
            $table->string('edate');            
            $table->string('add1'); 
            $table->string('add2')->nullable(); 
            $table->string('country');        
            $table->string('city'); 
            $table->string('state');
            $table->integer('zip');
            $table->string('phone1');
            $table->string('email');
            $table->string('phone2')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
