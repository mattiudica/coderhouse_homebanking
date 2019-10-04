@extends('layouts.app',[
    'titlePage' => 'Cartera de Inversiones',
    'homePage' => false,
    'page' => 'Cartera',
    'jumboText' => 'Operar en el mercado bursátil se hace mediante un bróker, que se dedica a la compra y venta de acciones en nombre de su cliente según el tipo de órdenes que éste le haya dado. La nueva plataforma, Banquito Trader, facilita formación que ayuda a los usuarios a tomar las decisiones que mejor se adapten a su perfil inversor y convertirse de ese modo en su propio bróker online.'
     ])
@section('content')

<div class="row justify-content-center text-center">
    <div class="col-md-9">
        <table class="table table-borderless table-striped" id="invest-table">
            <thead>
                <tr>
                    <th scope="col"><p class="lead">Empresa</p></th>
                    <th scope="col"><p class="lead">Acciones</p></th>
                    <th scope="col"><p class="lead">Valor</p> </th>
                    <th scope="col" class="float-right"><p class="lead">Gestion</p> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Arcor</strong></td>
                    <td><strong>500</strong></td>
                    <td><strong>25</strong></td>
                    <td>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-sm btn-secondary">Vender</button>
                            <button type="button" class="btn btn-sm btn-info">Comprar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection