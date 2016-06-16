<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string('nomeUsuario');
            $table->string('emailUsuario');
            $table->string('telefoneUsuario');
            $table->integer('statusUsuario')->default(1);
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Usuario');
    }
}
