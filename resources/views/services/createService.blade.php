@extends('layouts.app',[
    'titlePage' => 'Servicios',
    'homePage' => false,
    ])
@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ url('services/store') }}" method="post" data-parsley-validate="">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Nuevo Servicio</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required="" maxlength="30">
                </div>
                <div class="form-group text-center">
                    <label for="referencia">N° de Cliente / Referencia</label>
                    <input type="number" class="form-control" id="referencia" name="referencia"  required="" data-parsley-type="integer">
                </div>
                <div class="form-group  text-center">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar Nuevo</button>
                    <a href="{{ url('services/services_list') }}" class="btn btn-success btn-lg btn-block">Mis Servicios</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection