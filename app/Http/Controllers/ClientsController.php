<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function cadastrar(){
        $nome = "luiz";
        $variavel1 = "valor";
        return view(view:'cadastrar')
        ->with('nome', $nome)
        ->with('variavel1', $variavel1);
    }
    public function excluir(){

    }
    public function editar(){

    }
}
