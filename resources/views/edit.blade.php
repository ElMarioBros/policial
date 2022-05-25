@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Agente</h1>
@stop

@section('content')
<div class="container w-50">
    <form class="pb-4" action="{{ route('edit-agent',"$agente->id") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomina" class="form-label">Número de nómina</label>
            <input type="text" class="form-control" id="nomina" name="nomina" value="{{ $agente->nomina }}">
        </div>

        <div class="mb-3">
            <label for="cuip" class="form-label">CUIP</label>
            <input type="text" class="form-control" id="cuip" name="cuip" value="{{ $agente->cuip }}"> 
        </div>

        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="{{ $agente->cargo }}"> 
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $agente->nombre }}">
        </div>

        <div class="mb-3">
            <label for="asignacion" class="form-label">Asignación</label>
            <input type="text" class="form-control" id="asignacion" name="asignacion" value="{{ $agente->asignacion }}">
        </div>

        <div class="mb-3">
            <label for="ingreso" class="form-label">Ingreso</label>
            <input type="date" class="form-control" id="ingreso" name="ingreso" value="{{ $agente->ingreso }}"> 
        </div>

        <div class="mb-3">
            <label for="nds" class="form-label">Número de seguro</label>
            <input type="text" class="form-control" id="nds" name="nds" value="{{ $agente->nds }}">
        </div>
        <div class="mb-3">
            <label for="curp" class="form-label">CURP</label>
            <input type="text" class="form-control" id="curp" name="curp" value="{{ $agente->curp }}"> 
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefonos" value="{{ $agente->telefonos }}">
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Registrar">
        </div>
    </form>
</div>

@stop

@section('css')
@stop

@section('js')
@stop