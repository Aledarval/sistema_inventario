@extends('layouts.template')
@section('title', 'Almacene')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title"> <i class="fas fa-cog"></i> Configuración del Almacén</h3>
      </br>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <a href="{{route('almacen.nueva')}}" class="btn btn-primary mb-4 float-right">
                <i class="fas fa-plus-circle"></i> Registrar Almacén
            </a>
        </div>
        
        </br>
        </br>
    <div  class="table-responsive">
        <table class="table table-bordered table-hover" id="tblAlmacen">
            <thead>

                <tr>
                    <th>Ítem</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($almacenes as $almacen)  
                    <tr>
                        <td>{{ $almacen->id }}</td>
                        <td>{{ $almacen->cod_alm }}</td>
                        <td>{{ $almacen->nombre_almacen }}</td>
                        <td><a href="{{ route('almacen.editar',['id'=>$almacen->id]) }}"> <i class="fas fa-edit fa-lg"></i></a></td>
                        <td><a href="{{ route('almacen.eliminar',['id'=>$almacen->id]) }}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a></td>
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
            $('#tblAlmacen').dataTable();
            
        })
    </script>
@endpush
