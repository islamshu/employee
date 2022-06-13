<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->json('main_title');
            $table->json('title1');
            $table->json('title2');
            $table->json('title3');
            $table->json('title4');
            $table->integer('number1');
            $table->integer('number2');
            $table->integer('number3');
            $table->integer('number4');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
            $table->string('icon4');
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
        Schema::dropIfExists('statistics');
    }
}
