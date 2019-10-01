@extends('layouts.app',[
    'titlePage' => 'Bienvenido!',
    'homePage' => true,
     ])
@section('content')
<div class="container text-center">
    <div class="row  justify-content-center">
        <div class="col-3">
            <div class="card border-light card_padding  rounded-circle">
                <img src="{{ asset('image/bank.png') }}" class="card-img-top img_size" alt="...">
                <div class="card-body">
                    <a href="{{ url('/services/create') }}">
                        <h5 class="card-title">Pagos</h5>
                    </a>
                    <p class="card-text">Gestiona todos tus pagos desde donde estes!</p>
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
                    <p class="card-text">Checkea las acciones al instante</p>
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
                    <p class="card-text">Mantene el control de tus gastos de forma sencilla</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection