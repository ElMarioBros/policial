<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $agente->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/id-card.css') }}">
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        @media print {
            body {-webkit-print-color-adjust: exact;}
        }

    </style>

<section class="id-card">
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
</section>
<script>
        window.print();
        window.location.href = "https://raut.cc/";
        //window.location.href = "http://127.0.0.1:8000/";
    </script>
</body>
</html>