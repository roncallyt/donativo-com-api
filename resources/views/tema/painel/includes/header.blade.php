<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('titulo')</title>
</head>
<header>


    <nav>
        <div class="nav-wrapper blue darken-3">
            <a href="{{route('painel.home')}}" class="brand-logo">Painel Projeto</a>
            <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{url('/')}}" target="_blank">Site</a></li>
                @if(Auth::guest())
                    <li><a href="{{route('login')}}">Login</a></li>
                @else
                    <li><a href="{{route('painel.home')}}">Dashboard</a></li>
                    <li><a href="{{route('painel.blog')}}">Blog</a></li>
                    <li><a href="{{route('painel.contato')}}">Contato</a></li>
                    <li><a href="#"> - Bem vindo {{Auth::user()->name}} | </a></li>
                    <li><a href="{{route('logout')}}">Sair</a></li>
                @endif

            </ul>
            <ul class="side-nav" id="mobile">
                <li><a href="{{url('/')}}" target="_blank">Site</a></li>
                <li><a href="{{route('painel.home')}}">Dashboard</a></li>
                <li><a href="{{route('painel.blog')}}">Blog</a></li>
                <li><a href="{{route('painel.contato')}}">Contato</a></li>
            </ul>
        </div>
    </nav>


</header>

<body>
<div class="container">
    <div class="content">





