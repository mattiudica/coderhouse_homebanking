@extends('layouts.app',[
    'titlePage' => 'Cartera de Inversiones',
    'homePage' => false,
    'page' => 'Cartera',
    'jumboText' => 'La nueva plataforma, Banquito Trader, facilita formación que ayuda a los usuarios a tomar las decisiones que mejor se adapten a su perfil inversor y convertirse de ese modo en su propio bróker online.'
     ])
@section('content')

<div class="row justify-content-center text-center">
    <div class="col-md-9">

        <nav class="navbar navbar-light justify-content-end" style="background-color: #e3f2fd;margin-bottom:40px">
            <form method='post' class="form-inline" action= "{{ url('invest/create/coin') }}" >
                <select class="custom-select" name="source" id="source">
                    <option value="USD">USD</option>
                    <option value="ARS">ARS</option>
                    <option value="EUR">EUR</option>
                    <option value="BRL">BRL</option>
                </select>
                <div class="nav-item nav-link disabled">/</div>
                <select class="custom-select" name="target" id="target">
                    <option value="ARS">ARS</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="BRL">BRL</option>
                </select>
                <button type="submit" class="btn btn-link">Cambio</button>
            </form>
            @isset($getDatos)                
                @foreach($getDatos as $dato)
                        {{ $dato["value"] }}
                        <div class="nav-item nav-link"> </div>
                @endforeach
            @endisset
        </nav>

        <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Empresa</th>
                        <th scope="col">Acciones</th>
                        <th scope="col">Valor de Acción</th>
                        <th class="text-right" scope="col">Compraventa de Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($investments as $inv)
                        <tr>
                            <td>{{$inv->empresa}}</td>
                            <td>{{$inv->acciones}} / {{$inv->total}}</td>
                            <td>{{$inv->valor}}</td>
                            <td class="text-right">
                                <a href="{{ route('investment.buy', ['id' => $inv->id]) }}" class="btn btn-primary">Comprar</a>
                                <a href="{{ route('investment.sell', ['id' => $inv->id]) }}" class="btn btn-primary">Vender</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>


<br>
<br>


<div class="text-center" style="margin-top:60px;">
    La <a href="https://cambio.today">conversión moneda</a> proporcionada por cambio.today.
</div>

@endsection