@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dar Baja a Agente</h1>
@stop

@section('content')
<div class="container w-50">

    <div class="team-boxed">
        <div class="container">
            <div class="box">
                <h3 class="name">{{ $agente->nombre }}</h3>
            </div>
            <div class="card">
                <div class="m-4">
                    <form action="{{ route('delete-agent',"$agente->id") }}" method="post">
                        @csrf
                        <h4 class="text-center">¿Esta seguro de que quiere dar de baja al agente {{ $agente->nombre }} ?</h4>
                        <div class="mt-4">
                            <input class="form-control btn btn-danger" type="submit" value="Confirmar Baja">
                        </div>
                    </form>
                    <p class="form-label text-danger text-center mt-2">Esta accion es irreversible.</p>
                    <p class="text-center">
                        <a href="/credential/{{ $agente->id }}" class="text-center">Volver</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>

@stop

@section('css')
@stop

@section('js')
@stop