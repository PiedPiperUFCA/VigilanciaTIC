<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FormulariosController;


Route::get('/',[PrincipalController::class, 'index']);
Route::get('/formularios',[PrincipalController::class, 'forms']);
Route::get('/suporte',[PrincipalController::class, 'suporte']);

Route::get('formularios/influenza',[FormulariosController::class, 'influenza']);