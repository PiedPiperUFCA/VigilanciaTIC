<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormularioController;

Route::get('/',[FormularioController::class, 'index']);
Route::get('/formularios',[FormularioController::class, 'forms']);
Route::get('/suporte',[FormularioController::class, 'suporte']);
Route::get('formularios/influenza',[FormularioController::class, 'influenza']);