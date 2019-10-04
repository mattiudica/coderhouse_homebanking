@extends('layouts.app',[
    'titlePage' => 'Estado de Cuenta',
    'homePage' => false,
    'page' => 'Balance',
    'jumboText'=>'Consulta los ultimos movimientos y el saldo de tu cuenta a la fecha.'
     ])
@section('content')

    <div class="row justify-content-center text-center">
        <div class="col-md-9">
            <div class="text-left">
                <div class="form-group">
                    <h4 style="color:blue">Cuenta 032-366474/9</h4>
                    <h5 style="color:blue">Caja de Ahorro en Pesos<h5>
                    <h4 style="color:green"><strong>${{end($saldos)}}</strong></h4>
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
                            <th scope="col" style="color:green">${{$saldos[$init--]}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="text-center">
               "{ !! $balances->links(); !! }""
            </div>
            <br>
            <div class="text-right">
                <button type="button" class="btn btn-info btn-sm">Descarga</button>
            </div>
        </div>
    </div>

@endsection