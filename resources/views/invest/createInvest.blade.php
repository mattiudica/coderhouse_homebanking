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
            @isset($passDatos)
                @foreach($passDatos as $dato)
                
                {{-- CUANDO QUIERO IMPRIMIR EL VALUE DEL JSON DECODIFICADO TIRAR UN ERROR OFFSET --}}
                {{-- PERO CUANDO HAGO UN DD() MUESTRA EL VALOR CORRECTO Y NO ENTIENDO PORQUE --}}
                
                    <div class="nav-item nav-link"> {{ $dato[value] }} </div>
                @endforeach
            @endisset
        </nav>



        <table class="table table-borderless table-striped" id="invest-table">
            <thead>
                <tr>
                    <th scope="col" class="float-left"><p class="lead">Empresa</p></th>
                    <th scope="col"><p class="lead">Acciones</p></th>
                    <th scope="col"><p class="lead">Valor</p> </th>
                </tr>
            </thead>
            <tbody>
                @foreach($investments as $inv)
                <tr>
                    <td class="text-left">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="company" id="company" value="option1" aria-label="...">
                            <label class="form-check-label" for="company" style="padding-left:5px;">{{$inv->empresa}}</label>
                        </div> 
                    </td>
                    <td><p style="color:blue;font-weight:bold">{{$inv->acciones}}</p></td>
                    <td><p style="color:green;font-weight:bold">${{$inv->valor}}</p></td>
                </tr>
                @endforeach
                    <td><p class="lead">Trader</p></td>
                    <td><button type="button" class="btn btn-sm btn-primary">Vender</button></td>
                    <td><button type="button" class="btn btn-sm btn-success">Comprar</button></td>
                </tr>
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