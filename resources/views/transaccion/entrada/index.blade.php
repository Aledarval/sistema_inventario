@extends('layouts.template')
@section('title', 'Entrada')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title text-danger">Entrada</h3>
      <a href="{{route('user.nueva')}}" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i>Nuevo Usuario</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover" id="tblUsuarios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
              
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
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
    <script src="{{ asset('js/usuarios.js') }}"></script>
@endpush
