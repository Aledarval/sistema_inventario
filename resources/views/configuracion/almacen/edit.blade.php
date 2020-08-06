@extends('layouts.template')
@section('title', 'Almacene')
@section('content')
<form action="{{route('almacen.modificar', ['id'=>$almacen->id])}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="codigo">Código del Almacén</label>
            <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código">
        </div>
        <div class="form-group col-md-6">
            <label for="nombrealm">Nombre del Almacén</label>
            <input type="text" class="form-control" name="nombrealm" id="nombrealm" placeholder="Nombre">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="usuario">Usuario</label>
            <select name="usuario" id="usuario" class="form-control">
                <option value="1">1</option>
                <option value="0">2</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6"></div>
            <button type="submit" class="btn btn-primary">Modificar</button>
        <div class="col-md-6"></div>
    </div>

  </form>
@endsection
