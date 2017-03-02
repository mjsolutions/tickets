<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeatroMorelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seccion');
            $table->string('fila');
            $table->integer('asiento');
            $table->boolean('status')->default(0);
            $table->boolean('confirmacion')->default(0);
            $table->boolean('impreso')->default(0);
            $table->string('forma_pago')->nullable();
            $table->string('folio')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('user')->nullable();
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
        Schema::dropIfExists('morelos');
    }
}
