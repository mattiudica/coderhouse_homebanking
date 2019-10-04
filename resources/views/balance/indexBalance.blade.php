@extends('layouts.app',[
    'titlePage' => 'Estado de Cuenta',
    'homePage' => false,
    'page' => 'Balance', ])
@section('content')

    <div class="row justify-content-center text-center">
        <div class="col-md-9">
            <div class="text-left">
                <div class="form-group">
                    <h3>Cuenta 032-366474/9</h3>
                </div>
                <div class="form-group">
                    <h5>Caja de Ahorro en Pesos<h5>
                    <strong>{{end($saldos)}}</strong>
                </div>
            </div>
            <br>
            <table class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <th scope="col"><p class="lead">Fecha</p></th>
                        <th scope="col"><p class="lead">Descripcion</p></th>
                        <th scope="col"><p class="lead">Importe</p></th>
                        <th scope="col"><p class="lead">Saldo</p></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($balances as $each)
                        <tr>
                            <th scope="col">{{ date('j/m/Y', strtotime($each->created_at)) }}</th>
                            <th scope="col">{{ substr(($each->descripcion),0,12)}} {{strlen($each->descripcion) > 12 ? "..." : "" }}</th>
                            <th scope="col">${{ $each->importe }}</th>
                            <th scope="col">{{$saldos[$init--]}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="text-center">
                !! $balances->links(); !!
            </div>
            <br>
            <div class="text-right">
                <button type="button" class="btn btn-info btn-sm">Descarga</button>
            </div>
        </div>
    </div>

@endsection