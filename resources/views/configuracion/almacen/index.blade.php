@extends('layouts.template')
@section('title', 'Almacene')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Almacén</h3>
      </br>
     
      <a href="#" class="btn btn-primary mb-4 float-right"><i class="fas fa-plus-circle"></i>Nuevo Almacén</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover" id="tblAlmacen">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td>{{ $almacen->id }}</td>
                        <td>{{ $almacen->cod_alm }}</td>
                        <td>{{ $almacen->nombre_almacen }}</td>
                        <td><i class="fas fa-edit fa-lg"></i></a></td>
                        <td><i class="fas fa-trash fa-lg"></i></a></td>
                    </tr>
               
            </tbody>
        </table>
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
