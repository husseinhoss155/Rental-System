<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Car extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Car', function (Blueprint $table) {
            $table->string('plate_id')->primary();
            $table->string('model');
            $table->integer('year')->nullable();
            $table->string('color')->nullable();
            $table->integer('price');
            $table->string('country');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Car');
    }
}
