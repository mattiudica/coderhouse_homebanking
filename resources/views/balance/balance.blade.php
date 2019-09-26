@extends('layouts.app',[
    'titlePage' => 'Balance Financiero' ])
@section('content')

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Importe</th>
                </tr>
            </thead>
            <tbody>
    
                    @for($i = 0; $i< count($operaciones); $i++)
                        @foreach($operaciones[$i] as $op)
                            <tr>
                                <th scope="col"> {{$op}} </th>
                                <th scope="col">{{$op}}</th>
                                <th scope="col">{{$op}}</th>
                            </tr>
                        @endforeach
                    @endfor
            </tbody>
        </table>
    <br>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">Descarga</button>
    </div>

@endsection