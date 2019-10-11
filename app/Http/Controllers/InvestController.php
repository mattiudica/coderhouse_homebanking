<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invest;
use App\Balance;
//use App\Http\Resources\Change;

class InvestController extends Controller
{   
    //funcion de maxi para crear acciones aleatorias y guardarlas en DB
    public function create(){
        $investments = Invest::all();
        
        foreach($investments as $inv){
            $operation = rand(1, 3);
            if($operation == 1){
                $inv->valor = $inv->valor / 2;
            } else {
                $inv->valor = $inv->valor * 1.25;
            }
            $inv->save();
        }

        return view('invest.createInvest')->with('investments', $investments);
    
    }

    public static function checkSaldo($pay){
        $getBalnce = Balance::all();
        $saldo = 0;
        foreach($getBalnce as $desc){
            $saldo += $desc->importe;
        }
        $saldo += $pay;

        return $saldo;

    }

    public static function comprobante(){

        $rand_len = random_int(6,12); 
        return substr(bin2hex(random_bytes($rand_len)),0, $rand_len);  


    }

    public function buy($id){
        
        $inv = Invest::find($id);
        if($inv->acciones > 0){
            $saldo = $this->checkSaldo(0);
            if($saldo >= $inv->valor){
                $inv->acciones -= 1;
                $inv->save();
                $balance = new Balance();
                $balance ->descripcion = "Compra de Accion: " . $inv->empresa;
                $balance->importe = $inv->valor * -1;
                $balance ->comprobante = $this->comprobante();
                $balance->save();
                dd("Se compro una accion de la empresa " . $inv->empresa);
            } else {
                dd("No tienes suficiente dinero en la cuenta!");
            }      
        } else {
            dd("No hay acciones para comprar!");
        }
    }

    public function sell($id){
        $inv = Invest::find($id);
        if($inv->acciones > 0){
            if($inv->acciones >= $inv->total){
                dd("No tenes acciones compradas!");
            }
            $saldo = $this->checkSaldo($inv->valor);
            if($saldo >= 0){
                $inv->acciones += 1;
                $inv->save();
                $balance = new Balance();
                $balance ->descripcion = "Venta de Accion: " . $inv->empresa;
                $balance->importe = $inv->valor;
                $balance ->comprobante = $this->comprobante();
                $balance->save();
                dd("Se vendio una accion de la empresa " . $inv->empresa);
            } else {
                dd("No tienes suficiente dinero en la cuenta!");
            }
            
        } else {
            dd("No hay acciones para vender!");
        }
    }    

}   


    /* 
    * Esta funcion la pense para pegarle a una api de cotizacion de monedas y mostrar el valor del cambio
    * que elija el usuario ej.: USD -> ARS,  actualizando la misma pagina con el resultado. No me salio hacer
    * el post a la misma pagina y que se refresque con el nav mostrando la cotizacion. ¿Como seria?...
    
    public function getCoin(Request $request){
        $source = $request->input('source');
        $target = $request->input('target');
        //$key = 2440|DkphfrSjVHWeK3qXDjpWS3eb71^yUTts;
        $APIroute = 'https://api.cambio.today/v1/quotes/'.$source.'/'.$target.'/json?quantity=1&key=2440|DkphfrSjVHWeK3qXDjpWS3eb71^yUTts';
        
        $getJSON = file_get_contents($APIroute);
        $getDatos = json_decode($getJSON,true);
        $investments = Invest::all();
        //$saldo = BalanceController::checkSaldo($valor***);
        
        foreach($investments as $inv){
            $operation = rand(1, 3);
            if($operation == 1){
                $inv->valor = $inv->valor / 2;
            } else {
                $inv->valor = $inv->valor * 2;
            }
            $inv->save();
        }
    
        return view('invest.createInvest')->with(['getDatos'=> $getDatos,'investments'=> $investments]);
    }
    */