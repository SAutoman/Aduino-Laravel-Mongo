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
    <div id="app" style="height: 100vh; ">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel " style = "background-color:#9854df">
            <div class="container-fluid">
                <div class="col-md-1">
                    <a  href="{{ url('/') }}" class="flex d-flex justify-content-center">
                        <h1><i class="fas fa-arrow-left text-white"></i></h1>
                    </a>
                </div>
                <div class="col-md-11  text-center">
                    <h1 class="text-white">Inicio</h1>
                </div>
            </div>
        </nav>
        
        @yield('content')
    </div>
</body>
</html>
