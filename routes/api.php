<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/tarefa', [TarefaController::class, 'index']);         // Listar todas
Route::post('/tarefa', [TarefaController::class, 'store']);        // Criar nova
Route::put('/tarefa/{id}', [TarefaController::class, 'update']);   // Atualizar
Route::delete('/tarefa/{id}', [TarefaController::class, 'destroy']); // Excluir


?>
