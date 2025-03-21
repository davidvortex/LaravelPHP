<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostContoller extends Controller
{
    public function post(){
        return "Aqui sera el post";
    }

    public function create(){
        return "Aqui sera un formulario para crear";
    }

    public function show(){
        return "Aqui sera mostrara un post de un show";
    }
}
