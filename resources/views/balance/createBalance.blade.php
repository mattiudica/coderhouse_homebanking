@extends('layouts.app',[
    'titlePage' => 'Pago de Servicios',
    'homePage' => false,
    'page' => 'Servicios',
    ])
@section('content')
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            @if(Session::has('payerror'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ Session::get('payerror') }}</strong>
            </div>
            @endif
            @if(Session::has('addsuccess'))
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('addsuccess') }}</strong>
            </div>
            @endif
            <form action="{{ url('/balance/store') }}" method="post" data-parsley-validate="">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Mis Servicios</label>
                    <select class="form-control" id="descripcion" name="descripcion" required="">
                        <option class="starter-select"></option>
                        @for($i = 0; $i< count($services); $i++)
                        <option>{{($services[$i]["descripcion"])}}</option>
                        @endfor
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label class="form-check-label" for="importe">Importe</label>
                    <input type="number" class="form-control" id="importe" name="importe" required="" data-parsley-type="integer">
                </div>
                <br>
                <div class="form-group">
                    <a href="{{ url('/services/create') }}" class="btn btn-success btn-sm text-left"><=Nuevo</a>
                    <button type="submit" class="btn btn-info btn-sm text-right">Pagar</button>   
                </div>
            </form>
        </div>
    </div>
@endsection