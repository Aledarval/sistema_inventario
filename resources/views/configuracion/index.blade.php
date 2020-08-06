@extends('layouts.template')
@section('title', 'Configuracion')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')

<div class="card">
</br>
</br>
    <div class="card-header">
        <div class="col-md-12">
            <blockquote class="pull-right"><h1><i class="fas fa-cog"></i> Configuraciones</h1></blockquote>   
        </div>
        <div class="row">
            <div class="col-md-2"><button type="button" class="btn btn-link" id="almacen" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Almacén</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Cargo</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Cliente</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Concepto</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Documento</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Espacio</button></div>
        </div>

        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Estante</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Grupo</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Medida</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Mesón</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Paleta</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Proceso</button></div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Producto</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Proveedor</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Puesto</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Requiriente</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Sección</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Sub-Grupo</button></div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Tipo de Proceso</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Tipo de Concepto</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> Unidad</button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> </button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i> </button></div>
            <div class="col-md-2"><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-cog"></i></button></div>
        </div>
        

        <div id="almacen" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                
                    <div class="modal-header">
                       <blockquote class="pull-right"><h1><i class="fas fa-cog"></i> Almacén</h1></blockquote>   
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary mb-4 float-right"><i class="fas fa-plus-circle"></i>Nuevo Almacén</a>
                        </div>
                        <div class="col-md-12">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#tblAlmacen').dataTable();
            
            $('#almacen').on('hidden.bs.modal', function (e) {
             // do something...
            })
        })
    </script>
@endpush





