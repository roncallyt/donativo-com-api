@extends('tema.painel.layout')

@section('titulo','Cadastro de Postagem - Projeto Laravel')

@section('conteudo')



    <div class="row">

        <div class="produtos center">
            <h1>Editar {{$reg->nome}}</h1>
        </div>
        <div class="row right">
            <a class="btn blue darken-3" href="{{route('painel.blog')}}">Blog</a>
        </div>
        <br/>

        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('painel.blog.form')
            <button class="btn blue darken-3">Atualizar</button>
        </form>
    </div>

@endsection
