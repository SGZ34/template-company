<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetallesEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_empresas', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('detalles_empresas');
    }
}
