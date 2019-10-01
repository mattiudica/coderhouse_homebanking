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
            'referencia'=>'required|integer',
        ));
        $descripcion = $request->input('descripcion');
        $descripcion = strtolower($descripcion);
        
        //store in DB

        $service = new Service();
        $service->descripcion = $descripcion;
        $service->referencia = $request->input('referencia');
        


        $service->save();

        //session flash message

        Session::flash('addsuccess','Servicio agregado correctamente!');

        //redirect to

        return redirect()->route('service_list');
    }
    
}
