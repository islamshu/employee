<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_relations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_id');
            $table->json('title');
            $table->string('icon');
            $table->integer('sort')->nullable();
            $table->timestamps();
            $table->foreign('section_id')->references('id')->on('third_sections')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('third_relations');
    }
}
