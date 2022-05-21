@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="team-boxed">
    <div class="container">
        <div class="box">
            <h3 class="name">{{ $agente->nombre }}</h3>
        </div>
        <div class="card">
            <div class="m-4">
                <form action="{{ route('upload-image') }}" method="post" enctype="multipart/form-data" accept="image/*">
                    @csrf
                    <label for="image" class="form-label">Ingrese la imagen del agente</label>
                    @error('file')
                        <p class="small text-danger mt-1">{{ $message }}</p>
                    @enderror
                    <input type="hidden" name="id" value="{{ $agente->id }}">
                    <input class="form-control" type="file" id="image" name="file">
                    <input class="form-control btn btn-primary btn-lg" type="submit" value="Subir">
                </form>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')

@stop

@section('js')
@stop