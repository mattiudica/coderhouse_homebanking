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
        //inicializo el saldo en 0, el array saldos[] va a guardar cada saldo actualizado por operacion
        $saldo=0;
        $saldos=[];
        
        foreach($balances as $b){
            $saldo += $b->importe;
            //guardo los saldos
            array_push($saldos, $saldo);
        }
        //lo uso como contador para ordenar los saldos acorde su pago en el balance de forma desc
        $init = count($saldos)-1;

        $balances_or = Balance::orderBy('id', 'desc')->get();
        
        return view('balance.indexBalance')->with([
            
            'balances'=>$balances_or,
            'saldos'=> $saldos,
            'init' => $init,
        ]); 
        
    }

    //la creacion de un nuevo balance como tal no existe ya que es solo un operacion de actualizacion,
    //lo que se crea es un nuevo pago de servicio
    public function create(){
        $services = Service::all();
        
        return view('balance.createBalance')->with('services', $services);

    }
    
    //funcion para chekear que el saldo actual es positivo y mayor o igual al pago que intento hacer
    public static function checkSaldo($pay){
        $getBalnce = Balance::all();
        $saldo = 0;
        foreach($getBalnce as $desc){
            $saldo += $desc->importe;
        }

        return ($saldo >= $pay ? true : false);

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
    
            //redir al detalle del ultimo pago con mensaje de exito
    
            return redirect()->route('last');
        
        }else{

            //cancel pay
            //redir a la lista de pagos con mensaje de error
    
            Session::flash('payerror','Error al procesar pago, saldo insuficiente');
            return redirect()->route('service_list');
        }
        
    }

    //como aun no usabamos los controlladores resource cree un show() "casero" al ultimo pago
    public function show(){ 

        $last = Balance::orderBy('created_at', 'desc')->first();
        
        return view('balance.lastBalance')->with('last',$last);
        

    }
    
}
