<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('painel.login.index');
    }

    public function logar(Request $request)
    {
        $dados = $request->all();

        if(Auth::attempt( ['email'=>$dados['email'], 'password'=>$dados['senha'] ] )) {
            return redirect()->route('painel.home');
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


}
