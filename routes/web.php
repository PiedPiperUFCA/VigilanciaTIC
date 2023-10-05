<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FormulariosController;


Route::get('/',[PrincipalController::class, 'index']);
Route::get('/formularios',[PrincipalController::class, 'forms']);
Route::get('/suporte',[PrincipalController::class, 'suporte']);

Route::get('formularios/influenza',[FormulariosController::class, 'influenza']);


# rotas para sb admin
Route::get('/vigep-admin',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::resource('/forms',\App\Http\Controllers\FormsController::class);
Route::get('/history', function (){
    return view('layouts.forms_history');
});
Route::get('/login', function (){
   return view('layouts.login');
});
