<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Almacene;
class AlmaceneController extends Controller
{
    public function index()
    {
        $almacenes = Almacene::all();
        return view('configuracion.almacen.index', compact('almacenes'));
    }

    public function nueva()
    {
        return view('configuracion.almacen.form');
    }

    public function crear(Request $request)
    {
        $almacenes = new Almacene();
        $almacenes->cod_alm = $request->input('codigo');
        $almacenes->nombre_almacen = $request->input('nombrealm');
        $almacenes->usuario = $request->input('usuario');
        $almacenes->save();
        return redirect('/configuracion/almacen');
    }
    public function editar($id)
    {
        $almacen = Almacene::find($id);
        return view('configuracion.almacen.edit', compact('almacenes'));
    }

    public function modificar($id, Request $request)
    {
        $almacen = Almacene::find($id);
        $almacen->cod_alm = $request->input('codigo');
        $almacen->nombre_almacen = $request->input('nombrealm');
        $almacen->usuario = $request->input('usuario');
        $almacen->save();
        return redirect('/configuracion/almacen');
    }

    public function eliminar($id)
    {
        $almacen = Almacene::find($id);
        $almacen->delete();
        return redirect('/configuracion/almacen');
    }
}

