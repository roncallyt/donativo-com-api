@extends('tema.site.layout-internal')
@section('titulo','Site Donativo - Contato')
@section('banner',asset('images/background/bg-page-title-1.jpg'))
@section('titulo-interno','Contato')
@section('menu-interno','Contato')

@section('conteudo')

<!--Seção contato-->
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Coluna contato-->
            <div class="contact-column col-lg-7 col-md-7 col-sm-12 col-xs-12">

                <div class="upper-title">
                    <h2>Formulário de contato</h2>
                    <div class="text">Envie-nos uma mensagem que entraremos em contato o mais breve possível ou entre em contato pelos nossos canais de atendimento</div>
                </div>

                <!--Formulário de contato-->
                <div class="contact-us-form">
                    @if($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $e)
                                <li>{{$e}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email" value="" placeholder="E-mail">
                            </div>
                            {{csrf_field()}}
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!--Coluna contatos-->
            <div class="contact-column col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="inner">
                    <div class="upper-title">
                        <h2>Contatos</h2>
                    </div>


                    <div class="contact-info">
                        <ul>
                            <li><div class="icon"><span class="flaticon-at"></span></div> <h4>E-mail</h4>contato@site.com.br</li>
                            <li><div class="icon"><span class="flaticon-technology-2"></span></div> <h4>Fone</h4>(69) 3441-0000</li>
                            <li><div class="icon"><span class="flaticon-location-marker"></span></div> <h4>Endereço</h4>Rua Antônio de Paula Nunes, 951, Princesa Isabel, Cacoal-RO</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!--Seção mapa-->
<section class="map-section">
    <!--Box mapa-->
    <div class="map-box">
        <!--Canvas Mapa-->
        <div class="map-canvas"
             data-zoom="8"
             data-lat="-11.437212319253806"
             data-lng="-61.44481770000001"
             data-type="roadmap"
             data-hue="#ffc400"
             data-title="Envato"
             data-content="Cacoal, rondônia<br><a href='mailto:contato@site.com.br'>contato@site.com.br</a>">
        </div>
    </div>
</section>

@endsection
