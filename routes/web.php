<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/projetos/novo', [ProjectController::class, 'create']);
Route::post('/projetos', [ProjectController::class, 'store']);
Route::get('/projetos', [ProjectController::class, 'index']);
Route::delete('/projetos/{id}', [ProjectController::class, 'destroy']);
Route::get('/projetos/{id}/editar', [ProjectController::class, 'edit']);
Route::put('/projetos/{id}', [ProjectController::class, 'update']);
Route::post('/projetos/importar-github', [ProjectController::class, 'importFromGithub'])->name('projects.github');
//Put para atualização completa, patch para atualização parcial.o PUT foi usado porque iremos atualizar todos os campos do projeto.