<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function create(){
        
        return view ('frontend.investor-centre');
    }
    
}
