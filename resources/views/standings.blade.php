@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Clasificaciones</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('sports')}}">Panel</a></li>
                    <li><a href="#">Pagina</a></li>
                    <li class="active">Clasificaciones</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-7 col-xl-8">
                    <div class="row row-50">
                        <div class="col-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Clasificacion
                                    </h5>
                                    <div class="heading-component-aside">
                                        <ul class="list-inline list-inline-xs list-inline-middle">
                                            <li style="min-width: 170px">
                                                <select class="select" data-placeholder="Champions League"
                                                    data-container-class="select-minimal"
                                                    data-dropdown-class="select-minimal-dropdown">
                                                    <option value="Champions League" selected="">Liga de Campeones
                                                    </option>
                                                    <option value="Europa League">Liga Europea</option>
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

                            <div class="card-standing card-group-custom card-standing-index" id="accordion1" role="tablist"
                                aria-multiselectable="false">
                                <div class="card-standing-caption">
                                    <div class="card-standing-position">Pos</div>
                                    <div class="card-standing-caption-aside">
                                        <div class="card-standing-team">Equipo</div>
                                        <div class="card-standing-number">W</div>
                                        <div class="card-standing-number">L</div>
                                        <div class="card-standing-number">T</div>
                                        <div class="card-standing-points">PTS</div>
                                        <div class="card-standing-diff">Diferencia</div>
                                    </div>
                                </div>
                                <!-- Bootstrap card-->
                                <article class="card card-custom">
                                    <div class="card-standing-position card-standing-counter"></div>
                                    <div class="card-header" id="accordion1Heading1" role="tab">
                                        <div class="card-standing-team-item">
                                            <div class="card-standing-team">
                                                <div class="card-standing-team-figure"><img
                                                        src="
                                                        {{ asset('plantilla/images/team-atletico-37x37.png') }}
                                                        "
                                                        alt="" width="37" height="37" />
                                                </div>
                                                <div class="card-standing-team-title">
                                                    <div class="card-standing-team-name">Atletico</div>
                                                    <div class="card-standing-team-country">Estados Unidos</div>
                                                </div>
                                            </div>
                                            <div class="card-standing-number">153</div>
                                            <div class="card-standing-number">30</div>
                                            <div class="card-standing-number">1</div>
                                            <div class="card-standing-points">586</div>
                                            <div class="card-standing-diff">+12</div>
                                            <div class="card-standing-button"><a
                                                    class="card-standing-toogle material-icons-remove collapsed"
                                                    role="button" data-bs-toggle="collapse" data-parent="#accordion1"
                                                    href="#accordion1Collapse1" aria-controls="accordion1Collapse1"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse" id="accordion1Collapse1" role="tabpanel"
                                        aria-labelledby="accordion1Heading1">
                                        <div class="card-body">
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Casa</div>
                                                <div class="card-standing-number">78</div>
                                                <div class="card-standing-number">2</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                            <div class="card-standing-divider"></div>
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Fuera de Casa</div>
                                                <div class="card-standing-number">26</div>
                                                <div class="card-standing-number">28</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Bootstrap card-->
                                <article class="card card-custom">
                                    <div class="card-standing-position card-standing-counter"></div>
                                    <div class="card-header" id="accordion1Heading2" role="tab">
                                        <div class="card-standing-team-item">
                                            <div class="card-standing-team">
                                                <div class="card-standing-team-figure"><img
                                                        src="
                                                        {{ asset('plantilla/images/team-sevilla-45x35.png') }}
                                                        "
                                                        alt="" width="45" height="35" />
                                                </div>
                                                <div class="card-standing-team-title">
                                                    <div class="card-standing-team-name">Sevilla</div>
                                                    <div class="card-standing-team-country">España</div>
                                                </div>
                                            </div>
                                            <div class="card-standing-number">153</div>
                                            <div class="card-standing-number">30</div>
                                            <div class="card-standing-number">1</div>
                                            <div class="card-standing-points">586</div>
                                            <div class="card-standing-diff">+12</div>
                                            <div class="card-standing-button"><a
                                                    class="card-standing-toogle material-icons-remove collapsed"
                                                    role="button" data-bs-toggle="collapse" data-parent="#accordion1"
                                                    href="#accordion1Collapse2" aria-controls="accordion1Collapse2"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse" id="accordion1Collapse2" role="tabpanel"
                                        aria-labelledby="accordion1Heading2">
                                        <div class="card-body">
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Casa</div>
                                                <div class="card-standing-number">78</div>
                                                <div class="card-standing-number">2</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                            <div class="card-standing-divider"></div>
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Fuera de Casa</div>
                                                <div class="card-standing-number">26</div>
                                                <div class="card-standing-number">28</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Bootstrap card-->
                                <article class="card card-custom">
                                    <div class="card-standing-position card-standing-counter"></div>
                                    <div class="card-header" id="accordion1Heading3" role="tab">
                                        <div class="card-standing-team-item">
                                            <div class="card-standing-team">
                                                <div class="card-standing-team-figure"><img
                                                        src="
                                                        {{ asset('plantilla/images/team-real-madrid-29x43.png') }}
                                                        "
                                                        alt="" width="29" height="43" />
                                                </div>
                                                <div class="card-standing-team-title">
                                                    <div class="card-standing-team-name">Real Madrid</div>
                                                    <div class="card-standing-team-country">España</div>
                                                </div>
                                            </div>
                                            <div class="card-standing-number">153</div>
                                            <div class="card-standing-number">30</div>
                                            <div class="card-standing-number">1</div>
                                            <div class="card-standing-points">586</div>
                                            <div class="card-standing-diff">+12</div>
                                            <div class="card-standing-button"><a
                                                    class="card-standing-toogle material-icons-remove collapsed"
                                                    role="button" data-bs-toggle="collapse" data-parent="#accordion1"
                                                    href="#accordion1Collapse3" aria-controls="accordion1Collapse3"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse" id="accordion1Collapse3" role="tabpanel"
                                        aria-labelledby="accordion1Heading3">
                                        <div class="card-body">
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Casa</div>
                                                <div class="card-standing-number">78</div>
                                                <div class="card-standing-number">2</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                            <div class="card-standing-divider"></div>
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Fuera de Casa</div>
                                                <div class="card-standing-number">26</div>
                                                <div class="card-standing-number">28</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Bootstrap card-->
                                <article class="card card-custom">
                                    <div class="card-standing-position card-standing-counter"></div>
                                    <div class="card-header" id="accordion1Heading4" role="tab">
                                        <div class="card-standing-team-item">
                                            <div class="card-standing-team">
                                                <div class="card-standing-team-figure"><img
                                                        src="
                                                        {{ asset('plantilla/images/team-celta-vigo-37x34.png') }}
                                                        "
                                                        alt="" width="37" height="34" />
                                                </div>
                                                <div class="card-standing-team-title">
                                                    <div class="card-standing-team-name">Celta Vigo</div>
                                                    <div class="card-standing-team-country">España</div>
                                                </div>
                                            </div>
                                            <div class="card-standing-number">153</div>
                                            <div class="card-standing-number">30</div>
                                            <div class="card-standing-number">1</div>
                                            <div class="card-standing-points">586</div>
                                            <div class="card-standing-diff">+12</div>
                                            <div class="card-standing-button"><a
                                                    class="card-standing-toogle material-icons-remove collapsed"
                                                    role="button" data-bs-toggle="collapse" data-parent="#accordion1"
                                                    href="#accordion1Collapse4" aria-controls="accordion1Collapse4"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse" id="accordion1Collapse4" role="tabpanel"
                                        aria-labelledby="accordion1Heading4">
                                        <div class="card-body">
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Casa</div>
                                                <div class="card-standing-number">78</div>
                                                <div class="card-standing-number">2</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                            <div class="card-standing-divider"></div>
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Fuera de Casa</div>
                                                <div class="card-standing-number">26</div>
                                                <div class="card-standing-number">28</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Bootstrap card-->
                                <article class="card card-custom">
                                    <div class="card-standing-position card-standing-counter"></div>
                                    <div class="card-header" id="accordion1Heading5" role="tab">
                                        <div class="card-standing-team-item">
                                            <div class="card-standing-team">
                                                <div class="card-standing-team-figure"><img
                                                        src="
                                                        {{ asset('plantilla/images/team-barcelona-36x31.png') }}
                                                        "
                                                        alt="" width="36" height="31" />
                                                </div>
                                                <div class="card-standing-team-title">
                                                    <div class="card-standing-team-name">Barcelona</div>
                                                    <div class="card-standing-team-country">España</div>
                                                </div>
                                            </div>
                                            <div class="card-standing-number">153</div>
                                            <div class="card-standing-number">30</div>
                                            <div class="card-standing-number">1</div>
                                            <div class="card-standing-points">586</div>
                                            <div class="card-standing-diff">+12</div>
                                            <div class="card-standing-button"><a
                                                    class="card-standing-toogle material-icons-remove collapsed"
                                                    role="button" data-bs-toggle="collapse" data-parent="#accordion1"
                                                    href="#accordion1Collapse5" aria-controls="accordion1Collapse5"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse" id="accordion1Collapse5" role="tabpanel"
                                        aria-labelledby="accordion1Heading5">
                                        <div class="card-body">
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Casa</div>
                                                <div class="card-standing-number">78</div>
                                                <div class="card-standing-number">2</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                            <div class="card-standing-divider"></div>
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Fuera de Casa</div>
                                                <div class="card-standing-number">26</div>
                                                <div class="card-standing-number">28</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Bootstrap card-->
                                <article class="card card-custom">
                                    <div class="card-standing-position card-standing-counter"></div>
                                    <div class="card-header" id="accordion1Heading6" role="tab">
                                        <div class="card-standing-team-item">
                                            <div class="card-standing-team">
                                                <div class="card-standing-team-figure"><img
                                                        src="
                                                        {{ asset('plantilla/images/team-bavaria-fc-39x37.png') }}
                                                        "
                                                        alt="" width="39" height="37" />
                                                </div>
                                                <div class="card-standing-team-title">
                                                    <div class="card-standing-team-name">Bavaria FC</div>
                                                    <div class="card-standing-team-country">Alemania</div>
                                                </div>
                                            </div>
                                            <div class="card-standing-number">153</div>
                                            <div class="card-standing-number">30</div>
                                            <div class="card-standing-number">1</div>
                                            <div class="card-standing-points">586</div>
                                            <div class="card-standing-diff">+12</div>
                                            <div class="card-standing-button"><a
                                                    class="card-standing-toogle material-icons-remove collapsed"
                                                    role="button" data-bs-toggle="collapse" data-parent="#accordion1"
                                                    href="#accordion1Collapse6" aria-controls="accordion1Collapse6"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse" id="accordion1Collapse6" role="tabpanel"
                                        aria-labelledby="accordion1Heading6">
                                        <div class="card-body">
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Casa</div>
                                                <div class="card-standing-number">78</div>
                                                <div class="card-standing-number">2</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                            <div class="card-standing-divider"></div>
                                            <div class="card-standing-team-details">
                                                <div class="card-standing-game-status">Fuera de Casa</div>
                                                <div class="card-standing-number">26</div>
                                                <div class="card-standing-number">28</div>
                                                <div class="card-standing-number">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Terminos del glosario
                                    </h5>
                                </div>
                            </article>

                            <div class="game-glossary">
                                <div class="game-glossary-wrap row-10">
                                    <div class="game-glossary-column">
                                        <table class="game-glossary-terms">
                                            <tr>
                                                <td>W:</td>
                                                <td>Ganador</td>
                                            </tr>
                                            <tr>
                                                <td>L:</td>
                                                <td>Perdedor</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="game-glossary-column">
                                        <table class="game-glossary-terms">
                                            <tr>
                                                <td>T:</td>
                                                <td>Ties</td>
                                            </tr>
                                            <tr>
                                                <td>PTS:</td>
                                                <td>Porcentaje ganador</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="game-glossary-column">
                                        <table class="game-glossary-terms">
                                            <tr>
                                                <td>DIFF:</td>
                                                <td>Diferencial de puntos</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">Ultimos resultados de los Juegos
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
            </div>
        </div>
    </section>
@endsection
