<?php

namespace App\Http\Controllers\Painel;

use App\Contato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function index()
    {
        $reg = Contato::all(); //Mostra apenas registros não deletados logicamente
        //$reg = Contato::withTrashed()->get(); //Mostra todos os registros
        //$reg = Contato::onlyTrashed()->get(); //Mostra todos os registros deletados logicamente

        return view('painel.contato.index',compact('reg'));
    }

    public function restore($id)
    {
        Contato::withTrashed()->find($id)->restore();
    }

    public function delete($id)
    {
        Contato::find($id)->delete(); //Delete de forma logica
        //Contato::find($id)->forceDelete(); //Deleta fisicamente
        return redirect('painel/contato');
    }
}
