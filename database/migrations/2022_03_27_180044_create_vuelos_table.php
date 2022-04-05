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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('vuelo');
            $table->integer('cedula');
            $table->string('nombre');
            $table->string('hora_inicio');
            $table->string('hora_salida');
            $table->string('asiento');
            $table->string('origen');
            $table->string('destino');
            $table->string('fecha_salida');
            $table->string('operador');
            $table->string('grupo');
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
        Schema::dropIfExists('vuelos');
    }
};
