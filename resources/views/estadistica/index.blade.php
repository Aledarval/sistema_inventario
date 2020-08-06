@extends('layouts.template')
@section('title','Transaccion')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
@endpush
@section('content')

<div class="card">

    <div class="card-header">
        <blockquote class="pull-right"><h1>Transacciones</h1></blockquote>
             <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                <i class="fas fa-shopping-cart"></i> Entradas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-dollar-sign"></i> Salidas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-exchange-alt"></i> Movimientos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">
                <i class="fas fa-boxes"></i> Inventarios</a>
            </li>
        </ul>
    </div>

</div>
@endsection

