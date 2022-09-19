@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agente</h1>
    <link rel="stylesheet" href="{{ asset('css/id-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/id-card-back.css') }}">
@stop

<style>


    @media (max-width:767px) {
    .team-boxed h2 {
        margin-bottom:25px;
        padding-top:25px;
        font-size:24px;
    }
    }

    .team-boxed .people {
    padding:8px 0 35px 0;
    }

</style>
@section('content')
<div class="team-boxed">
    <div class="mx-4">
        @if (session('success'))
          <p class="alert alert-success text-white">
            {{ session('success') }} <a href="{{ route('home') }}">Volver a la tabla</a>
          </p>
        @endif
        <a href="{{ url("print/$agente->id") }}" class="btn btn-primary">Imprimir Credencial <i class="fa fa-fw fa-print"></i></a>
        <a href="{{ url("upload/$agente->id") }}" class="btn btn-success">Asignar Imagen <i class="fa fa-fw fa-camera"></i></a>
        <a href="{{ url("edit/$agente->id") }}" class="btn btn-warning">Editar datos <i class="far fa-fw fa-solid fa-address-card"></i></a>
        <a href="{{ url("delete/$agente->id") }}" class="btn btn-danger">Dar baja a agente <i class="fa fa-fw fa-user-minus"></i></a>
        <div class="mt-4">
            <h4>{{ $agente->nombre }}</h4>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset($agente->imagen) }}" alt="{{ $agente->nombre }}" class="rounded" width="150">
                    <div class="mt-3">
                        <h4>{{ $agente->nombre }}</h4>
                        <p class="text-bold mb-1">{{ $agente->cargo }}</p>
                        <p class="text-muted font-size-sm">{{ $agente->ingreso }}</p>
                        {{--<button class="btn btn-primary">BOTON PRIMARIO</button>
                        <button class="btn btn-outline-primary">BOTON SECUNDARIO</button> --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Nombre</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{ $agente->nombre }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Cargo</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{ $agente->cargo }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Estado</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{ $agente->asignacion }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Nomina</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{ $agente->nomina }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">CURP</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{ $agente->curp }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">CUIP</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $agente->cuip }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Ingreso</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $agente->ingreso }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Telefono</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $agente->telefonos }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Beneficiarios</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $agente->beneficiarios }}
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="item">
                <!-- START ID CARD -->
                <section class="mx-4 my-1 id-card">
                        <div class="padding">
                            <div class="font">
                                <div class="companyname">
                                    <img src="../assets/Logo-Fraternidad-B.png" alt="">
                                    <div class="org-nombre mx-1">
                                        <b>FRATERNIDAD POLICIACA
                                        DE MEXICALI BAJA
                                        CALIFORNIA A.C.</b>
                                        <div class="org-dir">
                                            <span>Calle Sur s/n col. Bella Vista parte posterior</span><br>
                                            <span>del C.E.R.E.S.O. Tel. 218 05 76</span>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="profile-pic">

                                    @if ($agente->imagen)
                                    <img src="{{ asset($agente->imagen) }}" alt="">
                                    @else
                                    <img src="../assets/profile-placeholder.jpg" alt="">
                                    @endif
                                </div>
                
                                <div class="">
                
                                    <div class="edetails">
                                        <p class="header">Cargo</p>
                                        <p><b>{{ $agente->cargo }}</b></p>
                                        <p class="header">Estatus</p>
                                        <p><b>{{ $agente->asignacion }}</b></p>
                                        <p class="header">NSS</p>
                                        <p><b>{{ $agente->nds }}</b></p>
                                        <p class="header">CURP</p>
                                        <p><b>{{ $agente->curp }}</b></p>
                                        <p class="header">CUIP</p>
                                        <p><b>{{ $agente->cuip }}</b></p>
                                    </div>
                
                                    <div class="ename">
                                        <p class="agent-name" ><b>{{ $agente->nombre }}</b></p>
                                        <div class="nomina">
                                            <span>N.Nomina</span><br>
                                            <span>{{ $agente->nomina }}</span>
                                        </div>
                                    </div>
                
                                    <div class="logo-policia">
                                        <img src="../assets/Logo-Policia.png" alt="">
                                    </div>
                
                                    <div class="qr">
                                        <img src="../assets/qr-example.png" alt="">
                                    </div>
            
                                    <div class="eslogan">
                                        <p>Vigilar por quien vigila
                                            nuestra comunidad..
                                            ¡MISION CUMPLIDA!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>        
                </section>
                <!-- END ID CARD -->
            </div>
        </div>
    </div>
</div>


@stop

@section('css')

@stop

@section('js')
@stop