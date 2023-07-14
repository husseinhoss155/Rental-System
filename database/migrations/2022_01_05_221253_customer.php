<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function (Blueprint $table) {
            $table->increments('SSN');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->string('Password');
            $table->biginteger('phone');
            $table->string('address')->nullable();
            $table->bigInteger('credit_number');
            $table->integer('licesne_no');
            $table->integer('type');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customer');
    }
}
