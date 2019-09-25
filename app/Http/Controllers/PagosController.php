<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{


    public function index(){
        return view('pay.pagos');
        
    }

    public function payList(Request $request){
        $ref = $request->input('ref');
        
        if($ref == null){
            return view('pay.pagos');
        }else{
            $inputs=[
                'selectServ' => $request->input('select-serv'),
                'ref' => $ref,
                'amount' => $request->input('amount'),
            ];

            return view('pay.lista_pagos')->with($inputs);
        }


    }


}
