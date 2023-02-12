<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request){
        return response()->json(['success'=> 'Perguntas retornadas com sucesso'], 200);
    }

    public function store(Request $request){
        return response()->json(['error'=> 'No momento nao eh possivel adicionar perguntas'], 403);
    }

    public function show(Request $request, Question $question){
        return response()->json(['error'=> 'No momento nao eh possivel mostrar detalhes de uma pergunta'], 503);
    }

    public function update(Request $request, Question $question){
        return response()->json(['error'=> 'No momento nao eh possivel actualizar a pergunta'], 503);
    }

    public function destroy(Request $request, Question $question){
        return response()->json(['success'=> 'No momento nao eh possivel remover a pergunta'], 503);
    }


}
