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