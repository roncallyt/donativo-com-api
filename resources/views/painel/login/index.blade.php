@extends('tema.painel.layout')

@section('titulo','Painel de Controler - Projeto Laravel')

@section('conteudo')

    <div class="row">

        <div class="produtos center">
            <h1>Painel de Controller</h1>
        </div>

        <form method="post">
            {{csrf_field()}}
            <div class="input-field">
                <input type="email" name="email" id="email">
                <label>E-mail:</label>
            </div>
            <div class="input-field">
                <input type="password" name="senha" id="senha">
                <label>Senha:</label>
            </div>

            <button class="btn blue darken-3">Entrar</button>
        </form>
    </div>

@endsection
