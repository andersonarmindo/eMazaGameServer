<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function landing (Request $request){
        return view('landing');
    }

    public function generateToken( Request $request){
        if (auth()->user()->hasRole('admin')){
            $user = User::find(auth()->id());

            $token = $user->createToken($user->name.'\'s token')->accessToken;

            dd($token);
        } else{
            //TODO: Erro que indica que o user nao tem autoziracao para gerar token
            dd('Erro: Nao tem permissao para gerar token');
        }


    }
}
