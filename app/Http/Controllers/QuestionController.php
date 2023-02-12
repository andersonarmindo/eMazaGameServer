<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getdata(){
        return response()->json(['Requisicao realizada com sucesso']);
    }
}
