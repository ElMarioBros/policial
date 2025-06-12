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
        Schema::table('agentes', function (Blueprint $table) {
            $table->string('nomina')->nullable()->change();
            $table->string('cuip')->nullable()->change();
            $table->string('cargo')->nullable()->change();
            $table->string('nombre')->nullable()->change();
            $table->string('asignacion')->nullable()->change();
            $table->string('ingreso')->nullable()->change();
            $table->string('nds')->nullable()->change();
            $table->string('curp')->nullable()->change();
            $table->string('telefonos')->nullable()->change();
            $table->string('beneficiarios')->nullable()->change();
            $table->string('imagen')->nullable()->change();
            $table->string('misc')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agentes', function (Blueprint $table) {
            $table->string('nomina')->default(' ')->change();
            $table->string('cuip')->default(' ')->change();
            $table->string('cargo')->default(' ')->change();
            $table->string('nombre')->default(' ')->change();
            $table->string('asignacion')->default(' ')->change();
            $table->string('ingreso')->default(' ')->change();
            $table->string('nds')->default(' ')->change();
            $table->string('curp')->default(' ')->change();
            $table->string('telefonos')->default(' ')->change();
            $table->string('beneficiarios')->default(' ')->change();
            $table->string('imagen')->default(' ')->change();
            $table->string('misc')->default(' ')->change();
        });
    }
};
