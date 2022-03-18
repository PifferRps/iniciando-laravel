<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function listar(){
        $cliente = Clients::all();
        

        return view('lista', compact('cliente'));   

    }



    public function formEditar($id){
        $cliente = Clients::find($id);
        if(!$cliente){
            abort(code:404);
        }
        return view('edit', compact('cliente'));
}



public function editar(Request $request,$id){
    $cliente = Clients::find($id);
    if(!$cliente){
        abort(code:404);
    }
   
    
   
    $cliente->nome = $request->nome;
    $cliente->email = $request->email;
    $cliente->save();
    return redirect()->to('lista');

}

    public function formCadastrar(){
            return view('cliente');
    }

    public function cadastrar(Request $request){
        $cliente = new clients();
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->to('lista');

    }



   /* public function cadastrar(){
        $nome = "luiz";
        $variavel1 = "valor";
        return view(view:'cadastrar')
        ->with('nome', $nome)
        ->with('variavel1', $variavel1);
    }*/
    public function excluir(Request $request,$id){
        $cliente = Clients::find($id);
        if(!$cliente){
            abort(code:404);
        }
        $cliente->delete();
        return redirect()->to('lista');
    }
    
}
