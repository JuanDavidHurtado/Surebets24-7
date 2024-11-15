@extends('layouts/app')

@section('content')
    <!-- All Sports-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="tabs-custom tabs-statistics">
                <button class="tab-filters-toggle button" data-custom-toggle="#nav-tabs" data-custom-toggle-hide-on-blur="true"
                    data-custom-toggle-disable-on-blur="true">Select<span class="caret"></span></button>
                <ul class="nav nav-tabs nav-filter-list" id="nav-tabs">
                    <li class="nav-item nav-filter-list-item" role="presentation"><a
                            class="nav-filter-list-link nav-link active" href="#snooker" data-bs-toggle="tab"><span
                                class="nav-filter-list-img"><span class="sprite sprite-sport-icon-11"></span></span><span
                                class="nav-filter-list-text">Snooker</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#football" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-07"></span></span><span
                                class="nav-filter-list-text">Futbol</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#tennis" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-06"></span></span><span
                                class="nav-filter-list-text">Tenis</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#basketball" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-04"></span></span><span
                                class="nav-filter-list-text">Baloncesto</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#ice-hockey" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-08"></span></span><span
                                class="nav-filter-list-text">Hockey
                                sobre hielo</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#volleyball" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-09"></span></span><span
                                class="nav-filter-list-text">Voleibol</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#badminton" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-03"></span></span><span
                                class="nav-filter-list-text">Badminton</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#baseball" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-05"></span></span><span
                                class="nav-filter-list-text">Beisbol</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#table-tennis" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-02"></span></span><span
                                class="nav-filter-list-text">Tenis de mesa</span></a></li>
                    <li class="nav-item nav-filter-list-item" role="presentation"><a class="nav-filter-list-link nav-link"
                            href="#cycling" data-bs-toggle="tab"><span class="nav-filter-list-img"><span
                                    class="sprite sprite-sport-icon-10"></span></span><span
                                class="nav-filter-list-text">Ciclismo</span></a></li>
                </ul>
                <!-- Filter Info-->
                <div class="nav-filter-info">
                    <p class="nav-filter-info-text">Estadísticas de Snooker</p>
                </div>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="snooker">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Internacional</h5>
                            </div>
                        </article>


                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato Mundial
                                </div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Sam
                                                                        jackson</span><span
                                                                        class="statistics-table-count">6</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Daniel
                                                                        White</span><span
                                                                        class="statistics-table-count">13</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Andrew
                                                                        Chapman</span><span
                                                                        class="statistics-table-count">13</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Christopher
                                                                        Dickenson</span><span
                                                                        class="statistics-table-count">12</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Samuel
                                                                        Baker</span><span
                                                                        class="statistics-table-count">5</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Richard
                                                                        Williams</span><span
                                                                        class="statistics-table-count">13</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Peter
                                                                        McMillan</span><span
                                                                        class="statistics-table-count">13</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Mark
                                                                        Evans</span><span
                                                                        class="statistics-table-count">8</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Daniel
                                                                        White</span><span
                                                                        class="statistics-table-count">13</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Andrew
                                                                        Chapman</span><span
                                                                        class="statistics-table-count">17</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Richard
                                                                        Williams</span><span
                                                                        class="statistics-table-count">15</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Peter
                                                                        McMillan</span><span
                                                                        class="statistics-table-count">17</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Andrew
                                                                        Chapman</span><span
                                                                        class="statistics-table-count">16</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Peter
                                                                        McMillan</span><span
                                                                        class="statistics-table-count">18</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido
                                        </p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">68.51%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Casa</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>142</span>
                                                    </div>
                                                    <p>Jugado</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div
                                                    class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">31.49%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Fuera de
                                                        Casa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido
                                        </p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">7.54</span><span
                                                        class="statistics-interrelation-body-item-block-text">Casa</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>1547</span>
                                                    </div>
                                                    <p>Total de Marcos
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary"><span
                                                        class="statistics-interrelation-body-item-block-procent">6.86</span><span
                                                        class="statistics-interrelation-body-item-block-text">Fuera de
                                                        Casa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Match info-->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>Puntos/Turnos</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>Partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>F</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Andrew Chapman</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>16</span> <span>:</span> <span
                                                            class="match-table-score-winner">18</span>
                                                    </div>
                                                    <div class="match-table-time"><span>july 01, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Samuel
                                                            Baker</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Daniel White</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>13</span> <span>:</span> <span
                                                            class="match-table-score-winner">17</span>
                                                    </div>
                                                    <div class="match-table-time"><span>june 26, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Andrew
                                                            Chapman</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Sam jackson</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>15</span> <span>:</span> <span
                                                            class="match-table-score-winner">17</span>
                                                    </div>
                                                    <div class="match-table-time"><span>june 22, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Samuel
                                                            Baker</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>QF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Samuel Baker</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">13</span> <span>:</span>
                                                        <span>8</span>
                                                    </div>
                                                    <div class="match-table-time"><span>june 20, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Richard
                                                            Williams</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Match info-->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>Puntos/Turnos</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>Partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>QF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Nathan Fraser</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>16</span> <span>:</span> <span
                                                            class="match-table-score-winner">18</span>
                                                    </div>
                                                    <div class="match-table-time"><span>july 01, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Andrew
                                                            Chapman</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>QF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Daniel Eddington</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>13</span> <span>:</span> <span
                                                            class="match-table-score-winner">17</span>
                                                    </div>
                                                    <div class="match-table-time"><span>june 26, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Sam
                                                            jackson</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>QF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Ryan Hill</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>15</span> <span>:</span> <span
                                                            class="match-table-score-winner">17</span>
                                                    </div>
                                                    <div class="match-table-time"><span>june 22, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Daniel
                                                            White</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>QF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Logan Clark</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">13</span> <span>:</span>
                                                        <span>8</span>
                                                    </div>
                                                    <div class="match-table-time"><span>june 20, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Carl
                                                            Thomas</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="football">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Campeonato Nacional
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato Mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Real
                                                                        Madrid</span><span
                                                                        class="statistics-table-count">4</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Chelsea</span><span
                                                                        class="statistics-table-count">2</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Arsenal</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Everton</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Bournemouth</span><span
                                                                        class="statistics-table-count">2</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Atletico</span><span
                                                                        class="statistics-table-count">4</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Stoke
                                                                        City</span><span
                                                                        class="statistics-table-count">1</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Newcastle
                                                                        United</span><span
                                                                        class="statistics-table-count">2</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Real
                                                                        Madrid</span><span
                                                                        class="statistics-table-count">2</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Arsenal</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Atletico</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Newcastle
                                                                        United</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Real
                                                                        Madrid</span><span
                                                                        class="statistics-table-count">2</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Atletico</span><span
                                                                        class="statistics-table-count">4</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">48.51%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Casa</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>10</span>
                                                    </div>
                                                    <p>jugado</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div
                                                    class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">51.49%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Fuera de
                                                        Casa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">12</span><span
                                                        class="statistics-interrelation-body-item-block-text">Casa</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>57</span>
                                                    </div>
                                                    <p>Total de Marcos</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary"><span
                                                        class="statistics-interrelation-body-item-block-procent">13</span><span
                                                        class="statistics-interrelation-body-item-block-text">Fuera de
                                                        Casa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Match info-->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>Puntos/Turnos</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>Partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>A</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Real Madrid</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">4</span> <span>:</span>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Chelsea</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>A</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Arsenal</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Everton</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>A</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Bournemouth</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>2</span> <span>:</span> <span
                                                            class="match-table-score-winner">4</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Atletico</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>B</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Stoke City</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>1</span> <span>:</span> <span
                                                            class="match-table-score-winner">2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Newcastle
                                                            United</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- Información del partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>Puntos/Turnos</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>Partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>B</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Stoke City</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>1</span> <span>:</span> <span
                                                            class="match-table-score-winner">2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Newcastle
                                                            United</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>B</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Bournemouth</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>2</span> <span>:</span> <span
                                                            class="match-table-score-winner">4</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Atletico</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>A</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Arsenal</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Everton</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>B</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Real Madrid</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">4</span> <span>:</span>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Chelsea</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tennis">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Internacional de EE. UU.</h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato Mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Harry
                                                                        Stewart</span><span
                                                                        class="statistics-table-count">7</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Donald
                                                                        Crawford</span><span
                                                                        class="statistics-table-count">6</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Peter
                                                                        Wells</span><span
                                                                        class="statistics-table-count">5</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Tyrone
                                                                        Norman</span><span
                                                                        class="statistics-table-count">4</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Emily
                                                                        Sanders</span><span
                                                                        class="statistics-table-count">5</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Mary
                                                                        Clarke</span><span
                                                                        class="statistics-table-count">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Gavin
                                                                        Simpson</span><span
                                                                        class="statistics-table-count">4</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Simon
                                                                        Warner</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Harry
                                                                        Stewart</span><span
                                                                        class="statistics-table-count">5</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Peter
                                                                        Wells</span><span
                                                                        class="statistics-table-count">6</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Mary
                                                                        Clarke</span><span
                                                                        class="statistics-table-count">5</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Gavin
                                                                        Simpson</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Peter
                                                                        Wells</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Mary
                                                                        Clarke</span><span
                                                                        class="statistics-table-count">8</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner------------------------------------------------------------->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">33.58%</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image">
                                                        <img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92" height="92" />
                                                        <span>98</span>
                                                    </div>
                                                    <p>jugados</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div
                                                    class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">66,42%</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">8.5</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image">
                                                        <img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92" height="92" />
                                                        <span>298</span>
                                                    </div>
                                                    <p>total de cuadros</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">4.7</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- Información del partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>para/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Harry Stewart</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">7</span> <span>:</span>
                                                        <span>6</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Donald
                                                            Crawford</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Peter Wells</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>3</span> <span>:</span> <span
                                                            class="match-table-score-winner">8</span></div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Tyrone
                                                            Norman</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Emily Sanders</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">4</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Mary
                                                            Clarke</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Gavin Simpson</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>5</span> <span>:</span> <span
                                                            class="match-table-score-winner">8</span></div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Simon
                                                            Warner</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- Información del partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>para/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Gavin Simpson</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>5</span> <span>:</span> <span
                                                            class="match-table-score-winner">8</span></div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Simon
                                                            Warner</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Emily Sanders</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">4</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Mary
                                                            Clarke</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Peter Wells</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>3</span> <span>:</span> <span
                                                            class="match-table-score-winner">8</span></div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Tyrone
                                                            Norman</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Harry Stewart</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">7</span> <span>:</span>
                                                        <span>6</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Donald
                                                            Crawford</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="basketball">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title"> Final de la NBA
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato Mundial </div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Atlanta</span><span
                                                                        class="statistics-table-count">8</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Boston</span><span
                                                                        class="statistics-table-count">5</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Indiana</span><span
                                                                        class="statistics-table-count">7</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Miami</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">New
                                                                        York</span><span
                                                                        class="statistics-table-count">8</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Toronto</span><span
                                                                        class="statistics-table-count">7</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Philadelphia</span><span
                                                                        class="statistics-table-count">5</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Detroit</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Atlanta</span><span
                                                                        class="statistics-table-count">4</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Indiana</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">New
                                                                        York</span><span
                                                                        class="statistics-table-count">5</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Philadelphia</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Atlanta</span><span
                                                                        class="statistics-table-count">6</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">New York</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">25.5%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Casa</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>135</span>
                                                    </div>
                                                    <p>jugado</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div
                                                    class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">74.5%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Fuera de
                                                        Casa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Match Winner</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">14.2</span><span
                                                        class="statistics-interrelation-body-item-block-text">Casa</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>421</span>
                                                    </div>
                                                    <p>cuadros totales</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary"><span
                                                        class="statistics-interrelation-body-item-block-procent">13.3</span><span
                                                        class="statistics-interrelation-body-item-block-text">Fuera de
                                                        Casa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Match info-->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>A</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Atlanta</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">8</span> <span>:</span>
                                                        <span>5</span>
                                                    </div>
                                                    <div class="match-table-time"><span>1 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Boston</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>A</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Indiana</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">7</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Miami</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>B</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>New York</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">8</span> <span>:</span>
                                                        <span>7</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Toronto</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>C</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Philadelphia</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">5</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Detroit</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Match info-->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>a/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Atlanta</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">4</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Indiana</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>New York</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">5</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Philadelphia</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Atlanta</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">6</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>New
                                                            York</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Indiana</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">7</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner">
                                                        <span>Miami</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ice-hockey">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Liga Nacional de Hockey
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Anaheim
                                                                        Ducks</span><span
                                                                        class="statistics-table-count">4</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">New York
                                                                        Rangers</span><span
                                                                        class="statistics-table-count">2</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Chicago Black
                                                                        Hawks</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Washington
                                                                        Capitals</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Florida
                                                                        Panthers</span><span
                                                                        class="statistics-table-count">1</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Detroit Red
                                                                        wings</span><span
                                                                        class="statistics-table-count">2</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Atlanta
                                                                        Republick</span><span
                                                                        class="statistics-table-count">1</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Miami
                                                                        Girls</span><span
                                                                        class="statistics-table-count">2</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Anaheim
                                                                        Ducks</span><span
                                                                        class="statistics-table-count">5</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Chicago Black
                                                                        Hawks</span><span
                                                                        class="statistics-table-count">6</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Detroit Red
                                                                        wings</span><span
                                                                        class="statistics-table-count">5</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Miami
                                                                        Girls</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Chicago Black
                                                                        Hawks</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Detroit Red
                                                                        wings</span><span
                                                                        class="statistics-table-count">8</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">

                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">43,58%</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image">
                                                        <img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92" height="92" />
                                                        <span>220</span>
                                                    </div>
                                                    <p>jugados</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div
                                                    class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">56,42%</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">12.3</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image">
                                                        <img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92" height="92" />
                                                        <span>658</span>
                                                    </div>
                                                    <p>total de cuadros</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">15.5</span>
                                                    <span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Anaheim Ducks</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span class="match-table-score-winner">4</span> <span>:</span>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>New York
                                                            Rangers</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Chicago Black Hawks</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Washington
                                                            Capitals</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Florida Panthers</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span>1</span> <span>:</span> <span
                                                            class="match-table-score-winner">2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Detroit
                                                            Red Wings</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Atlanta Republic</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span>1</span> <span>:</span> <span
                                                            class="match-table-score-winner">2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Miami
                                                            Girls</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Anaheim Ducks</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span>5</span> <span>:</span> <span
                                                            class="match-table-score-winner">6</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Chicago
                                                            Black Hawks</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Detroit Red Wings</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span class="match-table-score-winner">5</span> <span>:</span>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Miami
                                                            Girls</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Chicago Black Hawks</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span>3</span> <span>:</span> <span
                                                            class="match-table-score-winner">8</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Detroit
                                                            Red Wings</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Chicago Black Hawks</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Washington
                                                            Capitals</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="volleyball">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Campeonato Mundial Masculino
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Estonia</span><span
                                                                        class="statistics-table-count">18</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Slovakia</span><span
                                                                        class="statistics-table-count">14</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Poland</span><span
                                                                        class="statistics-table-count">27</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Germany</span><span
                                                                        class="statistics-table-count">25</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">France</span><span
                                                                        class="statistics-table-count">16</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Spain</span><span
                                                                        class="statistics-table-count">15</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">England</span><span
                                                                        class="statistics-table-count">13</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Ukraine</span><span
                                                                        class="statistics-table-count">18</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Estonia</span><span
                                                                        class="statistics-table-count">15</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Poland</span><span
                                                                        class="statistics-table-count">16</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">France</span><span
                                                                        class="statistics-table-count">13</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Ukraine</span><span
                                                                        class="statistics-table-count">18</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Poland</span><span
                                                                        class="statistics-table-count">3</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span
                                                                        class="statistics-table-team">Ukraine</span><span
                                                                        class="statistics-table-count">8</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block">
                                                    <span class="statistics-interrelation-body-item-block-procent">53.38%</span>
                                                    <span class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image">
                                                        <img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}" alt="" width="92" height="92" />
                                                        <span>208</span>
                                                    </div>
                                                    <p>jugados</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span class="statistics-interrelation-body-item-block-procent">36.62%</span>
                                                    <span class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block">
                                                    <span class="statistics-interrelation-body-item-block-procent">12.2</span>
                                                    <span class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image">
                                                        <img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}" alt="" width="92" height="92" />
                                                        <span>458</span>
                                                    </div>
                                                    <p>total de frames</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary">
                                                    <span class="statistics-interrelation-body-item-block-procent">18.8</span>
                                                    <span class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Estonia</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span class="match-table-score-winner">18</span> <span>:</span> <span>14</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Slovakia</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Poland</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span class="match-table-score-winner">27</span> <span>:</span> <span>25</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Germany</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>France</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span class="match-table-score-winner">16</span> <span>:</span> <span>15</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Spain</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>England</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score">
                                                        <span>13</span> <span>:</span> <span class="match-table-score-winner">18</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Ukraine</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Estonia</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>15</span> <span>:</span> <span class="match-table-score-winner">16</span></div>
                                                    <div class="match-table-time"><span>20 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Poland</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>France</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>13</span> <span>:</span> <span class="match-table-score-winner">18</span></div>
                                                    <div class="match-table-time"><span>22 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Ukraine</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Poland</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>3</span> <span>:</span> <span class="match-table-score-winner">8</span></div>
                                                    <div class="match-table-time"><span>26 de junio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Ukraine</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>France</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">16</span> <span>:</span> <span>15</span></div>
                                                    <div class="match-table-time"><span>01 de julio, 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Spain</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <div class="tab-pane fade" id="baseball">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Beisbol
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Buffalo
                                                                        Bisons</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Lehigh Valley
                                                                        Ironpigs</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Syracuse
                                                                        Chiefs</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Toledo Mud
                                                                        Hens</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Ironpigs Valley
                                                                        Lehigh</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Bisons
                                                                        Buffalo</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Chiefs
                                                                        Syracuse</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Hens Mud
                                                                        Toledo</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Lehigh Valley
                                                                        Ironpigs</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Syracuse
                                                                        Chiefs</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Bisons
                                                                        Buffalo</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Chiefs
                                                                        Syracuse</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Lehigh Valley
                                                                        Ironpigs</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Chiefs
                                                                        Syracuse</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span class="statistics-interrelation-body-item-block-procent">44.18%</span><span class="statistics-interrelation-body-item-block-text">Local</span></div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}" alt="" width="92" height="92" /><span>8</span></div>
                                                    <p>Jugados</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary"><span class="statistics-interrelation-body-item-block-procent">55,82%</span><span class="statistics-interrelation-body-item-block-text">Visitante</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span class="statistics-interrelation-body-item-block-procent">2</span><span class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}" alt="" width="92" height="92" /><span>24</span>
                                                    </div>
                                                    <p>total de cuadros</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary"><span class="statistics-interrelation-body-item-block-procent">8</span><span class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Búfalos de Búfalo</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span class="match-table-score-winner">1</span>
                                                    </div>
                                                    <div class="match-table-time"><span>1 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Lehigh Valley Ironpigs</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Jefes de Syracuse</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">1</span> <span>:</span> <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Toledo Mud Hens</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Ironpigs Valley Lehigh</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span class="match-table-score-winner">1</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Búfalos de Búfalo</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Jefes de Syracuse</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">1</span> <span>:</span> <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Hens Mud Toledo</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Lehigh Valley Ironpigs</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">1</span> <span>:</span> <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Jefes de Syracuse</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Búfalos de Búfalo</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span class="match-table-score-winner">1</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Jefes de Syracuse</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Jefes de Syracuse</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">1</span> <span>:</span> <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Búfalos de Búfalo</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Lehigh Valley Ironpigs</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">1</span> <span>:</span> <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>1 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Jefes de Syracuse</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="badminton">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Mlb
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Tammy
                                                                        Edwards</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Sandra
                                                                        Richardson</span><span
                                                                        class="statistics-table-count">14</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Jeffrey
                                                                        Carter</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Rose
                                                                        Martinez</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Angela
                                                                        Morgan</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Nancy
                                                                        Walker</span><span
                                                                        class="statistics-table-count">15</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Evelyn
                                                                        Baker</span><span
                                                                        class="statistics-table-count">12</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Laura
                                                                        Lopez</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Sandra
                                                                        Richardson</span><span
                                                                        class="statistics-table-count">8</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Jeffrey
                                                                        Carter</span><span
                                                                        class="statistics-table-count">13</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Nancy
                                                                        Walker</span><span
                                                                        class="statistics-table-count">12</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Evelyn
                                                                        Baker</span><span
                                                                        class="statistics-table-count">10</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Jeffrey
                                                                        Carter</span><span
                                                                        class="statistics-table-count">10</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Nancy
                                                                        Walker</span><span
                                                                        class="statistics-table-count">11</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">23.38%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>106</span>
                                                    </div>
                                                    <p>jugado</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span class="statistics-interrelation-body-item-block-procent">66.62%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">7.5</span><span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>197</span>
                                                    </div>
                                                    <p>total de juegos</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary"><span
                                                        class="statistics-interrelation-body-item-block-procent">13.3</span><span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del partido-->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Tammy Edwards</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span
                                                            class="match-table-score-winner">14</span>
                                                    </div>
                                                    <div class="match-table-time"><span>1 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Sandra Richardson</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Jeffrey Carter</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Rose Martinez</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Angela Morgan</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span
                                                            class="match-table-score-winner">15</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Nancy Walker</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Evelyn Baker</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">12</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Laura Lopez</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del partido-->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Sandra Richardson</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>8</span> <span>:</span> <span
                                                            class="match-table-score-winner">13</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Jeffrey Carter</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Nancy Walker</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">12</span> <span>:</span>
                                                        <span>10</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Evelyn Baker</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Sandra Richardson</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>3</span> <span>:</span> <span
                                                            class="match-table-score-winner">8</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Evelyn Baker</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Jeffrey Carter</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>10</span> <span>:</span> <span
                                                            class="match-table-score-winner">11</span>
                                                    </div>
                                                    <div class="match-table-time"><span>1 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Nancy Walker</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="table-tennis">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Campeonato mundial
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Francis
                                                                        Hart</span><span
                                                                        class="statistics-table-count">3</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">John
                                                                        Ramsey</span><span
                                                                        class="statistics-table-count">2</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Martha
                                                                        Garcia</span><span
                                                                        class="statistics-table-count">8</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Lisa
                                                                        Peterson</span><span
                                                                        class="statistics-table-count">6</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Hart
                                                                        Francis</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Garcia
                                                                        Martha</span><span
                                                                        class="statistics-table-count">15</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Ramsey
                                                                        John</span><span
                                                                        class="statistics-table-count">12</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Peterson
                                                                        Lisa</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Francis
                                                                        Hart</span><span
                                                                        class="statistics-table-count">6</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Martha
                                                                        Garcia</span><span
                                                                        class="statistics-table-count">12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Garcia
                                                                        Martha</span><span
                                                                        class="statistics-table-count">13</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Ramsey
                                                                        John</span><span
                                                                        class="statistics-table-count">7</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Martha
                                                                        Garcia</span><span
                                                                        class="statistics-table-count">8</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Garcia
                                                                        Martha</span><span
                                                                        class="statistics-table-count">7</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">48,13%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>97</span>
                                                    </div>
                                                    <p>jugados</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div
                                                    class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">51,87%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">12</span><span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>365</span>
                                                    </div>
                                                    <p>total de frames</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary"><span
                                                        class="statistics-interrelation-body-item-block-procent">14</span><span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Francis Hart</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">3</span> <span>:</span>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>John Ramsey</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Martha Garcia</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">8</span> <span>:</span>
                                                        <span>6</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Lisa Peterson</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Hart Francis</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span
                                                            class="match-table-score-winner">15</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Garcia Martha</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Ramsey John</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">12</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Peterson Lisa</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Francis Hart</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>6</span> <span>:</span> <span
                                                            class="match-table-score-winner">12</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Martha Garcia</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Garcia Martha</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">13</span> <span>:</span>
                                                        <span>7</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Ramsey John</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Francis Hart</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>3</span> <span>:</span> <span
                                                            class="match-table-score-winner">8</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Ramsey John</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Martha Garcia</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span class="match-table-score-winner">8</span> <span>:</span>
                                                        <span>7</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Garcia Martha</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cycling">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Campeonato del mundo de ruta UCI
                                </h5>
                            </div>
                        </article>

                        <!-- World Championship-->
                        <div class="statistics-table-wrap">
                            <div class="statistics-table">
                                <div class="statistics-table-header">Campeonato mundial</div>
                                <div class="statistics-table-body">
                                    <div class="row row-30">
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 1</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Janet
                                                                        Alexander</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Charles
                                                                        Martin</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Terry
                                                                        Gonzales</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Julie
                                                                        Wilson</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Martin
                                                                        Charles</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Alexander
                                                                        Janet</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">John
                                                                        Gonzales</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Lisa
                                                                        Wilson</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Ronda 2</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Charles
                                                                        Martin</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Terry
                                                                        Gonzales</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Martin
                                                                        Charles</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Lisa
                                                                        Wilson</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 statistics-table-column">
                                            <div class="statistics-table-item">
                                                <div class="statistics-table-item-title">
                                                    <p>Final</p>
                                                </div>
                                                <div class="statistics-table-item-content">
                                                    <article class="statistics-table-info">
                                                        <div class="statistics-table-info-inner">
                                                            <div class="statistics-table-info-content">
                                                                <div class="statistics-table-info-content-item"><span
                                                                        class="statistics-table-team">Charles
                                                                        Martin</span><span
                                                                        class="statistics-table-count">0</span></div>
                                                                <div
                                                                    class="statistics-table-info-content-item statistics-table-info-content-winner">
                                                                    <span class="statistics-table-team">Martin
                                                                        Charles</span><span
                                                                        class="statistics-table-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Match winner-->
                        <div class="row row-50">
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">55%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>8</span>
                                                    </div>
                                                    <p>Jugados</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div
                                                    class="statistics-interrelation-body-item-block statistics-interrelation-body-item-block-primary">
                                                    <span
                                                        class="statistics-interrelation-body-item-block-procent">45%</span><span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="statistics-interrelation">
                                    <div class="statistics-interrelation-header">
                                        <p>Ganador del Partido</p>
                                    </div>
                                    <div class="statistics-interrelation-body">
                                        <div class="statistics-interrelation-body-list">
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block"><span
                                                        class="statistics-interrelation-body-item-block-procent">11</span><span
                                                        class="statistics-interrelation-body-item-block-text">Local</span>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-center">
                                                    <div class="statistics-interrelation-body-item-block-image"><img
                                                            src="{{ asset('plantilla/images/match-winner-01-92x92.png') }}"
                                                            alt="" width="92"
                                                            height="92" /><span>45</span>
                                                    </div>
                                                    <p>total de frames</p>
                                                </div>
                                            </div>
                                            <div class="statistics-interrelation-body-item">
                                                <div class="statistics-interrelation-body-item-block-primary"><span
                                                        class="statistics-interrelation-body-item-block-procent">5</span><span
                                                        class="statistics-interrelation-body-item-block-text">Visitante</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Janet Alexander</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span
                                                            class="match-table-score-winner">1</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Charles
                                                            Martin</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Terry Gonzales</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Julie
                                                            Wilson</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Martin Charles</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Alexander
                                                            Janet</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>John Gonzales</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span
                                                            class="match-table-score-winner">1</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Lisa
                                                            Wilson</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <!-- Información del Partido -->
                                <div class="match-table-wrap">
                                    <div class="match-table">
                                        <div class="match-table-header">
                                            <div class="match-table-tr">
                                                <div class="match-table-td"><span>to/r</span></div>
                                                <div class="match-table-td"></div>
                                                <div class="match-table-td"><span>partido</span></div>
                                                <div class="match-table-td"></div>
                                            </div>
                                        </div>
                                        <div class="match-table-body">
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Charles Martin</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>20 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Terry
                                                            Gonzales</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>RT</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Martin Charles</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>22 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Lisa
                                                            Wilson</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>FX</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Terry Gonzales</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span
                                                            class="match-table-score-winner">1</span> <span>:</span>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="match-table-time"><span>26 de junio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Lisa
                                                            Wilson</span></div>
                                                </div>
                                            </div>
                                            <div class="match-table-tr">
                                                <div class="match-table-td">
                                                    <div class="match-table-symbol"><span>SF</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team"><span>Charles Martin</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-score"><span>0</span> <span>:</span> <span
                                                            class="match-table-score-winner">1</span>
                                                    </div>
                                                    <div class="match-table-time"><span>01 de julio de 2023</span></div>
                                                </div>
                                                <div class="match-table-td">
                                                    <div class="match-table-team match-table-team-winner"><span>Martin
                                                            Charles</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
