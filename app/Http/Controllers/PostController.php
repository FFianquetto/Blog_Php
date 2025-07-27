<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Aquí se muestran los posts"; 
    }

    public function create()
    {
        return "Aquí se crean posts";  
    }
    public function show($post) 
    {
        return "Aquí se mostrara el post {$post}";  
    }
}
