@extends('layouts/app')

@section('content')
    <!-- All Sports-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-12">
                    <article class="banner banner-lg context-dark">
                        <div class="banner-inner">
                            <div class="banner-image"><img src="{{ asset('plantilla/images/promotions-01-1170x397.jpeg') }}"
                                    alt="" width="1170" height="397" />
                            </div>
                            <div class="banner-body">
                                <div class="banner-content">
                                    <h2 class="banner-title">
                                        <a href="#">
                                            <span style="color: red;">Surebet</span><span
                                                style="color: white;">s24/7.com</span> <br>
                                            <div style="text-align: center; font-size: 30px;">SOMOS GANADORES</div>

                                        </a>
                                    </h2>
                                    <a class="button button-gray-outline" href="{{ route('login') }}">Comenzar</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-8">
                    <article class="banner context-dark">
                        <div class="banner-inner">
                            <div class="banner-image"><img src="{{ asset('plantilla/images/promotions-02-769x366.jpeg') }}"
                                    alt="" width="769" height="366" />
                            </div>
                            <div class="banner-body">
                                <div class="banner-content">
                                    <h3 class="banner-title"><a href="{{ route('welcome') }}"> Bienvenido a Surebets24/7.com </a></h3>
                                    <p class="banner-text banner-text-with-quote">Ofrecemos tres diferentes cursos para
                                        satisfacer sus necesidades de aprendizaje</p><a class="button button-gray-outline"
                                        href="{{ route('welcome') }}"> mas informacion</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="banner context-dark">
                        <div class="banner-inner">
                            <div class="banner-image"><img src="{{ asset('plantilla/images/promotions-03-370x366.jpeg') }}"
                                    alt="" width="370" height="366" />
                            </div>
                            <div class="banner-body">
                                <div class="banner-content">
                                    <h4 class="banner-title"><a href="{{ route('bots') }}">BOTS AUTOMATIZADOS DE APUESTAS DEPORTIVAS</a>
                                    </h4>
                                    <p class="banner-text">Maximiza tus ganancias, automatiza tus apuestas deportivas con
                                        nuestros bots inteligentes.</p><a class="button button-gray-outline"
                                        href="{{ route('bots') }}"> mas informacion</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="banner context-dark">
                        <div class="banner-inner">
                            <div class="banner-image"><img src="{{ asset('plantilla/images/promotions-04-370x366.jpg') }}"
                                    alt="" width="370" height="366" />
                            </div>
                            <div class="banner-body">
                                <div class="banner-content">
                                    <h4 class="banner-title"><a href="{{route('welcome2')}}"> Bienvenido a Surebets24/7.com</a></h4>
                                    <p class="banner-text">La Plataforma Líder en Apuestas Deportivas Online</p><a
                                        class="button button-gray-outline" href="{{route('welcome2')}}"> mas informacion</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-8">
                    <article class="banner context-dark">
                        <div class="banner-inner">
                            <div class="banner-image"><img src="{{ asset('plantilla/images/promotions-05-768x366.jpeg') }}"
                                    alt="" width="768" height="366" />
                            </div>
                            <div class="banner-body">
                                <div class="banner-content banner-content-lg">
                                    <h3 class="banner-title"><a href="{{ route('join') }}"> UNETE HOY MISMO A SUREBETS24/7.COM</a></h3>
                                    <p class="banner-text banner-text-with-quote">Comienza a transformar tus inversiones en
                                        verdaderas oportunidades de éxito y rentabilidad.</p><a
                                        class="button button-gray-outline" href="{{ route('join') }}"> mas informacion</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
