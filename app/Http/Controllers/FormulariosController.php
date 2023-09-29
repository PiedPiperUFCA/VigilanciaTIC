<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function influenza(){
       
        return view('forms.influenza');
    }
}
