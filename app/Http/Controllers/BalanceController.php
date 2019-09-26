<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller{
    
    public function index(){

        $Op1 = [
            'fecha'=>'19/06/2019',
            'importe'=>1000,
            'concepto'=>'deposito',
        ];
        
        $Op2 = [
            'fecha'=>'20/06/2019',
            'importe'=>-500,
            'concepto'=>'cable',
        ];
        
        $Op3 = [
            'fecha'=>'22/06/2019',
            'importe'=>-200,
            'concepto'=>'movistar',
        ];
        
        $Op4 = [
            'fecha'=>'25/06/2019',
            'importe'=>100,
            'concepto'=>'deposito',
        ];

        $listaOps = [];
        array_push($listaOps,$Op1,$Op2,$Op3 ,$Op4);
         
        return view('balance.balance')->with('operaciones',$listaOps);
        
    }
}
