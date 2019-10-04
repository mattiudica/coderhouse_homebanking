@extends('layouts.app',[
    'titlePage' => 'Panel Usuario',
    'homePage' => true,
    'page' => 'Panel',
    'jumboText'=>'Bienvenido a tu homebanking Matias. Gestiona y controla tus operaciones desde donde estes.'
     ])
@section('content')

<div class="text-center">
    <div class="row  justify-content-center">
        <div class="col-3">
            <div class="card border-light card_padding  rounded-circle">
                <img src="{{ asset('image/bank.png') }}" class="card-img-top img_size" alt="...">
                <div class="card-body">
                    <a href="{{ url('/services/create') }}">
                        <h5 class="card-title">Servicios</h5>
                    </a>
                    <p class="card-text">Gestiona todos tus pagos dede aqui</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-light card_padding  rounded-circle">
                <img src="{{ asset('image/bank2.png') }}" class="card-img-top img_size" alt="...">
                <div class="card-body">
                    <a href="{{ url('/invest/create') }}">
                        <h5 class="card-title">Inversiones</h5>
                    </a>
                    <p class="card-text">Revisa tus acciones al instante</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-light card_padding rounded-circle">
                <img src="{{ asset('image/bank3.png') }}" class="card-img-top img_size " alt="...">
                <div class="card-body">
                    <a href="{{ url('/balance/index') }}">
                        <h5 class="card-title">Balance</h5>
                    </a>
                    <p class="card-text">Mantene control de tus gastos</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection