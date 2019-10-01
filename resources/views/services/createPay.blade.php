@extends('layouts.app',[
    'titlePage' => 'Pago de Servicios',
    'homePage' => false,
    ])
@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ url('/services/store') }}" method="post" data-parsley-validate="">
                @csrf
                <div id="show-serv-control">
                    <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="nuevo-serv-buscar">Nuevo Servicio</label>
                                <input type="text" class="form-control" id="nuevo-serv-buscar" placeholder="">
                            </div>
                        <div class="form-group col-md-6">
                            <label for="nuevo-serv-cuenta">N° de Cliente / Cuenta</label>
                            <input type="text" class="form-control" id="nuevo-serv-cuenta" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-light">Agregar</button>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="descripcion">Mis Servicios</label>
                    <select class="form-control" id="descripcion" name="descripcion" required="" maxlength="30">
                        <option class="starter-select"></option>
                        <option>Edenor</option>
                        <option>Metrogas</option>
                        <option>Cablevision</option>
                        <option>Movistar</option>
                        <option>Deposito</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="referencia">Referencia</label>
                    <input type="number" class="form-control" id="referencia" name="referencia" required="" data-parsley-type="integer">
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="importe">Importe</label>
                    <input type="number" class="form-control" id="importe" name="importe" required="" data-parsley-type="integer">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Pagar</button>
                <button type="reset" class="btn btn-danger">Volver</button>
            </form>
        </div>
    </div>
</div>
@endsection