@extends('tema.painel.layout')

@section('titulo','Cadastro de Produto - Projeto Laravel')

@section('conteudo')

    <div class="row">

        <div class="produtos center">
            <h1>Cadastro de postagem</h1>
        </div>
        <div class="row right">
            <a class="btn blue darken-3" href="{{route('painel.blog')}}">Blog</a>
        </div>
        <br/>

        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('painel.blog.form')
            <button class="btn blue darken-3">Salvar</button>
        </form>
    </div>

@endsection
