@extends('layouts/app')

@section('content')
    <!-- All Sports-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-15">
                <div class="col-md-4">
                    <select class="select" data-placeholder="Last 24 hours" data-container-class="select-sport-result"
                        data-dropdown-class="select-sport-result-dropdown">
                        <option value="last 24 hours" selected="">Ultimas 24 horas</option>
                        <option value="last 12 hours">Ultimas 12 horas</option>
                        <option value="last 6 hours">Ultimas 6 horas</option>
                        <option value="last 3 hours">Ultimas 3 horas</option>
                        <option value="last 1 hour">Ultima 1 hora</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="select" data-placeholder="Please select a sport"
                        data-container-class="select-sport-result" data-dropdown-class="select-sport-result-dropdown">
                        <option value="all sports" selected="">Todos los deportes</option>
                        <option value="football">Fútbol</option>
                        <option value="tennis">Tenis</option>
                        <option value="basketball">Baloncesto</option>
                        <option value="ice-hockey">Hockey sobre hielo</option>
                        <option value="volleyball">Voleibol</option>
                        <option value="badminton">Badminton</option>
                        <option value="baseball">Beisbol</option>
                        <option value="table-tennis">Tenis de mesa</option>
                        <option value="cycling">Ciclismo</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="select" data-placeholder="Please select a league"
                        data-container-class="select-sport-result" data-dropdown-class="select-sport-result-dropdown">
                        <option value="the-championship" selected="">Campeonato Nacional</option>
                        <option value="league-one">Internacional de EE. UU.</option>
                        <option value="league-two">Finales de la NBA</option>
                        <option value="league-three">Liga Nacional de Hockey</option>
                        <option value="league-four">Campeonato mundial</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Heading Component-->
            <article class="heading-component">
                <div class="heading-component-inner">
                    <h5 class="heading-component-title">Copa AFC
                    </h5>
                </div>
            </article>

            <div class="result-table-wrap">
                <div class="result-table">
                    <div class="result-table-header">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1"></div>
                            <div class="col-3 col-lg-2"><span>Fecha y hora</span></div>
                            <div class="col-3 col-lg-5"><span>Partido</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>Medio tiempo</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>Tiempo completo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>24 de julio, 11:30</span></div>
                            <div class="col-3 col-lg-5"><span>Cambodia vs. Philippines</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 1</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>2 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>25 de julio, 14:30</span></div>
                            <div class="col-3 col-lg-5"><span>Malaysia vs. Darussalam</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>3 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>6 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>26 de julio, 11:00</span></div>
                            <div class="col-3 col-lg-5"><span>Malaysia vs. Singapore</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>6 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>27 de julio, 11:30</span></div>
                            <div class="col-3 col-lg-5"><span>Home United vs. Ceres FC</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>0 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>2 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>28 de julio, 11:00</span></div>
                            <div class="col-3 col-lg-5"><span>Indonesia vs. Malaysia</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 1</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>3 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>30 de julio, 15:00</span></div>
                            <div class="col-3 col-lg-5"><span>Monchen Gladbach vs. Leverkusen</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>2 : 2</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Heading Component-->
            <article class="heading-component">
                <div class="heading-component-inner">
                    <h5 class="heading-component-title">AFF championship
                    </h5>
                </div>
            </article>

            <div class="result-table-wrap">
                <div class="result-table">
                    <div class="result-table-header">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1"></div>
                            <div class="col-3 col-lg-2"><span>Fecha y hora</span></div>
                            <div class="col-3 col-lg-5"><span>Partido</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>Medio tiempo</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>Tiempo completo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>31 de julio. 11:30</span></div>
                            <div class="col-3 col-lg-5"><span>Indonesia vs. Thailand </span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 1</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>2 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>03 de agosto, 14:30</span></div>
                            <div class="col-3 col-lg-5"><span>Laos vs. Malaysia</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>3 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>6 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>05 de agosto, 11:00</span></div>
                            <div class="col-3 col-lg-5"><span>Gungahlin vs. CanberrA</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>6 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>06 de agosto, 11:30</span></div>
                            <div class="col-3 col-lg-5"><span>Belconnen vs. Canberra FC</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>0 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>2 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>07 de agosto, 11:00</span></div>
                            <div class="col-3 col-lg-5"><span>Central Cordoba vs. Tigre</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 1</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>3 : 1</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="result-table-tr">
                        <div class="row align-items-center">
                            <div class="col-2 col-lg-1">
                                <div class="result-table-icon">
                                    <div class="sprite sprite-sport-icon-07"></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-2"><span>09 de agosto, 15:00</span></div>
                            <div class="col-3 col-lg-5"><span>General vs. CA Platense</span></div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-half-time"><span>2 : 0</span></div>
                            </div>
                            <div class="col-2 col-lg-2">
                                <div class="result-table-full-time"><span>2 : 2</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
