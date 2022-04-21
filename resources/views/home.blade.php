@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agentes</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
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
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                        <i class="far fa-fw fa-id-badge"></i>
                                      </button>
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

<!-- modal -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Credencial</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Imprimir <i class="fa fa-fw fa-print"></i></button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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