@extends('layouts.app',[
    'titlePage' => 'Balance Financiero',
    'homePage' => false, ])
@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Importe</th>
                        <th scope="col">Saldo</th>
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
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-lg">Descarga</button>
            </div>
        </div>
    </div>
</div>
@endsection