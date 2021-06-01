<!-- CharityPro Donation and Fundraisng HTML Template -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/revolution-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/slider-setting.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Responsivo -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Cabeçalho principal -->
    <header class="main-header header-style-two">
        <!-- Cabeçalho superior-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('site.home')}}" title="CharityPro"><img src="{{asset('images/logo-3.png')}}" alt="CharityPro" title="CharityPro"></a></div>
                    </div>

                    <!--Nav-->
                    <div class="nav-outer clearfix">
                        <!--  Menu Principal -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{route('site.home')}}">Home</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Sobre nós</a>
                                        <ul>
                                            <li><a href="{{route('site.sobre')}}">Institucional</a></li>
                                            <li><a href="#">Doe agora</a></li>
                                        </ul>
                                    </li>

                                    <li class=""><a href="{{route('site.blog')}}"> Notícias</a>
                                    </li>
                                    <li><a href="{{route('site.contato')}}">Fale conosco</a></li>

                                </ul>
                            </div>
                        </nav><!-- Fim menu principal-->

                        <!--Donate Btn-->
                        <a href="#" class="donate-btn theme-btn">Doe agora</a>

                    </div><!--Fim nav-->

                </div>

            </div>
        </div> <!-- Fim cabeçalho superior -->


        <!--Cabeçaho Sticky -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{route('site.home')}}" class="img-responsive" title="CharityPro"><img src="{{asset('images/logo-small.png')}}" alt="CharityPro" title="CharityPro"></a>
                </div>

                <!--Menu Coluna-->
                <div class="menu-column pull-right">
                    <!-- Menu principal -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('site.sobre')}}">Home</a>

                                </li>
                                <li class="dropdown"><a href="#">Sobre nós</a>
                                    <ul>
                                        <li><a href="{{route('site.sobre')}}">Institucional</a></li>
                                        <li><a href="#">Doe agora</a></li>
                                    </ul>
                                </li>

                                <li class=""><a href="{{route('site.blog')}}"> Notícias</a>

                                </li>
                                <li><a href="{{route('site.contato')}}">Fale conosco</a></li>

                            </ul>
                        </div>
                    </nav><!-- Fim menu principal-->
                </div>

            </div>
        </div><!--Fim cabeçaho Sticky-->

    </header>
    <!--Fim cabeçalho principal -->

