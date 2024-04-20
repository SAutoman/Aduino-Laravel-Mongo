<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aduino</title>
    <!-- <link rel = "icon" type = "image/png" href = "/assets/img/favicon.ico"> -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
     
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('layouts/sections/styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="app" style="height:100vh">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel " style = "background-color:#9854df">
            <div class="container-fluid">




                               
                <div class="col-md-12  text-center">
                    <h1 class="text-white">Historial de Notificaciones</h1>
                </div>


            </div>
        </nav>
        
        <div class="container" style="height:85%">
            <div class="row justify-content-center"style="height:100%">
                <div class="col-md-8">
                    <div class="card d-flex justify-content-around" style="height: 100%; overflow:auto">
                        <div style="height: 150px;" class="d-flex flex-col justify-content-around ">
                            <div style="border-bottom:2px solid black; width:40%" class="mt-3 d-flex justify-content-around">
                                <div class="text-left" style="width:30%"><h3>HOY<h3></div>
                                <div style="text-align:right">
                                    <h6>0:00 AM
                                    <h6>Se ha detectado un nuevo</h6>
                                    <h6>movimiento</h6>
                                </div>
                            </div>
                        </div>

                        <div style="height: 150px;" class="d-flex flex-col justify-content-around ">
                            <div style="border-bottom:2px solid black; width:40%" class="mt-3 d-flex justify-content-around">
                                <div class="text-left" style="width:30%"><h3>AYER<h3></div>
                                <div style="text-align:right">
                                    <h6>0:00 AM
                                    <h6>Se ha detectado un nuevo</h6>
                                    <h6>movimiento</h6>
                                </div>
                            </div>
                        </div>

                        <div style="height: 150px;" class="d-flex flex-col justify-content-around ">
                            <div style="border-bottom:2px solid black; width:40%" class="mt-3 d-flex justify-content-around">
                                <div class="text-left" style="width:30%"><h3>AYER<h3></div>
                                <div style="text-align:right">
                                    <h6>0:00 AM
                                    <h6>Se ha detectado un nuevo</h6>
                                    <h6>movimiento</h6>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid flex d-flex align-items-center justify-content-around" style="position:absolute;bottom:0px; background-color:#f2b5b5; height:80px">
            <div class="col-md-1 text-center">
                <a href="{{ url('/home') }}">
                    <h2 class="p-0 m-0 " style="color: aqua;"><i class="fa-solid fa-house"></i></h2>
                    <h6 class="p-0 m-0">Home</h6>
                </a>

            </div>
            <div class="col-md-2 text-center">
                <a href="{{ url('/notification') }}">
                    <h2 class="p-0 m-0 " style="color: aqua;"><i class="fa-sharp fa-regular fa-bell"></i></h2>
                    <h6 class="p-0 m-0">Historial de Notificaciones</h6>
                </a>

            </div>

            <div class="col-md-1 text-center">
                <a href="{{ url('/setting') }}">
                    <h2 class="p-0 m-0 " style="color: aqua;"><i class="fa-solid fa-gear"></i></h2>
                    <h6 class="p-0 m-0">Ajustes</h6>
                </a>

            </div>
        </div>
    </div>
</body>
</html>
