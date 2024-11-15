<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>{{ $titulo }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!--link rel="icon" href="images/favicon.png" type="image/x-icon"-->
    <link href="{{ asset('plantilla/images/favicon.png') }}" type="image/x-icon" rel="icon" />

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link href="{{ asset('plantilla/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plantilla/css/fonts.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plantilla/css/style.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="preloader">
        <div class="preloader-body">
            <div class="preloader-item"></div>
        </div>
    </div>
    <!-- Page-->
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header rd-navbar-dark">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel-inner container">
                            <div class="rd-navbar-panel-item rd-navbar-panel-item-left">
                                <ul class="list-inline list-inline-sm">
                                    <li><a class="link link-classic" href="#">Ayuda</a></li>
                                    <li><a class="link link-classic" href="{{ route('news') }}">Noticias</a></li>
                                    <li><a class="link link-classic" href="{{ route('contact-us') }}">Contacto</a></li>
                                </ul>
                            </div>
                            <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-right">
                                <ul class="list-inline list-inline-bordered">
                                    <!--li>
                                        
                                        <select class="select" data-placeholder="Select an option"
                                            data-container-class="select-inline"
                                            data-dropdown-class="select-inline-dropdown">
                                            <option value="en" selected="">en</option>
                                            <option value="fr">fr</option>
                                            <option value="es">es</option>
                                        </select>
                                    </li-->
                                    <!--li><a class="badge badge-primary" href="#">registration</a></li-->
                                    <li><a class="link link-icon link-icon-left link-classic"
                                            href="{{ route('login') }}"><span
                                                class="icon fl-bigmug-line-login12"></span><span
                                                class="link-icon-text">Tu Cuenta</span></a></li>
                                </ul>
                            </div>
                            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                                data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                        </div>
                    </div>
                    <div class="rd-navbar-main">
                        <div class="rd-navbar-main-top">
                            <div class="rd-navbar-main-container container">
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!-- Brand-->
                                    <a class="brand" href="{{ route('sports') }}">
                                        <h4 style="color: red; display: inline;">Surebet</h4>
                                        <h4 style="color: white; display: inline;">s24/7.com</h4>
                                    </a>
                                </div>
                                <!-- RD Navbar Search-->
                                <div class="rd-navbar-search">
                                    <button class="rd-navbar-search-toggle"
                                        data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                    <form class="rd-search" action="#" data-search-live="rd-search-results-live"
                                        method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-navbar-search-form-input">Ingresa tu
                                                solicitud de búsqueda aquí...</label>
                                            <input class="rd-navbar-search-form-input form-input"
                                                id="rd-navbar-search-form-input" type="text" name="s"
                                                autocomplete="off">
                                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                        </div>
                                        <button class="rd-search-form-submit fl-budicons-launch-search81"
                                            type="submit"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-main-bottom rd-navbar-darker">
                            <div class="rd-navbar-main-container container">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="{{ route('sports') }}">Deportes</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('in-play') }}">En
                                            Juego</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="{{ route('promotions') }}">Servicios</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="{{ route('statistics') }}">Estadísticas</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="{{ route('results') }}">Resultados</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Paginas</a>
                                        <!-- RD Navbar Megamenu-->
                                        <article
                                            class="rd-menu rd-navbar-megamenu rd-megamenu-2-columns context-light">
                                            <div class="rd-megamenu-main">
                                                <div class="rd-megamenu-item rd-megamenu-item-nav">
                                                    <!-- Heading Component-->
                                                    <article class="heading-component heading-component-simple">
                                                        <div class="heading-component-inner">
                                                            <h5 class="heading-component-title">Elementos
                                                            </h5>
                                                        </div>
                                                    </article>

                                                    <div class="rd-megamenu-list-outer">
                                                        <ul class="rd-megamenu-list">
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('sports') }}">Deportes</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('in-play') }}">EN-Juego</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('promotions') }}">Servicios</a>
                                                            </li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('statistics') }}">Estadisticas</a>
                                                            </li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('login') }}">Pagina de inicio de
                                                                    sesion</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('team-overview') }}">Descripcion
                                                                    general del equipo</a></li>
                                                        </ul>
                                                        <ul class="rd-megamenu-list">
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('schedule') }}">Cronograma</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('news') }}">Noticias</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('blog-post') }}">Entrada en el
                                                                    blog</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('gallery') }}">Galeria</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('latest-game-results') }}">Ultimos
                                                                    resultados del juego</a></li>
                                                            <li class="rd-megamenu-list-item"><a
                                                                    class="rd-megamenu-list-link"
                                                                    href="{{ route('standings') }}">Clasificacion</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="rd-megamenu-item rd-megamenu-item-content">
                                                    <!-- Heading Component-->
                                                    <article class="heading-component heading-component-simple">
                                                        <div class="heading-component-inner">
                                                            <h5 class="heading-component-title">ULTIMAS NOTICIAS
                                                            </h5><a class="button button-xs button-gray-outline"
                                                                href="{{ route('news') }}">Ver todas las noticias</a>
                                                        </div>
                                                    </article>

                                                    <div class="row row-20">
                                                        <div class="col-lg-6">
                                                            <!-- Post Classic-->
                                                            <article class="post-classic">
                                                                <div class="post-classic-aside"><a
                                                                        class="post-classic-figure"
                                                                        href="{{ route('blog-post') }}"><img
                                                                            src="{{ asset('plantilla/images/megamenu-post-1-93x94.jpg') }}"
                                                                            alt="" width="93"
                                                                            height="94" /></a></div>
                                                                <div class="post-classic-main">
                                                                    <!-- Badge-->
                                                                    <div class="badge badge-secondary">Deportes
                                                                    </div>
                                                                    <p class="post-classic-title"><a
                                                                            href="{{ route('blog-post') }}">Prem en 90
                                                                            segundos:
                                                                            ¡la crisis del Chelsea ha terminado!</a></p>
                                                                    <div class="post-classic-time"><span
                                                                            class="icon mdi mdi-clock"></span>
                                                                        <time datetime="2023">15 de abril de
                                                                            2023</time>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- Post Classic-->
                                                            <article class="post-classic">
                                                                <div class="post-classic-aside"><a
                                                                        class="post-classic-figure"
                                                                        href="{{ route('blog-post') }}"><img
                                                                            src="{{ asset('plantilla/images/megamenu-post-2-93x94.jpg') }}"
                                                                            alt="" width="93"
                                                                            height="94" /></a></div>
                                                                <div class="post-classic-main">
                                                                    <!-- Badge-->
                                                                    <div class="badge badge-primary">Noticias
                                                                    </div>
                                                                    <p class="post-classic-title"><a
                                                                            href="{{ route('blog-post') }}">
                                                                            El gerente general de los Raptors está
                                                                            entusiasmado con la firma de Monroe</a></p>
                                                                    <div class="post-classic-time"><span
                                                                            class="icon mdi mdi-clock"></span>
                                                                        <time datetime="2023">15 de abril de
                                                                            2023</time>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- Post Classic-->
                                                            <article class="post-classic">
                                                                <div class="post-classic-aside"><a
                                                                        class="post-classic-figure"
                                                                        href="{{ route('blog-post') }}"><img
                                                                            src="{{ asset('plantilla/images/megamenu-post-3-93x94.jpg') }}"
                                                                            alt="" width="93"
                                                                            height="94" /></a></div>
                                                                <div class="post-classic-main">
                                                                    <!-- Badge-->
                                                                    <div class="badge badge-primary">Noticias
                                                                    </div>
                                                                    <p class="post-classic-title"><a
                                                                            href="{{ route('blog-post') }}">Lester
                                                                            recupera la
                                                                            forma con 6 sin anotaciones y 8 K</a></p>
                                                                    <div class="post-classic-time"><span
                                                                            class="icon mdi mdi-clock"></span>
                                                                        <time datetime="2023">15 de abril de
                                                                            2023</time>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- Post Classic-->
                                                            <article class="post-classic">
                                                                <div class="post-classic-aside"><a
                                                                        class="post-classic-figure"
                                                                        href="{{ route('blog-post') }}"><img
                                                                            src="{{ asset('plantilla/images/megamenu-post-4-93x94.jpg') }}"
                                                                            alt="" width="93"
                                                                            height="94" /></a></div>
                                                                <div class="post-classic-main">
                                                                    <!-- Badge-->
                                                                    <div class="badge badge-primary">Noticias
                                                                    </div>
                                                                    <p class="post-classic-title"><a
                                                                            href="{{ route('blog-post') }}">Las
                                                                            estrellas de la
                                                                            próxima generación triunfan en la nueva
                                                                            temporada</a></p>
                                                                    <div class="post-classic-time"><span
                                                                            class="icon mdi mdi-clock"></span>
                                                                        <time datetime="2023">15 de abril de
                                                                            2023</time>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Event Teaser-->
                                            <article class="event-teaser rd-megamenu-footer">
                                                <div class="event-teaser-header">
                                                    <div class="event-teaser-caption">
                                                        <h5 class="event-teaser-title">Liga Europea 2023</h5>
                                                        <time class="event-teaser-time" datetime="2023">sábado, 14 de
                                                            abril de 2023</time>
                                                    </div>
                                                    <div class="event-teaser-teams">
                                                        <div class="event-teaser-team">
                                                            <div
                                                                class="unit unit-spacing-xs unit-horizontal align-items-center">
                                                                <div class="unit-left"><img
                                                                        src="{{ asset('plantilla/images/team-bavaria-fc-59x54.png') }}"
                                                                        alt="" width="59"
                                                                        height="54" />
                                                                </div>
                                                                <div class="unit-body">
                                                                    <p class="heading-7">Bavaria</p>
                                                                    <p class="text-style-1">Germany</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="event-teaser-team-divider"><span
                                                                class="event-teaser-team-divider-text">VS</span></div>
                                                        <div class="event-teaser-team">
                                                            <div
                                                                class="unit unit-spacing-xs unit-horizontal align-items-center">
                                                                <div class="unit-left"><img
                                                                        src="{{ asset('plantilla/images/team-atletico-50x50.png') }}"
                                                                        alt="" width="50"
                                                                        height="50" />
                                                                </div>
                                                                <div class="unit-body">
                                                                    <p class="heading-7">Atletico</p>
                                                                    <p class="text-style-1">USA</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="event-teaser-countdown event-teaser-highlighted">
                                                    <!-- Countdown-->
                                                    <div class="countdown countdown-classic" data-type="until"
                                                        data-time="31 Dec 2023 16:00" data-format="dhms"
                                                        data-style="short"></div>
                                                </div>
                                                <div class="event-teaser-aside"><a class="event-teaser-link"
                                                        href="#">Hacer una apuesta</a></div>
                                            </article>
                                        </article>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="{{ route('contact-us') }}">Contacto</a>
                                    </li>
                                </ul>
                                <div class="rd-navbar-main-element">
                                    <ul class="list-inline list-inline-sm">
                                        <li><a class="icon icon-xs fa fa-facebook" target="_blank"
                                                href="https://www.facebook.com/Surebetsegura?mibextid=LQQJ4d"></a></li>
                                        <!--li><a class="icon icon-xs fa fa-twitter" href="#"></a></li-->
                                        <!--li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li-->
                                        <li><a class="icon icon-xs fa fa-whatsapp"
                                                href="https://api.whatsapp.com/send?phone=+19298673569"
                                                target="_blank"></a></li>

                                        <li><a class="icon icon-xs fa fa-instagram" target="_blank"
                                                href="https://www.instagram.com/surebets24_7?igsh=MWphdWNjZ2lqcTV0ag%3D%3D&utm_source=qr"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!------------------------------------- Body -------------------------------------------------->

        @yield('content')



        <!-- Page Footer-->
        <footer class="section footer-classic footer-classic-dark">
            <div class="footer-classic-main">
                <div class="container">
                    <p class="heading-7">SUSCRÍBETE A NUESTRO BOLETÍN</p>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-form rd-inline-form-creative" data-form-output="form-output-global"
                        data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <div class="form-input-wrap">
                                <input class="form-input" id="footer-form-email" type="email" name="email"
                                    data-constraints="@Required">
                                <label class="form-label" for="footer-form-email">Ingresa Tu Correo
                                    Electronico</label>
                            </div>
                        </div>
                        <div class="form-button">
                            <button class="button button-primary-outline" type="submit" aria-label="Send"><span
                                    class="icon fl-budicons-launch-right164"></span></button>
                        </div>
                    </form>
                    <div class="row row-50">
                        <div class="col-lg-5 text-center text-sm-start">
                            <div class="unit-spacing-xl">
                                <article
                                    class="unit unit-sm-horizontal justify-content-center justify-content-sm-start footer-classic-info">
                                    <div class="unit-left">
                                        <!-- Brand--><!--a class="brand" href="index.html"><img class="brand-logo-dark"
                                                src="{{ asset('plantilla/images/logo-default-213x82.png') }}"
                                                alt="" width="106" height="41" /><img
                                                class="brand-logo-light"
                                                src="{{ asset('plantilla/images/logo-inverse-213x82.png') }}"
                                                alt="" width="106" height="41" /></a-->
                                        <a class="brand" href="{{ route('sports') }}">
                                            <h5 style="color: red;  display: inline;">Surebet</h5>
                                            <h5 style="color: white;  display: inline;">s24/7.com</h5>
                                        </a>
                                    </div>
                                    <div class="unit-body">
                                        <p>Surebets24/7.com transformamos tu pasion en ganancias con aprendizaje,
                                            tecnología y oportunidades de inversion</p>
                                    </div>
                                </article>
                            </div>
                            <ul class="list-inline list-inline-bordered list-inline-bordered-lg">
                                <!--li>
                                    <div class="unit unit-horizontal unit-middle">
                                        <div class="unit-left">
                                            <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px"
                                                width="27px" height="27px" viewbox="0 0 27 27"
                                                preserveAspectRatio="none">
                                                <path
                                                    d="M2,26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-8.185c-0.373-0.132-0.711-0.335-1-0.595V19 H6v-1v-1v-1H5v1v2H3v-9H2v1H1V9V8c0-0.552,0.449-1,1-1h1h1h3h0.184c0.078-0.218,0.173-0.426,0.297-0.617C8.397,5.751,9,4.696,9,3.5 C9,1.567,7.434,0,5.5,0S2,1.567,2,3.5C2,4.48,2.406,5.364,3.056,6H3H2C0.895,6,0,6.895,0,8v7c0,1.104,0.895,2,2,2V26z M8,26H6v-6h2 V26z M5,26H3v-6h2V26z M3,3.5C3,2.121,4.121,1,5.5,1S8,2.121,8,3.5S6.879,6,5.5,6S3,4.879,3,3.5 M1,15v-3h1v4 C1.449,16,1,15.552,1,15">
                                                </path>
                                                <path
                                                    d="M11.056,6H11h-1C8.895,6,8,6.895,8,8v7c0,1.104,0.895,2,2,2v9c0,0.553,0.447,1,1,1h5 c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2V8c0-1.105-0.896-2-2-2h-1h-0.056C16.594,5.364,17,4.48,17,3.5 C17,1.567,15.434,0,13.5,0S10,1.567,10,3.5C10,4.48,10.406,5.364,11.056,6 M10,15v1c-0.551,0-1-0.448-1-1v-3h1V15z M11,20h2v6h-2 V20z M16,26h-2v-6h2V26z M17,16v-1v-3h1v3C18,15.552,17.551,16,17,16 M17,7c0.551,0,1,0.448,1,1v1v1v1h-1v-1h-1v5v4h-2v-1v-1v-1h-1 v1v1v1h-2v-4v-5h-1v1H9v-1V9V8c0-0.552,0.449-1,1-1h1h1h3h1H17z M13.5,1C14.879,1,16,2.121,16,3.5C16,4.879,14.879,6,13.5,6 S11,4.879,11,3.5C11,2.121,12.121,1,13.5,1">
                                                </path>
                                                <polygon
                                                    points="15,13 14,13 14,9 13,9 12,9 12,10 13,10 13,13 12,13 12,14 13,14 14,14 15,14 	">
                                                </polygon>
                                                <polygon
                                                    points="7,14 7,13 5,13 5,12 6,12 7,12 7,10 7,9 6,9 4,9 4,10 6,10 6,11 5,11 4,11 4,12 4,13 4,14 5,14">
                                                </polygon>
                                                <polygon
                                                    points="20,10 22,10 22,11 21,11 21,12 22,12 22,13 20,13 20,14 22,14 23,14 23,13 23,12 23,11 23,10 23,9 22,9 20,9 	">
                                                </polygon>
                                                <path
                                                    d="M19.519,6.383C19.643,6.574,19.738,6.782,19.816,7H20h3h1h1c0.551,0,1,0.448,1,1v3h-1v-1h-1v9 h-2v-2v-1h-1v1v2h-2v-1.78c-0.289,0.26-0.627,0.463-1,0.595V26c0,0.553,0.447,1,1,1h5c0.553,0,1-0.447,1-1v-9c1.104,0,2-0.896,2-2 V8c0-1.105-0.896-2-2-2h-1h-0.056C24.594,5.364,25,4.48,25,3.5C25,1.567,23.434,0,21.5,0S18,1.567,18,3.5 c0,0.736,0.229,1.418,0.617,1.981C18.861,5.834,19.166,6.14,19.519,6.383 M19,20h2v6h-2V20z M24,26h-2v-6h2V26z M26,15 c0,0.552-0.449,1-1,1v-4h1V15z M21.5,1C22.879,1,24,2.121,24,3.5C24,4.879,22.879,6,21.5,6C20.121,6,19,4.879,19,3.5 C19,2.121,20.121,1,21.5,1">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="unit-body">
                                            <p class="heading-7 opacity-2">Join Our Team</p><a class="link"
                                                href="mailto:#">administracion@surebets24siete.com</a>
                                        </div>
                                    </div>
                                </li-->
                                <li>
                                    <div class="unit unit-horizontal unit-middle">
                                        <div class="unit-left">
                                            <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px"
                                                width="72px" height="72px" viewbox="0 0 72 72">
                                                <path
                                                    d="M36.002,0c-0.41,0-0.701,0.184-0.931,0.332c-0.23,0.149-0.4,0.303-0.4,0.303l-9.251,8.18H11.58 c-1.236,0-1.99,0.702-2.318,1.358c-0.329,0.658-0.326,1.3-0.326,1.3v11.928l-8.962,7.936V66c0,0.015-0.038,1.479,0.694,2.972 C1.402,70.471,3.006,72,5.973,72h30.03h30.022c2.967,0,4.571-1.53,5.306-3.028c0.736-1.499,0.702-2.985,0.702-2.985V31.338 l-8.964-7.936V11.475c0,0,0.004-0.643-0.324-1.3c-0.329-0.658-1.092-1.358-2.328-1.358H46.575l-9.251-8.18 c0,0-0.161-0.154-0.391-0.303C36.703,0.184,36.412,0,36.002,0z M36.002,3.325c0.49,0,0.665,0.184,0.665,0.184l6,5.306h-6.665 h-6.665l6-5.306C35.337,3.51,35.512,3.325,36.002,3.325z M12.081,11.977h23.92H59.92v9.754v2.121v14.816L48.511,48.762 l-10.078-8.911c0,0-0.307-0.279-0.747-0.548s-1.022-0.562-1.684-0.562c-0.662,0-1.245,0.292-1.686,0.562 c-0.439,0.268-0.747,0.548-0.747,0.548l-10.078,8.911L12.082,38.668V23.852v-2.121v-9.754H12.081z M8.934,26.867v9.015 l-5.091-4.507L8.934,26.867z M63.068,26.867l5.091,4.509l-5.091,4.507V26.867z M69.031,34.44v31.559 c0,0.328-0.103,0.52-0.162,0.771L50.685,50.684L69.031,34.44z M2.971,34.448l18.348,16.235L3.133,66.77 c-0.059-0.251-0.162-0.439-0.162-0.769C2.971,66.001,2.971,34.448,2.971,34.448z M36.002,41.956c0.264,0,0.437,0.057,0.546,0.104 c0.108,0.047,0.119,0.059,0.119,0.059l30.147,26.675c-0.3,0.054-0.79,0.207-0.79,0.207H36.002H5.98H5.972 c-0.003,0-0.488-0.154-0.784-0.207l30.149-26.675c0,0,0.002-0.011,0.109-0.059C35.555,42.013,35.738,41.956,36.002,41.956z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="unit-body">
                                            <p class="heading-7 opacity-2">Contacto</p><a class="link"
                                                href="mailto:#">administracion@surebets24siete.com</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="group-md group-middle">
                                <div class="group-item">
                                    <ul class="list-inline list-inline-xs">
                                        <!--li><a class="icon icon-corporate fa fa-facebook" href="#"></a></li>
                                        <li><a class="icon icon-corporate fa fa-twitter" href="#"></a></li>
                                        <li><a class="icon icon-corporate fa fa-google-plus" href="#"></a>
                                        </li>
                                        <li><a class="icon icon-corporate fa fa-instagram" href="#"></a></li-->
                                        <li><a class="icon icon-corporate fa fa-facebook" target="_blank"
                                                href="https://www.facebook.com/Surebetsegura?mibextid=LQQJ4d"></a></li>
                                        <!--li><a class="icon icon-xs fa fa-twitter" href="#"></a></li-->
                                        <!--li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li-->
                                        <li><a class="icon icon-corporate fa fa-whatsapp"
                                                href="https://api.whatsapp.com/send?phone=+19298673569"
                                                target="_blank"></a></li>

                                        <li><a class="icon icon-corporate fa fa-instagram" target="_blank"
                                                href="https://www.instagram.com/surebets24_7?igsh=MWphdWNjZ2lqcTV0ag%3D%3D&utm_source=qr"></a>
                                        </li>
                                    </ul>
                                </div><a class="button button-sm button-gray-outline"
                                    href="{{ route('contact-us') }}">Ponerse en Contacto</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h5>NOTICIAS POPULARES</h5>
                            <div class="divider-small divider-primary"></div>
                            <div class="row row-20">
                                <div class="col-sm-6">
                                    <!-- Post Classic-->
                                    <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure"
                                                href="{{ route('blog-post') }}"><img
                                                    src="{{ asset('plantilla/images/footer-soccer-post-1-93x87.jpg') }}"
                                                    alt="" width="93" height="87" /></a></div>
                                        <div class="post-classic-main">
                                            <!-- Badge-->
                                            <div class="badge badge-secondary">Tenis
                                            </div>
                                            <p class="post-classic-title"><a href="{{ route('blog-post') }}">Las
                                                    estrellas de la
                                                    próxima generación triunfan en la nueva temporada</a></p>
                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril de 2023</time>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Post Classic-->
                                    <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure"
                                                href="{{ route('blog-post') }}"><img
                                                    src="{{ asset('plantilla/images/footer-soccer-post-2-93x87.jpg') }}"
                                                    alt="" width="93" height="87" /></a></div>
                                        <div class="post-classic-main">
                                            <!-- Badge-->
                                            <div class="badge badge-secondary">Baloncesto
                                            </div>
                                            <p class="post-classic-title"><a href="{{ route('blog-post') }}">El
                                                    gerente general
                                                    de los Raptors está entusiasmado con la firma de Monroe</a></p>
                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril de 2023</time>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Post Classic-->
                                    <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure"
                                                href="{{ route('blog-post') }}"><img
                                                    src="{{ asset('plantilla/images/footer-soccer-post-3-93x87.jpg') }}"
                                                    alt="" width="93" height="87" /></a></div>
                                        <div class="post-classic-main">
                                            <!-- Badge-->
                                            <div class="badge badge-secondary">fútbol
                                            </div>
                                            <p class="post-classic-title"><a href="{{ route('blog-post') }}">Prem en
                                                    90
                                                    segundos: ¡la crisis del Chelsea ha terminado!</a></p>
                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril de 2023</time>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Post Classic-->
                                    <article class="post-classic">
                                        <div class="post-classic-aside"><a class="post-classic-figure"
                                                href="{{ route('blog-post') }}"><img
                                                    src="{{ asset('plantilla/images/footer-soccer-post-4-93x87.jpg') }}"
                                                    alt="" width="93" height="87" /></a></div>
                                        <div class="post-classic-main">
                                            <!-- Badge-->
                                            <div class="badge badge-secondary">BEISBOL

                                            </div>
                                            <p class="post-classic-title"><a href="{{ route('blog-post') }}">Lester
                                                    recupera la forma con 6 sin anotaciones y 8 K</a></p>
                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril de 2023</time>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-classic-aside footer-classic-darken">
                <div class="container">
                    <div class="layout-justify">
                        <!-- Rights-->
                        <p class="rights"><span>Surebets24/7.com</span><span>&nbsp;&copy;&nbsp;</span><span
                                class="copyright-year"></span><span>.&nbsp;</span><a class="link-underline"
                                href="{{ route('privacy-policy') }}">Politica de Privacidad</a></p>
                        <nav class="nav-minimal">
                            <ul class="nav-minimal-list">
                                <li class="active"><a href="{{ route('sports') }}">DEPORTES</a></li>
                                <li><a href="{{ route('in-play') }}">EN JUEGO</a></li>
                                <li><a href="{{ route('promotions') }}">PROMOCIONES</a></li>
                                <li><a href="{{ route('statistics') }}">ESTADISTICAS</a></li>
                                <li><a href="#">PAGINAS</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal modal-sport fade" id="sportModal" tabindex="-1" role="dialog"
            aria-labelledby="sportModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sportModalTitle">Placing a bet</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="modal-sport-wager-title"><span class="modal-sport-wager"></span> <span
                                class="modal-sport-wager-count"></span>
                        </p>
                        <p class="modal-sport-confrontation"></p>
                        <p class="modal-sport-live"><span class="modal-sport-live-count"></span> <span>1X2 Live
                                Betting</span>
                        </p>
                        <div class="stepper-sport">
                            <input class="form-input" type="number" data-zeros="true" value="0"
                                min="0" max="100">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="modal-sport-bets"><span class="modal-sport-bets-left">Number of bets</span><span
                                class="modal-sport-bets-right"></span></p>
                        <p class="modal-sport-stake"><span class="modal-sport-stake-left">Stake</span><span
                                class="modal-sport-stake-right">4</span></p>
                        <p class="modal-sport-win"><span class="modal-sport-win-left">Winnings</span><span
                                class="modal-sport-win-right">24</span></p>
                        <button class="modal-sport-place button button-primary button-block" type="button"
                            data-bs-dismiss="modal">place bet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->


    <script src="{{ asset('plantilla/js/core.min.js') }}"></script>
    <script src="{{ asset('plantilla/js/script.js') }}"></script>


</body>

</html>
