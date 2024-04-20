@extends('layouts.homeapp')

@section('content')
<div class="container" style="height:85%">
    <div class="row justify-content-center" style="height:100%">
        <div class="col-md-8">
            <div class="card d-flex justify-content-center" style="height: 100%">
                <div style="height: 200px;" class="d-flex flex-col justify-content-around ">
                    
                    <div style="font-size: 150px; color: black; padding-left: 200px;" ><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <div style="padding-right: 200px;" class="mt-3">
                        <h2 class="bold">ALERTA <span style="font-size: 20px;">0:00 AM</span></h2>
                        <h6>Se ha detectado un nuevo</h6>
                        <h6>movimiento</h6>
                        <button class="btn btn-primary" style="font-size: 8px; width: 140px;">Ir a Hirstorial de
                            Notificaciones</button>
                    </div>
                </div>

                <div style="height: 200px; "class="d-flex flex-col justify-content-around mt-5">
                    <div style="font-size: 150px; color: black; padding-left: 200px;" ><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <div style="padding-right: 200px;" class="mt-4">
                        <h2 class="bold">ALERTA <span style="font-size: 20px;">0:00 AM</span></h2>
                        <h6>Se ha detectado un nuevo</h6>
                        <h6>movimiento</h6>
                        <button class="btn btn-primary" style="font-size: 8px; width: 140px;">Ir a Hirstorial de
                            Notificaciones</button>
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
@endsection
