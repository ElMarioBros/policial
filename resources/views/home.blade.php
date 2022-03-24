@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de categorías</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="agentes" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nómina</th>
                            <th>Nombre</th>
                            <th>Asignación</th>
                            <th>Ingreso</th>
                            <th>Telefonos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agentes as $agente)
                            <tr>
                                <td>{{ $agente->nomina }}</td>
                                <td>{{ $agente->nombre }}</td>
                                <td>{{ $agente->asignacion }}</td>
                                <td>{{ $agente->ingreso }}</td>
                                <td>{{ $agente->telefonos }}</td>
                            </tr>                            
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nómina</th>
                            <th>Nombre</th>
                            <th>Asignación</th>
                            <th>Ingreso</th>
                            <th>Telefonos</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
                <p>Proximamente, Formulario....</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#agentes').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop