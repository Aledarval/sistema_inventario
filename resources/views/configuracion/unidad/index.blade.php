@extends('layouts.template')
@section('title', 'Unidade')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title"> <i class="fas fa-cog"></i> Configuración de Unidades (Refiere a Medición)</h3>
      </br>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <a href="{{route('unidad.nueva')}}" class="btn btn-primary mb-4 float-right">
                <i class="fas fa-plus-circle"></i> Registrar Unidad
            </a>
        </div>
        
        </br>
        </br>
    <div  class="table-responsive">
        <table class="table table-bordered table-hover" id="tblUnidad">
            <thead>

                <tr>
                    <th>Ítem</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($unidades as $unidad)  
                    <tr>
                        <td>{{ $unidad->id }}</td>
                        <td>{{ $unidad->nombre_unidad }}</td>
                        <td><a href="{{route('unidad.editar',['id'=>$unidad->id])}}"> <i class="fas fa-edit fa-lg"></i></a></td>
                        <td><a href="" class="text-danger"><i class="fas fa-trash fa-lg"></i></a></td>
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
            $('#tblUnidad').dataTable();
            
        })
    </script>
@endpush
