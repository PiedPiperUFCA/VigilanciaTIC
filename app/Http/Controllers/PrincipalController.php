<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
       
        return view('inicio');
    }
    public function forms(){
       
        return view('formularios');
    }
    public function suporte(){
       
        return view('suporte');
    }
}
