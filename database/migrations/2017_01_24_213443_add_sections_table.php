<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('places');
            $table->timestamps();
        });

        Schema::create('config_section', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('config_id')->unsigned();
            $table->integer('section_id')->unsigned();

            //Relaciones para la tabla pivote
            $table->foreign('config_id')->references('id')->on('configs')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
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
        Schema::drop('config_section');
        Schema::dropIfExists('sections');
    }
}
