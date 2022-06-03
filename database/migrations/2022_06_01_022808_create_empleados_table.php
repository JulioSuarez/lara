<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('roles_id')->unsigned();

            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->integer('telefono');
            $table->string('estado');
            $table->string('descripcion_turno');
            $table->time('hora_entrada');
            $table->time('hora_salida');

            $table->foreign('roles_id')->references('id')->on('roles')->onDelete("cascade");

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
        Schema::dropIfExists('empleados');
    }
};
