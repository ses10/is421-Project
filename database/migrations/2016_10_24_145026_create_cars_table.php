<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->string('vin')->unique();
            $table->string('username');
            $table->string('year');
            $table->string('make');
            $table->string('model');
            $table->string('saleStatus');
            $table->timestamps();
        });

        Schema::table('cars', function($table){
            $table->foreign('username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
