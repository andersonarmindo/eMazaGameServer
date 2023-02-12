<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    use HelperTrait;
    public function index(Request $request){


        return $this->processSubjects($request);
    }

    public function store(Request $request){
        return response()->json(['error'=> 'No momento nao eh possivel adicionar disciplinas'], 403);
    }

    public function show(Request $request, Subject $question){
        return response()->json(['error'=> 'No momento nao eh possivel mostrar detalhes de uma disciplina'], 503);
    }

    public function update(Request $request, Subject $question){
        return response()->json(['error'=> 'No momento nao eh possivel actualizar a disciplina'], 503);
    }

    public function destroy(Request $request, Subject $question){
        return response()->json(['success'=> 'No momento nao eh possivel remover a disciplina'], 503);
    }

}
