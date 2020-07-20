<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeguridadController extends Controller
{
    public function index()
    {
        return view('seguridad.index');
    }
}
