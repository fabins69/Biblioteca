<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use Illuminate\Http\Request;

class MembroController extends Controller
{
     public function salvar(Request $request){
        $membro = Membro::create([
            'nome_completo' => $request->nome_completo,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'data_cadastro'=>$request->data_cadastro
        ]);

        return response()->json($membro);
    }
    public function listar(){
        $membros = Membro::all();
        
        return response()->json($membros);
    }
}
