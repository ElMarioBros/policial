@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agentes</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <ul class="nav mx-3 mb-2">
                <li class="nav-item mx-1">
                    <a class="btn btn-primary" href="/register">
                        <span class="mx-4">Agregar Agente</span>
                        <i class="fa fa-fw fa-user-plus"></i> 
                    </a>
                </li>
            </ul>
            <div class="card">
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
                            <th>Acciones</th>
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
                                <td>
                                    <a class="btn btn-primary" href="{{ url("credential/$agente->id") }}">
                                        <i class="far fa-fw fa-id-badge"></i>
                                    </a>
                                </td>
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
                            <th>Acciones</th>
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