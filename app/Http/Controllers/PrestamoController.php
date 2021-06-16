<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-prestamo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $request->validate([
            'id_prestamo' => ['required'],
            'casado' => ['required'],
            'dependientes' => ['required'],
            'educacion' => ['required'],
            'independiente' => ['required'],
            'i_d' => ['required', 'min:0', 'max:999999.99'],
            'i_c' => ['required', 'min:0', 'max:999999.99'],
            'c_p' => ['required', 'min:0', 'max:999999.99'],
            'p_p' => ['required', 'int'],
            'historia_credito' => ['required'],
            'tipo_propiedad' => ['required'],
        ]);

//Forma 1 de insertar datos
//        $datos = $request->except('_token');
//        Prestamo::insert($datos);
//
//        return $request->all();

        //Otra forma de insertar datos
        $prestamo = new Prestamo();
        $prestamo->id_prestamo = $request->id_prestamo;
        $prestamo->casado = $request->casado;
        $prestamo->dependientes = $request->dependientes;
        $prestamo->educacion = $request->educacion;
        $prestamo->independiente = $request->independiente;
        $prestamo->i_d = $request->i_d;
        $prestamo->i_c = $request->i_c;
        $prestamo->c_p = $request->c_p;
        $prestamo->p_p = $request->p_p;
        $prestamo->historia_credito = $request->historia_credito;
        $prestamo->tipo_propiedad = $request->tipo_propiedad;
        $prestamo->save();

        return redirect()->route('mostrarPrestamo', $request->id_prestamo);

//Forma 3 de insertar datos
//        Prestamo::create([
//            'id_prestamo' => $request['id_prestamo'],
//            'casado' => $request['casado'],
//            'dependientes' => $request['dependientes'],
//            'educacion' => $request['educacion'],
//            'independiente' => $request['independiente'],
//            'i_d' => $request['i_d'],
//            'i_c' => $request['i_c'],
//            'c_p' => $request['c_p'],
//            'p_p' => $request['p_p'],
//            'historia_credito' => $request['historia_credito'],
//            'tipo_propiedad' => $request['tipo_propiedad'],
//        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estado = "";
        $dato = DB::table('prestamos')->where('id_prestamo', '=', $id)->first();
            //Prestamo::where('id_prestamo', $id)->first();
        if ($dato->historia_credito != 1) {
            if ($dato->independiente == "No") {
                if ($dato->tipo_propiedad != "Semi Urbano" && (intval($dato->dependientes) < 2 && $dato->dependientes != "3+")) {
                    if ($dato->eduacion != "Graduado") {
                        $estado = "No autorizado";
                    } else {
                        if ($dato->i_d / 11 > $dato->c_p && $dato->i_c / 11 > $dato->c_p) {
                            $estado = "Autorizado";
                        }
                    }
                } else {
                    $estado = "No autorizado";
                }
            } elseif ($dato->independiente == "Si") {
                if ($dato->casado != "Si" && (intval($dato->dependientes) <= 1 && $dato->dependientes != "3+")) {
                    if ($dato->i_d / 10 > $dato->c_p || $dato->i_c / 10 > $dato->c_p) {
                        if ($dato->c_p < 180) {
                            $estado = "Autorizado";
                        }
                    } else {
                        $estado = "No autorizado";
                    }
                } else {
                    $estado = "No autorizado";
                }
            }
        } else {
            if ($dato->i_c > 0 && $dato->i_d / 9 > $dato->c_p) {
                $estado = "Autorizado";
            } elseif ($dato->dependientes == "3+" && $dato->independiente == "Si") {
                if ($dato->i_c / 12 > $dato->c_p) {
                    $estado = "Autorizado";
                }
            } elseif ($dato->c - p < 200) {
                $estado = "No autorizado";
            }
        }
        return view('show-prestamo', compact('dato', 'estado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
