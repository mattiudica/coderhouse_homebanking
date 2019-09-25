@extends('layouts.app',[
    'titlePage' => 'Inversiones' ])
@section('content')
        <table class="table table-borderless table-dark" id="invest-table">
            <thead>
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Acciones</th>
                    <th scope="col">Valor x Accion</th>
                    <th scope="col" class="float-right">Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Arcor</td>
                    <td>1000</td>
                    <td>200</td>
                    <td>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-success">Vender</button>
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
@endsection