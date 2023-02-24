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

            $tokenName = $request->name ? $request->name: $user->name.'\'s token';
            $token = $user->createToken($tokenName)->accessToken;

            return redirect()->to('/admin/oauth-access-tokens')->with(['token' => $token]);
        } else{
            //TODO: Erro que indica que o user nao tem autoziracao para gerar token
            dd('Erro: Nao tem permissao para gerar token');
        }


    }
}
