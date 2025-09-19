<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function store(Request $request){
        $autor = Autor::create([
            'nome_completo' => $request->nome_completo,
            'data_nascimento' => $request->data_nascimento,
            'nacionalidade' => $request->nacionalidade
        ]);

        return response()->json($autor);
    }
    public function index(){
        $autores = Autor::all();
        
        return response()->json($autores);
    }
    public function update(Request $request) {
        //buscar a tarefa pelo id
        $autor = Autor::find($request->id);

        //verificar se encontrou a tarefa
        if ($autor == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        
        //verificar se o campo existe na request
        if(isset($request->nome_completo)){
            $autor->nome_completo = $request->nome_completo;
        }
        if(isset($request->data_nascimento)){
            $autor->data_nascimento = $request->data_nascimento;
        }
        if(isset($request->nacionalidade)){
            $autor->nacionalidade = $request->nacionalidade;
        }

        //atualizar os dados da tarefa
        $autor->update();
        
        //retornar a tarefa atualizada
        return response()->json(['mensagem' => 'atualizada']);
    }
    public function show($id) {
        //pesquisar a tarefa pelo id
        $autor = Autor::find($id);  
        //verificar se encontrou a tarefa
        if ($autor == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        //retornar a tarefa encontrada
        return response()->json($autor);
}
    public function delete($id) {
        
        //pesquisar a tarefa pelo id
        $autor = Autor::find($id);
        //verificar se encontrou a tarefa
        if ($autor == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        //deletar a tarefa
        $autor->delete();
        //retornar a mensagem de sucesso
        return response()->json(['mensagem' => 'Tarefa deletada com sucesso']);
    }
}