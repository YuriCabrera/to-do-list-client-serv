<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/tarefa', [TarefaController::class, 'index']);      // listar todas

Route::post('/tarefa', [TarefaController::class, 'store']);       // criar

Route::put('/tarefa/{id}', [TarefaController::class, 'update']);   // atualizar

Route::delete('/tarefa/{id}', [TarefaController::class, 'destroy']); // excluir


?>
