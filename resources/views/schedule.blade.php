@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}
    ">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Cronograma</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">Panel</a></li>
                    <li><a href="#">Pagina</a></li>
                    <li class="active">Cronograma</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-8">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">Calendario de juegos
                            </h5>
                            <div class="heading-component-aside">
                                <ul class="list-inline list-inline-xs list-inline-middle">
                                    <li style="min-width: 170px">
                                        <select class="select" data-placeholder="Select an option"
                                            data-container-class="select-minimal"
                                            data-dropdown-class="select-minimal-dropdown">
                                            <option value="All Competitions" selected="">Todas las competiciones</option>
                                            <option value="Champions League">Liga de Campeones</option>
                                        </select>
                                    </li>
                                    <li style="min-width: 100px">
                                        <select class="select" data-placeholder="Select an option"
                                            data-container-class="select-minimal"
                                            data-dropdown-class="select-minimal-dropdown">
                                            <option value="may" selected="">Mayo</option>
                                            <option value="april">Abril</option>
                                            <option value="march">Marzo </option>
                                        </select>
                                    </li>
                                    <li style="min-width: 110px">
                                        <select class="select" data-placeholder="Select an option"
                                            data-container-class="select-minimal"
                                            data-dropdown-class="select-minimal-dropdown">
                                            <option value="2016-2023" selected="">2016-2023</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2014-2015">2014-2015</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <!-- Game Result Bug-->
                    <article class="game-result">
                        <div class="game-info">
                            <p class="game-info-subtitle">Estadio de los neoyorquinos -
                                <time datetime="08:30"> 08:30 PM</time>
                            </p>
                            <h3 class="game-info-title">Copa de Europa de fútbol: jornada 38</h3>
                            <div class="game-info-main">
                                <div class="game-info-team game-info-team-first">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-atletico-100x100.png') }}
                                        
                                        "
                                            alt="" width="100" height="100" />
                                    </figure>
                                    <div class="game-result-team-name">Atletico</div>
                                    <div class="game-result-team-country">Estados Unidos</div>
                                </div>
                                <div class="game-info-middle game-info-middle-vertical">
                                    <time class="time-big" datetime="2023-04-17"><span class="heading-3">Viernes 19</span>
                                        Mayo
                                        2023
                                    </time>
                                    <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span>
                                    </div>
                                    <div class="group-sm">
                                        <div class="button button-sm button-share-outline">Compartir
                                            <ul class="game-info-share">
                                                <li class="game-info-share-item"><a class="icon fa fa-facebook"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-twitter"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-google-plus"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-instagram"
                                                        href="#"></a></li>
                                            </ul>
                                        </div><a class="button button-sm button-primary" href="#">Comprar Boletos</a>
                                    </div>
                                </div>
                                <div class="game-info-team game-info-team-second">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-real-madrid-75x106.png') }}
                                        "
                                            alt="" width="75" height="106" />
                                    </figure>
                                    <div class="game-result-team-name">Real Madrid</div>
                                    <div class="game-result-team-country">España</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Game Result Bug-->
                    <article class="game-result">
                        <div class="game-info">
                            <p class="game-info-subtitle">Estadio de Baviera -
                                <time datetime="08:30"> 08:30 PM</time>
                            </p>
                            <h3 class="game-info-title">Copa del Rey Final</h3>
                            <div class="game-info-main">
                                <div class="game-info-team game-info-team-first">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-bavaria-fc-113x106.png') }}
                                        "
                                            alt="" width="113" height="106" />
                                    </figure>
                                    <div class="game-result-team-name">Bavaria FC</div>
                                    <div class="game-result-team-country">Germany</div>
                                </div>
                                <div class="game-info-middle game-info-middle-vertical">
                                    <time class="time-big" datetime="2023-04-17"><span class="heading-3">Dom 21</span>
                                        Mayo 2023
                                    </time>
                                    <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span>
                                    </div>
                                    <div class="group-sm">
                                        <div class="button button-sm button-share-outline">Compartir
                                            <ul class="game-info-share">
                                                <li class="game-info-share-item"><a class="icon fa fa-facebook"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-twitter"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-google-plus"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-instagram"
                                                        href="#"></a></li>
                                            </ul>
                                        </div><a class="button button-sm button-primary" href="#">Comprar
                                            boletos</a>
                                    </div>
                                </div>
                                <div class="game-info-team game-info-team-second">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-atletico-100x100.png') }}
                                        "
                                            alt="" width="100" height="100" />
                                    </figure>
                                    <div class="game-result-team-name">Atletico</div>
                                    <div class="game-result-team-country">Estados Unidos</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Game Result Bug-->
                    <article class="game-result">
                        <div class="game-info">
                            <p class="game-info-subtitle">Estadio de los neoyorquinos -
                                <time datetime="08:30"> 08:30 PM</time>
                            </p>
                            <h3 class="game-info-title">Semi-Final (FINAL)</h3>
                            <div class="game-info-main">
                                <div class="game-info-team game-info-team-first">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-atletico-100x100.png') }}
                                        "
                                            alt="" width="100" height="100" />
                                    </figure>
                                    <div class="game-result-team-name">Atletico</div>
                                    <div class="game-result-team-country">Estados Unidos</div>
                                </div>
                                <div class="game-info-middle game-info-middle-vertical">
                                    <time class="time-big" datetime="2023-04-17"><span class="heading-3">Miercoles
                                            24</span>
                                        Mayo 2023
                                    </time>
                                    <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span>
                                    </div>
                                    <div class="group-sm">
                                        <div class="button button-sm button-share-outline">Compartir
                                            <ul class="game-info-share">
                                                <li class="game-info-share-item"><a class="icon fa fa-facebook"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-twitter"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-google-plus"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-instagram"
                                                        href="#"></a></li>
                                            </ul>
                                        </div><a class="button button-sm button-primary" href="#">Comprar
                                            boletos</a>
                                    </div>
                                </div>
                                <div class="game-info-team game-info-team-second">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-barcelona-119x102.png') }}
                                        "
                                            alt="" width="119" height="102" />
                                    </figure>
                                    <div class="game-result-team-name">Barcelona</div>
                                    <div class="game-result-team-country">España</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Game Result Bug-->
                    <article class="game-result">
                        <div class="game-info">
                            <p class="game-info-subtitle">Estadio Sevilla -
                                <time datetime="08:30"> 08:30 PM</time>
                            </p>
                            <h3 class="game-info-title">Liga de Campeones</h3>
                            <div class="game-info-main">
                                <div class="game-info-team game-info-team-first">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-sevilla-123x99.png') }}
                                        "
                                            alt="" width="123" height="99" />
                                    </figure>
                                    <div class="game-result-team-name">Sevilla</div>
                                    <div class="game-result-team-country">España</div>
                                </div>
                                <div class="game-info-middle game-info-middle-vertical">
                                    <time class="time-big" datetime="2023-04-17"><span class="heading-3">Dom 29</span>
                                        Mayo 2023
                                    </time>
                                    <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span>
                                    </div>
                                    <div class="group-sm">
                                        <div class="button button-sm button-share-outline">Compartir
                                            <ul class="game-info-share">
                                                <li class="game-info-share-item"><a class="icon fa fa-facebook"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-twitter"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-google-plus"
                                                        href="#"></a></li>
                                                <li class="game-info-share-item"><a class="icon fa fa-instagram"
                                                        href="#"></a></li>
                                            </ul>
                                        </div><a class="button button-sm button-primary" href="#">Comprar
                                            boletos</a>
                                    </div>
                                </div>
                                <div class="game-info-team game-info-team-second">
                                    <figure><img
                                            src="
                                        {{ asset('plantilla/images/team-atletico-100x100.png') }}
                                        "
                                            alt="" width="100" height="100" />
                                    </figure>
                                    <div class="game-result-team-name">Atletico</div>
                                    <div class="game-result-team-country">Estados Unidos</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="row row-30">
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Clasificacion
                                    </h5><a class="button button-xs button-gray-outline"
                                        href="{{ route('standings') }}">Clasificacion completa</a>
                                </div>
                            </article>

                            <!-- Table team-->
                            <div class="table-custom-responsive">
                                <table class="table-custom table-standings table-classic">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Posición del equipo</th>
                                            <th>W</th>
                                            <th>L</th>
                                            <th>PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span>1</span></td>
                                            <td class="team-inline">
                                                <div class="team-figure"><img
                                                        src="
                                                    {{ asset('plantilla/images/team-atletico-37x37.png') }}
                                                    "
                                                        alt="" width="37" height="37" />
                                                </div>
                                                <div class="team-title">
                                                    <div class="team-name">Atletico</div>
                                                    <div class="team-country">Estados Unidos</div>
                                                </div>
                                            </td>
                                            <td>153</td>
                                            <td>30</td>
                                            <td>186</td>
                                        </tr>
                                        <tr>
                                            <td><span>2</span></td>
                                            <td class="team-inline">
                                                <div class="team-figure"><img
                                                        src="
                                                    {{ asset('plantilla/images/team-sevilla-45x35.png') }}
                                                    "
                                                        alt="" width="45" height="35" />
                                                </div>
                                                <div class="team-title">
                                                    <div class="team-name">Sevilla</div>
                                                    <div class="team-country">España</div>
                                                </div>
                                            </td>
                                            <td>120</td>
                                            <td>30</td>
                                            <td>186</td>
                                        </tr>
                                        <tr>
                                            <td><span>3</span></td>
                                            <td class="team-inline">
                                                <div class="team-figure"><img
                                                        src="
                                                    {{ asset('plantilla/images/team-real-madrid-29x43.png') }}
                                                    "
                                                        alt="" width="29" height="43" />
                                                </div>
                                                <div class="team-title">
                                                    <div class="team-name">Real Madrid</div>
                                                    <div class="team-country">España</div>
                                                </div>
                                            </td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>186</td>
                                        </tr>
                                        <tr>
                                            <td><span>4</span></td>
                                            <td class="team-inline">
                                                <div class="team-figure"><img
                                                        src="
                                                    {{ asset('plantilla/images/team-celta-vigo-37x34.png') }}
                                                    "
                                                        alt="" width="37" height="34" />
                                                </div>
                                                <div class="team-title">
                                                    <div class="team-name">Celta Vigo</div>
                                                    <div class="team-country">España</div>
                                                </div>
                                            </td>
                                            <td>98</td>
                                            <td>30</td>
                                            <td>186</td>
                                        </tr>
                                        <tr>
                                            <td><span>5</span></td>
                                            <td class="team-inline">
                                                <div class="team-figure"><img
                                                        src="
                                                    {{ asset('plantilla/images/team-barcelona-36x31.png') }}
                                                    "
                                                        alt="" width="36" height="31" />
                                                </div>
                                                <div class="team-title">
                                                    <div class="team-name">Barcelona</div>
                                                    <div class="team-country">España</div>
                                                </div>
                                            </td>
                                            <td>98</td>
                                            <td>30</td>
                                            <td>186</td>
                                        </tr>
                                        <tr>
                                            <td><span>6</span></td>
                                            <td class="team-inline">
                                                <div class="team-figure"><img
                                                        src="
                                                    {{ asset('plantilla/images/team-bavaria-fc-39x37.png') }}
                                                    "
                                                        alt="" width="39" height="37" />
                                                </div>
                                                <div class="team-title">
                                                    <div class="team-name">Bavaria FC</div>
                                                    <div class="team-country">Alemania</div>
                                                </div>
                                            </td>
                                            <td>98</td>
                                            <td>30</td>
                                            <td>186</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Jugador del mes
                                    </h5>
                                </div>
                            </article>

                            <!-- Player Info Minimal-->
                            <div class="player-info-minimal">
                                <div class="player-info-minimal-figure"><img
                                        src="
                                    {{ asset('plantilla/images/player-3-229x268.png') }}
                                    "
                                        alt="" width="229" height="268" />
                                </div>
                                <div class="player-info-minimal-number">
                                    <p>21</p>
                                </div>
                                <div class="player-info-minimal-content">
                                    <div class="player-info-minimal-title">
                                        <h3>Jack<span>Windsor</span></h3>
                                    </div>
                                    <div class="player-info-minimal-progress">
                                        <!-- Linear progress bar-->
                                        <article class="progress-linear progress-bar-modern">
                                            <div class="progress-header">
                                                <p>Pase Acc</p><span class="progress-value">87</span>
                                            </div>
                                            <div class="progress-bar-linear-wrap">
                                                <div class="progress-bar-linear"></div>
                                            </div>
                                        </article>
                                        <!-- Linear progress bar-->
                                        <article class="progress-linear progress-bar-modern">
                                            <div class="progress-header">
                                                <p>Disparos Acc</p><span class="progress-value">93</span>
                                            </div>
                                            <div class="progress-bar-linear-wrap">
                                                <div class="progress-bar-linear"></div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 owl-carousel-outer-navigation">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Ultimos resultados del juego
                                    </h5>
                                    <div class="owl-carousel-arrows-outline">
                                        <div class="owl-nav">
                                            <button class="owl-arrow owl-arrow-prev"></button>
                                            <button class="owl-arrow owl-arrow-next"></button>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Owl Carousel-->
                            <div class="owl-carousel" data-items="1" data-dots="false" data-nav="true"
                                data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"
                                data-nav-custom=".owl-carousel-outer-navigation">
                                <!-- Game Result Classic-->
                                <article class="game-result game-result-classic">
                                    <div class="game-result-main">
                                        <div class="game-result-team game-result-team-first">
                                            <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                    src="
                                                    {{ asset('plantilla/images/team-atletico-55x55.png') }}
                                                    "
                                                    alt="" width="55" height="55" />
                                            </figure>
                                            <div class="game-result-team-name">Atletico</div>
                                            <div class="game-result-team-country">Estados Unidos</div>
                                        </div>
                                        <div class="game-result-middle">
                                            <div class="game-result-score-wrap">
                                                <div class="game-result-score game-result-team-win">2<span
                                                        class="game-result-team-label game-result-team-label-top">Ganador</span>
                                                </div>
                                                <div class="game-result-score-divider">
                                                    <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21"
                                                        enable-background="new 0 0 7 21" xml:space="preserve">
                                                        <g>
                                                            <circle cx="3.5" cy="3.5" r="3"></circle>
                                                            <path
                                                                d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z">
                                                            </path>
                                                        </g>
                                                        <g>
                                                            <circle cx="3.695" cy="17.5" r="3"></circle>
                                                            <path
                                                                d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="game-result-score">1
                                                </div>
                                            </div>
                                            <div class="game-results-status">Casa</div>
                                        </div>
                                        <div class="game-result-team game-result-team-second">
                                            <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                    src="
                                                    {{ asset('plantilla/images/team-real-madrid-41x59.png') }}
                                            "
                                                    alt="" width="41" height="59" />
                                            </figure>
                                            <div class="game-result-team-name">Real madrid</div>
                                            <div class="game-result-team-country">España</div>
                                        </div>
                                    </div>
                                    <div class="game-result-footer">
                                        <ul class="game-result-details">
                                            <li>Estadio de los neoyorquinos</li>
                                            <li>
                                                <time datetime="2023-04-14">14 de abril de 2023</time>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- Game Result Classic-->
                                <article class="game-result game-result-classic">
                                    <div class="game-result-main">
                                        <div class="game-result-team game-result-team-first">
                                            <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                    src="
                                                    {{ asset('plantilla/images/team-bavaria-fc-56x52.png') }}
                                                    "
                                                    alt="" width="56" height="52" />
                                            </figure>
                                            <div class="game-result-team-name">Bavaria FC</div>
                                            <div class="game-result-team-country">Alemania</div>
                                        </div>
                                        <div class="game-result-middle">
                                            <div class="game-result-score-wrap">
                                                <div class="game-result-score">2
                                                </div>
                                                <div class="game-result-score-divider">
                                                    <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21"
                                                        enable-background="new 0 0 7 21" xml:space="preserve">
                                                        <g>
                                                            <circle cx="3.5" cy="3.5" r="3"></circle>
                                                            <path
                                                                d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z">
                                                            </path>
                                                        </g>
                                                        <g>
                                                            <circle cx="3.695" cy="17.5" r="3"></circle>
                                                            <path
                                                                d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="game-result-score game-result-team-win">3<span
                                                        class="game-result-team-label game-result-team-label-top">Ganador</span>
                                                </div>
                                            </div>
                                            <div class="game-results-status">Lejos</div>
                                        </div>
                                        <div class="game-result-team game-result-team-second">
                                            <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                    src="
                                                    {{ asset('plantilla/images/team-atletico-55x55.png') }}
                                                    "
                                                    alt="" width="55" height="55" />
                                            </figure>
                                            <div class="game-result-team-name">Atletico</div>
                                            <div class="game-result-team-country">Estados Unidos</div>
                                        </div>
                                    </div>
                                    <div class="game-result-footer">
                                        <ul class="game-result-details">
                                            <li>Estadio de Baviera</li>
                                            <li>
                                                <time datetime="2023-04-14">14 de abril de 2023</time>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- Game Result Classic-->
                                <article class="game-result game-result-classic">
                                    <div class="game-result-main">
                                        <div class="game-result-team game-result-team-first">
                                            <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                    src="
                                                    {{ asset('plantilla/images/team-atletico-55x55.png') }}
                                                   "
                                                    alt="" width="55" height="55" />
                                            </figure>
                                            <div class="game-result-team-name">Atletico</div>
                                            <div class="game-result-team-country">Estados Unidos</div>
                                        </div>
                                        <div class="game-result-middle">
                                            <div class="game-result-score-wrap">
                                                <div class="game-result-score game-result-team-win">4<span
                                                        class="game-result-team-label game-result-team-label-top">Ganador</span>
                                                </div>
                                                <div class="game-result-score-divider">
                                                    <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21"
                                                        enable-background="new 0 0 7 21" xml:space="preserve">
                                                        <g>
                                                            <circle cx="3.5" cy="3.5" r="3"></circle>
                                                            <path
                                                                d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z">
                                                            </path>
                                                        </g>
                                                        <g>
                                                            <circle cx="3.695" cy="17.5" r="3"></circle>
                                                            <path
                                                                d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="game-result-score">1
                                                </div>
                                            </div>
                                            <div class="game-results-status">Casa</div>
                                        </div>
                                        <div class="game-result-team game-result-team-second">
                                            <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                    src="
                                                    {{ asset('plantilla/images/team-sevilla-57x46.png') }}
                                                    "
                                                    alt="" width="57" height="46" />
                                            </figure>
                                            <div class="game-result-team-name">Sevilla</div>
                                            <div class="game-result-team-country">España</div>
                                        </div>
                                    </div>
                                    <div class="game-result-footer">
                                        <ul class="game-result-details">
                                            <li>Estadio de los neoyorquinos</li>
                                            <li>
                                                <time datetime="2023-04-14">14 de abril de 2023</time>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Síganos
                                    </h5>
                                </div>
                            </article>

                            <!-- Buttons Media-->
                            <div class="group-sm group-flex"><a class="button-media button-media-facebook"
                                    href="#">
                                    <h4 class="button-media-title">50k</h4>
                                    <p class="button-media-action">Like<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-facebook"></span>
                                </a><a class="button-media button-media-twitter" href="#">
                                    <h4 class="button-media-title">120k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-twitter"></span>
                                </a><a class="button-media button-media-google" href="#">
                                    <h4 class="button-media-title">15k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-google"></span>
                                </a><a class="button-media button-media-instagram" href="#">
                                    <h4 class="button-media-title">85k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-instagram"></span>
                                </a></div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Galeria
                                    </h5>
                                </div>
                            </article>

                            <article class="gallery" data-lightgallery="group">
                                <div class="row row-10 row-narrow">
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative"
                                            data-lightgallery="item"
                                            href="
                                            {{ asset('plantilla/images/gallery-soccer-1-original.jpg') }}
                                           "><img
                                                src="
                                                {{ asset('plantilla/images/gallery-soccer-1-116x116.jpg') }}
                                                "
                                                alt="" />
                                            <div class="thumbnail-creative-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative"
                                            data-lightgallery="item"
                                            href="
                                            {{ asset('plantilla/images/gallery-soccer-2-original.jpg') }}
                                            "><img
                                                src="
                                                {{ asset('plantilla/images/gallery-soccer-2-116x116.jpg') }}
                                                "
                                                alt="" />
                                            <div class="thumbnail-creative-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative"
                                            data-lightgallery="item"
                                            href="
                                            {{ asset('plantilla/images/gallery-soccer-3-original.jpg') }}
                                            "><img
                                                src="
                                                {{ asset('plantilla/images/gallery-soccer-3-116x116.jpg') }}
                                                "
                                                alt="" />
                                            <div class="thumbnail-creative-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative"
                                            data-lightgallery="item"
                                            href="
                                            {{ asset('plantilla/images/gallery-soccer-4-original.jpg') }}
                                            "><img
                                                src="
                                                {{ asset('plantilla/images/gallery-soccer-4-116x116.jpg') }}
                                                "
                                                alt="" />
                                            <div class="thumbnail-creative-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative"
                                            data-lightgallery="item"
                                            href="
                                            {{ asset('plantilla/images/gallery-soccer-5-original.jpg') }}
                                            "><img
                                                src="
                                                {{ asset('plantilla/images/gallery-soccer-5-116x116.jpg') }}
                                               "
                                                alt="" />
                                            <div class="thumbnail-creative-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative"
                                            data-lightgallery="item"
                                            href="
                                            {{ asset('plantilla/images/gallery-soccer-6-original.jpg') }}
                                            "><img
                                                src="
                                                {{ asset('plantilla/images/gallery-soccer-6-116x116.jpg') }}
                                                "
                                                alt="" />
                                            <div class="thumbnail-creative-overlay"></div>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
