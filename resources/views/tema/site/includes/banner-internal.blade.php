<!--Título da página-->
<section class="page-title" style="background-image:url(@yield('banner'));">
    <div class="auto-container">
        <div class="inner-box">
            <h1>@yield('titulo-interno')</h1>
            <ul class="bread-crumb">
                <li><a href="#">Home</a></li>
                <li>@yield('menu-interno')</li>
            </ul>
        </div>
    </div>
</section>
<!--Fim título da página-->

