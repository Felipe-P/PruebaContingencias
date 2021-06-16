<?php

namespace Database\Seeders;

use App\Models\Prestamo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CreditoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos para validar las condiciones

        $prestamo = new Prestamo();
        $prestamo->id_prestamo = "p1";
        $prestamo->casado = "Si";
        $prestamo->dependientes = "0";
        $prestamo->educacion = "Graduado";
        $prestamo->independiente = "Si";
        $prestamo->i_d = 720500.0;
        $prestamo->i_c = 658900.0;
        $prestamo->c_p = 175.0;
        $prestamo->p_p = 10;
        $prestamo->historia_credito = 1;
        $prestamo->tipo_propiedad = "Urbana";
        $prestamo->save();

        $prestamo = new Prestamo();
        $prestamo->id_prestamo = "p2";
        $prestamo->casado = "No";
        $prestamo->dependientes = "2";
        $prestamo->educacion = "No Graduado";
        $prestamo->independiente = "No";
        $prestamo->i_d = 850000.0;
        $prestamo->i_c = 998000.0;
        $prestamo->c_p = 200.0;
        $prestamo->p_p = 5;
        $prestamo->historia_credito = 0;
        $prestamo->tipo_propiedad = "Rural";
        $prestamo->save();
    }
}
