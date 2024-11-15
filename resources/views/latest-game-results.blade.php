@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Ultimos resultados del juego</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">Panel</a></li>
                    <li><a href="#">Paginas</a></li>
                    <li class="active">Ultimos resultados del juego</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-xl-8">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">Ultimos resultados del juego
                            </h5>
                            <div class="heading-component-aside">
                                <ul class="list-inline list-inline-xs list-inline-middle">
                                    <li style="min-width: 124px">
                                        <select class="select" data-placeholder="Champions League"
                                            data-container-class="select-minimal"
                                            data-dropdown-class="select-minimal-dropdown">
                                            <option value="playoffs 2023" selected="">Eliminatorias 2023</option>
                                            <option value="playoffs 2016">Eliminatorias 2016</option>
                                            <option value="playoffs 2015">Eliminatorias 2015</option>
                                            <option value="playoffs 2014">Eliminatorias 2014</option>
                                            <option value="playoffs 2013">Eliminatorias 2013</option>
                                        </select>
                                    </li>
                                    <li style="min-width: 110px">
                                        <select class="select" data-placeholder="2016-2023"
                                            data-container-class="select-minimal"
                                            data-dropdown-class="select-minimal-dropdown">
                                            <option value="october" selected="">Octubre</option>
                                            <option value="november">Noviembre</option>
                                            <option value="december">Diciembre</option>
                                            <option value="january">Enero</option>
                                            <option value="february">Febrero</option>
                                        </select>
                                    </li>
                                    <li style="min-width: 110px">
                                        <select class="select" data-placeholder="2016-2023"
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

                    <div class="row row-30">
                        <div class="col-md-6">
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
                                                src="{{ asset('plantilla/images/team-real-madrid-41x59.png') }}
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
                        </div>
                        <div class="col-md-6">
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
                                        <div class="game-results-status">Fuera de Casa</div>
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
                        </div>
                        <div class="col-md-6">
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
                                            <time datetime="2023-04-14">14 de abril del 2023</time>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
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
                                                {{ asset('plantilla/images/team-barcelona-57x49.png') }}
                                                "
                                                alt="" width="57" height="49" />
                                        </figure>
                                        <div class="game-result-team-name">Barcelona</div>
                                        <div class="game-result-team-country">España</div>
                                    </div>
                                </div>
                                <div class="game-result-footer">
                                    <ul class="game-result-details">
                                        <li>Estadio de los neoyorquinos</li>
                                        <li>
                                            <time datetime="2023-04-14">14 de abril del 2023</time>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">Clasificacion
                            </h5><a class="button button-xs button-gray-outline" href="standings.html">Clasificacion
                                completa</a>
                        </div>
                    </article>

                    <!-- Table team-->
                    <div class="table-custom-responsive">
                        <table class="table-custom table-standings table-classic">
                            <thead>
                                <tr>
                                    <th colspan="2">Posicion del equipo</th>
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
            </div>
        </div>
    </section>
@endsection
