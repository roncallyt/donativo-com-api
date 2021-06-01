@extends('tema.painel.layout')

@section('titulo','Produtos - Projeto Laravel')

@section('conteudo')



    <div class="row">

        <div class="produtos center">
            <h1>Lista de postagens</h1>
        </div>
        <div class="row right">
            <a class="btn blue darken-3" href="{{route('painel.blog.novo')}}">Adicionar</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Titulo</th>
                    <th>Imagem</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reg as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->categoria->name}}</td>
                  <td>{{$item->title}}</td>
                  <td><img height="50" src="{{asset($item->image)}}"/></td>
                    <td>{{ (isset($item->status) AND $item->status) ? 'Ativo' : 'Inativo' }}</td>
                    <td>
                        <a class="btn blue darken-3" href="{{route('painel.blog.edita',$item->id)}}">Editar</a>
                        <a class="btn red" href="{{route('painel.blog.delete',$item->id)}}">Deletar</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
