<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getdata(){
        return response()->json(['Requisicao realizada com sucesso']);
    }
}
