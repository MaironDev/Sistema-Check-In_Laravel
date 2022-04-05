@extends('template')
@section('content')

<div class="column"><p class="subtitle is-5">La consulta obtuvo los siguientes resultados:</p></div>

<div class="column">
    <div class="column">
        <div class="column">
            <div class="card-header bg-success text-white">
                <div class="column "><h3 class="title is-4">DATOS PERSONALES</h3></div>
            </div>
            <div class="column">
                <div>
                    <strong>Cedula:</strong><span style="margin-left: 10px;" >{{$persona->cedula}}</span><br>
                    <strong>Nombre:</strong><span style="margin-left: 10px;">{{$persona->nombre." ".$persona->apellidos}}</span><br>
                    <strong>Codigo:</strong><span style="margin-left: 10px;" >{{$persona->codigo}}</span><br>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="column">
            <div class="card-header bg-success text-white">
                <div class="column "><h3 class="title is-4"> ESQUEMA DEL VUELO</h3></div>
            </div>
            <div class="column">
                <div class="column">
                    <div class="col-sm-6">
                        <strong>Vuelo:</strong><span style="margin-left: 10px;" >{{$vuelo->vuelo}}</span><br>
                        <strong>Grupo:</strong><span style="margin-left: 10px;" >{{$vuelo->grupo}}</span><br>
                        <strong>Puesto:</strong><span style="margin-left: 10px;" >{{$vuelo->asiento}}</span><br>
                        <strong>Aerolinea:</strong><span style="margin-left: 10px;" >{{$vuelo->operador}}</span><br>
                    </div>
                    <div class="col-sm-6 border-start">
                        <strong>Fecha de salida:</strong><span style="margin-left: 10px;" >{{$vuelo->fecha_salida}}</span><br>
                        <strong>Ingreso:</strong><span style="margin-left: 10px;" >{{Date("H:s a", strtotime($vuelo->hora_inicio))}}</span><br>
                        <strong>Despegue:</strong><span style="margin-left: 10px;" >{{Date("H:s a", strtotime($vuelo->hora_salida))}}</span><br>
                        <strong>Origen:</strong><span style="margin-left: 10px;" >{{$vuelo->origen}}</span><br>
                        <strong>Destino:</strong><span style="margin-left: 10px;" >{{$vuelo->destino}}</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
