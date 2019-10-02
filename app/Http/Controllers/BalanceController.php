<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;
use App\Service;
use Session;

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

    public function create(){
        $services = Service::all();
        
        return view('balance.createBalance')->with('services', $services);

    }

    public function store(Request $request){ 

        function random_string() {
            $rand_len = random_int(6,12); 
            return substr(bin2hex(random_bytes($rand_len)),0, $rand_len); 
        }
         
        $comprobante = random_string(); 

        //validate data
        $this->validate($request, array(
            'descripcion'=>'required',
            'importe'=>'required|integer',
        ));

        $descripcion = $request->input('descripcion');
        $descripcion = strtolower($descripcion);
        $importe = $request->input('importe');

        if($descripcion != "deposito"){
            $importe = $importe * -1;
        }
        //store in DB
   

        $balance = new Balance();
        $balance ->descripcion = $descripcion;
        $balance ->importe = $importe;
        $balance ->comprobante = $comprobante;
        


        $balance->save();


        //session flash message

        Session::flash('paysuccess','Servicio pagado correctamente!');

        //redirect to

        return redirect()->route('last');
        
    }
    
    public function show(){ 

        $last = Balance::orderBy('created_at', 'desc')->first();
        
        return view('balance.lastBalance')->with('last',$last);
        

    }
    
}
