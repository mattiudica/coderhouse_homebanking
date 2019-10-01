@extends('layouts.app',[
    'titlePage' => 'Pago de Servicios',
    'homePage' => false,
    ])
@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('addsuccess') }}</strong>
            </div>
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
                <button type="submit" class="btn btn-success btn-lg btn-block">Pagar</button>
            </form>
        </div>
    </div>
</div>
@endsection