@extends('layouts.template')
@section('title', 'Almacene')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">  <i class="fas fa-plus-circle"></i> Registro de Almacén</h3>
            </br>
        </div>   
        <div class="card-body">
            <form action="{{route('almacen.crear')}}" method="POST" enctype="multipart/form-data" id="frmAlmacen">
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
                    <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
                <div class="col-md-6"></div>
            </div>
                
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script src="{{ asset('js/almacen.js') }}"></script>
@endpush