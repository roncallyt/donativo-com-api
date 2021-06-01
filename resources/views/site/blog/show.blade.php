@extends('tema.site.layout-internal')
@section('titulo','Blog - Site Donativo')
@section('banner',asset('images/background/bg-page-title-1.jpg'))
@section('titulo-interno','Notícia ' . $id)
@section('menu-interno','Blog')

@section('conteudo')

    <!--Sidebar Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <section class="blog-section blog-details">

                    <!--News Style Two-->
                    <div class="news-style-two">
                        <div class="inner-box">
                            <figure class="image"><img src="images/resource/blog-image-4.jpg" alt=""></figure>
                            <div class="lower-content">
                                <div class="post-cat"><a href="#" class="education">Educação</a></div>
                                <h3>Educação infantil na África do Sul !!</h3>
                                <div class="text">Lorem ipsum dolor sit amet, tota aliquip vel eu, cum cu accumsan molestiae, ius etiam mazim an. Magna summo suscipit ne sed. In nec quis verterem menandri, erant appellantur vel ei. Ad volutpat necessitatibus vis.</div>
                                <div class="row clearfix">

                                    <div class="image-column col-md-8 col-sm-8 col-xs-12">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, tota aliqu vel eu, cum cu velaccumsan molesta junk iuse etiam mazim an.</p>
                                            <p>erant appellantur vel ei. Ad volutpa neces sitatibus vim dic putant. Omnesque</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="text"> Te vim dico putant. Omnesque pertinax platonem an eos. Ne nam iudico oportere. Eum laboramus consectetuer ne.Quo eu clita deseruisse, cum cu quot salutandi vulputate, velue quem detracto voluptua ea. Cu nobis salutatus vis, ne per modo graece delicatissimi. Unum forensibus sea no. In eam eius ludus, ea mundi dicam petentium vel. Ea verear democritum sea. Pro nonumy consul soluta et.</div>
                            </div>

                        </div>
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
            <!--Sidebar-->

        </div>
    </div>
</div>

@endsection
