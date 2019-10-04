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
                    <h4>Cuenta 032-366474/9</h4>
                    <h5>Caja de Ahorro en Pesos<h5>
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
                            <td><p>{{ substr(($each->descripcion),0,12)}} {{strlen($each->descripcion) > 12 ? "..." : "" }}</p></th>
                            <td><p>{{ date('j/m/Y', strtotime($each->created_at)) }}</p></th>
                            <td><p>${{ $each->importe }}</p></th>
                            <td><p style="color:green;font-weight:bold">${{$saldos[$init--]}}</p></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="text-center">
              "{ !! $balances->links(); !! }"
            </div>
            <br>
            <div class="text-right">
                <button type="button" class="btn btn-info btn-sm">Descarga</button>
            </div>
        </div>
    </div>

@endsection