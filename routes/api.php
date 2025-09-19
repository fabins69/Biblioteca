<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\MembroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [AutorController::class, 'store']);

Route::get('/autor', [AutorController::class, 'index']);

Route::post('/livro', [LivroController::class, 'store']);

Route::get('/livro', [LivroController::class, 'index']);

Route::post('/membro', [MembroController::class, 'store']);

Route::get('/membro', [MembroController::class, 'index']);

Route::post('/emprestimo', [EmprestimoController::class, 'store']);

Route::get('/emprestimo', [EmprestimoController::class, 'index']);


    Route::get('/livro', [LivroController::class, 'index']);
    Route::get('/livro/find/{id}', [LivroController::class, 'show']);
    Route::post('/livro', [LivroController::class, 'store']);
    Route::put('/livro', [LivroController::class, 'update']);
    Route::delete('/livro/delete/{id}', [LivroController::class, 'delete']);

        Route::get('/membro', [MembroController::class, 'index']);
    Route::get('/membro/find/{id}', [MembroController::class, 'show']);
    Route::post('/membro', [MembroController::class, 'store']);
    Route::put('/membro', [MembroController::class, 'update']);
    Route::delete('/membro/delete/{id}', [MembroController::class, 'delete']);

        
    Route::get('/autor/find/{id}', [AutorController::class, 'show']);
    Route::post('/autor', [AutorController::class, 'store']);
    Route::put('/autor', [AutorController::class, 'update']);
    Route::delete('/autor/delete/{id}', [AutorController::class, 'delete']);

        Route::get('/emprestimo', [EmprestimoController::class, 'index']);
    Route::get('/emprestimo/find/{id}', [EmprestimoController::class, 'show']);
    Route::post('/emprestimo', [EmprestimoController::class, 'store']);
    Route::put('/emprestimo', [EmprestimoController::class, 'update']);
    Route::delete('/emprestimo/delete/{id}', [EmprestimoController::class, 'delete']);
