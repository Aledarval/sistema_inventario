@extends('layouts.template')
@section('title', 'Unidade')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title"> <i class="fas fa-cog"></i> Configuración de Medidas (Pertenece a Unidades)</h3>
      </br>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <a href="{{ route('medida.nueva') }}" class="btn btn-primary mb-4 float-right">
                <i class="fas fa-plus-circle"></i> Registrar Medida
            </a>
        </div>
        
        </br>
        </br>
    <div  class="table-responsive">
        <table class="table table-bordered table-hover" id="tblMedida">
            <thead>

                <tr>
                    <th>Ítem</th>
                    <th>Cód.Unidad</th>
                    <th>Cód.Medida</th>
                    <th>Nombre Medida</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($medidas as $medida)  
                    <tr>
                        <td>{{ $medida->id }}</td>
                        <td>{{ $medida->cod_unidad }}</td>
                        <td>{{ $medida->cod_medida }}</td>
                        <td>{{ $medida->nombre_medida }}</td>
                        <td><a href="{{ route('medida.editar',['id'=>$medida->id]) }}"> <i class="fas fa-edit fa-lg"></i></a></td>
                        <td><a href="{{ route('medida.eliminar',['id'=>$medida->id]) }}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a></td>
                    </tr>
            @endforeach  
            </tbody>
        </table>
    </div>
    </div>

   
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#tblMedida').dataTable();
            
        })
    </script>
@endpush
