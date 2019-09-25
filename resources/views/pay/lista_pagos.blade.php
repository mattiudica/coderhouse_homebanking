@extends('layouts.app',[
    'titlePage' => 'Ultimos Servicios' ])
@section('content')

    @isset($selectServ)
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">{{$selectServ}}</h4>
            </div>
            <div class="d-flex w-100 justify-content-between">
                <h5>Referencia Nº {{$ref}}</h5>
            </div>
            <div class="d-flex w-100 justify-content-between">
                <h5>Monto: $ {{$amount}}</h5>
            </div>
        </a>
    </div>
    @endisset
    
@endsection