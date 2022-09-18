@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Éxito</h1>
@stop

@section('content')
<div class="container w-50">

    <div class="team-boxed">
        <div class="container">
            <div class="card">
                <div class="m-4">
                    <h5 class="text-center">Usuario eliminado con éxito. <a class="text-dark" style="text-decoration: underline" href="{{ route('home') }}">Volver a la tabla.</a></h5>

                    <p class="form-label text-danger text-center mt-2">Esta accion es irreversible.</p>

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