@extends('tema.site.layout')
@section('titulo','Site Donativo')

@section('conteudo')
    <!--Seção sobre-->
    <section class="about-section bg-lightgrey">
        <div class="auto-container">

            <div class="row clearfix">

                <!--Coluna conteudo-->
                <div class="content-column pull-right col-md-6 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="subtitle"><a href="sobre.html">Sobre nós</a></div>
                        <h2>Desde o ano <span class="theme_color">2000</span> ajudando pessoas por todo o planeta</h2>
                        <h3>Não importa quantas você você irpa ajudar. Seja incrível enquanto há tempo</h3>
                        <div class="desc">Lorem ipsum dolor sit amet, vix an natum labitur eleifend, mel amet a laoreet menandri. Ei justo complectitur duo. Ei mundi solet ut soletu mel possit quo. Sea cu justo laudem.An utinam consulatu eos.</div>

                        <div class="clearfix">

                            <div class="info">
                                <figure class="image-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-4.jpg" alt=""></figure>
                                <div class="title">Airton Sena</div>
                                <div class="designation">CEO & Fundador da Donativo</div>
                            </div>

                            <div class="signature"><img src="images/resource/signature-image.png" alt=""></div>
                        </div>

                        <a href="sobre.html" class="theme-btn btn-style-three">Saiba mais</a>
                    </div>
                </div>

                <!--Coluna imagem-->
                <div class="image-column pull-left col-md-6 col-sm-12 col-xs-12">
                    <figure class="image"><img src="images/resource/featured-image-9.png" alt=""></figure>
                </div>

            </div>

        </div>
    </section>



    <!--Sessão de notícias-->
    <section class="news-section">
        <div class="auto-container">
            <!--Cabeçalho-->
            <div class="sec-title">
                <h2>Últimas notícias</h2>
                <div class="clearfix">
                    <div class="desc-text pull-left">Lorem ipsum dolor sit amet, cum at inani interes setnisl omnium</div>
                    <div class="link-box pull-right"><a href="#">Ir para o BLog</a></div>
                </div>
            </div>

            <div class="row clearfix">

                <!--Notícia 1-->
                <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image"><a href="#"><img src="images/resource/blog-image-2.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="post-cat"><a href="#" class="education">Educação</a></div>
                            <h3><a href="#">Educação infantil na África do Sul !!</a></h3>
                            <div class="text">Quase ao mesmo tempo, Rahul Roy Chowdhury assumiu o comando da equipe do Google que supervisiona ...</div>
                        </div>

                    </div>
                </div>

                <!--Notícia 2-->
                <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image"><a href="#"><img src="images/resource/blog-image-3.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="post-cat"><a href="#" class="water">Time</a></div>
                            <h3><a href="#">Educação infantil na África do Sul !!</a></h3>
                            <div class="text">Quase ao mesmo tempo, Rahul Roy Chowdhury assumiu o comando da equipe do Google que supervisiona ...</div>
                        </div>

                    </div>
                </div>

                <!--Notícia 3-->
                <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image"><a href="#"><img src="images/resource/blog-image-4.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="post-cat"><a href="#" class="donate">Doações</a></div>
                            <h3><a href="#">Educação infantil na África do Sul !!</a></h3>
                            <div class="text">Quase ao mesmo tempo, Rahul Roy Chowdhury assumiu o comando da equipe do Google que supervisiona ...</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection



