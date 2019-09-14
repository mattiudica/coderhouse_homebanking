<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('person', function(){
    
    $personList = [
        "Matias", "Tomas", "Rocky"
    ];
    
    $res = [
        "status" => "ok",
        "code" => 1005,
        "data" => $personList
    ];

    return response()->json($res);
});

Route::get('person/{id}', function($id){
    $personById = [
        "status" => "ok",
        "code" => 1001,
        "data" => "Persona " . $id
    ];
    return response()->json($personById);
});

Route::post("person", function(){
    $person = [
        "status"=> "ok",
        "code" => 1002,
        "data" => "Se crea nueva persona"

    ];
});

Route::put("person", function(){
    $person = [
        "status"=> "ok",
        "code" => 1003,
        "data" => "Se modifica persona"
    ];
});

Route::delete("person", function(){
    $person = [
        "status"=> "ok",
        "code" => 1004,
        "data" => "Se borra persona"
    ];
});








Route::get('pagos', function(){
    
    $pagosList = [
         [
            "servicio" => "edenor",
            "valor" => 500,
         ],
         [
            "servicio" => "metrogas",
            "valor" => 800,
         ]
    ];
    
    $res = [
        "status" => "ok",
        "code" => 1005,
        "data" => $pagosList
    ];

    return response()->json($res);
});

Route::get('pagos/{id}/{val}', function($id,$val){
    $pagosById = [
        "status" => "ok",
        "code" => 1001,
        "data" => "Servio " . $id ." por " . "$" . $val
    ];
    return response()->json($pagosById);
});



Route::post('pagos', function(){
    $pago = [
        "status"=> "ok",
        "code" => 1002,
        "data" => "Nuevo pago de servicio"
    ];

    return response()->json($pago);
});


Route::delete('pagos', function(){
    $deletePago = [
        "status"=> "ok",
        "code" => 1004,
        "data" => "servicio borrado de X"
    ];

    return response()->json($deletePago);
});