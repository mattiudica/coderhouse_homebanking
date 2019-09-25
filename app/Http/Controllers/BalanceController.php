<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller{
    
    public function index(){

        $nuevaOp1 = [
            'fecha'=>'19/06/2019',
            'importe'=>1000,
            'concepto'=>'deposito',
        ];
        
        $nuevaOp2 = [
            'fecha'=>'20/06/2019',
            'importe'=>-500,
            'concepto'=>'cable',
        ];
        
        $nuevaOp3 = [
            'fecha'=>'22/06/2019',
            'importe'=>-200,
            'concepto'=>'movistar',
        ];
        
        $nuevaOp4 = [
            'fecha'=>'25/06/2019',
            'importe'=>100,
            'concepto'=>'deposito',
        ];

        $listaOps = [];

        array_push($listaOps,$nuevaOp1,$nuevaOp2,$nuevaOp3 ,$nuevaOp4);     
         
        return view('balance.balance')->with($listaOps);
        
    }
}
