<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {

            $table->increments('id_p');
            $table->integer('ci_p');
            $table->string('nombre_p');
            $table->string('apellidos_p');
            $table->integer('edad_p');
            $table->integer('telefono_p');
            $table->string('direccion_p');
            $table->string('departamento_p');
            $table->string('sexo_p');
            $table->date('fechanac_p');
            $table->string('correo_p');
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
        Schema::dropIfExists('paciente');
    }
}
