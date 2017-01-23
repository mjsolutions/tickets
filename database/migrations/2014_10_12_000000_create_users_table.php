<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type', ['super','p_venta','cliente'])->default('cliente');
            $table->string('name');
            $table->string('last_name');
            $table->string('second_lname');
            $table->date('birthdate');
            $table->enum('sex',['M','F']);
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('address');
            $table->string('colony');
            $table->string('zip');
            $table->string('tel');
            $table->boolean('status');
            $table->string('photo');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
