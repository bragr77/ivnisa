<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad');
            $table->integer('cuotas');

            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('edocivil');
            $table->string('celular');
            $table->string('telefono');
            $table->string('email');
            $table->string('nrohijos');
            $table->string('direccion');
            $table->string('ptorefe');
            $table->string('tiemporesidencia');
            $table->string('tipovivienda');

            $table->string('slaboral');
            $table->string('empresa');
            $table->string('tlaborando');
            $table->string('cargo');
            $table->integer('sueldo');
            $table->string('jinmediato');
            $table->string('telefonojefe');
            $table->integer('otrosingresos');

            $table->string('nref1');
            $table->string('teleref1');
            $table->string('pref1');
            $table->string('dirref1');
            $table->string('nref2');
            $table->string('teleref2');
            $table->string('pref2');
            $table->string('dirref2');

            $table->string('banconomina');
            $table->string('nrocuenta');
            $table->string('titular');
            $table->string('bancocuenta');
            $table->string('referido');

            $table->integer('visto');

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
        Schema::dropIfExists('formularios');
    }
}
