<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //La funcion __Invoke sireve para los controladores con un solo metodo
    
    public function index()
    {
        return "Bienvenido a la mainPage";
    }
}
