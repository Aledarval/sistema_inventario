@extends('layouts.template')
@section('title', 'Medida')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">  <i class="fas fa-plus-circle"></i> Registro de Medida</h3>
            </br>
        </div>   
        <div class="card-body">
            <form action="{{ route('medida.crear') }}" method="POST" enctype="multipart/form-data" id="frmMedida">
@csrf      
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cod_unidad">Unidad</label>
                        <select name="cod_unidad" id="cod_unidad" class="form-control">
                            <option value="1"></option>
                            <option value="0"></option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cod_medida">Código de la Medida</label>
                        <input type="text" class="form-control" name="cod_medida" id="cod_medida" placeholder="Código">
                    </div>
                </div>

                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre_medida">Nombre de la Medida</label>
                        <input type="text" class="form-control" name="nombre_medida" id="nombre_medida" placeholder="Nombre">
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
<script src="{{ asset('js/medida.js') }}"></script>
@endpush