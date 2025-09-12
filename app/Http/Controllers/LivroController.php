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
}

