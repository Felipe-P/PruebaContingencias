<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->string('id_prestamo')->primary();
            $table->string('casado');
            $table->string('dependientes');
            $table->string('educacion');
            $table->string('independiente');
            $table->float('i_d');
            $table->float('i_c');
            $table->float('c_p');
            $table->integer('p_p');
            $table->integer('historia_credito');
            $table->string('tipo_propiedad');
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
        Schema::dropIfExists('prestamos');
    }
}
