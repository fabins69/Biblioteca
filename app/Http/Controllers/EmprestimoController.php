<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function store(Request $request){
        $emprestimo = Emprestimo::create([
            'data_emprestimo' => $request->data_emprestimo,
            'data_devolucao' => $request->data_devolucao,
            'codigo_membro' => $request->codigo_membro,
            'codigo_livro'=>$request->codigo_livro
        ]);

        return response()->json($emprestimo);
    }
    public function index(){
        $emprestimos = Emprestimo::all();
        
        return response()->json($emprestimos);
    }
    public function update(Request $request) {
        //buscar a tarefa pelo id
        $emprestimo = Emprestimo::find($request->id);

        //verificar se encontrou a tarefa
        if ($emprestimo == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        
        //verificar se o campo existe na request
        if(isset($request->data_emprestimo)){
            $emprestimo->data_emprestimo = $request->data_emprestimo;
        }
        if(isset($request->data_devolucao)){
            $emprestimo->data_devolucao = $request->data_devolucao;
        }
        if(isset($request->codigo_membro)){
            $emprestimo->codigo_membro = $request->codigo_membro;
        }
        if(isset($request->codigo_livro)){
            $emprestimo->codigo_livro = $request->codigo_livro;
        }

        //atualizar os dados da tarefa
        $emprestimo->update();
        
        //retornar a tarefa atualizada
        return response()->json(['mensagem' => 'atualizada']);
    }
    public function show($id) {
        //pesquisar a tarefa pelo id
        $emprestimo = Emprestimo::find($id);
        //verificar se encontrou a tarefa
        if ($emprestimo == null) {  
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        //retornar a tarefa encontrada
        return response()->json($emprestimo);   

}
    public function delete($id) {
        
        //pesquisar a tarefa pelo id
        $emprestimo = Emprestimo::find($id);
        //verificar se encontrou a tarefa
        if ($emprestimo == null) {
            return response()->json(['erro' => 'Tarefa não encontrada']);
        }
        //deletar a tarefa
        $emprestimo->delete();
        //retornar a mensagem de sucesso
        return response()->json(['mensagem' => 'Tarefa deletada com sucesso']);
    }
}
