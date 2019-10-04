<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;
use App\Service;
use Session;

class BalanceController extends Controller
{
    
    public function index(){
        //$balances = Balance::orderBy('id', 'desc')->paginate(10);
        $balances = Balance::all();

        $saldo=0;
        $saldos=[];
        
        foreach($balances as $b){
            $saldo += $b->importe;
            array_push($saldos, $saldo);
        }
        
        $init = count($saldos)-1;

        $balances_or = Balance::orderBy('id', 'desc')->get();
        
        return view('balance.indexBalance')->with([
            
            'balances'=>$balances_or,
            'saldos'=> $saldos,
            'init' => $init,
        ]); 
        
    }

    public function create(){
        $services = Service::all();
        
        return view('balance.createBalance')->with('services', $services);

    }
    
    //check saldo
    public function checkSaldo($pay){
        $getBalnce = Balance::all();
        $saldo = 0;
        foreach($getBalnce as $disc){
            $saldo += $disc->importe;
        }
        $saldo += $pay;

        return ($saldo >0 ? true : false);

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
        
        //check saldo
        if( $this->checkSaldo($importe)){

            //store in DB

            $balance = new Balance();
            $balance ->descripcion = $descripcion;
            $balance ->importe = $importe;
            $balance ->comprobante = $comprobante;
            
            $balance->save();
    
            Session::flash('paysuccess','Servicio pagado correctamente!');
    
            //redirect to
    
            return redirect()->route('last');
        
        }else{

            //cancel pay
            //redirect to
    
            Session::flash('payerror','Error al procesar pago, saldo insuficiente');
            return redirect()->route('service_list');
        }
        
    }
    
    public function show(){ 

        $last = Balance::orderBy('created_at', 'desc')->first();
        
        return view('balance.lastBalance')->with('last',$last);
        

    }
    
}
