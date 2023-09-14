<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
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

    public function influenza(){
       
        return view('forms.influenza');
    }

}
