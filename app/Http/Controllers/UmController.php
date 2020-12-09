<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function usuarios(){
        $usuarios = [
            "Emanuel",
            "Maxsuel",
            "Romerito",
            "Curso"
        ];
        return view('usuarios', ['nomes' => $usuarios]);
    }

    public function usuario($nome){
        return view('usuario', ['nome' => $nome]);
    }
}
