<?php

use Illuminate\Database\Seeder;
use \App\Contato;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => 'Diego Oliveira',
            'email' => 'diego@unescnet.br',
            'message' =>'Segunda mensagem de teste'
        ];

        if(Contato::where('email','=',$dados['email'])->count()) {

            $usuario = Contato::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo 'Usuario alterado com sucesso ';

        } else {

            Contato::create($dados);
            echo 'Usuario criado com sucesso! ';
        }

    }
}
