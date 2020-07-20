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
            <blockquote class="pull-right"><h1>Configuraciones</h1></blockquote>    

            <a class="nav-link active" id="" data-toggle="pill" href="{{route('almacen.index')}}" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-warehouse"></i> Almacén</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fab fa-elementor"></i>  Cargo</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fab fa-creative-commons-by"></i>  Cliente</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fab fa-elementor"></i>  Concepto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false">Documento</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false">Espacio</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false">Estante</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fab fa-elementor"></i>  Grupo</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false">Medida</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-pallet"></i> Mesón</a> 
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-pallet"></i>  Paleta</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Proceso</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-boxes"></i>  Producto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fab fa-creative-commons-by"></i>Proveedor</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-bezier-curve"></i>  Puesto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fab fa-creative-commons-by"></i>Requiriente</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-bezier-curve"></i> Sección</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-bezier-curve"></i> Sub-grupo</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-arrows-alt-h"></i> Tipo de Concepto</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-arrows-alt-h"></i> Tipo de Proceso</a>
            <a class="nav-link" id="" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="false">Unidad</a>
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
