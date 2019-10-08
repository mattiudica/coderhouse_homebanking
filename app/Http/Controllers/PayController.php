<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;

class PayController extends Controller
{

    public function create(){
        return view('services.createService');
        
    }
    public function store(Request $request){

        //validate data
        $this->validate($request, array(
            'descripcion'=>'required|max:255',
            'referencia'=>'required|alpha_num',
        ));

        $descripcion = $request->input('descripcion');
        $descripcion = strtolower($descripcion);
        
        //store in DB

        //Guardo servicios en su tabla, por separado del balance
        //Cada servicio tiene referencia y descripcion, no importe, este se le da en la creacion de nuevo pago
        //en BalanceController

        $service = new Service();
        $service->descripcion = $descripcion;
        $service->referencia = $request->input('referencia');
        


        $service->save();

        //session flash message

        Session::flash('addsuccess','Servicio agregado correctamente!');

        //redir a la vista de creacion de pago con la lista de servicios con mensaje de exito

        return redirect()->route('service_list');
    }
    
}
