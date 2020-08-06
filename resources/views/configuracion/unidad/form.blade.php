@extends('layouts.template')
@section('title', 'Unidade')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">  <i class="fas fa-plus-circle"></i> Registro de Unidad</h3>
            </br>
        </div>   
        <div class="card-body">
            <form action="{{ route('unidad.crear') }}" method="POST" enctype="multipart/form-data" id="frmUnidad">
@csrf
            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre del Almacén</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
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
<script src="{{ asset('js/unidad.js') }}"></script>
@endpush