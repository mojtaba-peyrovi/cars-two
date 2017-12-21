<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->integer('user_id');
            $table->string('trim');
            $table->string('make');
            $table->string('model');
            $table->integer('price');
            $table->integer('year');
            $table->integer('mileage');
            $table->string('condition')->default('Used');
            $table->string('engine');
            $table->String('transmission');
            $table->string('consumptionCity');
            $table->string('consumptionHwy');
            $table->string('fuel');
            $table->string('highlight1');
            $table->string('highlight2');
            $table->string('highlight3');
            $table->string('highlight4');
            $table->string('highlight5');
            $table->string('location');
            $table->text('desc');
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
        Schema::dropIfExists('cars');
    }
}
