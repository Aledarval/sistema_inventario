@extends('layouts.template')
@section('title', 'Estado')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Estado</h3>
      </br>
     
      <a href="{{route('estado.nueva')}}" class="btn btn-primary mb-4 float-right">
        <img src="{{ asset('img/new.png') }}" style="width:20px;height:20px;">  Nuevo Estado
      </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover" id="tblEstado">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estados as $estado)
                    <tr>
                        <td>{{ $estado->id }}</td>
                        <td>{{ $estado->estado }}</td>
                        <td>{{ $estado->descripcion }}</td>
                        <td><a href="{{ route('estado.editar',['id'=>$estado->id]) }}"> <i class="fas fa-edit fa-lg"></i></a></td>
                        <td><a href="{{ route('estado.eliminar',['id'=>$estado->id]) }}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#tblEstado').dataTable();
        })
    </script>
@endpush


@foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->id }}</td>
                        <td>{{ $empresa->NombreEmpresa }}</td>
                        <td><a href="{{ route('empresa.editar',['id'=>$empresa->id]) }}">Editar</a></td>
                        <td><a href="{{ route('empresa.eliminar',['id'=>$empresa->id]) }}">Eliminar</a></td>
                        
                    </tr>
                @endforeach