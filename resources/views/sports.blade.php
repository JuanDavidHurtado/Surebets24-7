@extends('layouts/app')

@section('content')
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000"
        data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="{{ asset('plantilla/images/slider-1-slide-1-1920x671.jpg') }}">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <h1 data-caption-animate="fadeInUp" data-caption-delay="100">APUESTAS<br>SEGURAS</h1>
                        <h4 data-caption-animate="fadeInUp" data-caption-delay="200">CON GARANTÍA 100% LIBRE DE RIESGOS
                        </h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300"
                            href="{{ route('login') }}"><span class="icon fl-bigmu">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{ asset('plantilla/images/slider-1-slide-2-1920x671.jpg') }}">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <h1 data-caption-animate="fadeInUp" data-caption-delay="100">APUESTAS FACILES</h1>
                        <h4 data-caption-animate="fadeInUp" data-caption-delay="200">CON LAS COMISIONES MAS BAJAS
                        </h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300"
                            href="{{ route('contact-us') }}">UNETE A NOSOTROS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- All Sports-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row isotope-wrap row-30">
                <!-- Isotope Filters-->
                <div class="col-lg-12">
                    <div class="isotope-filters isotope-filters-horizontal">
                        <button class="isotope-filters-toggle button" data-custom-toggle="#isotope-filters"
                            data-custom-toggle-hide-on-blur="true"
                            data-custom-toggle-disable-on-blur="true">Seleccionar<span class="caret"></span></button>
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
                            <p class="isotope-filters-info-text">Todos los deportes(29)</p>
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
                                            <li><a class="button button-xs button-red-outline active"
                                                    href="#">Live</a></li>
                                            <li><a class="button button-xs button-red-outline" href="#">Proximo</a>
                                            </li>
                                            <li><a class="button button-xs button-red-outline" href="#">Los eventos
                                                    de hoy</a></li>
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Real Madrid</span><span
                                                        class="sport-table-title-team">Chelsea</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>4</span></span>
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
                                                    data-score="4:2"><span>Real
                                                        Madrid</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Arsenal</span><span
                                                        class="sport-table-title-team">Everton</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>1</span></span>
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
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">West Ham
                                                        United</span><span
                                                        class="sport-table-title-team">Bournemouth</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="West Ham United"
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Leicester City</span><span
                                                        class="sport-table-title-team">Atletico</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Leicester City"
                                                    data-confrontation="Leicester City vs Atletico"
                                                    data-wager-count="5.14" data-score="0:2"><span>Leicester
                                                        City</span><span
                                                        class="sport-table-wager-button-count">5.14</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Draw" data-confrontation="Leicester City vs. Atletico"
                                                    data-wager-count="9.00" data-score="0:2"><span>Empate</span><span
                                                        class="sport-table-wager-button-count">9.00</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Atletico"
                                                    data-confrontation="Leicester City vs Atletico"
                                                    data-wager-count="27.13" data-score="0:2"><span>Atletico</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Paris
                                                        Saint-Germain</span><span class="sport-table-title-team">Cardiff
                                                        City</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>1</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Paris Saint-Germain"
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Stoke City</span><span
                                                        class="sport-table-title-team">Newcastle United</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Stoke City"
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
                                <p>Internacional de EE. UU. (4)</p>
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Harry Stewart</span><span
                                                        class="sport-table-title-team">Donald Crawford</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Peter Wells</span><span
                                                        class="sport-table-title-team">Tyrone Norman</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Emily Sanders</span><span
                                                        class="sport-table-title-team">Mary Clarke</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Gavin Simpson</span><span
                                                        class="sport-table-title-team">Simon Warner</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">New York
                                                        Knicks</span><span class="sport-table-title-team">Houston
                                                        Rockets</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>53</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>66</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="New York Knicks"
                                                    data-confrontation="New York Knicks vs Houston Rockets"
                                                    data-wager-count="2.05" data-score="53:66"><span>New York
                                                        Knicks</span><span
                                                        class="sport-table-wager-button-count">2.05</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Houston Rockets"
                                                    data-confrontation="New York Knicks vs Houston Rockets"
                                                    data-wager-count="1.005" data-score="53:66"><span>Houston
                                                        Rockets</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Anaheim Ducks</span><span
                                                        class="sport-table-title-team">New York Rangers</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>4</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Anaheim Ducks"
                                                    data-confrontation="Anaheim Ducks vs New York Rangers"
                                                    data-wager-count="1.23" data-score="4:2"><span>Anaheim
                                                        Ducks</span><span
                                                        class="sport-table-wager-button-count">1.23</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Draw"
                                                    data-confrontation="Anaheim Ducks vs. New York Rangers"
                                                    data-wager-count="13.00" data-score="4:2"><span>Empate</span><span
                                                        class="sport-table-wager-button-count">13.00</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="New York Rangers"
                                                    data-confrontation="Anaheim Ducks vs New York Rangers"
                                                    data-wager-count="34.25" data-score="4:2"><span>New York
                                                        Rangers</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Chicago Black
                                                        Hawks</span><span class="sport-table-title-team">Washington
                                                        Capitals</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Chicago Black Hawks"
                                                    data-confrontation="Chicago Black Hawks vs Washington Capitals"
                                                    data-wager-count="1.58" data-score="1:0"><span>Chicago Black
                                                        Hawks</span><span
                                                        class="sport-table-wager-button-count">1.58</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Draw"
                                                    data-confrontation="Chicago Black Hawks vs. Washington Capitals"
                                                    data-wager-count="13.00" data-score="1:0"><span>Empate</span><span
                                                        class="sport-table-wager-button-count">13.00</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Washington Capitals"
                                                    data-confrontation="Chicago Black Hawks vs Washington Capitals"
                                                    data-wager-count="17.88" data-score="1:0"><span>Washington
                                                        Capitals</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Florida
                                                        Panthers</span><span class="sport-table-title-team">Detroit Red
                                                        wings</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="sport-table-wager-button"
                                                    href="#" data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Florida Panthers"
                                                    data-confrontation="Florida Panthers vs Detroit Red wings"
                                                    data-wager-count="2.41" data-score="1:2"><span>Florida
                                                        Panthers</span><span
                                                        class="sport-table-wager-button-count">2.41</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Draw"
                                                    data-confrontation="Florida Panthers vs. Detroit Red wings"
                                                    data-wager-count="13.00" data-score="1:2"><span>Empate</span><span
                                                        class="sport-table-wager-button-count">13.00</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Detroit Red wings"
                                                    data-confrontation="Florida Panthers vs Detroit Red wings"
                                                    data-wager-count="23.28" data-score="1:2"><span>Detroit Red
                                                        wings</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Estonia</span><span
                                                        class="sport-table-title-team">Slovakia</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>18</span></span>
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
                                                    data-wager-count="1.12" data-score="18:14"><span>Estonia</span><span
                                                        class="sport-table-wager-button-count">1.12</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Slovakia" data-confrontation="Estonia vs Slovakia"
                                                    data-wager-count="5.45" data-score="18:14"><span>Slovakia</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Poland</span><span
                                                        class="sport-table-title-team">Germany</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span
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
                                                    data-wager-count="2.10" data-score="27:25"><span>Poland</span><span
                                                        class="sport-table-wager-button-count">2.10</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Germany" data-confrontation="Poland vs Germany"
                                                    data-wager-count="1.68" data-score="27:25"><span>Germany</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">France</span><span
                                                        class="sport-table-title-team">Spain</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>16</span></span>
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
                                                    data-wager-count="1.25" data-score="16:15"><span>France</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Tammy Edwards</span><span
                                                        class="sport-table-title-team">Sandra Richardson</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>14</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Tammy Edwards"
                                                    data-confrontation="Tammy Edwards vs Sandra Richardson"
                                                    data-wager-count="13.5" data-score="0:14"><span>Tammy
                                                        Edwards</span><span
                                                        class="sport-table-wager-button-count">13.5</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Sandra Richardson"
                                                    data-confrontation="Tammy Edwards vs Sandra Richardson"
                                                    data-wager-count="1.0005" data-score="0:14"><span>Sandra
                                                        Richardson</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Jeffrey
                                                        Carter</span><span class="sport-table-title-team">Rose
                                                        Martinez</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Jeffrey Carter"
                                                    data-confrontation="Jeffrey Carter vs Rose Martinez"
                                                    data-wager-count="2.10" data-score="0:0"><span>Jeffrey
                                                        Carter</span><span
                                                        class="sport-table-wager-button-count">2.10</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Rose Martinez"
                                                    data-confrontation="Jeffrey Carter vs Rose Martinez"
                                                    data-wager-count="1.68" data-score="0:0"><span>Rose
                                                        Martinez</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Angela Morgan</span><span
                                                        class="sport-table-title-team">Nancy Walker</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>15</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Angela Morgan"
                                                    data-confrontation="Angela Morgan vs Nancy Walker"
                                                    data-wager-count="1.25" data-score="0:15"><span>Angela
                                                        Morgan</span><span
                                                        class="sport-table-wager-button-count">1.25</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Nancy Walker"
                                                    data-confrontation="Angela Morgan vs Nancy Walker"
                                                    data-wager-count="3.75" data-score="0:15"><span>Nancy
                                                        Walker</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Evelyn Baker</span><span
                                                        class="sport-table-title-team">Laura Lopez</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Evelyn Baker"
                                                    data-confrontation="Evelyn Baker vs Laura Lopez"
                                                    data-wager-count="1.25" data-score="0:2"><span>Evelyn
                                                        Baker</span><span
                                                        class="sport-table-wager-button-count">1.25</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Laura Lopez"
                                                    data-confrontation="Evelyn Baker vs Laura Lopez"
                                                    data-wager-count="3.75" data-score="0:2"><span>Laura
                                                        Lopez</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Buffalo
                                                        Bisons</span><span class="sport-table-title-team">Lehigh
                                                        Valley Ironpigs</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
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
                                                    data-wager-count="1.0005" data-score="0:0"><span>Lehigh
                                                        Valley Ironpigs</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Syracuse
                                                        Chiefs</span><span class="sport-table-title-team">Toledo
                                                        Mud Hens</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Francis Hart</span><span
                                                        class="sport-table-title-team">John Ramsey</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>3</span></span>
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Martha Garcia</span><span
                                                        class="sport-table-title-team">Lisa Peterson</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Martha Garcia"
                                                    data-confrontation="Martha Garcia vs Lisa Peterson"
                                                    data-wager-count="2.60" data-score="0:0"><span>Martha
                                                        Garcia</span><span
                                                        class="sport-table-wager-button-count">2.60</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Lisa Peterson"
                                                    data-confrontation="Martha Garcia vs Lisa Peterson"
                                                    data-wager-count="1.14" data-score="0:0"><span>Lisa
                                                        Peterson</span><span
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
                                    <h5 class="heading-component-title">Ciclismo (2)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>Campeonato del mundo de ruta UCI (2)</p>
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Janet
                                                        Alexander</span><span class="sport-table-title-team">Charles
                                                        Martin</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>1</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Janet Alexander"
                                                    data-confrontation="Janet Alexander vs Charles Martin"
                                                    data-wager-count="1.98" data-score="0:1"><span>Janet
                                                        Alexander</span><span
                                                        class="sport-table-wager-button-count">1.98</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Charles Martin"
                                                    data-confrontation="Janet Alexander vs Charles Martin"
                                                    data-wager-count="3.54" data-score="0:1"><span>Charles
                                                        Martin</span><span
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
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Terry
                                                        Gonzales</span><span class="sport-table-title-team">Julie
                                                        Wilson</span>
                                                </div>
                                                <div class="sport-table-title-item sport-table-title-item-right">
                                                    <span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span
                                                        class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Terry Gonzales"
                                                    data-confrontation="Terry Gonzales vs Julie Wilson"
                                                    data-wager-count="4.05" data-score="1:0"><span>Terry
                                                        Gonzales</span><span
                                                        class="sport-table-wager-button-count">4.05</span></a><a
                                                    class="sport-table-wager-button" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#sportModal"
                                                    data-team-name="Julie Wilson"
                                                    data-confrontation="Terry Gonzales vs Julie Wilson"
                                                    data-wager-count="1.14" data-score="1:0"><span>Julie
                                                        Wilson</span><span
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
    <!-- Latest News-->
    <section class="section section-md bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-12">
                    <div class="row row-30">
                        <div class="col-md-6 col-lg-4">
                            <article class="post-badly">
                                <div class="post-badly-image"><a href="#"><img
                                            src="{{ asset('plantilla/images/betting-news-01-370x180.jpg') }}"
                                            alt="" width="370" height="180" /></a></div>
                                <div class="post-badly-body">
                                    <div class="post-badly-body-top">
                                        <div class="post-badly-team"><span>Manchester United</span><span>Leicester
                                                City</span></div>
                                        <div class="post-badly-time"><span class="icon mdi mdi-clock"></span><a
                                                href="#">15 de abril del 2023</a></div>
                                    </div>
                                    <div class="post-badly-body-bottom">
                                        <ul class="post-badly-wager">
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link"
                                                    href="#"><span class="post-badly-wager-score">1</span><span
                                                        class="post-badly-wager-count">3.40</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link"
                                                    href="#"><span class="post-badly-wager-score">X</span><span
                                                        class="post-badly-wager-count">3.25</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link"
                                                    href="#"><span class="post-badly-wager-score">2</span><span
                                                        class="post-badly-wager-count">2.25</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post-badly">
                                <div class="post-badly-image"><a href="#"><img
                                            src="{{ asset('plantilla/images/betting-news-02-370x180.jpg') }}"
                                            alt="" width="370" height="180" /></a></div>
                                <div class="post-badly-body">
                                    <div class="post-badly-body-top">
                                        <div class="post-badly-team"><span>Esther Burns</span><span>Jessica
                                                Norris</span></div>
                                        <div class="post-badly-time"><span class="icon mdi mdi-clock"></span><a
                                                href="#">15 de abril del 2023</a></div>
                                    </div>
                                    <div class="post-badly-body-bottom">
                                        <ul class="post-badly-wager post-badly-wager-duo">
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link"
                                                    href="#"><span class="post-badly-wager-score">1</span><span
                                                        class="post-badly-wager-count">1.28</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link"
                                                    href="#"><span class="post-badly-wager-score">2</span><span
                                                        class="post-badly-wager-count">3.60</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post-badly">
                                <div class="post-badly-image"><a href="#"><img
                                            src="{{ asset('plantilla/images/betting-news-03-370x180.jpg') }}"
                                            alt="" width="370" height="180" /></a></div>
                                <div class="post-badly-body">
                                    <div class="post-badly-body-top">
                                        <div class="post-badly-team"><span>Lesley Moody</span><span>Christopher
                                                Benson</span></div>
                                        <div class="post-badly-time"><span class="icon mdi mdi-clock"></span><a
                                                href="#">15 de abril del 2023</a></div>
                                    </div>
                                    <div class="post-badly-body-bottom">
                                        <ul class="post-badly-wager post-badly-wager-duo">
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link"
                                                    href="#"><span class="post-badly-wager-score">1</span><span
                                                        class="post-badly-wager-count">1.28</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link"
                                                    href="#"><span class="post-badly-wager-score">2</span><span
                                                        class="post-badly-wager-count">3.60</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-component">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Proximo partido
                                </h5><a class="button button-xs button-gray-outline" href="#">Calendario</a>
                            </div>
                        </article>

                        <!-- Game Result Bug-->
                        <article class="game-result">
                            <div class="game-info game-info-creative">
                                <p class="game-info-subtitle">Futbol -
                                    <time datetime="08:30"> 08:30 PM</time>
                                </p>
                                <h3 class="game-info-title">Clasificación de la Europa League</h3>
                                <div class="game-info-main">
                                    <div class="game-info-team game-info-team-first">
                                        <figure><img src="{{ asset('plantilla/images/team-atletico-100x100.png') }}"
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
                                                            href="#"></a>
                                                    </li>
                                                    <li class="game-info-share-item"><a class="icon fa fa-instagram"
                                                            href="#"></a>
                                                    </li>
                                                </ul>
                                            </div><a class="button button-sm button-primary" href="#">Comprar
                                                boletos</a>
                                        </div>
                                    </div>
                                    <div class="game-info-team game-info-team-second">
                                        <figure><img src="{{ asset('plantilla/images/team-bavaria-fc-113x106.png') }}"
                                                alt="" width="113" height="106" />
                                        </figure>
                                        <div class="game-result-team-name">Celta Vigo</div>
                                        <div class="game-result-team-country">España</div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-info-countdown">
                                <div class="countdown countdown-bordered" data-type="until"
                                    data-time="31 Dec 2023 16:00" data-format="dhms" data-style="short"></div>
                            </div>
                        </article>
                    </div>
                    <div class="main-component">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">noticias populares
                                </h5><a class="button button-xs button-gray-outline" href="{{ route('news') }}">Todas
                                    las noticias</a>
                            </div>
                        </article>

                        <div class="row row-30">
                            <div class="col-md-6">
                                <!-- Post Future-->
                                <article class="post-future"><a class="post-future-figure"
                                        href="{{ route('blog-post') }}"><img
                                            src="{{ asset('plantilla/images/news-2-1-368x287.jpg') }}" alt=""
                                            width="368" height="287" /></a>
                                    <div class="post-future-main">
                                        <h4 class="post-future-title"><a href="{{ route('blog-post') }}">Brady confirma
                                                regreso para 2023 y años posteriores</a></h4>
                                        <div class="post-future-meta">
                                            <!-- Badge-->
                                            <div class="badge badge-secondary">Deportes
                                            </div>
                                            <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril del 2023</time>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="post-future-text">
                                            <p>El mariscal de campo Tom Brady confirmó el lunes que volverá a jugar para
                                                Nueva Inglaterra...</p>
                                        </div>
                                        <div class="post-future-footer group-flex group-flex-xs"><a
                                                class="button button-gray-outline" href="{{ route('blog-post') }}">Leer
                                                mas</a>
                                            <div class="post-future-share">
                                                <div class="inline-toggle-parent">
                                                    <div class="inline-toggle icon material-icons-share"></div>
                                                    <div class="inline-toggle-element">
                                                        <ul class="list-inline">
                                                            <li>Share</li>
                                                            <li><a class="icon fa-facebook" href="#"></a>
                                                            </li>
                                                            <li><a class="icon fa-twitter" href="#"></a>
                                                            </li>
                                                            <li><a class="icon fa-google-plus" href="#"></a></li>
                                                            <li><a class="icon fa-instagram" href="#"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <!-- Post Future-->
                                <article class="post-future"><a class="post-future-figure"
                                        href="{{ route('blog-post') }}"><img
                                            src="{{ asset('plantilla/images/news-2-2-368x287.jpg') }}" alt=""
                                            width="368" height="287" /></a>
                                    <div class="post-future-main">
                                        <h4 class="post-future-title"><a href="{{ route('blog-post') }}">Decente debut
                                                de robertson en la copa de europa 2023</a></h4>
                                        <div class="post-future-meta">
                                            <!-- Badge-->
                                            <div class="badge badge-secondary">Deportes
                                            </div>
                                            <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril del 2023</time>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="post-future-text">
                                            <p>Robertson, en su primer partido en Anfield como jugador del Liverpool,
                                                parecía seguro como lateral izquierdo...</p>
                                        </div>
                                        <div class="post-future-footer group-flex group-flex-xs"><a
                                                class="button button-gray-outline" href="{{ route('blog-post') }}">Leer
                                                mas</a>
                                            <div class="post-future-share">
                                                <div class="inline-toggle-parent">
                                                    <div class="inline-toggle icon material-icons-share"></div>
                                                    <div class="inline-toggle-element">
                                                        <ul class="list-inline">
                                                            <li>Share</li>
                                                            <li><a class="icon fa-facebook" href="#"></a>
                                                            </li>
                                                            <li><a class="icon fa-twitter" href="#"></a>
                                                            </li>
                                                            <li><a class="icon fa-google-plus" href="#"></a></li>
                                                            <li><a class="icon fa-instagram" href="#"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Aside Block-->
                <div class="col-lg-4">
                    <aside class="aside-components">
                        <div class="aside-component">
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
                                                src="{{ asset('plantilla/images/team-atletico-55x55.png') }}"
                                                alt="" width="55" height="55" />
                                        </figure>
                                        <div class="game-result-team-name">Atletico</div>
                                        <div class="game-result-team-country">Estados Unidos</div>
                                    </div>
                                    <div class="game-result-middle">
                                        <div class="game-result-score-wrap">
                                            <div class="game-result-score game-result-team-win">2<span
                                                    class="game-result-team-label game-result-team-label-top">Win</span>
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
                                                src="{{ asset('plantilla/images/team-real-madrid-41x59.png') }}"
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
                                            <time datetime="2023-04-14">14 de abril del 2023</time>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <!-- Game Result Classic-->
                            <article class="game-result game-result-classic">
                                <div class="game-result-main">
                                    <div class="game-result-team game-result-team-first">
                                        <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                src="{{ asset('plantilla/images/team-bavaria-fc-56x52.png') }}"
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
                                                src="{{ asset('plantilla/images/team-atletico-55x55.png') }}"
                                                alt="" width="55" height="55" />
                                        </figure>
                                        <div class="game-result-team-name">Atletico</div>
                                        <div class="game-result-team-country">Estados Unidos</div>
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
                            <!-- Game Result Classic-->
                            <article class="game-result game-result-classic">
                                <div class="game-result-main">
                                    <div class="game-result-team game-result-team-first">
                                        <figure class="game-result-team-figure game-result-team-figure-big"><img
                                                src="{{ asset('plantilla/images/team-atletico-55x55.png') }}"
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
                                                src="{{ asset('plantilla/images/team-sevilla-57x46.png') }}"
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
                        <div class="aside-component">
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
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p>
                                    <span class="button-media-icon fa-facebook"></span>
                                </a><a class="button-media button-media-twitter" href="#">
                                    <h4 class="button-media-title">120k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p>
                                    <span class="button-media-icon fa-twitter"></span>
                                </a><a class="button-media button-media-google" href="#">
                                    <h4 class="button-media-title">15k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p>
                                    <span class="button-media-icon fa-google"></span>
                                </a><a class="button-media button-media-instagram" href="#">
                                    <h4 class="button-media-title">85k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p>
                                    <span class="button-media-icon fa-instagram"></span>
                                </a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
