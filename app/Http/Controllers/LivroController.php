<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{


    public function salvar(Request $request){
        $livro = Livro::create([
            'titulo' => $request->titulo,
            'ano_publicacao' => $request->ano_publicacao,
            'genero' => $request->genero
        ]);

        return response()->json($livro);
    }
    public function listar(){
        $livros = Livro::all();
        
        return response()->json($livros);
    }
         public function update(Request $request) {
            //buscar a tarefa pelo id
            $livro = Livro::find($request->id);

            //verificar se encontrou a tarefa
            if ($livro == null) {
                return response()->json(['erro' => 'Tarefa não encontrada']);
            }
            
            //verificar se o campo existe na request
            if(isset($request->nome)){
                $livro->titulo = $request->titulo;
            }
            if(isset($request->data_hora)){
                $livro->ano_publicacao = $request->ano_publicacao;
            }
            if(isset($request->descricao)){
                $livro->genero = $request->genero;
            }

            //atualizar os dados da tarefa
            $livro->update();
            
            //retornar a tarefa atualizada
            return response()->json(['mensagem' => 'atualizada']);
        }   
        public function show($id) {
            //pesquisar a tarefa pelo id
            $livro = Livro::find($id);
            //verificar se encontrou a tarefa
            if ($livro == null) {
                return response()->json(['erro' => 'Tarefa não encontrada']);
            }
            //retornar a tarefa encontrada
            return response()->json($livro);
        }
        public function delete($id) {
            
            //pesquisar a tarefa pelo id
            $livro = Livro::find($id);
            //verificar se encontrou a tarefa
            if ($livro == null) {
                return response()->json(['erro' => 'Tarefa não encontrada']);
            }
            //deletar a tarefa
            $livro->delete();
            //retornar a mensagem de sucesso
            return response()->json(['mensagem' => 'Tarefa deletada com sucesso']);
        }
        
}

