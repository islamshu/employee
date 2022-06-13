<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_sections', function (Blueprint $table) {
            $table->id();
            $table->json('main_title');
            $table->json('secand_title');
            $table->json('first_btn')->nullable();
            $table->json('secand_btn')->nullable();
            $table->json('first_link')->nullable();
            $table->json('secand_link')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('first_sections');
    }
}
