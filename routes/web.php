<?php

use App\Http\Controllers\GraficaController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;


// ruta par llamar al controlador home 
Route::get('/', homeController::class );
// ruta par llamar al controlador grafica
Route::resource('graficas', GraficaController::class);
