<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;

class PayController extends Controller
{

    public function index(){

        $service = Service::orderBy('created_at', 'desc')->first();

        return view('services.indexPay')->with('service',$service);

    }

    public function create(){
        return view('services.createPay');
        
    }
    public function store(Request $request){

        //validate data
        $this->validate($request, array(
            'descripcion'=>'required|max:30',
            'referencia'=>'required|integer',
            'importe'=>'required|integer',

        ));
        $descripcion = $request->input('descripcion');
        $importe = $request->input('importe');
        if($descripcion != "Deposito"){
            $importe = $importe * -1;
        }
        
        //store in DB

        $service = new Service();
        $service->descripcion = $descripcion;
        $service->referencia = $request->input('referencia');
        $service->importe = $importe;
        


        $service->save();

        //session flash message

        Session::flash('success','Pago realizado correctamente!');

        //redirect to

        return redirect()->route('last_pay');
    }
    
}
