<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostController;

Route::get('/', [Homecontroller::class, 'index']); 

Route::get('/posts', [PostController::class, 'index']); 
Route::get('/posts/create', [PostController::class, 'create']); 
Route::get('/posts/{post}', [PostController::class, 'show']); 
// Route::get('/posts/create', function() 
// {
//     return "Aquí se crean posts"; 
// });

// Route::get('/posts/{post}', function($post) 
// {
//     return "Aquí se mostrara el post {$post}"; 
// });

Route::get('/posts/{post}/{cate}', function($post, $cate) 
{
    return "Aquí se mostrara el post {$post} de la categoria {$cate}"; 
});

//Si queremos que cate sea opcional
// Route::get('/posts/{post}/{cate?}', function($post, $cate = null)  
// {
//     if ($cate)
//     {
//         return "Aquí se mostrara el post {$post} de la categoria {$cate}"; 
//     }
//     return "Aquí se mostrara el post {$post}"; 
// });


//Tipos de peticiones
//Get - cuando escribirmos una url o navegamos con un enlace
//post - Peticiones desde un formulario y mandamos formularios
//Put - Peticiones de registro tipo Post
//Patch
//Delete - Peticiones de borrar tipo Post 


//Al definir rutas aveces deberemos pasar parametros