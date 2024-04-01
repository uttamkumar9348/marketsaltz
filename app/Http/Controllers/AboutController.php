<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view ('frontend.about');
    }
    public function contact_us(){
        return view ('frontend.contact_us');
    }
}
