@extends('layouts.app',[
    'titlePage' => 'Ultimos Servicios',
    'homePage' => false, ])
@section('content')
<div class="container">
    <div class="alert alert-success" role="alert">
        <strong>{{ Session::get('success') }}</strong>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ url('/balance/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input name="descripcion" readonly id="descripcion" type="text" value='{{($service["descripcion"])}}'>
                </div>
                <div class="form-group">
                    <input type="integer" name="referencia" readonly id="referencia" value='{{$service["referencia"]}}'>
                </div>
                <div class="form-group">
                    <input type="integer" name="importe" readonly id="importe" value='{{$service["importe"]}}'>
                </div>
                <div class="form-group">
                    <input type="text" name="fecha" readonly id="fecha" value='{{$service["created_at"]}}'>
                </div>
                <br><br>
                <button type="submit" class="button btn-lg btn-primary">Ver Balance</button>
            </form>
        </div>
    </div>
</div>
@endsection