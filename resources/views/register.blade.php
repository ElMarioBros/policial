@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Agente</h1>
@stop

@section('content')
<div class="container w-50">
    @if (session('success'))
        <div class="alert alert-success m-3">
            {{ session('success') }}
        </div>
    @endif
    <form class="pb-4" action="{{ route('store-agent') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomina" class="form-label">Número de nómina</label>
            <input type="text" class="form-control" id="nomina" name="nomina">
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>

        <div class="mb-3">
            <label for="asignacion" class="form-label">Asignación</label>
            <input type="text" class="form-control" id="asignacion" name="asignacion">
        </div>

        <div class="mb-3">
            <label for="ingreso" class="form-label">Ingreso</label>
            <input type="date" class="form-control" id="ingreso" name="ingreso"> 
        </div>

        <div class="mb-3">
            <label for="nds" class="form-label">Número de seguro</label>
            <input type="text" class="form-control" id="nds" name="nds">
        </div>

        <div class="mb-3">
            <label for="curp" class="form-label">CURP</label>
            <input type="text" class="form-control" id="curp" name="curp"> 
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefonos">
        </div>

        <div class="mb-3">
            <label for="beneficiarios" class="form-label">Beneficiarios</label>
            <textarea class="form-control" id="beneficiarios" name="beneficiarios"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>

@stop

@section('css')
@stop

@section('js')
@stop