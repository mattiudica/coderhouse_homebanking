<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;

class BalanceController extends Controller
{
    public function index(){
        $balances = Balance::all();

        $saldo = 0;

        return view('balance.indexBalance')->with(array(
            
            'balances'=>$balances,
            'saldo'=>$saldo
        ));
        
    }

   /* public function create(){
        return view('form.create');
        
    }*/

    public function store(Request $request){ 

        //validate data (ya viene validada en este caso)


        //store in DB

        $balance = new Balance();
        $balance ->descripcion = $request->input('descripcion');
        $balance ->importe = $request->input('importe');
        $balance ->fecha = $request->input('fecha');
        


        $balance->save();

        //redirect to

        return redirect()->route('index');
        
    }    
    
}
