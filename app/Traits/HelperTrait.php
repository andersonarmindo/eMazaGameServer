<?php

namespace App\Traits;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(Request $request){
    //    $subjects = Subject::all();

      //  $subjects = Subject::orderBy('created_at', 'desc')->get();
        $orderDirection = $request->query('direction', 'desc');

        $orderColumn = $request->query('column', 'id');

        $totalPerPage = $request->query('per_page', 3);

       $subjects = Subject::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);
        return response()->json(['success'=> $subjects], 200);
    }

    public function processQuestions(Request $request){
        //    $subjects = Subject::all();

        //  $subjects = Subject::orderBy('created_at', 'desc')->get();
        $orderDirection = $request->query('direction', 'desc');

        $orderColumn = $request->query('column', 'id');

        $totalPerPage = $request->query('per_page', 3);

        $questions = Question::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);
        return response()->json(['success'=> $questions], 200);
    }
}
