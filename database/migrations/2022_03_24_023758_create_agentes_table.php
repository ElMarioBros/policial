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
            $table->string('nomina')->default(' ');
            $table->string('cuip')->default(' ');
            $table->string('cargo')->default(' ');
            $table->string('nombre')->default(' ');
            $table->string('asignacion')->default(' ');
            $table->string('ingreso')->default(' ');
            $table->string('nds')->default(' ');
            $table->string('curp')->default(' ');
            $table->string('telefonos')->default(' ');
            $table->string('beneficiarios')->default(' ');
            $table->string('imagen')->default(' ');
            $table->string('misc')->default(' ');
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
