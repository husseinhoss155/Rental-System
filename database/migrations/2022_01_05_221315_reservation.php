<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservation', function (Blueprint $table) {
            $table->integer('res_id')->unique();
            $table->integer('C_SSN')->unsigned();
            $table->string('Car_ID');
            $table->foreign('C_SSN')->references('SSN')->on('Customer')->onDelete('cascade');
            $table->foreign('Car_ID')->references('plate_id')->on('Car')->onDelete('cascade');
            $table->primary(['C_SSN','Car_ID']);
            $table->timestamps();
            $table->integer('bill');
            $table->string('paid')->default('false');
            $table->date('pickupdate')->nullable();
            $table->date('returndate')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Reservation');

    }
}
