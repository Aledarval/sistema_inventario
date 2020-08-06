<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
class UnidadeController extends Controller
{
    public function index()
    {
        $unidades = Unidade::all();
        return view('configuracion.unidad.index', compact('unidades'));
    }

    public function nueva()
    {
        return view('configuracion.unidad.form');
    }

    public function crear(Request $request)
    {
        $unidades = new Unidade();
        $unidades->nombre_unidad = $request->input('nombre');
        $unidades->save();
        return redirect('/configuracion/unidad');
    }
    public function editar($id)
    {
        $unidad = Unidade::find($id);
        return view('configuracion.unidad.edit', compact('unidades'));
    }

    public function modificar($id, Request $request)
    {
        $unidad = Unidade::find($id);
        $unidad->nombre_unidad = $request->input('nombre');
        $unidad->save();
        return redirect('/configuracion/unidad');
    }

    public function eliminar($id)
    {
        $unidad = Unidade::find($id);
        $unidad->delete();
        return redirect('/configuracion/unidad');
    }
}
