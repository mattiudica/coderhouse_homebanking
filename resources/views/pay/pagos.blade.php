@extends('layouts.app',[
    'titlePage' => 'Pago de Servicios' ])
@section('content')
        <form method="get" action="{{ url('lista_pagos')}}">
            <!--<div id="show-serv-control">-->
            <div>
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
                <label for="">Mis Servicios</label>
                <select class="form-control" id="select-serv" name="select-serv" required>
                    <option class="starter-select"></option>
                    <option>Edenor</option>
                    <option>Metrogas</option>
                    <option>Cablevision</option>
                    <option>Movistar</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="">Referencia</label>
                <input type="text" class="form-control" id="ref" name="ref" placeholder="" required>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="exampleCheck1">Importe</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Pagar</button>
            <button type="reset" class="btn btn-danger">Volver</button>
        </form>
@endsection