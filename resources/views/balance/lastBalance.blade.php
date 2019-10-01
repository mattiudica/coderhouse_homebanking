@extends('layouts.app',[
    'titlePage' => 'Ultimos Servicios',
    'homePage' => false,
    'page' => 'Pago', ])
@section('content')

<div class="alert alert-success text-left" role="alert">
    <strong>{{ Session::get('paysuccess') }}</strong>
</div>
<br>
<div class="row justify-content-center text-center">
    <div class="col-md-9">
            <div class="form-group">
                <h2>{{($last["descripcion"])}}</h2>
                <h3>Monto: ${{($last["importe"])}}</h3>
                <h3>Comprobante: #{{($last["comprobante"])}}</h3>
                <h5>Fecha: {{($last["created_at"])}}</h5>
            </div>
            <br>
            <br>
            <a href="{{ url('/balance/index') }}" class="button btn-lg btn-primary">Ver Balance</a>
    </div>
</div>
@endsection