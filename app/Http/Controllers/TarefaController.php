<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    // GET /api/tarefa
    public function index()
    {
        return response()->json(Tarefa::all());
    }

    // POST /api/tarefa
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $tarefa = Tarefa::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'concluida' => false
        ]);

        return response()->json($tarefa, 201);
    }

    // PUT /api/tarefa/{id}
    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::findOrFail($id);

        $tarefa->update($request->only(['titulo', 'descricao', 'concluida']));

        return response()->json($tarefa);
    }

    // DELETE /api/tarefa/{id}
    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        return response()->json(['message' => 'Tarefa excluída com sucesso']);
    }
}

?>
