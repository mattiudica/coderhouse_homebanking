@extends('layouts.app',[
    'titlePage' => 'Gestor de Servicios',
    'homePage' => false,
    'page' => 'Servicios',
    'jumboText'=>'Plataforma de gestion de pagos. Añadi nuevos servicios a tu lista, selecciona el indicado y paga, asi de sencillo.'
    ])
@section('content')

<div class="row justify-content-center text-center">
    <div class="col-md-6">
        <form action="{{ url('services/store') }}" method="post" data-parsley-validate="">
            @csrf
            <div class="form-group">
                <label for="descripcion"><p class="lead">Nuevo Servicio</p></label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required="" maxlength="30">
            </div>
            <div class="form-group text-center">
                <label for="referencia"><p class="lead">N° de Referencia</p> </label>
                <input type="text" class="form-control" id="referencia" name="referencia"  required="" data-parsley-type="alphanum" data-parsley-maxlength="12">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-sm">Agregar Nuevo</button>
                <a href="{{ url('services/services_list') }}" class="btn btn-success btn-sm">Mis Servicios =></a>
            </div>
        </form>
    </div>
</div>
@endsection