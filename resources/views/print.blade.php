<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $agente->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

        .box-ra{
            border: red solid;
        }
        .box-ga{
            border: teal solid;
        }
        .box-ba{
            border: blue solid;
        }

        .white-background{
            background: white;
        }
        
        .credential{
            height: 100vh;
            width: 100vw;
            border: teal solid;
            background: #008080;
            background: #008080;
            background: linear-gradient(90deg,#008080 40%, #ffffff 40%);
            background: -webkit-linear-gradient(90deg,#008080 40%, #ffffff 40%);
            background: -moz-linear-gradient(90deg,#008080 40%, #ffffff 40%);
        }

        .credential .credential-header{
            height: 17vh;
            background: white;
        }

        .credential .credential-header .adress{
            color: #5f5e5e;
            font-weight: 400;
        }

        .credential .credential-body{
            background: white;
        }

        .credential .credential-body .info{
            height: 25vh;
        }

        .credential .credential-body .name{
            height: 12vh;
        }

        .credential .credential-footer{
            margin: 0;
            padding-top: 1vh;
            height: 14.5vh;
            background: teal;
        }

        .adress{
            font-size: 12px;
        }

        .agent-picture{
            border: teal solid;
            display: block;
            height: 28vh;
            margin-left: auto;
            margin-right: auto;
        }

        .info-div{
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .info-item{
            margin: 0;
        }

        .logo{
            display: block;
            height: 15vh;
            margin-left: auto;
            margin-right: auto;
        }

        .logo-policial{
            display: block;
            height: 16vh;
            margin-left: auto;
            margin-right: auto;
        }

        .nomina{
            margin: 0;
        }

        .footer-div{
            width: 45vw;
        }

        .qr{
            height: 9vh;
        }

        .quote{
            color: white;
            font-size: 14px;
            width: 70%;
            text-align: left;
        }

        .waves{
            margin: 0;
            padding: 0;
            height: 15vh;
            background: white;
        }
    </style>

    <div class="credential box-g">
        <div class="white-background">
            <!-- CABECERA -->
            <div class="credential-header box-r m-3">
                <div class="d-flex bd-highlight">
                    <div class="flex px-2 box-b">
                        <img class="logo" src="https://i.ibb.co/zmmhCDN/LOGO-FRATERNIDAD-03.png">
                    </div>
                    <div class="flex-fill box-b">
                        <p class="m-1 fs-6 fw-bold">FRATERNIDAD POLICIACA DE <br>MEXICALI BAJA CALIFORNIA A.C</p>
                        <p class="adress">Calle sur s/n Col. Bella Vista parte posterior del C.E.R.E.S.O Tel. 218 05 76</p>
                    </div>
                </div>
            </div>
            <!-- FIN CABECERA -->

            <!-- CUERPO -->
            <!-- FOTO-INFO -->
            <div class="credential-body info box-r mx-3">
                <div class="d-flex bd-highlight align-items-center">

                    <div class="flex-fill box-b">
                        <img class="agent-picture" src="https://via.placeholder.com/200x250">
                    </div>
                    <div class="flex-fill box-b">
                        <div class="info-div">
                            <p class="info-item">Cargo | Position</p>
                            <p class="fw-bold">{{ $agente->cargo }}</p>
                        </div>
                        <div class="info-div">
                            <p class="info-item">Seccion | Section</p>
                            <p class="fw-bold">{{ $agente->asignacion }}</p>
                        </div>
                        <div class="info-div">
                            <p class="info-item">NSS | Social Security</p>
                            <p class="fw-bold">{{ $agente->nds }}</p>
                        </div>
                        <div class="info-div">
                            <p class="info-item">CURP</p>
                            <p class="fw-bold">{{ $agente->curp }}</p>
                        </div>
                        <div class="info-div">
                            <p class="info-item">CUIP</p>
                            <p class="fw-bold">{{ $agente->cuip }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN FOTO-INFO -->
            <!-- NOMBRE-LOGO -->
            <div class="credential-body name box-r mx-3">
                <div class="d-flex bd-highlight align-items-center">
                    <div class="flex-fill mx-4 box-b">
                        <h1>{{ $agente->nombre }}</h1>
                        <p class="fw-bold nomina">N. NÓMINA</p>
                        <p class="nomina">{{ $agente->nomina }}</p>
                    </div>
                    <div class="flex box-b">
                        <img class="logo-policial" src="https://i.ibb.co/hdwwCnk/policia-municipal-mexicali-logo.png">
                    </div>
                </div>
            </div>
            <!-- FIN NOMBRE-LOGO -->
            <!-- FIN CUERPO -->
        </div>

        <!-- WAVES -->
        <div class="waves box-r">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="teal" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,106.7C480,128,600,160,720,197.3C840,235,960,277,1080,266.7C1200,256,1320,192,1380,160L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </div>
        <!-- FIN WAVES -->

        <!-- PIE -->
        <div class="credential-footer box-r">
            <div class="d-flex bd-highlight align-items-center">
                <div class="flex-fill mx-4 footer-div box-b">
                    <p class="quote mx-4 fw-bold">Vigilar por quien vigila nuestra comunidad... ¡MISIÓN CUMPLIDA!</p>
                </div>
                <div class="flex-shrink footer-div box-b">
                    <img class="qr mx-4 float-end" src="https://via.placeholder.com/200C/">
                </div>
            </div>

        </div>
        <!-- FIN PIE -->
    </div>
    <script>
        window.print();
        window.location.href = "http://127.0.0.1:8000/credential/1";
    </script>
</body>
</html>