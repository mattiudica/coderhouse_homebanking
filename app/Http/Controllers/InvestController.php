<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invest;
//use App\Http\Resources\Change;

class InvestController extends Controller
{
    public function create(Request $request){

        return view('invest.createInvest');
    
    }

    public function change(Request $request){
        $source = $request->input('source');
        $target = $request->input('target');
        //$key = 2440|DkphfrSjVHWeK3qXDjpWS3eb71^yUTts;
        $APIroute = 'https://api.cambio.today/v1/quotes/'.$source.'/'.$target.'/json?quantity=1&key=2440|DkphfrSjVHWeK3qXDjpWS3eb71^yUTts';
        
        $getJSON = file_get_contents($APIroute);
        $getDatos = json_decode($getJSON,true);

        foreach($getDatos as $dato){
            $amount = $dato["amount"];
            $target = $dato["target"];
        }
        
        
        return redirect()->route('invest')->with([
            'amount' => $amount, 
            'target'=> $target,
            ]);
    
    }
}
