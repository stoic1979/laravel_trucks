<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title')->default(''); 
            $table->string('phone_number')->default('');
            $table->string('mobile_number')->default('');
            $table->string('email')->default(''); 
            $table->date('registered_on');             
            $table->longText('address')->default(''); 
            $table->string('state')->default(''); 
            $table->string('country')->default(''); 
            $table->longText('description')->default(''); 
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
        Schema::drop('company');
    }
}
