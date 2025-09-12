<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\MembroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [AutorController::class, 'salvar']);

Route::get('/autor', [AutorController::class, 'listar']);

Route::post('/livro', [LivroController::class, 'salvar']);

Route::get('/livro', [LivroController::class, 'listar']);

Route::post('/membro', [MembroController::class, 'salvar']);

Route::get('/membro', [MembroController::class, 'listar']);

Route::post('/emprestimo', [EmprestimoController::class, 'salvar']);

Route::get('/emprestimo', [EmprestimoController::class, 'listar']);



