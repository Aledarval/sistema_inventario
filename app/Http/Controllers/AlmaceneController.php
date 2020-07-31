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
        //$estados = Estado::all();
        //$estados = Estado::get();
        //$almacenes = Almacene::where('estatus', 1)->get();
    }
}

