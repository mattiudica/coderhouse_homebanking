<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invest;

class InvestController extends Controller
{
    public function create(){
        return view('invest.createInvest');
        
    }
}
