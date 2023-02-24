<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    use HelperTrait;
    public function index(Request $request){
        return $this->processQuestions($request);
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
