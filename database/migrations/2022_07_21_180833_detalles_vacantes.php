<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetallesVacantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_vacantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idVacante");
            $table->foreign("idVacante")->references("id")->on("vacantes");
            $table->unsignedBigInteger("idEmpresa");
            $table->foreign("idEmpresa")->references("id")->on("empresas");
            $table->unsignedBigInteger("idCiudad");
            $table->foreign("idCiudad")->references("id")->on("ciudades");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_vacantes');
    }
}
