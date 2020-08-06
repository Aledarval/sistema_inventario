@extends('layouts.template')
@section('title', 'Unidade')
@section('content')
<form action="{{route('unidad.modificar', ['id'=>$unidad->id])}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-row">
       
        <div class="form-group col-md-6">
            <label for="nombre">Nombre del Almacén</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        </div>
    </div>

    

    <div class="form-row">
        <div class="col-md-6"></div>
            <button type="submit" class="btn btn-primary">Modificar</button>
        <div class="col-md-6"></div>
    </div>

  </form>
@endsection
