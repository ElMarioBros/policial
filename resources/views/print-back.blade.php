<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $agente->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/id-card-back.css') }}">
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
                    <img style="transform: translate(-4%);" src="{{ asset('assets/signature-example.png') }}" alt="">
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
<script>
        window.print();
        //window.location.href = "https://raut.cc/";
        window.location.href = "http://127.0.0.1:8000/";
    </script>
</body>
</html>