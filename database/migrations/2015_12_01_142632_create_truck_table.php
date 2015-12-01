<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('make')->default(''); 
            $table->integer('yr_model')->default(0); 
            $table->integer('yr_first_sold')->default(0);
            $table->string('vlf_class')->default(''); 
            $table->string('type_veh')->default('');
            $table->string('type_lic')->default('');
            $table->string('license_num')->default('');   
            $table->string('body_type_model')->default('');
            $table->string('mp')->default('');
            $table->string('mo')->default('');
            $table->string('ax')->default('');
            $table->string('wc')->default('');
            $table->string('unladen_g_cgw')->default('');
            $table->string('vehicle_id_num')->default('');
            $table->string('type_vehicle_use')->default('');
            $table->date('date_issued');
            $table->string('cc_alco')->default('');
            $table->float('dt_fee_recvd')->default(0.0);
            $table->string('pic')->default('');
            $table->string('registered_owner')->default('');
            $table->float('amount_due')->default(0.0);
            $table->float('amount_recvd')->default(0.0);
            $table->float('amount_paid')->default(0.0);
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
        Schema::drop('truck');
    }
}
