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
        <a href="{{ url("edit/$agente->id") }}" class="btn btn-warning">Editar datos <i class="far fa-fw fa-address-card"></i></a>
        <div class="mt-4">
            <h4>{{ $agente->nombre }}</h4>
        </div>
        <div class="row people">
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
                                      <p class="header">Cargo | Position</p>
                                      <p><b>{{ $agente->cargo }}</b></p>
                                      <p class="header">Sección | Section</p>
                                      <p><b>{{ $agente->asignacion }}</b></p>
                                      <p class="header">NSS | Social Security</p>
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
            <div class="item">
              <!-- START ID CARD BACK -->
              <section class="mx-4 my-1 id-card">
                    <div class="padding">
                        <div class="font-back">
                            <div class="logo-fraternidad">
                                <img src="{{ asset('assets/Logo-Fraternidad-A.png') }}" alt="">
                            </div>
            
                                <div class="edetails-back">
                                    <p>Telefonos de emergencia:</p>
                                    <p><b>Lic. David Zozaya</b></p>
                                    <span>Coordinador Jurídico</span><br>
                                    <p><b>(686) 215 9932</b></p>
                                    <p><b>Lic. Luis A. Navarrete Castillo</b></p>
                                    <span>Presidente de fraternidad</span><br>
                                    <span><b>(686) 590 3860</b></span>
                                </div>
            
                                <div class="logo-policia-back">
                                    <img style="transform: translate(-4px);" src="{{ asset('assets/Logo-Policia.png') }}" alt="">
                                </div>
            
                                <div class="signature">
                                    <img style="transform: translate(-10%,-15%);" src="{{ asset('assets/signature-example.png') }}" alt="">
                                    <hr style="
                                        height: 0.1em;
                                        width: 50%;
                                        transform: translate(-9%,-12px);
                                        border-width: 0;
                                        color: black;
                                        background-color: black;
                                    ">
                                </div>
                                <div class="president-name">
                                    <p>Lic. Luis Antonio Navarrete Castillo</p>
                                    <p>Presidente de fraternidad policiaca</p>
                                </div>
        
                                <div class="advice">
                                    <p>El portador de esta credencial podrá hacer uso de
                                        la misma en tiempo y forma mientras pertenezca a
                                        esta agrupación.
                                    </p>
                                </div>
                        </div>
                    </div>
              </section>
              <!-- END ID CARD BACK -->
            </div>
        </div>
        <div class="row w-25">
            <div class="card">
                <div class="card-header"><h5>Beneficiarios</h5></div>
                <div class="card-body">
                    {{ $agente->beneficiarios }}
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