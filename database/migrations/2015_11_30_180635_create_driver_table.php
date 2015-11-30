<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->default(''); 
            $table->string('social_security_no')->default(''); 
            $table->date('dob');
            $table->date('joining_date'); 
            $table->string('gender')->default(''); 
            $table->string('photo')->default(''); 
            $table->string('mobile_number')->default('');
            $table->string('email')->default('');             
            $table->longText('address')->default(''); 
            $table->string('state')->default(''); 
            $table->string('country')->default(''); 
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
        Schema::drop('driver');
    }
}
