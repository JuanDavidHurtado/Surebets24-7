@extends('layouts/app')

@section('content')
    <!-- All Sports-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row isotope-wrap row-30">
                <!-- Isotope Filters-->
                <div class="col-lg-12">
                    <div class="isotope-filters isotope-filters-horizontal">
                        <button class="isotope-filters-toggle button" data-custom-toggle="#isotope-filters"
                            data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true">Seleccionar<span
                                class="caret"></span></button>
                        <ul class="isotope-filters-list" id="isotope-filters">
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link active"
                                    data-isotope-filter="*" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-01"></span></span><span
                                        class="isotope-filters-list-text">Todos los deportes</span> <span
                                        class="isotope-filters-list-count">29</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="football" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-07"></span></span><span
                                        class="isotope-filters-list-text">Futbol</span> <span
                                        class="isotope-filters-list-count">6</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="tennis" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-06"></span></span><span
                                        class="isotope-filters-list-text">Tenis</span> <span
                                        class="isotope-filters-list-count">4</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="basketball" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-04"></span></span><span
                                        class="isotope-filters-list-text">Baloncesto</span> <span
                                        class="isotope-filters-list-count">4</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="ice-hockey" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-08"></span></span><span
                                        class="isotope-filters-list-text">Hockey sobre hielo</span> <span
                                        class="isotope-filters-list-count">3</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="volleyball" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-09"></span></span><span
                                        class="isotope-filters-list-text">Voleibol</span> <span
                                        class="isotope-filters-list-count">3</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="badminton" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-03"></span></span><span
                                        class="isotope-filters-list-text">Badminton</span> <span
                                        class="isotope-filters-list-count">4</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="baseball" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-05"></span></span><span
                                        class="isotope-filters-list-text">Beisbol</span> <span
                                        class="isotope-filters-list-count">2</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="ping-pong" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-02"></span></span><span
                                        class="isotope-filters-list-text">Tenis de mesa</span> <span
                                        class="isotope-filters-list-count">2</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link"
                                    data-isotope-filter="cycling" data-isotope-group="gallery" href="#"><span
                                        class="isotope-filters-list-img"><span
                                            class="sprite sprite-sport-icon-10"></span></span><span
                                        class="isotope-filters-list-text">Ciclismo</span> <span
                                        class="isotope-filters-list-count">2</span></a></li>
                        </ul>
                        <div class="isotope-filters-info">
                            <p class="isotope-filters-info-text"> Todos los deportes (29)</p>
                        </div>
                    </div>
                </div>
                <!-- Isotope Content-->
                <div class="col-lg-12">
                    <div class="row isotope row-30" data-isotope-layout="masonry" data-column-class=".col-1"
                        data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>
                        <!-- Football-->
                        <div class="col-lg-12 isotope-item" data-filter="football">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Futbol (6)
                                    </h5>
                                    <div>
                                        <ul class="list-inline list-inline-xs">
                                            <li><a class="button button-xs button-red-outline active" href="#">En
                                                    vivo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>Campeonato Nacional (6)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span
                                                        class="sport-table-title-team">Real Madrid</span><span
                                                        class="sport-table-title-team">Chelsea</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span
                                                        class="sport-table-title-score"><span>4</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Real Madrid"
                                                    data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23"
                                                    data-score="4:2"><span>Real Madrid</span><span
                                                        class="sport-table-wager-button-count">1.23</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea"
                                                    data-wager-count="13.00" data-score="4:2"><span>Empate</span><span
                                                        class="sport-table-wager-button-count">13.00</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea"
                                                    data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span
                                                        class="sport-table-wager-button-count">34.25</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span
                                                    class="sport-table-bonus-count">+58</span><span
                                                    class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span
                                                        class="sport-table-title-team">Arsenal</span><span
                                                        class="sport-table-title-team">Everton</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span
                                                        class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Arsenal" data-confrontation="Arsenal vs Everton"
                                                    data-wager-count="2.83" data-score="1:0"><span>Arsenal</span><span
                                                        class="sport-table-wager-button-count">2.83</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Draw" data-confrontation="Arsenal vs. Everton"
                                                    data-wager-count="7.00" data-score="1:0"><span>Empate</span><span
                                                        class="sport-table-wager-button-count">7.00</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Everton" data-confrontation="Arsenal vs Everton"
                                                    data-wager-count="12.15" data-score="1:0"><span>Everton</span><span
                                                        class="sport-table-wager-button-count">12.15</span></a>
                                            </div </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+46</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-07"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">West Ham United</span><span
                                                            class="sport-table-title-team">Bournemouth</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sportModal" data-team-name="West Ham United"
                                                        data-confrontation="West Ham United vs Bournemouth"
                                                        data-wager-count="4.17" data-score="1:2"><span>West Ham
                                                            United</span><span
                                                            class="sport-table-wager-button-count">4.17</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Draw"
                                                        data-confrontation="West Ham United vs. Bournemouth"
                                                        data-wager-count="17.00" data-score="1:2"><span>Empate</span><span
                                                            class="sport-table-wager-button-count">17.00</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Bournemouth"
                                                        data-confrontation="West Ham United vs Bournemouth"
                                                        data-wager-count="18.52"
                                                        data-score="1:2"><span>Bournemouth</span><span
                                                            class="sport-table-wager-button-count">18.52</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+51</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-07"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Leicester City</span><span
                                                            class="sport-table-title-team">Atletico</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sportModal" data-team-name="Leicester City"
                                                        data-confrontation="Leicester City vs Atletico"
                                                        data-wager-count="5.14" data-score="0:2"><span>Leicester
                                                            City</span><span
                                                            class="sport-table-wager-button-count">5.14</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Draw"
                                                        data-confrontation="Leicester City vs. Atletico"
                                                        data-wager-count="9.00" data-score="0:2"><span>Empate</span><span
                                                            class="sport-table-wager-button-count">9.00</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Atletico"
                                                        data-confrontation="Leicester City vs Atletico"
                                                        data-wager-count="27.13"
                                                        data-score="0:2"><span>Atletico</span><span
                                                            class="sport-table-wager-button-count">27.13</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+32</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-07"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Paris Saint-Germain</span><span
                                                            class="sport-table-title-team">Cardiff City</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sportModal" data-team-name="Paris Saint-Germain"
                                                        data-confrontation="Paris Saint-Germain vs Cardiff City"
                                                        data-wager-count="7.77" data-score="1:1"><span>Paris
                                                            Saint-Germain</span><span
                                                            class="sport-table-wager-button-count">7.77</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Draw"
                                                        data-confrontation="Paris Saint-Germain vs. Cardiff City"
                                                        data-wager-count="10.00" data-score="1:1"><span>Empate</span><span
                                                            class="sport-table-wager-button-count">10.00</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Cardiff City"
                                                        data-confrontation="Paris Saint-Germain vs Cardiff City"
                                                        data-wager-count="4.21" data-score="1:1"><span>Cardiff
                                                            City</span><span
                                                            class="sport-table-wager-button-count">4.21</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+24</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-07"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Stoke City</span><span
                                                            class="sport-table-title-team">Newcastle United</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sportModal" data-team-name="Stoke City"
                                                        data-confrontation="Stoke City vs Newcastle United"
                                                        data-wager-count="3.57" data-score="1:2"><span>Stoke
                                                            City</span><span
                                                            class="sport-table-wager-button-count">3.57</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Draw"
                                                        data-confrontation="Stoke City vs. Newcastle United"
                                                        data-wager-count="22.00" data-score="1:2"><span>Empate</span><span
                                                            class="sport-table-wager-button-count">22.00</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Newcastle United"
                                                        data-confrontation="Stoke City vs Newcastle United"
                                                        data-wager-count="48.12" data-score="1:2"><span>Newcastle
                                                            United</span><span
                                                            class="sport-table-wager-button-count">48.12</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+19</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tennis-->
                            <div class="col-lg-12 isotope-item" data-filter="tennis">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Tenis (4)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>Internacional de EE.UU. (4)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-06"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Harry Stewart</span><span
                                                            class="sport-table-title-team">Donald Crawford</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>7</span><span>0</span><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>6</span><span>1</span><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Harry Stewart"
                                                        data-confrontation="Harry Stewart vs Donald Crawford"
                                                        data-wager-count="13.5" data-score="7:6"><span>Harry
                                                            Stewart</span><span
                                                            class="sport-table-wager-button-count">13.5</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Donald Crawford"
                                                        data-confrontation="Harry Stewart vs Donald Crawford"
                                                        data-wager-count="1.005" data-score="7:6"><span>Donald
                                                            Crawford</span><span
                                                            class="sport-table-wager-button-count">1.005</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+25</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-06"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Peter Wells</span><span
                                                            class="sport-table-title-team">Tyrone Norman</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>5</span><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>4</span><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Peter Wells"
                                                        data-confrontation="Peter Wells vs Tyrone Norman"
                                                        data-wager-count="2.10" data-score="5:4"><span>Peter
                                                            Wells</span><span
                                                            class="sport-table-wager-button-count">2.10</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Tyrone Norman"
                                                        data-confrontation="Peter Wells vs Tyrone Norman"
                                                        data-wager-count="1.68" data-score="5:4"><span>Tyrone
                                                            Norman</span><span
                                                            class="sport-table-wager-button-count">1.68</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+46</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-06"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Emily Sanders</span><span
                                                            class="sport-table-title-team">Mary Clarke</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>5</span><span>3</span><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>7</span><span>4</span><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Emily Sanders"
                                                        data-confrontation="Emily Sanders vs Mary Clarke"
                                                        data-wager-count="1.25" data-score="5:7"><span>Emily
                                                            Sanders</span><span
                                                            class="sport-table-wager-button-count">1.25</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Mary Clarke"
                                                        data-confrontation="Emily Sanders vs Mary Clarke"
                                                        data-wager-count="3.75" data-score="5:7"><span>Mary
                                                            Clarke</span><span
                                                            class="sport-table-wager-button-count">3.75</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+51</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-06"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Gavin Simpson</span><span
                                                            class="sport-table-title-team">Simon Warner</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>4</span><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>4</span><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Gavin Simpson"
                                                        data-confrontation="Gavin Simpson vs Simon Warner"
                                                        data-wager-count="3.37" data-score="4:4"><span>Gavin
                                                            Simpson</span><span
                                                            class="sport-table-wager-button-count">3.37</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Simon Warner"
                                                        data-confrontation="Gavin Simpson vs Simon Warner"
                                                        data-wager-count="8.15" data-score="4:4"><span>Simon
                                                            Warner</span><span
                                                            class="sport-table-wager-button-count">8.15</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+32</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basketball-->
                            <div class="col-lg-12 isotope-item" data-filter="basketball">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Baloncesto (1)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>Finales de la NBA (1)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-04"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Batangas City
                                                            Athletics</span><span class="sport-table-title-team">Cebu City
                                                            Sharks</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>53</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>66</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Batangas City Athletics"
                                                        data-confrontation="Batangas City Athletics vs Cebu City Sharks"
                                                        data-wager-count="2.05" data-score="53:66"><span>Batangas City
                                                            Athletics</span><span
                                                            class="sport-table-wager-button-count">2.05</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Cebu City Sharks"
                                                        data-confrontation="Batangas City Athletics vs Cebu City Sharks"
                                                        data-wager-count="1.005" data-score="53:66"><span>Cebu City
                                                            Sharks</span><span
                                                            class="sport-table-wager-button-count">1.005</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+25</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ice Hockey-->
                            <div class="col-lg-12 isotope-item" data-filter="ice-hockey">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Hockey sobre hielo (3)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>Liga Nacional de Hockey (3)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-08"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">BK Sutjeska</span><span
                                                            class="sport-table-title-team">Alashkert HC</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>4</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sportModal" data-team-name="BK Sutjeska"
                                                        data-confrontation="BK Sutjeska vs Alashkert HC"
                                                        data-wager-count="1.23" data-score="4:2"><span>BK
                                                            Sutjeska</span><span
                                                            class="sport-table-wager-button-count">1.23</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Draw"
                                                        data-confrontation="BK Sutjeska vs. Alashkert HC"
                                                        data-wager-count="13.00" data-score="4:2"><span>Empate</span><span
                                                            class="sport-table-wager-button-count">13.00</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Alashkert HC"
                                                        data-confrontation="BK Sutjeska vs Alashkert HC"
                                                        data-wager-count="34.25" data-score="4:2"><span>Alashkert
                                                            HC</span><span
                                                            class="sport-table-wager-button-count">34.25</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+58</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-08"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">HC Laci</span><span
                                                            class="sport-table-title-team">BK Molde</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sportModal" data-team-name="HC Laci"
                                                        data-confrontation="HC Laci vs BK Molde" data-wager-count="1.58"
                                                        data-score="1:0"><span>HC Laci</span><span
                                                            class="sport-table-wager-button-count">1.58</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Draw" data-confrontation="HC Laci vs. BK Molde"
                                                        data-wager-count="13.00" data-score="1:0"><span>Empate</span><span
                                                            class="sport-table-wager-button-count">13.00</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="BK Molde" data-confrontation="HC Laci vs BK Molde"
                                                        data-wager-count="17.88" data-score="1:0"><span>BK
                                                            Molde</span><span
                                                            class="sport-table-wager-button-count">17.88</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+46</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-08"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Hc Larnaca</span><span
                                                            class="sport-table-title-team">Dundalk</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sportModal" data-team-name="Hc Larnaca"
                                                        data-confrontation="Hc Larnaca vs Dundalk" data-wager-count="2.41"
                                                        data-score="1:2"><span>Hc Larnaca</span><span
                                                            class="sport-table-wager-button-count">2.41</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Draw" data-confrontation="Hc Larnaca vs. Dundalk"
                                                        data-wager-count="13.00" data-score="1:2"><span>Empate</span><span
                                                            class="sport-table-wager-button-count">13.00</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Dundalk"
                                                        data-confrontation="Hc Larnaca vs Dundalk"
                                                        data-wager-count="23.28"
                                                        data-score="1:2"><span>Dundalk</span><span
                                                            class="sport-table-wager-button-count">23.28</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+51</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Volleyball-->
                            <div class="col-lg-12 isotope-item" data-filter="volleyball">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Voleibol (3)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>Campeonato Mundial Masculino (3)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-09"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Estonia</span><span
                                                            class="sport-table-title-team">Slovakia</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>18</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>14</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Estonia" data-confrontation="Estonia vs Slovakia"
                                                        data-wager-count="1.12"
                                                        data-score="18:14"><span>Estonia</span><span
                                                            class="sport-table-wager-button-count">1.12</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Slovakia" data-confrontation="Estonia vs Slovakia"
                                                        data-wager-count="5.45"
                                                        data-score="18:14"><span>Slovakia</span><span
                                                            class="sport-table-wager-button-count">5.45</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+25</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-09"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Poland</span><span
                                                            class="sport-table-title-team">Germany</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>27</span><span>8</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>25</span><span>9</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Poland" data-confrontation="Poland vs Germany"
                                                        data-wager-count="2.10"
                                                        data-score="27:25"><span>Poland</span><span
                                                            class="sport-table-wager-button-count">2.10</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Germany" data-confrontation="Poland vs Germany"
                                                        data-wager-count="1.68"
                                                        data-score="27:25"><span>Germany</span><span
                                                            class="sport-table-wager-button-count">1.68</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+46</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-09"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">France</span><span
                                                            class="sport-table-title-team">Spain</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>16</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>15</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="France" data-confrontation="France vs Spain"
                                                        data-wager-count="1.25"
                                                        data-score="16:15"><span>France</span><span
                                                            class="sport-table-wager-button-count">1.25</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Spain" data-confrontation="France vs Spain"
                                                        data-wager-count="3.75" data-score="16:15"><span>Spain</span><span
                                                            class="sport-table-wager-button-count">3.75</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+51</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Badminton-->
                            <div class="col-lg-12 isotope-item" data-filter="badminton">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Badminton (4)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>Campeonato mundial (4)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-03"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Ronald Stewart</span><span
                                                            class="sport-table-title-team">Steven Crawford</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>14</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Ronald Stewart"
                                                        data-confrontation="Ronald Stewart vs Steven Crawford"
                                                        data-wager-count="13.5" data-score="0:14"><span>Ronald
                                                            Stewart</span><span
                                                            class="sport-table-wager-button-count">13.5</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Steven Crawford"
                                                        data-confrontation="Ronald Stewart vs Steven Crawford"
                                                        data-wager-count="1.0005" data-score="0:14"><span>Steven
                                                            Crawford</span><span
                                                            class="sport-table-wager-button-count">1.0005</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+25</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-03"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Peter Wells</span><span
                                                            class="sport-table-title-team">Tyrone Norman</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Peter Wells"
                                                        data-confrontation="Peter Wells vs Tyrone Norman"
                                                        data-wager-count="2.10" data-score="0:0"><span>Peter
                                                            Wells</span><span
                                                            class="sport-table-wager-button-count">2.10</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Tyrone Norman"
                                                        data-confrontation="Peter Wells vs Tyrone Norman"
                                                        data-wager-count="1.68" data-score="0:0"><span>Tyrone
                                                            Norman</span><span
                                                            class="sport-table-wager-button-count">1.68</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+46</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-03"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Emily Sanders</span><span
                                                            class="sport-table-title-team">Mary Clarke</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>15</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Emily Sanders"
                                                        data-confrontation="Emily Sanders vs Mary Clarke"
                                                        data-wager-count="1.25" data-score="0:15"><span>Emily
                                                            Sanders</span><span
                                                            class="sport-table-wager-button-count">1.25</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Mary Clarke"
                                                        data-confrontation="Emily Sanders vs Mary Clarke"
                                                        data-wager-count="3.75" data-score="0:15"><span>Mary
                                                            Clarke</span><span
                                                            class="sport-table-wager-button-count">3.75</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+51</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-03"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Samuel Simpson</span><span
                                                            class="sport-table-title-team">Harry Warner</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Samuel Simpson"
                                                        data-confrontation="Samuel Simpson vs Harry Warner"
                                                        data-wager-count="1.25" data-score="0:2"><span>Samuel
                                                            Simpson</span><span
                                                            class="sport-table-wager-button-count">1.25</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Harry Warner"
                                                        data-confrontation="Samuel Simpson vs Harry Warner"
                                                        data-wager-count="3.75" data-score="0:2"><span>Harry
                                                            Warner</span><span
                                                            class="sport-table-wager-button-count">3.75</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+32</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Baseball-->
                            <div class="col-lg-12 isotope-item" data-filter="baseball">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Beisbol (2)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>Mlb (2)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-05"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Buffalo Bisons</span><span
                                                            class="sport-table-title-team">Lehigh Valley Ironpigs</span>
                                                    </div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Buffalo Bisons"
                                                        data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs"
                                                        data-wager-count="13.5" data-score="0:0"><span>Buffalo
                                                            Bisons</span><span
                                                            class="sport-table-wager-button-count">13.5</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Lehigh Valley Ironpigs"
                                                        data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs"
                                                        data-wager-count="1.0005" data-score="0:0"><span>Lehigh Valley
                                                            Ironpigs</span><span
                                                            class="sport-table-wager-button-count">1.0005</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+25</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-05"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Syracuse Chiefs</span><span
                                                            class="sport-table-title-team">Toledo Mud Hens</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Syracuse Chiefs"
                                                        data-confrontation="Syracuse Chiefs vs Toledo Mud Hens"
                                                        data-wager-count="2.10" data-score="0:0"><span>Syracuse
                                                            Chiefs</span><span
                                                            class="sport-table-wager-button-count">2.10</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Toledo Mud Hens"
                                                        data-confrontation="Syracuse Chiefs vs Toledo Mud Hens"
                                                        data-wager-count="1.68" data-score="0:0"><span>Toledo Mud
                                                            Hens</span><span
                                                            class="sport-table-wager-button-count">1.68</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+46</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table tennis-->
                            <div class="col-lg-12 isotope-item" data-filter="ping-pong">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Tenis de mesa (2)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>Campeonato mundial (2)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-02"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Francis Hart</span><span
                                                            class="sport-table-title-team">John Ramsey</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>3</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Francis Hart"
                                                        data-confrontation="Francis Hart vs John Ramsey"
                                                        data-wager-count="3.5" data-score="3:2"><span>Francis
                                                            Hart</span><span
                                                            class="sport-table-wager-button-count">3.5</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="John Ramsey"
                                                        data-confrontation="Francis Hart vs John Ramsey"
                                                        data-wager-count="2.65" data-score="3:2"><span>John
                                                            Ramsey</span><span
                                                            class="sport-table-wager-button-count">2.65</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+16</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-02"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Syracuse Chiefs</span><span
                                                            class="sport-table-title-team">Toledo Mud Hens</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Syracuse Chiefs"
                                                        data-confrontation="Syracuse Chiefs vs Toledo Mud Hens"
                                                        data-wager-count="2.60" data-score="0:0"><span>Syracuse
                                                            Chiefs</span><span
                                                            class="sport-table-wager-button-count">2.60</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Toledo Mud Hens"
                                                        data-confrontation="Syracuse Chiefs vs Toledo Mud Hens"
                                                        data-wager-count="1.14" data-score="0:0"><span>Toledo Mud
                                                            Hens</span><span
                                                            class="sport-table-wager-button-count">1.14</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+32</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cycling-->
                            <div class="col-lg-12 isotope-item" data-filter="cycling">
                                <!-- Heading Component-->
                                <article class="heading-component">
                                    <div class="heading-component-inner">
                                        <h5 class="heading-component-title">Cycling (2)
                                        </h5>
                                    </div>
                                </article>

                                <div class="sport-table-header">
                                    <p>UCI Road world Championship (2)</p>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-10"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Donald Simpson</span><span
                                                            class="sport-table-title-team">Joshua McKenzie</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Donald Simpson"
                                                        data-confrontation="Donald Simpson vs Joshua McKenzie"
                                                        data-wager-count="1.98" data-score="0:1"><span>Donald
                                                            Simpson</span><span
                                                            class="sport-table-wager-button-count">1.98</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Joshua McKenzie"
                                                        data-confrontation="Donald Simpson vs Joshua McKenzie"
                                                        data-wager-count="3.54" data-score="0:1"><span>Joshua
                                                            McKenzie</span><span
                                                            class="sport-table-wager-button-count">3.54</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+15</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sport-table">
                                    <div class="sport-table-tr">
                                        <div class="row sport-row align-items-center row-15">
                                            <div class="col-sm-1 col-md-1 col-lg-1">
                                                <div class="sport-table-icon">
                                                    <div class="sprite sprite-sport-icon-10"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-4 col-lg-3">
                                                <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span
                                                            class="sport-table-title-team">Joseph Tyler</span><span
                                                            class="sport-table-title-team">Clifford Ball</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span
                                                            class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                            class="sport-table-title-score"><span>0</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-6 col-lg-7">
                                                <div class="sport-table-wager sport-table-wager-double"><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Joseph Tyler"
                                                        data-confrontation="Joseph Tyler vs Clifford Ball"
                                                        data-wager-count="4.05" data-score="1:0"><span>Joseph
                                                            Tyler</span><span
                                                            class="sport-table-wager-button-count">4.05</span></a><a
                                                        class="sport-table-wager-button" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#sportModal"
                                                        data-team-name="Clifford Ball"
                                                        data-confrontation="Joseph Tyler vs Clifford Ball"
                                                        data-wager-count="1.14" data-score="1:0"><span>Clifford
                                                            Ball</span><span
                                                            class="sport-table-wager-button-count">1.14</span></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-1 col-lg-1">
                                                <div class="sport-table-bonus"><span
                                                        class="sport-table-bonus-count">+65</span><span
                                                        class="sport-table-bonus-icon material-icons-chevron_right"></span>
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
