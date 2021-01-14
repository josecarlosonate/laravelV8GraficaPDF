<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //metodo autoinvocado para mostrar la vista de inicio
    public function __invoke()
    {
        //retorno vista home
        return view('home');
    }
}
