@extends('layouts.app',[
    'titlePage' => 'Bienvenido a tu Homebanking' ])
@section('content')
        <div class="row text-center justify-content-center">
            <div class="col-3">
                <div class="card card_padding">
                    <img src="{{ asset('image/bank.png') }}" class="card-img-top img_size" alt="...">
                    <div class="card-body">
                        <a href="{{ url('/pagos') }}" class="">
                            <h5 class="card-title">Pagos</h5>
                        </a>
                        <p class="card-text">Gestiona todos tus pagos desde donde estes!</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card card_padding">
                    <img src="{{ asset('image/bank2.png') }}" class="card-img-top img_size" alt="...">
                    <div class="card-body">
                        <a href="{{ url('/inversiones') }}" class="">
                            <h5 class="card-title">Inversiones</h5>
                        </a>
                        <p class="card-text">Checkea las acciones al instante</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card card_padding">
                    <img src="{{ asset('image/bank3.png') }}" class="card-img-top img_size" alt="...">
                    <div class="card-body">
                        <a href="{{ url('/balance') }}" class="">
                            <h5 class="card-title">Balance</h5>
                        </a>
                        <p class="card-text">Mantene el control de tus gastos de forma sencilla</p>
                    </div>
                </div>
            </div>
        </div>
@endsection