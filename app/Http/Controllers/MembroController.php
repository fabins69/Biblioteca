<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use Illuminate\Http\Request;

class MembroController extends Controller
{
     public function store(Request $request){
        $membro = Membro::create([
            'nome_completo' => $request->nome_completo,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'data_cadastro'=>$request->data_cadastro
        ]);

        return response()->json($membro);
    }
    public function index(){
        $membros = Membro::all();
        
        return response()->json($membros);
    }
    public function update(Request $request) {
        //buscar a tarefa pelo id
        $membro = Membro::find($request->id);

        //verificar se encontrou a tarefa
        if ($membro == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        
        //verificar se o campo existe na request
        if(isset($request->nome_completo)){
            $membro->nome_completo = $request->nome_completo;
        }
        if(isset($request->endereco)){
            $membro->endereco = $request->endereco;
        }
        if(isset($request->telefone)){
            $membro->telefone = $request->telefone;
        }
        if(isset($request->data_cadastro)){
            $membro->data_cadastro = $request->data_cadastro;
        }

        //atualizar os dados da tarefa
        $membro->update();
        
        //retornar a tarefa atualizada
        return response()->json(['mensagem' => 'atualizada']);
    }
    public function show($id) {
        //pesquisar a tarefa pelo id
        $membro = Membro::find($id);
        //verificar se encontrou a tarefa
        if ($membro == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        //retornar a tarefa encontrada
        return response()->json($membro);
    }

    public function delete($id) {
        
        //pesquisar a tarefa pelo id
        $membro = Membro::find($id);
        //verificar se encontrou a tarefa
        if ($membro == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        //deletar a tarefa
        $membro->delete();
        //retornar a mensagem de sucesso
        return response()->json(['mensagem' => 'Tarefa deletada com sucesso']);
    }


}
