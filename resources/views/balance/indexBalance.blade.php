@extends('layouts.app',[
    'titlePage' => 'Estado de Cuenta',
    'homePage' => false,
    'page' => 'Balance', ])
@section('content')
<div class="text-center">
    <div class="form-group">
        <h3>Cuenta 032-366474/9</h3>
    </div>
    <div class="form-group">
        <strong>Caja de Ahorro en Pesos</strong>
    </div>
</div>
<br>
    <div class="row justify-content-center text-center">
        <div class="col-md-9">
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
                    @for($i = 0; $i< count($balances); $i++)
                        <tr>
                            <th scope="col">{{($balances[$i]["created_at"])}}</th>
                            <th scope="col">{{($balances[$i]["descripcion"])}}</th>
                            <th scope="col">{{($balances[$i]["importe"])}}</th>
                            <th scope="col">{{$saldo += $balances[$i]["importe"]}}</th>
                        </tr>
                    @endfor
                </tbody>
            </table>
            <br>
            <br>
            <div class="text-right">
                <button type="button" class="btn btn-info btn-sm">Descarga</button>
            </div>
        </div>
    </div>

@endsection