@extends('tema.painel.layout')

@section('titulo','Contatos - Projeto Laravel')

@section('conteudo')



    <div class="row">

        <div class="produtos center">
            <h1>Lista de contatos</h1>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>Nome</th>
                    <th>Mensagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reg as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->message}}</td>
                    <td>
                        <a class="btn red" href="{{route('painel.contato.delete',$item->id)}}">Deletar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
