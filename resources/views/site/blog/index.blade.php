@extends('tema.site.layout-internal')
@section('titulo','Blog - Site Donativo')
@section('banner',asset('images/background/bg-page-title-1.jpg'))
@section('titulo-interno','Últimas do Blog')
@section('menu-interno','Blog')

@section('conteudo')


    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">


                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <section class="blog-section">


                        <div class="news-style-two">
                            <div class="inner-box">
                                <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-image-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-cat"><a href="#" class="education">Educação</a></div>
                                    <h3><a href="#">Educação infantil na África do Sul !!</a></h3>
                                    <div class="text">Quase ao mesmo tempo, Rahul Roy Chowdhury assumiu o comando da equipe do Google que supervisiona ...</div>
                                </div>
                            </div>
                        </div>


                        <div class="news-style-two">
                            <div class="inner-box">
                                <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-image-4.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-cat"><a href="#" class="donate">Doações</a></div>
                                    <h3><a href="#">Educação infantil na África do Sul !!</a></h3>
                                    <div class="text">Quase ao mesmo tempo, Rahul Roy Chowdhury assumiu o comando da equipe do Google que supervisiona ...</div>
                                </div>

                            </div>
                        </div>




                        <div class="styled-pagination text-left">
                            <ul class="clearfix">
                                <li><a class="prev" href="#">Voltar</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#">Avançar</a></li>
                            </ul>
                        </div>

                    </section>


                </div>


                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar blog-sidebar">


                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Categorias</h3></div>

                            <ul class="list">
                                <li><a href="#">Educação</a></li>
                                <li><a href="#">Humanismo</a></li>
                                <li><a href="#">Caridade</a></li>
                                <li><a href="#">Educação</a></li>
                                <li><a href="#">Humanismo</a></li>
                                <li><a href="#">Caridade</a></li>
                            </ul>

                        </div>

                    </aside>


                </div>


            </div>
        </div>
    </div>
@endsection
