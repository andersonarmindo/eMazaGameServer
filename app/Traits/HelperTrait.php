<?php

namespace App\Traits;

use App\Models\Subject;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(Request $request){
    //    $subjects = Subject::all();

        $subjects = Subject::orderBy('created_at', 'desc')->get();

      //  $subjects = Subject::orderBy('created_at', 'desc')->paginate(10);
        return response()->json(['success'=> $subjects], 200);
    }
}
