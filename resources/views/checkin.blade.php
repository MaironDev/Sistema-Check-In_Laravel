@extends('template')
@section('content')
    <div class="column">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box">
                <div class="card-body">
                    <div class="column"><h3 class="title is-4">POR FAVOR, RELLENE EL FORMULARIO PARA VALIDAR SU ESTADO</h3></div>

                    <form action="/reserva/show" method="POST">
                        @csrf

                        <div class="column">
                            <div class="col-sm-4">
                              <div class="mb-3">
                                <label for="codigo" class="label">CODIGO:</label>
                                <input type="text" id="codigo" name="codigo" class="input is-normal" placeholder="Codigo de reserva" required>
                            </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="fecha" class="label">FECHA:</label>
                                    <input type="date" id="fecha"  name="fecha" class="input is-normal" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="hora" class="label">HORA</label>
                                    <input type="time" id="hora" name="hora" class="input is-normal" required>
                                </div>
                            </div>
                            <br>

                            <button type="submit" class="button is-primary ">Validar</button>

                          </div>


                    </form>
                    @if (isset($error))
                        <div class="alert alert-danger mt-3">
                            <span>Informacion inválida, intente de nuevo.</span><br>
                            {{$error}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

