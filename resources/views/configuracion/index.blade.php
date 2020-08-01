@extends('layouts.template')
@section('title', 'Configuracion')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
@endpush
@section('content')

<div class="card">
</br>
</br>
    <div class="card-header">
        <div class="nav flex-column nav-pills" id="" role="tablist" aria-orientation="vertical">
            <blockquote class="pull-right"><h1><i class="fas fa-cog"></i> Configuraciones</h1></blockquote>    

            <a class="nav-link active" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-cog"></i> Almacén</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-cog"></i> Cargo</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-cog"></i>  Cliente</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cog"></i>  Concepto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-cog"></i> Documento</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-cog"></i> Espacio</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-cog"></i> Estante</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cog"></i>  Grupo</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-cog"></i> Medida</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-cog"></i> Mesón</a> 
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-cog"></i>  Paleta</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cog"></i> Proceso</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-cog"></i>  Producto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-cog"></i>Proveedor</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-cog"></i>  Puesto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cog"></i> Requiriente</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-cog"></i> Sección</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-cog"></i> Sub-grupo</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-cog"></i> Tipo de Concepto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cog"></i> Tipo de Proceso</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-cog"></i> Unidad</a>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
    </div>
</div>

@endsection




