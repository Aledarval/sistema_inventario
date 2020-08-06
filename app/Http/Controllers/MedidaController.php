<?php

namespace App\Http\Controllers;
use App\Medida;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    public function index()
    {
        $medidas = Medida::all();
        return view('configuracion.medida.index', compact('medidas'));
    }

    public function nueva()
    {
        return view('configuracion.medida.form');
    }

    public function crear(Request $request)
    {
        $medidas = new Medida();
        $medidas->cod_unidad = $request->input('cod_unidad');
        $medidas->cod_medida = $request->input('cod_medida');
        $medidas->nombre_medida = $request->input('nombre_medida');
        $medidas->save();
        return redirect('/configuracion/medida');
    }
    public function editar($id)
    {
        $medida = Medida::find($id);
        return view('configuracion.medida.edit', compact('medidas'));
    }

    public function modificar($id, Request $request)
    {
        $medida = Medida::find($id);
        $medidas->cod_unidad = $request->input('cod_unidad');
        $medidas->cod_medida = $request->input('cod_medida');
        $medidas->nombre_medida = $request->input('nombre_medida');
        $medidas->save();
        return redirect('/configuracion/medida');
    }

    public function eliminar($id)
    {
        $medida = Medida::find($id);
        $medida->delete();
        return redirect('/configuracion/medida');
    }
}
