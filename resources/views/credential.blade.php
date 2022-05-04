@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

<style>

.team-boxed {
  color:#313437;
}

.team-boxed p {
  color:#7d8285;
}

@media (max-width:767px) {
  .team-boxed h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.team-boxed .people {
  padding:50px 0;
}

.team-boxed .item {
  text-align:center;
}

.team-boxed .item .box {
  text-align:center;
  padding:30px;
  background-color:#fff;
  margin-bottom:30px;
}

.team-boxed .item .name {
  font-weight:bold;
  margin-top:28px;
  margin-bottom:8px;
  color:inherit;
}

.team-boxed .item .title {
  text-transform:uppercase;
  font-weight:bold;
  color:#d0d0d0;
  letter-spacing:2px;
  font-size:13px;
}

.team-boxed .item .description {
  font-size:15px;
  margin-top:15px;
  margin-bottom:20px;
}

.team-boxed .item img {
  max-width:160px;
}

</style>
@section('content')

<div class="team-boxed">
    <div class="container">
        <a href="{{ url("print/$agente->id") }}" class="btn btn-primary">Imprimir frente <i class="fa fa-fw fa-print"></i></a>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="https://via.placeholder.com/200C/">
                    <h3 class="name">{{ $agente->nombre }}</h3>
                    <p class="title">{{ $agente->asignacion }}</p>
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