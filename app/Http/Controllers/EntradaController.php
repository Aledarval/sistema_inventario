<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
class EntradaController extends Controller
{
    public function index()
    {
        $entradas = Entrada::all();
        return view('transaccion.entrada.index', compact('entradas'));
        //$estados = Estado::all();
        //$estados = Estado::get();
        //$almacenes = Almacene::where('estatus', 1)->get();
    }
}
