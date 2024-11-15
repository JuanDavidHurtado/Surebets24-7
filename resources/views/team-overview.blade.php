@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}
    ">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Resumen del equipo</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">Panel</a></li>
                    <li><a href="#">Pagina</a></li>
                    <li class="active">Resumen del equipo</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-8">
                    <div class="row row-50">
                        <div class="col-sm-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Resultados del juego
                                    </h5>
                                </div>
                            </article>

                            <!-- Game Result Bug-->
                            <article class="game-result">
                                <div class="game-info game-info-classic">
                                    <p class="game-info-subtitle">New Yorkers Stadium -
                                        <time datetime="2023-04-17"> 15 de abril de 2023</time>
                                    </p>
                                    <h3 class="game-info-title">Semifinal de la liga de campeones 2023</h3>
                                    <div class="game-info-main">
                                        <div class="game-info-team game-info-team-first">
                                            <figure><img
                                                    src="
                                                {{ asset('plantilla/images/team-atletico-100x100.png') }}
                                                "
                                                    alt="" width="100" height="100" />
                                            </figure>
                                            <div class="game-result-team-name">Atletico</div>
                                            <div class="game-result-team-country">USA</div>
                                        </div>
                                        <div class="game-info-middle">
                                            <div class="game-result-score-wrap">
                                                <div class="game-info-score game-result-team-win">2</div>
                                                <div class="game-info-score">1</div>
                                            </div>
                                            <div class="game-result-divider-wrap"><span
                                                    class="game-info-team-divider">VS</span></div>
                                        </div>
                                        <div class="game-info-team game-info-team-second">
                                            <figure><img
                                                    src="
                                                {{ asset('plantilla/images/team-bavaria-fc-113x106.png') }}
                                              
                                                "
                                                    alt="" width="113" height="106" />
                                            </figure>
                                            <div class="game-result-team-name">Bavaria FC</div>
                                            <div class="game-result-team-country">Alemania</div>
                                        </div>
                                    </div>
                                    <!-- Table Game Info-->
                                    <div class="table-game-info-wrap"><span class="table-game-info-title">Game
                                            statistics<span></span></span>
                                        <div class="table-game-info-main table-custom-responsive">
                                            <table class="table-custom table-game-info">
                                                <tbody>
                                                    <tr>
                                                        <td class="table-game-info-number">10(9)</td>
                                                        <td class="table-game-info-category">Disparos (en el blanco)</td>
                                                        <td class="table-game-info-number">10(9)</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-game-info-number">4</td>
                                                        <td class="table-game-info-category">Tiros de esquina</td>
                                                        <td class="table-game-info-number">4</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-game-info-number">1</td>
                                                        <td class="table-game-info-category">Salvadas</td>
                                                        <td class="table-game-info-number">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-game-info-number">2</td>
                                                        <td class="table-game-info-category">Tarjetas amarillas</td>
                                                        <td class="table-game-info-number">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-game-info-number">1</td>
                                                        <td class="table-game-info-category">tarjetas rojas</td>
                                                        <td class="table-game-info-number">0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="progress-bar-main progress-bar-rotate-90">
                                        <div class="progress-bar-team progress-bar-team-first progress-bar-primary">
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar-js progress-bar-radial" data-value="81"
                                                    data-stroke="3" data-trail="3" data-gradient="#000000"></div>
                                                <p class="progress-bar-title">Precisión de tiro</p>
                                            </div>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar-js progress-bar-radial" data-value="70"
                                                    data-stroke="3" data-trail="3" data-gradient="#000000"></div>
                                                <p class="progress-bar-title">Precisión de pase</p>
                                            </div>
                                        </div>
                                        <div class="progress-bar-divider"></div>
                                        <div class="progress-bar-team progress-bar-team-second team2-red">
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar-js progress-bar-radial" data-value="89"
                                                    data-stroke="3" data-trail="3" data-gradient="#000000"></div>
                                                <p class="progress-bar-title">Precisión de pase</p>
                                            </div>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar-js progress-bar-radial" data-value="32"
                                                    data-stroke="3" data-trail="3" data-gradient="#000000"></div>
                                                <p class="progress-bar-title">Precisión de tiro</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Listas principales
                                    </h5>
                                </div>
                            </article>

                            <div class="row row-30">
                                <div class="col-sm-6">
                                    <!-- Table Roster-->
                                    <div class="table-custom-responsive">
                                        <table class="table-custom table-roster">
                                            <thead>
                                                <tr>
                                                    <th colspan="3">Atletico</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>NBR</td>
                                                    <td>Nombre del jugador</td>
                                                    <td>Posicion</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Harry Stevenson</td>
                                                    <td>Portero</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Jose Calderon</td>
                                                    <td>Defensa</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Chris Balleron</td>
                                                    <td>Defensa</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Sam Schmidt</td>
                                                    <td>Defensa</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>Jack Windsor</td>
                                                    <td>Mediocampista</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Joe Perkins</td>
                                                    <td>Mediocampista</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Ernesto Wilson</td>
                                                    <td>Mediocampista</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Franklin Stevens</td>
                                                    <td>Mediocampista</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Denis Shclyar</td>
                                                    <td>Delantero</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>David Hawkins</td>
                                                    <td>Delantero</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>James Peterson</td>
                                                    <td>Delantero</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Table Roster-->
                                    <div class="table-custom-responsive">
                                        <table class="table-custom table-roster team2-red">
                                            <thead>
                                                <tr>
                                                    <th colspan="3">Bavaria FC</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>NBR</td>
                                                    <td>Nombre del jugador</td>
                                                    <td>Posicion</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nathaniel Chalobah</td>
                                                    <td>Arquero</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Diego Costa</td>
                                                    <td>Defensa</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cesar Azpilicueta</td>
                                                    <td>Defensa</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Nemanja Matic</td>
                                                    <td>Defensa</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Branislav Ivanovic</td>
                                                    <td>MEDIOCAMPISTA</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Nathaniel Chalobah</td>
                                                    <td>MEDIOCAMPISTA</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Diego Costa</td>
                                                    <td>MEDIOCAMPISTA</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Cesar Azpilicueta</td>
                                                    <td>MEDIOCAMPISTA</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Dennis Williams</td>
                                                    <td>Delantero</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>Nemanja Matic</td>
                                                    <td>Delantero</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Branislav Ivanovic</td>
                                                    <td>Delantero</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Jugadores destacados

                                    </h5>
                                </div>
                            </article>

                            <!-- Player Info Corporate-->
                            <div class="player-info-corporate player-info-other-team">
                                <div class="player-info-figure">
                                    <div class="block-number"><span>15</span></div>
                                    <div class="player-img"><img
                                            src="
                                        {{ asset('plantilla/images/player-2-368x300.png') }}

                                       "
                                            alt="" width="368" height="300" />
                                    </div>
                                    <div class="team-logo-img"><img
                                            src="
                                        {{ asset('plantilla/images/logo-team-2-370x346.png') }}

                                        
                                        "
                                            alt="" width="370" height="346" />
                                    </div>
                                </div>
                                <div class="player-info-main">
                                    <h4 class="player-info-title">Nemanja Matic</h4>
                                    <p class="player-info-subtitle">Delantero</p>
                                    <hr />
                                    <div class="player-info-table">
                                        <div class="table-custom-wrap">
                                            <table class="table-custom">
                                                <tr>
                                                    <th>Goles</th>
                                                    <th>2</th>
                                                    <th>Asistencias</th>
                                                    <th>10</th>
                                                </tr>
                                                <tr>
                                                    <td>Disparos en el blanco</td>
                                                    <td>34 (2)</td>
                                                    <td>Pases clave</td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td>Regates</td>
                                                    <td>20</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="player-info-progress">
                                        <!-- Linear progress bar-->
                                        <article class="progress-linear progress-bar-modern">
                                            <div class="progress-header">
                                                <p>precisión de pases</p>
                                            </div>
                                            <div class="progress-bar-linear-wrap">
                                                <div class="progress-bar-linear"></div>
                                            </div><span class="progress-value">95</span>
                                        </article>
                                        <!-- Linear progress bar-->
                                        <article class="progress-linear progress-bar-modern">
                                            <div class="progress-header">
                                                <p>precisión de disparos</p>
                                            </div>
                                            <div class="progress-bar-linear-wrap">
                                                <div class="progress-bar-linear"></div>
                                            </div><span class="progress-value">70</span>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- Player Info Corporate-->
                            <div class="player-info-corporate">
                                <div class="player-info-figure">
                                    <div class="block-number"><span>11</span></div>
                                    <div class="player-img"><img
                                            src="
                                        {{ asset('plantilla/images/player-1-368x300.png') }}

                                        "
                                            alt="" width="368" height="300" />
                                    </div>
                                    <div class="team-logo-img"><img
                                            src="
                                        {{ asset('plantilla/images/logo-team-1-313x313.png') }}
                                        "
                                            alt="" width="313" height="313" />
                                    </div>
                                </div>
                                <div class="player-info-main">
                                    <h4 class="player-info-title">David Hawkins</h4>
                                    <p class="player-info-subtitle">Defensa</p>
                                    <hr />
                                    <div class="player-info-table">
                                        <div class="table-custom-wrap">
                                            <table class="table-custom">
                                                <tr>
                                                    <th>Goles</th>
                                                    <th>2</th>
                                                    <th>Asistencias</th>
                                                    <th>10</th>
                                                </tr>
                                                <tr>
                                                    <td>Disparos en el blanco</td>
                                                    <td>34 (2)</td>
                                                    <td>Pases clave</td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td>Regates</td>
                                                    <td>20</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="player-info-progress">
                                        <!-- Linear progress bar-->
                                        <article class="progress-linear progress-bar-modern">
                                            <div class="progress-header">
                                                <p>precisión de pases</p>
                                            </div>
                                            <div class="progress-bar-linear-wrap">
                                                <div class="progress-bar-linear"></div>
                                            </div><span class="progress-value">95</span>
                                        </article>
                                        <!-- Linear progress bar-->
                                        <article class="progress-linear progress-bar-modern">
                                            <div class="progress-header">
                                                <p>precisión de disparos</p>
                                            </div>
                                            <div class="progress-bar-linear-wrap">
                                                <div class="progress-bar-linear"></div>
                                            </div><span class="progress-value">70</span>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Calendario de juegos
                                    </h5>
                                    <div class="heading-component-aside">
                                        <ul class="list-inline list-inline-xs list-inline-middle">
                                            <li style="min-width: 170px">
                                                <select class="select select-minimal" data-placeholder="Select an option"
                                                    data-container-class="select-minimal"
                                                    data-dropdown-class="select-minimal-dropdown">
                                                    <option value="All Competitions" selected="">Todas las
                                                        competiciones
                                                    </option>
                                                    <option value="Champions League">Liga de Campeones</option>
                                                </select>
                                            </li>
                                            <li style="min-width: 110px">
                                                <select class="select select-minimal" data-placeholder="Select an option"
                                                    data-container-class="select-minimal"
                                                    data-dropdown-class="select-minimal-dropdown">
                                                    <option value="may" selected="">Mayo</option>
                                                    <option value="april">Abril</option>
                                                    <option value="march">Marzo </option>
                                                </select>
                                            </li>
                                            <li style="min-width: 100px">
                                                <select class="select select-minimal" data-placeholder="Select an option"
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
                                    <p class="game-info-subtitle">New Yorkers Stadium -
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
                                            <time class="time-big" datetime="2023-04-17"><span class="heading-3">Vie
                                                    19</span> May 2023
                                            </time>
                                            <div class="game-result-divider-wrap"><span
                                                    class="game-info-team-divider">VS</span></div>
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
                                                    boletos
                                                </a>
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
                                    <p class="game-info-subtitle">Bavaria Stadium -
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
                                            <div class="game-result-team-country">Alemania</div>
                                        </div>
                                        <div class="game-info-middle game-info-middle-vertical">
                                            <time class="time-big" datetime="2023-04-17"><span class="heading-3">Dom
                                                    21</span> May 2023
                                            </time>
                                            <div class="game-result-divider-wrap"><span
                                                    class="game-info-team-divider">VS</span></div>
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
                                                    boletos
                                                </a>
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
                                    <h3 class="game-info-title">Semi-Final (Cuartos de Final)</h3>
                                    <div class="game-info-main">
                                        <div class="game-info-team game-info-team-first">
                                            <figure><img
                                                    src="
                                                {{ asset('plantilla/images/team-atletico-100x100.png') }}
                                               "
                                                    alt="" width="100" height="100" />
                                            </figure>
                                            <div class="game-result-team-name">Atletico</div>
                                            <div class="game-result-team-country">USA</div>
                                        </div>
                                        <div class="game-info-middle game-info-middle-vertical">
                                            <time class="time-big" datetime="2023-04-17"><span
                                                    class="heading-3">Miercoles
                                                    24</span> May 2023
                                            </time>
                                            <div class="game-result-divider-wrap"><span
                                                    class="game-info-team-divider">VS</span></div>
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
                                                    Boletos
                                                </a>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Lo más destacado del juego
                                    </h5>
                                </div>
                            </article>

                            <!-- Game Highlights-->
                            <div class="game-highlights">
                                <ul class="game-highlights-list">
                                    <li>
                                        <p class="game-highlights-title">Inicio del partido
                                        </p><span class="game-highlights-minute">0’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-orange-dark fa fa-exclamation"></span>Falta por
                                            Martin Pierto
                                        </p>
                                        <p class="game-highlights-description">Martín Pierto mostró agudos reflejos pero
                                            no logró anotar para su equipo.</p><span
                                            class="game-highlights-minute">12’</span>
                                    </li>
                                    <li class="team-primary">
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-primary fa fa-futbol-o"></span><span
                                                class="game-highlights-goal">Meta</span> (1-0)
                                        </p>
                                        <p class="game-highlights-description">Franklin Stevens anotó con el pie derecho.
                                            Asistencia de David Hawkins.</p><span class="game-highlights-minute">18’</span>
                                    </li>
                                    <li class="team2-blue">
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-blue-boston fa fa-futbol-o"></span><span
                                                class="game-highlights-goal">Meta</span> (1-1)
                                        </p>
                                        <p class="game-highlights-description">El defensa del Atlético James Peterson se
                                            volvió
                                            Centro de Hernández a su propia portería.</p><span
                                            class="game-highlights-minute">21’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-orange fa fa-file"></span>Tarjeta amarilla
                                        </p>
                                        <p class="game-highlights-description">Ernesto Wilson recibió su primera tarjeta
                                            amarilla
                                            justo antes de que terminara el primer tiempo.</p><span
                                            class="game-highlights-minute">28’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-primary fa fa-life-ring"></span>Intento guardado
                                        </p>
                                        <p class="game-highlights-description">Harry Stevenson salvó el intento de Rob
                                            Wilson
                                            anotar un gol.</p><span class="game-highlights-minute">31’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-blue-boston fa fa-hand-o-right"></span>Tiro penal
                                        </p>
                                        <p class="game-highlights-description">
                                            Realizado por Sam Schmidt, este tiro penal marca el inicio del segundo tiempo.
                                        </p><span class="game-highlights-minute">47’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-primary fa fa-flag"></span>Fuera de juego de
                                            Chris Balleron
                                        </p>
                                        <p class="game-highlights-description">Chris Balleron recibió una advertencia de
                                            fuera de juego por tocar el balón pasado.</p><span
                                            class="game-highlights-minute">60’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-red-2 fa fa-file"></span>tarjeta roja
                                        </p>
                                        <p class="game-highlights-description">El árbitro mostró tarjeta roja a Joe Perkins
                                            en el minuto 74 del partido.</p><span class="game-highlights-minute">74’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-primary fa fa-exchange"></span>Gary Cahill <span
                                                class="text-gray-500">for</span> jack windsor
                                        </p>
                                        <p class="game-highlights-description">El Atlético sustituye a su primer delantero
                                            por Jack Windsor antes de que acabe el segundo tiempo.</p><span
                                            class="game-highlights-minute">86’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-blue-boston fa fa-clock-o"></span>La árbitro
                                            agrega 4 minutos.
                                        </p>
                                        <p class="game-highlights-description">El árbitro añade 4 minutos al segundo tiempo
                                            para compensar el tiempo de celebración del gol.</p><span
                                            class="game-highlights-minute">89’</span>
                                    </li>
                                    <li>
                                        <p class="game-highlights-title"><span
                                                class="icon icon-xxs icon-primary fa fa-flag-checkered"></span>Fin del
                                            juego
                                        </p>
                                        <p class="game-highlights-description">4 minutos más tarde el árbitro anuncia el
                                            final del partido con resultado de empate.</p><span
                                            class="game-highlights-minute">94’</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Ultimos resultados del juego
                                    </h5>
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
                                        <div class="game-result-team-country">Estdos Unidos</div>
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
                                                    class="game-result-team-label game-result-team-label-top">Gnador</span>
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
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Nuestros premios
                                    </h5>
                                </div>
                            </article>

                            <!-- Owl Carousel-->
                            <div class="owl-carousel owl-carousel-dots-modern awards-carousel" data-items="1"
                                data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false"
                                data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                                <!-- Awards Item-->
                                <div class="awards-item">
                                    <div class="awards-item-main">
                                        <h4 class="awards-item-title"><span class="text-accent">Campeones </span>del mundo
                                        </h4>
                                        <div class="divider"></div>
                                        <h5 class="awards-item-time">Diciembre 2014</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img
                                            src="
                                        {{ asset('plantilla/images/thumbnail-minimal-1-67x147.png') }}
                                        "
                                            alt="" width="67" height="147" />
                                    </div>
                                </div>
                                <!-- Awards Item-->
                                <div class="awards-item">
                                    <div class="awards-item-main">
                                        <h4 class="awards-item-title"><span class="text-accent">Mejor </span>Delantero
                                        </h4>
                                        <div class="divider"></div>
                                        <h5 class="awards-item-time">Junio 2015</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img
                                            src="
                                        {{ asset('plantilla/images/thumbnail-minimal-2-68x126.png') }}
                                       "
                                            alt="" width="68" height="126" />
                                    </div>
                                </div>
                                <!-- Awards Item-->
                                <div class="awards-item">
                                    <div class="awards-item-main">
                                        <h4 class="awards-item-title"><span class="text-accent">Mejor</span>Entrenador
                                        </h4>
                                        <div class="divider"></div>
                                        <h5 class="awards-item-time">Noviembre 2016</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img
                                            src="
                                        {{ asset('plantilla/images/thumbnail-minimal-3-73x135.png') }}
                                        "
                                            alt="" width="73" height="135" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Clasificacion
                                    </h5><a class="button button-xs button-gray-outline" href="{{route('standings')}}">Full
                                        Clasificacion completa</a>
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
                                    <h5 class="heading-component-title">Estadísticas del equipo
                                    </h5>
                                </div>
                            </article>

                            <div class="table-custom-responsive">
                                <table class="table-custom table-custom-bordered table-team-statistic">
                                    <tr>
                                        <td>
                                            <p class="team-statistic-counter">109</p>
                                            <p class="team-statistic-title">Puntos por juego</p>
                                        </td>
                                        <td>
                                            <p class="team-statistic-counter">65</p>
                                            <p class="team-statistic-title">Rebotes por partido</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="team-statistic-counter">23.6</p>
                                            <p class="team-statistic-title">Asistencias por partido</p>
                                        </td>
                                        <td>
                                            <p class="team-statistic-counter">102</p>
                                            <p class="team-statistic-title">Puntos permitidos</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Suscríbase a nuestro boletín
                                    </h5>
                                </div>
                            </article>

                            <!-- Mail Form Modern-->
                            <form class="rd-mailform rd-mailform-modern" data-form-output="form-output-global"
                                data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <label class="form-label" for="subscribe-email">Ingrese tu correo electrónico</label>
                                    <input class="form-input" id="subscribe-email" type="email" name="email"
                                        data-constraints="@Email @Required">
                                </div>
                                <div class="form-wrap">
                                    <button class="button button-block button-primary" type="submit">Suscribir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
