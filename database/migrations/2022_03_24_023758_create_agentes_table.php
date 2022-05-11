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
        Schema::create('agentes', function (Blueprint $table) {
            $table->id();
            $table->string('nomina');
            $table->string('cuip');
            $table->string('cargo');
            $table->string('nombre');
            $table->string('asignacion');
            $table->string('ingreso');
            $table->string('nds');
            $table->string('curp');
            $table->string('telefonos');
            $table->string('beneficiarios');
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
        Schema::dropIfExists('agentes');
    }
};
