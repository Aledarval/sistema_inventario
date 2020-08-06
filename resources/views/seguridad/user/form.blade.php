@extends('layouts.template')
@section('title', 'Usuarios')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title text-danger">Usuarios</h3>
    </div>
    <div class="card-body">
        <form action="{{route('user.crear')}}" method="POST" enctype="multipart/form-data" id="frmUsuario">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Usuario</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
        </form>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/usuarios.js') }}"></script>
@endpush