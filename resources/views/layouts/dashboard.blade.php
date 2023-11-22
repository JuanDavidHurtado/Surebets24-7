<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Hyip Pro,  A Modern Hyip Investmet Platform">
    <meta name="keywords" content="investment, HYIP, HYIP investment, hyip website, invest, investment, Investment Management system, investment script, Bug Finder, bug-finder, bugfinder.net, bugfinder">
    <link rel="shortcut icon" href="https://purple-hyip.bugfinder.net/assets/uploads/logo/favicon.png" type="image/x-icon">

    <link rel="apple-touch-icon" href="https://purple-hyip.bugfinder.net/assets/uploads/logo/logo.png">
    <title>Hyippro | badges</title>
    <link rel="icon" type="image/png" sizes="16x16" href="https://purple-hyip.bugfinder.net/assets/uploads/logo/favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Hyippro | badges">

    <meta itemprop="name" content="Hyippro | badges">
    <meta itemprop="description" content="Hyip Pro,  A Modern Hyip Investmet Platform">
    <meta itemprop="image" content="https://purple-hyip.bugfinder.net/assets/uploads/logo/meta.png600x315">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Hyip Pro,  A Modern Hyip Investmet Platform">
    <meta property="og:description" content="Hyip Pro,  A Modern Hyip Investmet Platform">
    <meta property="og:image" content="https://purple-hyip.bugfinder.net/assets/uploads/logo/meta.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:url" content="https://purple-hyip.bugfinder.net/user/badges">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" type="text/css" href="{{asset('darkpurple/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('darkpurple/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('darkpurple/css/radialprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('darkpurple/css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('darkpurple/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('darkpurple/css/style_dashboard.css')}}">
    <script src="{{asset('darkpurple/js/modernizr.custom.js')}}"></script>
   
 
</head>

<body onload="preloder_function()" class="">


    <!-- bottom navbar -->
    <div class="bottom-nav fixed-bottom d-lg-none">
        <div class="link-item">
            <button onclick="toggleSideMenu()">
                <span class="icon"><i class="fal fa-ellipsis-v-alt" aria-hidden="true"></i></span>
                <span class="text">Menus</span>
            </button>
        </div>
        <div class="link-item">
            <a href="https://purple-hyip.bugfinder.net/plan">
                <span class="icon"><i class="fal fa-layer-group" aria-hidden="true"></i></span>
                <span class="text">Plan</span>
            </a>
        </div>
        <div class="link-item active">
            <a href="https://purple-hyip.bugfinder.net/user/dashboard">
                <span class="icon"><i class="fal fa-house" aria-hidden="true"></i></span>
                <span class="text">Home</span>
            </a>
        </div>
        <div class="link-item ">
            <a href="https://purple-hyip.bugfinder.net/user/add-fund">
                <span class="icon"><i class="fal fa-funnel-dollar" aria-hidden="true"></i></span>
                <span class="text">Deposit</span>
            </a>
        </div>
        <div class="link-item ">
            <a href="https://purple-hyip.bugfinder.net/user/profile">
                <span class="icon"><i class="fal fa-user" aria-hidden="true"></i></span>
                <span class="text">Profile</span>
            </a>
        </div>
    </div>

    <!-- preloader_area_start -->
    <div id="preloader" style="display: none;">
    </div>
    <!-- preloader_area_end -->

    <div class="dashboard-wrapper">
        <!------ sidebar ------->
        <div id="sidebar" class="">

            <div class="sidebar-top">
                <a class="navbar-brand d-none d-lg-block" href="https://purple-hyip.bugfinder.net"> <img src="https://purple-hyip.bugfinder.net/assets/uploads/logo/logo.png" alt="brand logo"></a>
                <div class="mobile-user-area d-lg-none">
                    <div class="thumb">
                        <img class="img-fluid user-img" src="https://purple-hyip.bugfinder.net/assets/admin/images/default.png" alt="...">
                    </div>
                    <div class="content">
                        <h5 class="mt-1 mb-1" id="nombre_usuario"></h5>
                       
                    </div>
                </div>
                <button class="sidebar-toggler d-lg-none" onclick="toggleSideMenu()">
                    <i class="fal fa-times" aria-hidden="true"></i>
                </button>
            </div>


            <div class="level-wrapper">
                <div class="level-box">
                    <h4 id="nivel_usuario"></h4>
                    <p id="usuario"></p>
                    <img src="https://purple-hyip.bugfinder.net/assets/uploads/rank/63b2b77635d571672656758.png" alt="level image" class="level-badge">
                </div>
            </div>



            <ul class="main tabScroll">
                <li>
                    <a class="active" href="{{route('home')}}"> <i class="fal fa-house" aria-hidden="true"></i> Home
                    </a>
                </li>

                <div id="lista1" style="display: none;">
                    <li class="sidebar-item">
                        <a href="#submenuPendiente" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fal fa-thumbtack" aria-hidden="true"></i>
                            <span>Admin. Pendiente</span>&nbsp
                            <i class="fal fa-angle-right" aria-hidden="true"></i>

                        </a>
                        <ul class="collapse list-unstyled" id="submenuPendiente">
                            <li>
                                <a href="{{route('pendiente_inversion')}}" class="sidebar-link">* Listar Inversion</a>
                            </li>
                            <li>
                                <a href="{{route('pendiente_curso')}}" class="sidebar-link">* Listar Curso</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('lista_comision_finalizar')}}" class="sidebar-link">
                            <i class="fal fa-tag" aria-hidden="true"></i> Listar Comision </a>
                    </li>
                    <li>
                        <a href="{{route('lista_usuario')}}" class="sidebar-link">
                            <i class="fal fa-users" aria-hidden="true"></i> Admin. Usuarios </a>
                    </li>
                    <li>
                        <a href="{{route('lista_inversion_finalizar')}}" class="sidebar-link">
                            <i class="fal fa-business-time" aria-hidden="true"></i> Inversion a Finalizar </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#submenuPlan" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fal fa-layer-group" aria-hidden="true"></i>
                            <span>Productos</span>&nbsp
                            <i class="fal fa-angle-right" aria-hidden="true"></i>

                        </a>
                        <ul class="collapse list-unstyled" id="submenuPlan">
                            <li>
                                <a href="{{route('listar_producto')}}" class="sidebar-link">Listar Productos</a>
                            </li>
                            <li>
                                <a href="{{route('agregar_producto')}}" class="sidebar-link">Agregar Producto</a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-item">
                        <a href="#submenuCursos" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fal fa-badge" aria-hidden="true"></i>
                            <span>Cursos</span>&nbsp
                            <i class="fal fa-angle-right" aria-hidden="true"></i>

                        </a>
                        <ul class="collapse list-unstyled" id="submenuCursos">
                            <li>
                                <a href="{{route('listar_curso')}}" class="sidebar-link">* Listar Cursos</a>
                            </li>
                            <li>
                                <a href="{{route('agregar_curso')}}" class="sidebar-link">Agregar Cursos</a>
                            </li>
                        </ul>
                    </li>

                </div>

                <div id="lista2" style="display: none;">

                    <li class="sidebar-item">
                        <a href="#submenuTienda" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fal fa-shopping-bag" aria-hidden="true"></i>
                            <span>Tienda</span>&nbsp
                            <i class="fal fa-angle-right" aria-hidden="true"></i>

                        </a>
                        <ul class="collapse list-unstyled" id="submenuTienda">
                            <li>
                                <a href="{{route('lista_inversion')}}" class="sidebar-link">* Inversion</a>
                            </li>
                            <li>
                                <a href="{{route('lista_curso')}}" class="sidebar-link">* Curso</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#submenuHistorial" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fal fa-history" aria-hidden="true"></i>
                            <span>Admin. Historial</span>&nbsp
                            <i class="fal fa-angle-right" aria-hidden="true"></i>

                        </a>
                        <ul class="collapse list-unstyled" id="submenuHistorial">
                            <li>
                                <a href="{{route('historial_inversion')}}" class="sidebar-link">* His. Inversion</a>
                            </li>
                            <li>
                                <a href="{{route('historial_curso')}}" class="sidebar-link">* His. Curso</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#submenuReferido" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fal fa-users" aria-hidden="true"></i>
                            <span>Referidos</span>&nbsp
                            <i class="fal fa-angle-right" aria-hidden="true"></i>

                        </a>
                        <ul class="collapse list-unstyled" id="submenuReferido">
                            <li>
                                <a href="{{route('lista_referido')}}" class="sidebar-link">Listar referidos</a>
                            </li>
                            <li>
                                <a href="{{route('agregar_referido')}}" class="sidebar-link">Agregar referido</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('lista_comision')}}" class="sidebar-link">
                            <i class="fal fa-money-bill" aria-hidden="true"></i> Bono de Referencia </a>
                    </li>
                    <li>
                        <a href="{{route('metodo_pago')}}" class="sidebar-link">
                            <i class="fal fa-credit-card" aria-hidden="true"></i> Metodo de Pago </a>
                    </li>   

                
                </div>

                <li>
                    <a href="{{route('perfil')}}" class="sidebar-link ">
                        <i class="fal fa-user" aria-hidden="true"></i> Ajuste de Perfil </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link ">
                        <i class="fal fa-user-headset" aria-hidden="true"></i> support ticket </a>
                </li>
                <li class="d-lg-none">
                    <a href="#">
                        <i class="fal fa-lock" aria-hidden="true"></i> 2FA Security </a>
                </li>

            </ul>
        </div>

        <!-- content -->
        <div id="content" class="">
            <div class="overlay">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="d-lg-none" href="#">
                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/logo/logo.png" alt="Hyippro" width="160">
                        </a>

                        <button class="sidebar-toggler d-none d-lg-block" onclick="toggleSideMenu()">
                            <i class="fal fa-bars" aria-hidden="true"></i>
                        </button>



                    </div>
              
                    
                    <div class="user-panel d-none d-lg-inline-block">
                        <span class="profile"> <img src="https://purple-hyip.bugfinder.net/assets/admin/images/default.png" alt="user img" class="img-fluid"></span>
                        <ul class="user-dropdown">
                            <li><a href="#"><i aria-hidden="true" class="fal fa-border-all"></i> Dashboard
                                </a>
                            </li>
                            <li><a href="{{route('perfil')}}"><i aria-hidden="true" class="fal fa-user"></i> Mi Perfil
                                </a>
                            </li>

                            <li><a  id="logout"  ><i aria-hidden="true" class="fal fa-sign-out-alt"></i> Logout </a>
                            </li>
                        </ul>
                    </div>



                </nav>
                <!-- main -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- arrow up -->
        <a href="#" class="scroll-up" style="display: none;"><i class="fal fa-long-arrow-up" aria-hidden="true"></i> </a>
        <script src="{{ asset('js/usuario/auth-redirect.js') }}"></script>

        <script src="{{asset('js/usuario/login.js')}}"></script>
        <script src="{{asset('darkpurple/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('darkpurple/js/jquery-3.6.1.min.js')}}"></script>
        <script src="{{asset('darkpurple/js/jquery-ui.js')}}"></script>
        <script src="{{asset('darkpurple/js/aos.js')}}"></script>
        <script src="{{asset('darkpurple/js/select2.min.js')}}"></script>
        <script src="{{asset('darkpurple/js/fontawesomepro.js')}}"></script>
        <style media="all" id="fa-main">
            .fa,
            .fab,
            .fad,
            .fal,
            .far,
            .fas {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                display: inline-block;
                font-style: normal;
                font-variant: normal;
                text-rendering: auto;
                line-height: 1
            }

            .fa-lg {
                font-size: 1.33333em;
                line-height: .75em;
                vertical-align: -.0667em
            }

            .fa-xs {
                font-size: .75em
            }

            .fa-sm {
                font-size: .875em
            }

            .fa-1x {
                font-size: 1em
            }

            .fa-2x {
                font-size: 2em
            }

            .fa-3x {
                font-size: 3em
            }

            .fa-4x {
                font-size: 4em
            }

            .fa-5x {
                font-size: 5em
            }

            .fa-6x {
                font-size: 6em
            }

            .fa-7x {
                font-size: 7em
            }

            .fa-8x {
                font-size: 8em
            }

            .fa-9x {
                font-size: 9em
            }

            .fa-10x {
                font-size: 10em
            }

            .fa-fw {
                text-align: center;
                width: 1.25em
            }

            .fa-ul {
                list-style-type: none;
                margin-left: 2.5em;
                padding-left: 0
            }

            .fa-ul>li {
                position: relative
            }

            .fa-li {
                left: -2em;
                position: absolute;
                text-align: center;
                width: 2em;
                line-height: inherit
            }

            .fa-border {
                border: .08em solid #eee;
                border-radius: .1em;
                padding: .2em .25em .15em
            }

            .fa-pull-left {
                float: left
            }

            .fa-pull-right {
                float: right
            }

            .fa.fa-pull-left,
            .fab.fa-pull-left,
            .fal.fa-pull-left,
            .far.fa-pull-left,
            .fas.fa-pull-left {
                margin-right: .3em
            }

            .fa.fa-pull-right,
            .fab.fa-pull-right,
            .fal.fa-pull-right,
            .far.fa-pull-right,
            .fas.fa-pull-right {
                margin-left: .3em
            }

            .fa-spin {
                -webkit-animation: fa-spin 2s linear infinite;
                animation: fa-spin 2s linear infinite
            }

            .fa-pulse {
                -webkit-animation: fa-spin 1s steps(8) infinite;
                animation: fa-spin 1s steps(8) infinite
            }

            @-webkit-keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg)
                }

                to {
                    -webkit-transform: rotate(1turn);
                    transform: rotate(1turn)
                }
            }

            @keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg)
                }

                to {
                    -webkit-transform: rotate(1turn);
                    transform: rotate(1turn)
                }
            }

            .fa-rotate-90 {
                -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg)
            }

            .fa-rotate-180 {
                -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg)
            }

            .fa-rotate-270 {
                -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg)
            }

            .fa-flip-horizontal {
                -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
                -webkit-transform: scaleX(-1);
                transform: scaleX(-1)
            }

            .fa-flip-vertical {
                -webkit-transform: scaleY(-1);
                transform: scaleY(-1)
            }

            .fa-flip-both,
            .fa-flip-horizontal.fa-flip-vertical,
            .fa-flip-vertical {
                -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
            }

            .fa-flip-both,
            .fa-flip-horizontal.fa-flip-vertical {
                -webkit-transform: scale(-1);
                transform: scale(-1)
            }

            :root .fa-flip-both,
            :root .fa-flip-horizontal,
            :root .fa-flip-vertical,
            :root .fa-rotate-90,
            :root .fa-rotate-180,
            :root .fa-rotate-270 {
                -webkit-filter: none;
                filter: none
            }

            .fa-stack {
                display: inline-block;
                height: 2em;
                line-height: 2em;
                position: relative;
                vertical-align: middle;
                width: 2.5em
            }

            .fa-stack-1x,
            .fa-stack-2x {
                left: 0;
                position: absolute;
                text-align: center;
                width: 100%
            }

            .fa-stack-1x {
                line-height: inherit
            }

            .fa-stack-2x {
                font-size: 2em
            }

            .fa-inverse {
                color: #fff
            }

            .fa-500px:before {
                content: "\f26e"
            }

            .fa-abacus:before {
                content: "\f640"
            }

            .fa-accessible-icon:before {
                content: "\f368"
            }

            .fa-accusoft:before {
                content: "\f369"
            }

            .fa-acorn:before {
                content: "\f6ae"
            }

            .fa-acquisitions-incorporated:before {
                content: "\f6af"
            }

            .fa-ad:before {
                content: "\f641"
            }

            .fa-address-book:before {
                content: "\f2b9"
            }

            .fa-address-card:before {
                content: "\f2bb"
            }

            .fa-adjust:before {
                content: "\f042"
            }

            .fa-adn:before {
                content: "\f170"
            }

            .fa-adversal:before {
                content: "\f36a"
            }

            .fa-affiliatetheme:before {
                content: "\f36b"
            }

            .fa-air-conditioner:before {
                content: "\f8f4"
            }

            .fa-air-freshener:before {
                content: "\f5d0"
            }

            .fa-airbnb:before {
                content: "\f834"
            }

            .fa-alarm-clock:before {
                content: "\f34e"
            }

            .fa-alarm-exclamation:before {
                content: "\f843"
            }

            .fa-alarm-plus:before {
                content: "\f844"
            }

            .fa-alarm-snooze:before {
                content: "\f845"
            }

            .fa-album:before {
                content: "\f89f"
            }

            .fa-album-collection:before {
                content: "\f8a0"
            }

            .fa-algolia:before {
                content: "\f36c"
            }

            .fa-alicorn:before {
                content: "\f6b0"
            }

            .fa-alien:before {
                content: "\f8f5"
            }

            .fa-alien-monster:before {
                content: "\f8f6"
            }

            .fa-align-center:before {
                content: "\f037"
            }

            .fa-align-justify:before {
                content: "\f039"
            }

            .fa-align-left:before {
                content: "\f036"
            }

            .fa-align-right:before {
                content: "\f038"
            }

            .fa-align-slash:before {
                content: "\f846"
            }

            .fa-alipay:before {
                content: "\f642"
            }

            .fa-allergies:before {
                content: "\f461"
            }

            .fa-amazon:before {
                content: "\f270"
            }

            .fa-amazon-pay:before {
                content: "\f42c"
            }

            .fa-ambulance:before {
                content: "\f0f9"
            }

            .fa-american-sign-language-interpreting:before {
                content: "\f2a3"
            }

            .fa-amilia:before {
                content: "\f36d"
            }

            .fa-amp-guitar:before {
                content: "\f8a1"
            }

            .fa-analytics:before {
                content: "\f643"
            }

            .fa-anchor:before {
                content: "\f13d"
            }

            .fa-android:before {
                content: "\f17b"
            }

            .fa-angel:before {
                content: "\f779"
            }

            .fa-angellist:before {
                content: "\f209"
            }

            .fa-angle-double-down:before {
                content: "\f103"
            }

            .fa-angle-double-left:before {
                content: "\f100"
            }

            .fa-angle-double-right:before {
                content: "\f101"
            }

            .fa-angle-double-up:before {
                content: "\f102"
            }

            .fa-angle-down:before {
                content: "\f107"
            }

            .fa-angle-left:before {
                content: "\f104"
            }

            .fa-angle-right:before {
                content: "\f105"
            }

            .fa-angle-up:before {
                content: "\f106"
            }

            .fa-angry:before {
                content: "\f556"
            }

            .fa-angrycreative:before {
                content: "\f36e"
            }

            .fa-angular:before {
                content: "\f420"
            }

            .fa-ankh:before {
                content: "\f644"
            }

            .fa-app-store:before {
                content: "\f36f"
            }

            .fa-app-store-ios:before {
                content: "\f370"
            }

            .fa-apper:before {
                content: "\f371"
            }

            .fa-apple:before {
                content: "\f179"
            }

            .fa-apple-alt:before {
                content: "\f5d1"
            }

            .fa-apple-crate:before {
                content: "\f6b1"
            }

            .fa-apple-pay:before {
                content: "\f415"
            }

            .fa-archive:before {
                content: "\f187"
            }

            .fa-archway:before {
                content: "\f557"
            }

            .fa-arrow-alt-circle-down:before {
                content: "\f358"
            }

            .fa-arrow-alt-circle-left:before {
                content: "\f359"
            }

            .fa-arrow-alt-circle-right:before {
                content: "\f35a"
            }

            .fa-arrow-alt-circle-up:before {
                content: "\f35b"
            }

            .fa-arrow-alt-down:before {
                content: "\f354"
            }

            .fa-arrow-alt-from-bottom:before {
                content: "\f346"
            }

            .fa-arrow-alt-from-left:before {
                content: "\f347"
            }

            .fa-arrow-alt-from-right:before {
                content: "\f348"
            }

            .fa-arrow-alt-from-top:before {
                content: "\f349"
            }

            .fa-arrow-alt-left:before {
                content: "\f355"
            }

            .fa-arrow-alt-right:before {
                content: "\f356"
            }

            .fa-arrow-alt-square-down:before {
                content: "\f350"
            }

            .fa-arrow-alt-square-left:before {
                content: "\f351"
            }

            .fa-arrow-alt-square-right:before {
                content: "\f352"
            }

            .fa-arrow-alt-square-up:before {
                content: "\f353"
            }

            .fa-arrow-alt-to-bottom:before {
                content: "\f34a"
            }

            .fa-arrow-alt-to-left:before {
                content: "\f34b"
            }

            .fa-arrow-alt-to-right:before {
                content: "\f34c"
            }

            .fa-arrow-alt-to-top:before {
                content: "\f34d"
            }

            .fa-arrow-alt-up:before {
                content: "\f357"
            }

            .fa-arrow-circle-down:before {
                content: "\f0ab"
            }

            .fa-arrow-circle-left:before {
                content: "\f0a8"
            }

            .fa-arrow-circle-right:before {
                content: "\f0a9"
            }

            .fa-arrow-circle-up:before {
                content: "\f0aa"
            }

            .fa-arrow-down:before {
                content: "\f063"
            }

            .fa-arrow-from-bottom:before {
                content: "\f342"
            }

            .fa-arrow-from-left:before {
                content: "\f343"
            }

            .fa-arrow-from-right:before {
                content: "\f344"
            }

            .fa-arrow-from-top:before {
                content: "\f345"
            }

            .fa-arrow-left:before {
                content: "\f060"
            }

            .fa-arrow-right:before {
                content: "\f061"
            }

            .fa-arrow-square-down:before {
                content: "\f339"
            }

            .fa-arrow-square-left:before {
                content: "\f33a"
            }

            .fa-arrow-square-right:before {
                content: "\f33b"
            }

            .fa-arrow-square-up:before {
                content: "\f33c"
            }

            .fa-arrow-to-bottom:before {
                content: "\f33d"
            }

            .fa-arrow-to-left:before {
                content: "\f33e"
            }

            .fa-arrow-to-right:before {
                content: "\f340"
            }

            .fa-arrow-to-top:before {
                content: "\f341"
            }

            .fa-arrow-up:before {
                content: "\f062"
            }

            .fa-arrows:before {
                content: "\f047"
            }

            .fa-arrows-alt:before {
                content: "\f0b2"
            }

            .fa-arrows-alt-h:before {
                content: "\f337"
            }

            .fa-arrows-alt-v:before {
                content: "\f338"
            }

            .fa-arrows-h:before {
                content: "\f07e"
            }

            .fa-arrows-v:before {
                content: "\f07d"
            }

            .fa-artstation:before {
                content: "\f77a"
            }

            .fa-assistive-listening-systems:before {
                content: "\f2a2"
            }

            .fa-asterisk:before {
                content: "\f069"
            }

            .fa-asymmetrik:before {
                content: "\f372"
            }

            .fa-at:before {
                content: "\f1fa"
            }

            .fa-atlas:before {
                content: "\f558"
            }

            .fa-atlassian:before {
                content: "\f77b"
            }

            .fa-atom:before {
                content: "\f5d2"
            }

            .fa-atom-alt:before {
                content: "\f5d3"
            }

            .fa-audible:before {
                content: "\f373"
            }

            .fa-audio-description:before {
                content: "\f29e"
            }

            .fa-autoprefixer:before {
                content: "\f41c"
            }

            .fa-avianex:before {
                content: "\f374"
            }

            .fa-aviato:before {
                content: "\f421"
            }

            .fa-award:before {
                content: "\f559"
            }

            .fa-aws:before {
                content: "\f375"
            }

            .fa-axe:before {
                content: "\f6b2"
            }

            .fa-axe-battle:before {
                content: "\f6b3"
            }

            .fa-baby:before {
                content: "\f77c"
            }

            .fa-baby-carriage:before {
                content: "\f77d"
            }

            .fa-backpack:before {
                content: "\f5d4"
            }

            .fa-backspace:before {
                content: "\f55a"
            }

            .fa-backward:before {
                content: "\f04a"
            }

            .fa-bacon:before {
                content: "\f7e5"
            }

            .fa-bacteria:before {
                content: "\e059"
            }

            .fa-bacterium:before {
                content: "\e05a"
            }

            .fa-badge:before {
                content: "\f335"
            }

            .fa-badge-check:before {
                content: "\f336"
            }

            .fa-badge-dollar:before {
                content: "\f645"
            }

            .fa-badge-percent:before {
                content: "\f646"
            }

            .fa-badge-sheriff:before {
                content: "\f8a2"
            }

            .fa-badger-honey:before {
                content: "\f6b4"
            }

            .fa-bags-shopping:before {
                content: "\f847"
            }

            .fa-bahai:before {
                content: "\f666"
            }

            .fa-balance-scale:before {
                content: "\f24e"
            }

            .fa-balance-scale-left:before {
                content: "\f515"
            }

            .fa-balance-scale-right:before {
                content: "\f516"
            }

            .fa-ball-pile:before {
                content: "\f77e"
            }

            .fa-ballot:before {
                content: "\f732"
            }

            .fa-ballot-check:before {
                content: "\f733"
            }

            .fa-ban:before {
                content: "\f05e"
            }

            .fa-band-aid:before {
                content: "\f462"
            }

            .fa-bandcamp:before {
                content: "\f2d5"
            }

            .fa-banjo:before {
                content: "\f8a3"
            }

            .fa-barcode:before {
                content: "\f02a"
            }

            .fa-barcode-alt:before {
                content: "\f463"
            }

            .fa-barcode-read:before {
                content: "\f464"
            }

            .fa-barcode-scan:before {
                content: "\f465"
            }

            .fa-bars:before {
                content: "\f0c9"
            }

            .fa-baseball:before {
                content: "\f432"
            }

            .fa-baseball-ball:before {
                content: "\f433"
            }

            .fa-basketball-ball:before {
                content: "\f434"
            }

            .fa-basketball-hoop:before {
                content: "\f435"
            }

            .fa-bat:before {
                content: "\f6b5"
            }

            .fa-bath:before {
                content: "\f2cd"
            }

            .fa-battery-bolt:before {
                content: "\f376"
            }

            .fa-battery-empty:before {
                content: "\f244"
            }

            .fa-battery-full:before {
                content: "\f240"
            }

            .fa-battery-half:before {
                content: "\f242"
            }

            .fa-battery-quarter:before {
                content: "\f243"
            }

            .fa-battery-slash:before {
                content: "\f377"
            }

            .fa-battery-three-quarters:before {
                content: "\f241"
            }

            .fa-battle-net:before {
                content: "\f835"
            }

            .fa-bed:before {
                content: "\f236"
            }

            .fa-bed-alt:before {
                content: "\f8f7"
            }

            .fa-bed-bunk:before {
                content: "\f8f8"
            }

            .fa-bed-empty:before {
                content: "\f8f9"
            }

            .fa-beer:before {
                content: "\f0fc"
            }

            .fa-behance:before {
                content: "\f1b4"
            }

            .fa-behance-square:before {
                content: "\f1b5"
            }

            .fa-bell:before {
                content: "\f0f3"
            }

            .fa-bell-exclamation:before {
                content: "\f848"
            }

            .fa-bell-on:before {
                content: "\f8fa"
            }

            .fa-bell-plus:before {
                content: "\f849"
            }

            .fa-bell-school:before {
                content: "\f5d5"
            }

            .fa-bell-school-slash:before {
                content: "\f5d6"
            }

            .fa-bell-slash:before {
                content: "\f1f6"
            }

            .fa-bells:before {
                content: "\f77f"
            }

            .fa-betamax:before {
                content: "\f8a4"
            }

            .fa-bezier-curve:before {
                content: "\f55b"
            }

            .fa-bible:before {
                content: "\f647"
            }

            .fa-bicycle:before {
                content: "\f206"
            }

            .fa-biking:before {
                content: "\f84a"
            }

            .fa-biking-mountain:before {
                content: "\f84b"
            }

            .fa-bimobject:before {
                content: "\f378"
            }

            .fa-binoculars:before {
                content: "\f1e5"
            }

            .fa-biohazard:before {
                content: "\f780"
            }

            .fa-birthday-cake:before {
                content: "\f1fd"
            }

            .fa-bitbucket:before {
                content: "\f171"
            }

            .fa-bitcoin:before {
                content: "\f379"
            }

            .fa-bity:before {
                content: "\f37a"
            }

            .fa-black-tie:before {
                content: "\f27e"
            }

            .fa-blackberry:before {
                content: "\f37b"
            }

            .fa-blanket:before {
                content: "\f498"
            }

            .fa-blender:before {
                content: "\f517"
            }

            .fa-blender-phone:before {
                content: "\f6b6"
            }

            .fa-blind:before {
                content: "\f29d"
            }

            .fa-blinds:before {
                content: "\f8fb"
            }

            .fa-blinds-open:before {
                content: "\f8fc"
            }

            .fa-blinds-raised:before {
                content: "\f8fd"
            }

            .fa-blog:before {
                content: "\f781"
            }

            .fa-blogger:before {
                content: "\f37c"
            }

            .fa-blogger-b:before {
                content: "\f37d"
            }

            .fa-bluetooth:before {
                content: "\f293"
            }

            .fa-bluetooth-b:before {
                content: "\f294"
            }

            .fa-bold:before {
                content: "\f032"
            }

            .fa-bolt:before {
                content: "\f0e7"
            }

            .fa-bomb:before {
                content: "\f1e2"
            }

            .fa-bone:before {
                content: "\f5d7"
            }

            .fa-bone-break:before {
                content: "\f5d8"
            }

            .fa-bong:before {
                content: "\f55c"
            }

            .fa-book:before {
                content: "\f02d"
            }

            .fa-book-alt:before {
                content: "\f5d9"
            }

            .fa-book-dead:before {
                content: "\f6b7"
            }

            .fa-book-heart:before {
                content: "\f499"
            }

            .fa-book-medical:before {
                content: "\f7e6"
            }

            .fa-book-open:before {
                content: "\f518"
            }

            .fa-book-reader:before {
                content: "\f5da"
            }

            .fa-book-spells:before {
                content: "\f6b8"
            }

            .fa-book-user:before {
                content: "\f7e7"
            }

            .fa-bookmark:before {
                content: "\f02e"
            }

            .fa-books:before {
                content: "\f5db"
            }

            .fa-books-medical:before {
                content: "\f7e8"
            }

            .fa-boombox:before {
                content: "\f8a5"
            }

            .fa-boot:before {
                content: "\f782"
            }

            .fa-booth-curtain:before {
                content: "\f734"
            }

            .fa-bootstrap:before {
                content: "\f836"
            }

            .fa-border-all:before {
                content: "\f84c"
            }

            .fa-border-bottom:before {
                content: "\f84d"
            }

            .fa-border-center-h:before {
                content: "\f89c"
            }

            .fa-border-center-v:before {
                content: "\f89d"
            }

            .fa-border-inner:before {
                content: "\f84e"
            }

            .fa-border-left:before {
                content: "\f84f"
            }

            .fa-border-none:before {
                content: "\f850"
            }

            .fa-border-outer:before {
                content: "\f851"
            }

            .fa-border-right:before {
                content: "\f852"
            }

            .fa-border-style:before {
                content: "\f853"
            }

            .fa-border-style-alt:before {
                content: "\f854"
            }

            .fa-border-top:before {
                content: "\f855"
            }

            .fa-bow-arrow:before {
                content: "\f6b9"
            }

            .fa-bowling-ball:before {
                content: "\f436"
            }

            .fa-bowling-pins:before {
                content: "\f437"
            }

            .fa-box:before {
                content: "\f466"
            }

            .fa-box-alt:before {
                content: "\f49a"
            }

            .fa-box-ballot:before {
                content: "\f735"
            }

            .fa-box-check:before {
                content: "\f467"
            }

            .fa-box-fragile:before {
                content: "\f49b"
            }

            .fa-box-full:before {
                content: "\f49c"
            }

            .fa-box-heart:before {
                content: "\f49d"
            }

            .fa-box-open:before {
                content: "\f49e"
            }

            .fa-box-tissue:before {
                content: "\e05b"
            }

            .fa-box-up:before {
                content: "\f49f"
            }

            .fa-box-usd:before {
                content: "\f4a0"
            }

            .fa-boxes:before {
                content: "\f468"
            }

            .fa-boxes-alt:before {
                content: "\f4a1"
            }

            .fa-boxing-glove:before {
                content: "\f438"
            }

            .fa-brackets:before {
                content: "\f7e9"
            }

            .fa-brackets-curly:before {
                content: "\f7ea"
            }

            .fa-braille:before {
                content: "\f2a1"
            }

            .fa-brain:before {
                content: "\f5dc"
            }

            .fa-bread-loaf:before {
                content: "\f7eb"
            }

            .fa-bread-slice:before {
                content: "\f7ec"
            }

            .fa-briefcase:before {
                content: "\f0b1"
            }

            .fa-briefcase-medical:before {
                content: "\f469"
            }

            .fa-bring-forward:before {
                content: "\f856"
            }

            .fa-bring-front:before {
                content: "\f857"
            }

            .fa-broadcast-tower:before {
                content: "\f519"
            }

            .fa-broom:before {
                content: "\f51a"
            }

            .fa-browser:before {
                content: "\f37e"
            }

            .fa-brush:before {
                content: "\f55d"
            }

            .fa-btc:before {
                content: "\f15a"
            }

            .fa-buffer:before {
                content: "\f837"
            }

            .fa-bug:before {
                content: "\f188"
            }

            .fa-building:before {
                content: "\f1ad"
            }

            .fa-bullhorn:before {
                content: "\f0a1"
            }

            .fa-bullseye:before {
                content: "\f140"
            }

            .fa-bullseye-arrow:before {
                content: "\f648"
            }

            .fa-bullseye-pointer:before {
                content: "\f649"
            }

            .fa-burger-soda:before {
                content: "\f858"
            }

            .fa-burn:before {
                content: "\f46a"
            }

            .fa-buromobelexperte:before {
                content: "\f37f"
            }

            .fa-burrito:before {
                content: "\f7ed"
            }

            .fa-bus:before {
                content: "\f207"
            }

            .fa-bus-alt:before {
                content: "\f55e"
            }

            .fa-bus-school:before {
                content: "\f5dd"
            }

            .fa-business-time:before {
                content: "\f64a"
            }

            .fa-buy-n-large:before {
                content: "\f8a6"
            }

            .fa-buysellads:before {
                content: "\f20d"
            }

            .fa-cabinet-filing:before {
                content: "\f64b"
            }

            .fa-cactus:before {
                content: "\f8a7"
            }

            .fa-calculator:before {
                content: "\f1ec"
            }

            .fa-calculator-alt:before {
                content: "\f64c"
            }

            .fa-calendar:before {
                content: "\f133"
            }

            .fa-calendar-alt:before {
                content: "\f073"
            }

            .fa-calendar-check:before {
                content: "\f274"
            }

            .fa-calendar-day:before {
                content: "\f783"
            }

            .fa-calendar-edit:before {
                content: "\f333"
            }

            .fa-calendar-exclamation:before {
                content: "\f334"
            }

            .fa-calendar-minus:before {
                content: "\f272"
            }

            .fa-calendar-plus:before {
                content: "\f271"
            }

            .fa-calendar-star:before {
                content: "\f736"
            }

            .fa-calendar-times:before {
                content: "\f273"
            }

            .fa-calendar-week:before {
                content: "\f784"
            }

            .fa-camcorder:before {
                content: "\f8a8"
            }

            .fa-camera:before {
                content: "\f030"
            }

            .fa-camera-alt:before {
                content: "\f332"
            }

            .fa-camera-home:before {
                content: "\f8fe"
            }

            .fa-camera-movie:before {
                content: "\f8a9"
            }

            .fa-camera-polaroid:before {
                content: "\f8aa"
            }

            .fa-camera-retro:before {
                content: "\f083"
            }

            .fa-campfire:before {
                content: "\f6ba"
            }

            .fa-campground:before {
                content: "\f6bb"
            }

            .fa-canadian-maple-leaf:before {
                content: "\f785"
            }

            .fa-candle-holder:before {
                content: "\f6bc"
            }

            .fa-candy-cane:before {
                content: "\f786"
            }

            .fa-candy-corn:before {
                content: "\f6bd"
            }

            .fa-cannabis:before {
                content: "\f55f"
            }

            .fa-capsules:before {
                content: "\f46b"
            }

            .fa-car:before {
                content: "\f1b9"
            }

            .fa-car-alt:before {
                content: "\f5de"
            }

            .fa-car-battery:before {
                content: "\f5df"
            }

            .fa-car-building:before {
                content: "\f859"
            }

            .fa-car-bump:before {
                content: "\f5e0"
            }

            .fa-car-bus:before {
                content: "\f85a"
            }

            .fa-car-crash:before {
                content: "\f5e1"
            }

            .fa-car-garage:before {
                content: "\f5e2"
            }

            .fa-car-mechanic:before {
                content: "\f5e3"
            }

            .fa-car-side:before {
                content: "\f5e4"
            }

            .fa-car-tilt:before {
                content: "\f5e5"
            }

            .fa-car-wash:before {
                content: "\f5e6"
            }

            .fa-caravan:before {
                content: "\f8ff"
            }

            .fa-caravan-alt:before {
                content: "\e000"
            }

            .fa-caret-circle-down:before {
                content: "\f32d"
            }

            .fa-caret-circle-left:before {
                content: "\f32e"
            }

            .fa-caret-circle-right:before {
                content: "\f330"
            }

            .fa-caret-circle-up:before {
                content: "\f331"
            }

            .fa-caret-down:before {
                content: "\f0d7"
            }

            .fa-caret-left:before {
                content: "\f0d9"
            }

            .fa-caret-right:before {
                content: "\f0da"
            }

            .fa-caret-square-down:before {
                content: "\f150"
            }

            .fa-caret-square-left:before {
                content: "\f191"
            }

            .fa-caret-square-right:before {
                content: "\f152"
            }

            .fa-caret-square-up:before {
                content: "\f151"
            }

            .fa-caret-up:before {
                content: "\f0d8"
            }

            .fa-carrot:before {
                content: "\f787"
            }

            .fa-cars:before {
                content: "\f85b"
            }

            .fa-cart-arrow-down:before {
                content: "\f218"
            }

            .fa-cart-plus:before {
                content: "\f217"
            }

            .fa-cash-register:before {
                content: "\f788"
            }

            .fa-cassette-tape:before {
                content: "\f8ab"
            }

            .fa-cat:before {
                content: "\f6be"
            }

            .fa-cat-space:before {
                content: "\e001"
            }

            .fa-cauldron:before {
                content: "\f6bf"
            }

            .fa-cc-amazon-pay:before {
                content: "\f42d"
            }

            .fa-cc-amex:before {
                content: "\f1f3"
            }

            .fa-cc-apple-pay:before {
                content: "\f416"
            }

            .fa-cc-diners-club:before {
                content: "\f24c"
            }

            .fa-cc-discover:before {
                content: "\f1f2"
            }

            .fa-cc-jcb:before {
                content: "\f24b"
            }

            .fa-cc-mastercard:before {
                content: "\f1f1"
            }

            .fa-cc-paypal:before {
                content: "\f1f4"
            }

            .fa-cc-stripe:before {
                content: "\f1f5"
            }

            .fa-cc-visa:before {
                content: "\f1f0"
            }

            .fa-cctv:before {
                content: "\f8ac"
            }

            .fa-centercode:before {
                content: "\f380"
            }

            .fa-centos:before {
                content: "\f789"
            }

            .fa-certificate:before {
                content: "\f0a3"
            }

            .fa-chair:before {
                content: "\f6c0"
            }

            .fa-chair-office:before {
                content: "\f6c1"
            }

            .fa-chalkboard:before {
                content: "\f51b"
            }

            .fa-chalkboard-teacher:before {
                content: "\f51c"
            }

            .fa-charging-station:before {
                content: "\f5e7"
            }

            .fa-chart-area:before {
                content: "\f1fe"
            }

            .fa-chart-bar:before {
                content: "\f080"
            }

            .fa-chart-line:before {
                content: "\f201"
            }

            .fa-chart-line-down:before {
                content: "\f64d"
            }

            .fa-chart-network:before {
                content: "\f78a"
            }

            .fa-chart-pie:before {
                content: "\f200"
            }

            .fa-chart-pie-alt:before {
                content: "\f64e"
            }

            .fa-chart-scatter:before {
                content: "\f7ee"
            }

            .fa-check:before {
                content: "\f00c"
            }

            .fa-check-circle:before {
                content: "\f058"
            }

            .fa-check-double:before {
                content: "\f560"
            }

            .fa-check-square:before {
                content: "\f14a"
            }

            .fa-cheese:before {
                content: "\f7ef"
            }

            .fa-cheese-swiss:before {
                content: "\f7f0"
            }

            .fa-cheeseburger:before {
                content: "\f7f1"
            }

            .fa-chess:before {
                content: "\f439"
            }

            .fa-chess-bishop:before {
                content: "\f43a"
            }

            .fa-chess-bishop-alt:before {
                content: "\f43b"
            }

            .fa-chess-board:before {
                content: "\f43c"
            }

            .fa-chess-clock:before {
                content: "\f43d"
            }

            .fa-chess-clock-alt:before {
                content: "\f43e"
            }

            .fa-chess-king:before {
                content: "\f43f"
            }

            .fa-chess-king-alt:before {
                content: "\f440"
            }

            .fa-chess-knight:before {
                content: "\f441"
            }

            .fa-chess-knight-alt:before {
                content: "\f442"
            }

            .fa-chess-pawn:before {
                content: "\f443"
            }

            .fa-chess-pawn-alt:before {
                content: "\f444"
            }

            .fa-chess-queen:before {
                content: "\f445"
            }

            .fa-chess-queen-alt:before {
                content: "\f446"
            }

            .fa-chess-rook:before {
                content: "\f447"
            }

            .fa-chess-rook-alt:before {
                content: "\f448"
            }

            .fa-chevron-circle-down:before {
                content: "\f13a"
            }

            .fa-chevron-circle-left:before {
                content: "\f137"
            }

            .fa-chevron-circle-right:before {
                content: "\f138"
            }

            .fa-chevron-circle-up:before {
                content: "\f139"
            }

            .fa-chevron-double-down:before {
                content: "\f322"
            }

            .fa-chevron-double-left:before {
                content: "\f323"
            }

            .fa-chevron-double-right:before {
                content: "\f324"
            }

            .fa-chevron-double-up:before {
                content: "\f325"
            }

            .fa-chevron-down:before {
                content: "\f078"
            }

            .fa-chevron-left:before {
                content: "\f053"
            }

            .fa-chevron-right:before {
                content: "\f054"
            }

            .fa-chevron-square-down:before {
                content: "\f329"
            }

            .fa-chevron-square-left:before {
                content: "\f32a"
            }

            .fa-chevron-square-right:before {
                content: "\f32b"
            }

            .fa-chevron-square-up:before {
                content: "\f32c"
            }

            .fa-chevron-up:before {
                content: "\f077"
            }

            .fa-child:before {
                content: "\f1ae"
            }

            .fa-chimney:before {
                content: "\f78b"
            }

            .fa-chrome:before {
                content: "\f268"
            }

            .fa-chromecast:before {
                content: "\f838"
            }

            .fa-church:before {
                content: "\f51d"
            }

            .fa-circle:before {
                content: "\f111"
            }

            .fa-circle-notch:before {
                content: "\f1ce"
            }

            .fa-city:before {
                content: "\f64f"
            }

            .fa-clarinet:before {
                content: "\f8ad"
            }

            .fa-claw-marks:before {
                content: "\f6c2"
            }

            .fa-clinic-medical:before {
                content: "\f7f2"
            }

            .fa-clipboard:before {
                content: "\f328"
            }

            .fa-clipboard-check:before {
                content: "\f46c"
            }

            .fa-clipboard-list:before {
                content: "\f46d"
            }

            .fa-clipboard-list-check:before {
                content: "\f737"
            }

            .fa-clipboard-prescription:before {
                content: "\f5e8"
            }

            .fa-clipboard-user:before {
                content: "\f7f3"
            }

            .fa-clock:before {
                content: "\f017"
            }

            .fa-clone:before {
                content: "\f24d"
            }

            .fa-closed-captioning:before {
                content: "\f20a"
            }

            .fa-cloud:before {
                content: "\f0c2"
            }

            .fa-cloud-download:before {
                content: "\f0ed"
            }

            .fa-cloud-download-alt:before {
                content: "\f381"
            }

            .fa-cloud-drizzle:before {
                content: "\f738"
            }

            .fa-cloud-hail:before {
                content: "\f739"
            }

            .fa-cloud-hail-mixed:before {
                content: "\f73a"
            }

            .fa-cloud-meatball:before {
                content: "\f73b"
            }

            .fa-cloud-moon:before {
                content: "\f6c3"
            }

            .fa-cloud-moon-rain:before {
                content: "\f73c"
            }

            .fa-cloud-music:before {
                content: "\f8ae"
            }

            .fa-cloud-rain:before {
                content: "\f73d"
            }

            .fa-cloud-rainbow:before {
                content: "\f73e"
            }

            .fa-cloud-showers:before {
                content: "\f73f"
            }

            .fa-cloud-showers-heavy:before {
                content: "\f740"
            }

            .fa-cloud-sleet:before {
                content: "\f741"
            }

            .fa-cloud-snow:before {
                content: "\f742"
            }

            .fa-cloud-sun:before {
                content: "\f6c4"
            }

            .fa-cloud-sun-rain:before {
                content: "\f743"
            }

            .fa-cloud-upload:before {
                content: "\f0ee"
            }

            .fa-cloud-upload-alt:before {
                content: "\f382"
            }

            .fa-cloudflare:before {
                content: "\e07d"
            }

            .fa-clouds:before {
                content: "\f744"
            }

            .fa-clouds-moon:before {
                content: "\f745"
            }

            .fa-clouds-sun:before {
                content: "\f746"
            }

            .fa-cloudscale:before {
                content: "\f383"
            }

            .fa-cloudsmith:before {
                content: "\f384"
            }

            .fa-cloudversify:before {
                content: "\f385"
            }

            .fa-club:before {
                content: "\f327"
            }

            .fa-cocktail:before {
                content: "\f561"
            }

            .fa-code:before {
                content: "\f121"
            }

            .fa-code-branch:before {
                content: "\f126"
            }

            .fa-code-commit:before {
                content: "\f386"
            }

            .fa-code-merge:before {
                content: "\f387"
            }

            .fa-codepen:before {
                content: "\f1cb"
            }

            .fa-codiepie:before {
                content: "\f284"
            }

            .fa-coffee:before {
                content: "\f0f4"
            }

            .fa-coffee-pot:before {
                content: "\e002"
            }

            .fa-coffee-togo:before {
                content: "\f6c5"
            }

            .fa-coffin:before {
                content: "\f6c6"
            }

            .fa-coffin-cross:before {
                content: "\e051"
            }

            .fa-cog:before {
                content: "\f013"
            }

            .fa-cogs:before {
                content: "\f085"
            }

            .fa-coin:before {
                content: "\f85c"
            }

            .fa-coins:before {
                content: "\f51e"
            }

            .fa-columns:before {
                content: "\f0db"
            }

            .fa-comet:before {
                content: "\e003"
            }

            .fa-comment:before {
                content: "\f075"
            }

            .fa-comment-alt:before {
                content: "\f27a"
            }

            .fa-comment-alt-check:before {
                content: "\f4a2"
            }

            .fa-comment-alt-dollar:before {
                content: "\f650"
            }

            .fa-comment-alt-dots:before {
                content: "\f4a3"
            }

            .fa-comment-alt-edit:before {
                content: "\f4a4"
            }

            .fa-comment-alt-exclamation:before {
                content: "\f4a5"
            }

            .fa-comment-alt-lines:before {
                content: "\f4a6"
            }

            .fa-comment-alt-medical:before {
                content: "\f7f4"
            }

            .fa-comment-alt-minus:before {
                content: "\f4a7"
            }

            .fa-comment-alt-music:before {
                content: "\f8af"
            }

            .fa-comment-alt-plus:before {
                content: "\f4a8"
            }

            .fa-comment-alt-slash:before {
                content: "\f4a9"
            }

            .fa-comment-alt-smile:before {
                content: "\f4aa"
            }

            .fa-comment-alt-times:before {
                content: "\f4ab"
            }

            .fa-comment-check:before {
                content: "\f4ac"
            }

            .fa-comment-dollar:before {
                content: "\f651"
            }

            .fa-comment-dots:before {
                content: "\f4ad"
            }

            .fa-comment-edit:before {
                content: "\f4ae"
            }

            .fa-comment-exclamation:before {
                content: "\f4af"
            }

            .fa-comment-lines:before {
                content: "\f4b0"
            }

            .fa-comment-medical:before {
                content: "\f7f5"
            }

            .fa-comment-minus:before {
                content: "\f4b1"
            }

            .fa-comment-music:before {
                content: "\f8b0"
            }

            .fa-comment-plus:before {
                content: "\f4b2"
            }

            .fa-comment-slash:before {
                content: "\f4b3"
            }

            .fa-comment-smile:before {
                content: "\f4b4"
            }

            .fa-comment-times:before {
                content: "\f4b5"
            }

            .fa-comments:before {
                content: "\f086"
            }

            .fa-comments-alt:before {
                content: "\f4b6"
            }

            .fa-comments-alt-dollar:before {
                content: "\f652"
            }

            .fa-comments-dollar:before {
                content: "\f653"
            }

            .fa-compact-disc:before {
                content: "\f51f"
            }

            .fa-compass:before {
                content: "\f14e"
            }

            .fa-compass-slash:before {
                content: "\f5e9"
            }

            .fa-compress:before {
                content: "\f066"
            }

            .fa-compress-alt:before {
                content: "\f422"
            }

            .fa-compress-arrows-alt:before {
                content: "\f78c"
            }

            .fa-compress-wide:before {
                content: "\f326"
            }

            .fa-computer-classic:before {
                content: "\f8b1"
            }

            .fa-computer-speaker:before {
                content: "\f8b2"
            }

            .fa-concierge-bell:before {
                content: "\f562"
            }

            .fa-confluence:before {
                content: "\f78d"
            }

            .fa-connectdevelop:before {
                content: "\f20e"
            }

            .fa-construction:before {
                content: "\f85d"
            }

            .fa-container-storage:before {
                content: "\f4b7"
            }

            .fa-contao:before {
                content: "\f26d"
            }

            .fa-conveyor-belt:before {
                content: "\f46e"
            }

            .fa-conveyor-belt-alt:before {
                content: "\f46f"
            }

            .fa-cookie:before {
                content: "\f563"
            }

            .fa-cookie-bite:before {
                content: "\f564"
            }

            .fa-copy:before {
                content: "\f0c5"
            }

            .fa-copyright:before {
                content: "\f1f9"
            }

            .fa-corn:before {
                content: "\f6c7"
            }

            .fa-cotton-bureau:before {
                content: "\f89e"
            }

            .fa-couch:before {
                content: "\f4b8"
            }

            .fa-cow:before {
                content: "\f6c8"
            }

            .fa-cowbell:before {
                content: "\f8b3"
            }

            .fa-cowbell-more:before {
                content: "\f8b4"
            }

            .fa-cpanel:before {
                content: "\f388"
            }

            .fa-creative-commons:before {
                content: "\f25e"
            }

            .fa-creative-commons-by:before {
                content: "\f4e7"
            }

            .fa-creative-commons-nc:before {
                content: "\f4e8"
            }

            .fa-creative-commons-nc-eu:before {
                content: "\f4e9"
            }

            .fa-creative-commons-nc-jp:before {
                content: "\f4ea"
            }

            .fa-creative-commons-nd:before {
                content: "\f4eb"
            }

            .fa-creative-commons-pd:before {
                content: "\f4ec"
            }

            .fa-creative-commons-pd-alt:before {
                content: "\f4ed"
            }

            .fa-creative-commons-remix:before {
                content: "\f4ee"
            }

            .fa-creative-commons-sa:before {
                content: "\f4ef"
            }

            .fa-creative-commons-sampling:before {
                content: "\f4f0"
            }

            .fa-creative-commons-sampling-plus:before {
                content: "\f4f1"
            }

            .fa-creative-commons-share:before {
                content: "\f4f2"
            }

            .fa-creative-commons-zero:before {
                content: "\f4f3"
            }

            .fa-credit-card:before {
                content: "\f09d"
            }

            .fa-credit-card-blank:before {
                content: "\f389"
            }

            .fa-credit-card-front:before {
                content: "\f38a"
            }

            .fa-cricket:before {
                content: "\f449"
            }

            .fa-critical-role:before {
                content: "\f6c9"
            }

            .fa-croissant:before {
                content: "\f7f6"
            }

            .fa-crop:before {
                content: "\f125"
            }

            .fa-crop-alt:before {
                content: "\f565"
            }

            .fa-cross:before {
                content: "\f654"
            }

            .fa-crosshairs:before {
                content: "\f05b"
            }

            .fa-crow:before {
                content: "\f520"
            }

            .fa-crown:before {
                content: "\f521"
            }

            .fa-crutch:before {
                content: "\f7f7"
            }

            .fa-crutches:before {
                content: "\f7f8"
            }

            .fa-css3:before {
                content: "\f13c"
            }

            .fa-css3-alt:before {
                content: "\f38b"
            }

            .fa-cube:before {
                content: "\f1b2"
            }

            .fa-cubes:before {
                content: "\f1b3"
            }

            .fa-curling:before {
                content: "\f44a"
            }

            .fa-cut:before {
                content: "\f0c4"
            }

            .fa-cuttlefish:before {
                content: "\f38c"
            }

            .fa-d-and-d:before {
                content: "\f38d"
            }

            .fa-d-and-d-beyond:before {
                content: "\f6ca"
            }

            .fa-dagger:before {
                content: "\f6cb"
            }

            .fa-dailymotion:before {
                content: "\e052"
            }

            .fa-dashcube:before {
                content: "\f210"
            }

            .fa-database:before {
                content: "\f1c0"
            }

            .fa-deaf:before {
                content: "\f2a4"
            }

            .fa-debug:before {
                content: "\f7f9"
            }

            .fa-deer:before {
                content: "\f78e"
            }

            .fa-deer-rudolph:before {
                content: "\f78f"
            }

            .fa-deezer:before {
                content: "\e077"
            }

            .fa-delicious:before {
                content: "\f1a5"
            }

            .fa-democrat:before {
                content: "\f747"
            }

            .fa-deploydog:before {
                content: "\f38e"
            }

            .fa-deskpro:before {
                content: "\f38f"
            }

            .fa-desktop:before {
                content: "\f108"
            }

            .fa-desktop-alt:before {
                content: "\f390"
            }

            .fa-dev:before {
                content: "\f6cc"
            }

            .fa-deviantart:before {
                content: "\f1bd"
            }

            .fa-dewpoint:before {
                content: "\f748"
            }

            .fa-dharmachakra:before {
                content: "\f655"
            }

            .fa-dhl:before {
                content: "\f790"
            }

            .fa-diagnoses:before {
                content: "\f470"
            }

            .fa-diamond:before {
                content: "\f219"
            }

            .fa-diaspora:before {
                content: "\f791"
            }

            .fa-dice:before {
                content: "\f522"
            }

            .fa-dice-d10:before {
                content: "\f6cd"
            }

            .fa-dice-d12:before {
                content: "\f6ce"
            }

            .fa-dice-d20:before {
                content: "\f6cf"
            }

            .fa-dice-d4:before {
                content: "\f6d0"
            }

            .fa-dice-d6:before {
                content: "\f6d1"
            }

            .fa-dice-d8:before {
                content: "\f6d2"
            }

            .fa-dice-five:before {
                content: "\f523"
            }

            .fa-dice-four:before {
                content: "\f524"
            }

            .fa-dice-one:before {
                content: "\f525"
            }

            .fa-dice-six:before {
                content: "\f526"
            }

            .fa-dice-three:before {
                content: "\f527"
            }

            .fa-dice-two:before {
                content: "\f528"
            }

            .fa-digg:before {
                content: "\f1a6"
            }

            .fa-digging:before {
                content: "\f85e"
            }

            .fa-digital-ocean:before {
                content: "\f391"
            }

            .fa-digital-tachograph:before {
                content: "\f566"
            }

            .fa-diploma:before {
                content: "\f5ea"
            }

            .fa-directions:before {
                content: "\f5eb"
            }

            .fa-disc-drive:before {
                content: "\f8b5"
            }

            .fa-discord:before {
                content: "\f392"
            }

            .fa-discourse:before {
                content: "\f393"
            }

            .fa-disease:before {
                content: "\f7fa"
            }

            .fa-divide:before {
                content: "\f529"
            }

            .fa-dizzy:before {
                content: "\f567"
            }

            .fa-dna:before {
                content: "\f471"
            }

            .fa-do-not-enter:before {
                content: "\f5ec"
            }

            .fa-dochub:before {
                content: "\f394"
            }

            .fa-docker:before {
                content: "\f395"
            }

            .fa-dog:before {
                content: "\f6d3"
            }

            .fa-dog-leashed:before {
                content: "\f6d4"
            }

            .fa-dollar-sign:before {
                content: "\f155"
            }

            .fa-dolly:before {
                content: "\f472"
            }

            .fa-dolly-empty:before {
                content: "\f473"
            }

            .fa-dolly-flatbed:before {
                content: "\f474"
            }

            .fa-dolly-flatbed-alt:before {
                content: "\f475"
            }

            .fa-dolly-flatbed-empty:before {
                content: "\f476"
            }

            .fa-donate:before {
                content: "\f4b9"
            }

            .fa-door-closed:before {
                content: "\f52a"
            }

            .fa-door-open:before {
                content: "\f52b"
            }

            .fa-dot-circle:before {
                content: "\f192"
            }

            .fa-dove:before {
                content: "\f4ba"
            }

            .fa-download:before {
                content: "\f019"
            }

            .fa-draft2digital:before {
                content: "\f396"
            }

            .fa-drafting-compass:before {
                content: "\f568"
            }

            .fa-dragon:before {
                content: "\f6d5"
            }

            .fa-draw-circle:before {
                content: "\f5ed"
            }

            .fa-draw-polygon:before {
                content: "\f5ee"
            }

            .fa-draw-square:before {
                content: "\f5ef"
            }

            .fa-dreidel:before {
                content: "\f792"
            }

            .fa-dribbble:before {
                content: "\f17d"
            }

            .fa-dribbble-square:before {
                content: "\f397"
            }

            .fa-drone:before {
                content: "\f85f"
            }

            .fa-drone-alt:before {
                content: "\f860"
            }

            .fa-dropbox:before {
                content: "\f16b"
            }

            .fa-drum:before {
                content: "\f569"
            }

            .fa-drum-steelpan:before {
                content: "\f56a"
            }

            .fa-drumstick:before {
                content: "\f6d6"
            }

            .fa-drumstick-bite:before {
                content: "\f6d7"
            }

            .fa-drupal:before {
                content: "\f1a9"
            }

            .fa-dryer:before {
                content: "\f861"
            }

            .fa-dryer-alt:before {
                content: "\f862"
            }

            .fa-duck:before {
                content: "\f6d8"
            }

            .fa-dumbbell:before {
                content: "\f44b"
            }

            .fa-dumpster:before {
                content: "\f793"
            }

            .fa-dumpster-fire:before {
                content: "\f794"
            }

            .fa-dungeon:before {
                content: "\f6d9"
            }

            .fa-dyalog:before {
                content: "\f399"
            }

            .fa-ear:before {
                content: "\f5f0"
            }

            .fa-ear-muffs:before {
                content: "\f795"
            }

            .fa-earlybirds:before {
                content: "\f39a"
            }

            .fa-ebay:before {
                content: "\f4f4"
            }

            .fa-eclipse:before {
                content: "\f749"
            }

            .fa-eclipse-alt:before {
                content: "\f74a"
            }

            .fa-edge:before {
                content: "\f282"
            }

            .fa-edge-legacy:before {
                content: "\e078"
            }

            .fa-edit:before {
                content: "\f044"
            }

            .fa-egg:before {
                content: "\f7fb"
            }

            .fa-egg-fried:before {
                content: "\f7fc"
            }

            .fa-eject:before {
                content: "\f052"
            }

            .fa-elementor:before {
                content: "\f430"
            }

            .fa-elephant:before {
                content: "\f6da"
            }

            .fa-ellipsis-h:before {
                content: "\f141"
            }

            .fa-ellipsis-h-alt:before {
                content: "\f39b"
            }

            .fa-ellipsis-v:before {
                content: "\f142"
            }

            .fa-ellipsis-v-alt:before {
                content: "\f39c"
            }

            .fa-ello:before {
                content: "\f5f1"
            }

            .fa-ember:before {
                content: "\f423"
            }

            .fa-empire:before {
                content: "\f1d1"
            }

            .fa-empty-set:before {
                content: "\f656"
            }

            .fa-engine-warning:before {
                content: "\f5f2"
            }

            .fa-envelope:before {
                content: "\f0e0"
            }

            .fa-envelope-open:before {
                content: "\f2b6"
            }

            .fa-envelope-open-dollar:before {
                content: "\f657"
            }

            .fa-envelope-open-text:before {
                content: "\f658"
            }

            .fa-envelope-square:before {
                content: "\f199"
            }

            .fa-envira:before {
                content: "\f299"
            }

            .fa-equals:before {
                content: "\f52c"
            }

            .fa-eraser:before {
                content: "\f12d"
            }

            .fa-erlang:before {
                content: "\f39d"
            }

            .fa-ethereum:before {
                content: "\f42e"
            }

            .fa-ethernet:before {
                content: "\f796"
            }

            .fa-etsy:before {
                content: "\f2d7"
            }

            .fa-euro-sign:before {
                content: "\f153"
            }

            .fa-evernote:before {
                content: "\f839"
            }

            .fa-exchange:before {
                content: "\f0ec"
            }

            .fa-exchange-alt:before {
                content: "\f362"
            }

            .fa-exclamation:before {
                content: "\f12a"
            }

            .fa-exclamation-circle:before {
                content: "\f06a"
            }

            .fa-exclamation-square:before {
                content: "\f321"
            }

            .fa-exclamation-triangle:before {
                content: "\f071"
            }

            .fa-expand:before {
                content: "\f065"
            }

            .fa-expand-alt:before {
                content: "\f424"
            }

            .fa-expand-arrows:before {
                content: "\f31d"
            }

            .fa-expand-arrows-alt:before {
                content: "\f31e"
            }

            .fa-expand-wide:before {
                content: "\f320"
            }

            .fa-expeditedssl:before {
                content: "\f23e"
            }

            .fa-external-link:before {
                content: "\f08e"
            }

            .fa-external-link-alt:before {
                content: "\f35d"
            }

            .fa-external-link-square:before {
                content: "\f14c"
            }

            .fa-external-link-square-alt:before {
                content: "\f360"
            }

            .fa-eye:before {
                content: "\f06e"
            }

            .fa-eye-dropper:before {
                content: "\f1fb"
            }

            .fa-eye-evil:before {
                content: "\f6db"
            }

            .fa-eye-slash:before {
                content: "\f070"
            }

            .fa-facebook:before {
                content: "\f09a"
            }

            .fa-facebook-f:before {
                content: "\f39e"
            }

            .fa-facebook-messenger:before {
                content: "\f39f"
            }

            .fa-facebook-square:before {
                content: "\f082"
            }

            .fa-fan:before {
                content: "\f863"
            }

            .fa-fan-table:before {
                content: "\e004"
            }

            .fa-fantasy-flight-games:before {
                content: "\f6dc"
            }

            .fa-farm:before {
                content: "\f864"
            }

            .fa-fast-backward:before {
                content: "\f049"
            }

            .fa-fast-forward:before {
                content: "\f050"
            }

            .fa-faucet:before {
                content: "\e005"
            }

            .fa-faucet-drip:before {
                content: "\e006"
            }

            .fa-fax:before {
                content: "\f1ac"
            }

            .fa-feather:before {
                content: "\f52d"
            }

            .fa-feather-alt:before {
                content: "\f56b"
            }

            .fa-fedex:before {
                content: "\f797"
            }

            .fa-fedora:before {
                content: "\f798"
            }

            .fa-female:before {
                content: "\f182"
            }

            .fa-field-hockey:before {
                content: "\f44c"
            }

            .fa-fighter-jet:before {
                content: "\f0fb"
            }

            .fa-figma:before {
                content: "\f799"
            }

            .fa-file:before {
                content: "\f15b"
            }

            .fa-file-alt:before {
                content: "\f15c"
            }

            .fa-file-archive:before {
                content: "\f1c6"
            }

            .fa-file-audio:before {
                content: "\f1c7"
            }

            .fa-file-certificate:before {
                content: "\f5f3"
            }

            .fa-file-chart-line:before {
                content: "\f659"
            }

            .fa-file-chart-pie:before {
                content: "\f65a"
            }

            .fa-file-check:before {
                content: "\f316"
            }

            .fa-file-code:before {
                content: "\f1c9"
            }

            .fa-file-contract:before {
                content: "\f56c"
            }

            .fa-file-csv:before {
                content: "\f6dd"
            }

            .fa-file-download:before {
                content: "\f56d"
            }

            .fa-file-edit:before {
                content: "\f31c"
            }

            .fa-file-excel:before {
                content: "\f1c3"
            }

            .fa-file-exclamation:before {
                content: "\f31a"
            }

            .fa-file-export:before {
                content: "\f56e"
            }

            .fa-file-image:before {
                content: "\f1c5"
            }

            .fa-file-import:before {
                content: "\f56f"
            }

            .fa-file-invoice:before {
                content: "\f570"
            }

            .fa-file-invoice-dollar:before {
                content: "\f571"
            }

            .fa-file-medical:before {
                content: "\f477"
            }

            .fa-file-medical-alt:before {
                content: "\f478"
            }

            .fa-file-minus:before {
                content: "\f318"
            }

            .fa-file-music:before {
                content: "\f8b6"
            }

            .fa-file-pdf:before {
                content: "\f1c1"
            }

            .fa-file-plus:before {
                content: "\f319"
            }

            .fa-file-powerpoint:before {
                content: "\f1c4"
            }

            .fa-file-prescription:before {
                content: "\f572"
            }

            .fa-file-search:before {
                content: "\f865"
            }

            .fa-file-signature:before {
                content: "\f573"
            }

            .fa-file-spreadsheet:before {
                content: "\f65b"
            }

            .fa-file-times:before {
                content: "\f317"
            }

            .fa-file-upload:before {
                content: "\f574"
            }

            .fa-file-user:before {
                content: "\f65c"
            }

            .fa-file-video:before {
                content: "\f1c8"
            }

            .fa-file-word:before {
                content: "\f1c2"
            }

            .fa-files-medical:before {
                content: "\f7fd"
            }

            .fa-fill:before {
                content: "\f575"
            }

            .fa-fill-drip:before {
                content: "\f576"
            }

            .fa-film:before {
                content: "\f008"
            }

            .fa-film-alt:before {
                content: "\f3a0"
            }

            .fa-film-canister:before {
                content: "\f8b7"
            }

            .fa-filter:before {
                content: "\f0b0"
            }

            .fa-fingerprint:before {
                content: "\f577"
            }

            .fa-fire:before {
                content: "\f06d"
            }

            .fa-fire-alt:before {
                content: "\f7e4"
            }

            .fa-fire-extinguisher:before {
                content: "\f134"
            }

            .fa-fire-smoke:before {
                content: "\f74b"
            }

            .fa-firefox:before {
                content: "\f269"
            }

            .fa-firefox-browser:before {
                content: "\e007"
            }

            .fa-fireplace:before {
                content: "\f79a"
            }

            .fa-first-aid:before {
                content: "\f479"
            }

            .fa-first-order:before {
                content: "\f2b0"
            }

            .fa-first-order-alt:before {
                content: "\f50a"
            }

            .fa-firstdraft:before {
                content: "\f3a1"
            }

            .fa-fish:before {
                content: "\f578"
            }

            .fa-fish-cooked:before {
                content: "\f7fe"
            }

            .fa-fist-raised:before {
                content: "\f6de"
            }

            .fa-flag:before {
                content: "\f024"
            }

            .fa-flag-alt:before {
                content: "\f74c"
            }

            .fa-flag-checkered:before {
                content: "\f11e"
            }

            .fa-flag-usa:before {
                content: "\f74d"
            }

            .fa-flame:before {
                content: "\f6df"
            }

            .fa-flashlight:before {
                content: "\f8b8"
            }

            .fa-flask:before {
                content: "\f0c3"
            }

            .fa-flask-poison:before {
                content: "\f6e0"
            }

            .fa-flask-potion:before {
                content: "\f6e1"
            }

            .fa-flickr:before {
                content: "\f16e"
            }

            .fa-flipboard:before {
                content: "\f44d"
            }

            .fa-flower:before {
                content: "\f7ff"
            }

            .fa-flower-daffodil:before {
                content: "\f800"
            }

            .fa-flower-tulip:before {
                content: "\f801"
            }

            .fa-flushed:before {
                content: "\f579"
            }

            .fa-flute:before {
                content: "\f8b9"
            }

            .fa-flux-capacitor:before {
                content: "\f8ba"
            }

            .fa-fly:before {
                content: "\f417"
            }

            .fa-fog:before {
                content: "\f74e"
            }

            .fa-folder:before {
                content: "\f07b"
            }

            .fa-folder-download:before {
                content: "\e053"
            }

            .fa-folder-minus:before {
                content: "\f65d"
            }

            .fa-folder-open:before {
                content: "\f07c"
            }

            .fa-folder-plus:before {
                content: "\f65e"
            }

            .fa-folder-times:before {
                content: "\f65f"
            }

            .fa-folder-tree:before {
                content: "\f802"
            }

            .fa-folder-upload:before {
                content: "\e054"
            }

            .fa-folders:before {
                content: "\f660"
            }

            .fa-font:before {
                content: "\f031"
            }

            .fa-font-awesome:before {
                content: "\f2b4"
            }

            .fa-font-awesome-alt:before {
                content: "\f35c"
            }

            .fa-font-awesome-flag:before {
                content: "\f425"
            }

            .fa-font-awesome-logo-full:before {
                content: "\f4e6"
            }

            .fa-font-case:before {
                content: "\f866"
            }

            .fa-fonticons:before {
                content: "\f280"
            }

            .fa-fonticons-fi:before {
                content: "\f3a2"
            }

            .fa-football-ball:before {
                content: "\f44e"
            }

            .fa-football-helmet:before {
                content: "\f44f"
            }

            .fa-forklift:before {
                content: "\f47a"
            }

            .fa-fort-awesome:before {
                content: "\f286"
            }

            .fa-fort-awesome-alt:before {
                content: "\f3a3"
            }

            .fa-forumbee:before {
                content: "\f211"
            }

            .fa-forward:before {
                content: "\f04e"
            }

            .fa-foursquare:before {
                content: "\f180"
            }

            .fa-fragile:before {
                content: "\f4bb"
            }

            .fa-free-code-camp:before {
                content: "\f2c5"
            }

            .fa-freebsd:before {
                content: "\f3a4"
            }

            .fa-french-fries:before {
                content: "\f803"
            }

            .fa-frog:before {
                content: "\f52e"
            }

            .fa-frosty-head:before {
                content: "\f79b"
            }

            .fa-frown:before {
                content: "\f119"
            }

            .fa-frown-open:before {
                content: "\f57a"
            }

            .fa-fulcrum:before {
                content: "\f50b"
            }

            .fa-function:before {
                content: "\f661"
            }

            .fa-funnel-dollar:before {
                content: "\f662"
            }

            .fa-futbol:before {
                content: "\f1e3"
            }

            .fa-galactic-republic:before {
                content: "\f50c"
            }

            .fa-galactic-senate:before {
                content: "\f50d"
            }

            .fa-galaxy:before {
                content: "\e008"
            }

            .fa-game-board:before {
                content: "\f867"
            }

            .fa-game-board-alt:before {
                content: "\f868"
            }

            .fa-game-console-handheld:before {
                content: "\f8bb"
            }

            .fa-gamepad:before {
                content: "\f11b"
            }

            .fa-gamepad-alt:before {
                content: "\f8bc"
            }

            .fa-garage:before {
                content: "\e009"
            }

            .fa-garage-car:before {
                content: "\e00a"
            }

            .fa-garage-open:before {
                content: "\e00b"
            }

            .fa-gas-pump:before {
                content: "\f52f"
            }

            .fa-gas-pump-slash:before {
                content: "\f5f4"
            }

            .fa-gavel:before {
                content: "\f0e3"
            }

            .fa-gem:before {
                content: "\f3a5"
            }

            .fa-genderless:before {
                content: "\f22d"
            }

            .fa-get-pocket:before {
                content: "\f265"
            }

            .fa-gg:before {
                content: "\f260"
            }

            .fa-gg-circle:before {
                content: "\f261"
            }

            .fa-ghost:before {
                content: "\f6e2"
            }

            .fa-gift:before {
                content: "\f06b"
            }

            .fa-gift-card:before {
                content: "\f663"
            }

            .fa-gifts:before {
                content: "\f79c"
            }

            .fa-gingerbread-man:before {
                content: "\f79d"
            }

            .fa-git:before {
                content: "\f1d3"
            }

            .fa-git-alt:before {
                content: "\f841"
            }

            .fa-git-square:before {
                content: "\f1d2"
            }

            .fa-github:before {
                content: "\f09b"
            }

            .fa-github-alt:before {
                content: "\f113"
            }

            .fa-github-square:before {
                content: "\f092"
            }

            .fa-gitkraken:before {
                content: "\f3a6"
            }

            .fa-gitlab:before {
                content: "\f296"
            }

            .fa-gitter:before {
                content: "\f426"
            }

            .fa-glass:before {
                content: "\f804"
            }

            .fa-glass-champagne:before {
                content: "\f79e"
            }

            .fa-glass-cheers:before {
                content: "\f79f"
            }

            .fa-glass-citrus:before {
                content: "\f869"
            }

            .fa-glass-martini:before {
                content: "\f000"
            }

            .fa-glass-martini-alt:before {
                content: "\f57b"
            }

            .fa-glass-whiskey:before {
                content: "\f7a0"
            }

            .fa-glass-whiskey-rocks:before {
                content: "\f7a1"
            }

            .fa-glasses:before {
                content: "\f530"
            }

            .fa-glasses-alt:before {
                content: "\f5f5"
            }

            .fa-glide:before {
                content: "\f2a5"
            }

            .fa-glide-g:before {
                content: "\f2a6"
            }

            .fa-globe:before {
                content: "\f0ac"
            }

            .fa-globe-africa:before {
                content: "\f57c"
            }

            .fa-globe-americas:before {
                content: "\f57d"
            }

            .fa-globe-asia:before {
                content: "\f57e"
            }

            .fa-globe-europe:before {
                content: "\f7a2"
            }

            .fa-globe-snow:before {
                content: "\f7a3"
            }

            .fa-globe-stand:before {
                content: "\f5f6"
            }

            .fa-gofore:before {
                content: "\f3a7"
            }

            .fa-golf-ball:before {
                content: "\f450"
            }

            .fa-golf-club:before {
                content: "\f451"
            }

            .fa-goodreads:before {
                content: "\f3a8"
            }

            .fa-goodreads-g:before {
                content: "\f3a9"
            }

            .fa-google:before {
                content: "\f1a0"
            }

            .fa-google-drive:before {
                content: "\f3aa"
            }

            .fa-google-pay:before {
                content: "\e079"
            }

            .fa-google-play:before {
                content: "\f3ab"
            }

            .fa-google-plus:before {
                content: "\f2b3"
            }

            .fa-google-plus-g:before {
                content: "\f0d5"
            }

            .fa-google-plus-square:before {
                content: "\f0d4"
            }

            .fa-google-wallet:before {
                content: "\f1ee"
            }

            .fa-gopuram:before {
                content: "\f664"
            }

            .fa-graduation-cap:before {
                content: "\f19d"
            }

            .fa-gramophone:before {
                content: "\f8bd"
            }

            .fa-gratipay:before {
                content: "\f184"
            }

            .fa-grav:before {
                content: "\f2d6"
            }

            .fa-greater-than:before {
                content: "\f531"
            }

            .fa-greater-than-equal:before {
                content: "\f532"
            }

            .fa-grimace:before {
                content: "\f57f"
            }

            .fa-grin:before {
                content: "\f580"
            }

            .fa-grin-alt:before {
                content: "\f581"
            }

            .fa-grin-beam:before {
                content: "\f582"
            }

            .fa-grin-beam-sweat:before {
                content: "\f583"
            }

            .fa-grin-hearts:before {
                content: "\f584"
            }

            .fa-grin-squint:before {
                content: "\f585"
            }

            .fa-grin-squint-tears:before {
                content: "\f586"
            }

            .fa-grin-stars:before {
                content: "\f587"
            }

            .fa-grin-tears:before {
                content: "\f588"
            }

            .fa-grin-tongue:before {
                content: "\f589"
            }

            .fa-grin-tongue-squint:before {
                content: "\f58a"
            }

            .fa-grin-tongue-wink:before {
                content: "\f58b"
            }

            .fa-grin-wink:before {
                content: "\f58c"
            }

            .fa-grip-horizontal:before {
                content: "\f58d"
            }

            .fa-grip-lines:before {
                content: "\f7a4"
            }

            .fa-grip-lines-vertical:before {
                content: "\f7a5"
            }

            .fa-grip-vertical:before {
                content: "\f58e"
            }

            .fa-gripfire:before {
                content: "\f3ac"
            }

            .fa-grunt:before {
                content: "\f3ad"
            }

            .fa-guilded:before {
                content: "\e07e"
            }

            .fa-guitar:before {
                content: "\f7a6"
            }

            .fa-guitar-electric:before {
                content: "\f8be"
            }

            .fa-guitars:before {
                content: "\f8bf"
            }

            .fa-gulp:before {
                content: "\f3ae"
            }

            .fa-h-square:before {
                content: "\f0fd"
            }

            .fa-h1:before {
                content: "\f313"
            }

            .fa-h2:before {
                content: "\f314"
            }

            .fa-h3:before {
                content: "\f315"
            }

            .fa-h4:before {
                content: "\f86a"
            }

            .fa-hacker-news:before {
                content: "\f1d4"
            }

            .fa-hacker-news-square:before {
                content: "\f3af"
            }

            .fa-hackerrank:before {
                content: "\f5f7"
            }

            .fa-hamburger:before {
                content: "\f805"
            }

            .fa-hammer:before {
                content: "\f6e3"
            }

            .fa-hammer-war:before {
                content: "\f6e4"
            }

            .fa-hamsa:before {
                content: "\f665"
            }

            .fa-hand-heart:before {
                content: "\f4bc"
            }

            .fa-hand-holding:before {
                content: "\f4bd"
            }

            .fa-hand-holding-box:before {
                content: "\f47b"
            }

            .fa-hand-holding-heart:before {
                content: "\f4be"
            }

            .fa-hand-holding-magic:before {
                content: "\f6e5"
            }

            .fa-hand-holding-medical:before {
                content: "\e05c"
            }

            .fa-hand-holding-seedling:before {
                content: "\f4bf"
            }

            .fa-hand-holding-usd:before {
                content: "\f4c0"
            }

            .fa-hand-holding-water:before {
                content: "\f4c1"
            }

            .fa-hand-lizard:before {
                content: "\f258"
            }

            .fa-hand-middle-finger:before {
                content: "\f806"
            }

            .fa-hand-paper:before {
                content: "\f256"
            }

            .fa-hand-peace:before {
                content: "\f25b"
            }

            .fa-hand-point-down:before {
                content: "\f0a7"
            }

            .fa-hand-point-left:before {
                content: "\f0a5"
            }

            .fa-hand-point-right:before {
                content: "\f0a4"
            }

            .fa-hand-point-up:before {
                content: "\f0a6"
            }

            .fa-hand-pointer:before {
                content: "\f25a"
            }

            .fa-hand-receiving:before {
                content: "\f47c"
            }

            .fa-hand-rock:before {
                content: "\f255"
            }

            .fa-hand-scissors:before {
                content: "\f257"
            }

            .fa-hand-sparkles:before {
                content: "\e05d"
            }

            .fa-hand-spock:before {
                content: "\f259"
            }

            .fa-hands:before {
                content: "\f4c2"
            }

            .fa-hands-heart:before {
                content: "\f4c3"
            }

            .fa-hands-helping:before {
                content: "\f4c4"
            }

            .fa-hands-usd:before {
                content: "\f4c5"
            }

            .fa-hands-wash:before {
                content: "\e05e"
            }

            .fa-handshake:before {
                content: "\f2b5"
            }

            .fa-handshake-alt:before {
                content: "\f4c6"
            }

            .fa-handshake-alt-slash:before {
                content: "\e05f"
            }

            .fa-handshake-slash:before {
                content: "\e060"
            }

            .fa-hanukiah:before {
                content: "\f6e6"
            }

            .fa-hard-hat:before {
                content: "\f807"
            }

            .fa-hashtag:before {
                content: "\f292"
            }

            .fa-hat-chef:before {
                content: "\f86b"
            }

            .fa-hat-cowboy:before {
                content: "\f8c0"
            }

            .fa-hat-cowboy-side:before {
                content: "\f8c1"
            }

            .fa-hat-santa:before {
                content: "\f7a7"
            }

            .fa-hat-winter:before {
                content: "\f7a8"
            }

            .fa-hat-witch:before {
                content: "\f6e7"
            }

            .fa-hat-wizard:before {
                content: "\f6e8"
            }

            .fa-hdd:before {
                content: "\f0a0"
            }

            .fa-head-side:before {
                content: "\f6e9"
            }

            .fa-head-side-brain:before {
                content: "\f808"
            }

            .fa-head-side-cough:before {
                content: "\e061"
            }

            .fa-head-side-cough-slash:before {
                content: "\e062"
            }

            .fa-head-side-headphones:before {
                content: "\f8c2"
            }

            .fa-head-side-mask:before {
                content: "\e063"
            }

            .fa-head-side-medical:before {
                content: "\f809"
            }

            .fa-head-side-virus:before {
                content: "\e064"
            }

            .fa-head-vr:before {
                content: "\f6ea"
            }

            .fa-heading:before {
                content: "\f1dc"
            }

            .fa-headphones:before {
                content: "\f025"
            }

            .fa-headphones-alt:before {
                content: "\f58f"
            }

            .fa-headset:before {
                content: "\f590"
            }

            .fa-heart:before {
                content: "\f004"
            }

            .fa-heart-broken:before {
                content: "\f7a9"
            }

            .fa-heart-circle:before {
                content: "\f4c7"
            }

            .fa-heart-rate:before {
                content: "\f5f8"
            }

            .fa-heart-square:before {
                content: "\f4c8"
            }

            .fa-heartbeat:before {
                content: "\f21e"
            }

            .fa-heat:before {
                content: "\e00c"
            }

            .fa-helicopter:before {
                content: "\f533"
            }

            .fa-helmet-battle:before {
                content: "\f6eb"
            }

            .fa-hexagon:before {
                content: "\f312"
            }

            .fa-highlighter:before {
                content: "\f591"
            }

            .fa-hiking:before {
                content: "\f6ec"
            }

            .fa-hippo:before {
                content: "\f6ed"
            }

            .fa-hips:before {
                content: "\f452"
            }

            .fa-hire-a-helper:before {
                content: "\f3b0"
            }

            .fa-history:before {
                content: "\f1da"
            }

            .fa-hive:before {
                content: "\e07f"
            }

            .fa-hockey-mask:before {
                content: "\f6ee"
            }

            .fa-hockey-puck:before {
                content: "\f453"
            }

            .fa-hockey-sticks:before {
                content: "\f454"
            }

            .fa-holly-berry:before {
                content: "\f7aa"
            }

            .fa-home:before {
                content: "\f015"
            }

            .fa-home-alt:before {
                content: "\f80a"
            }

            .fa-home-heart:before {
                content: "\f4c9"
            }

            .fa-home-lg:before {
                content: "\f80b"
            }

            .fa-home-lg-alt:before {
                content: "\f80c"
            }

            .fa-hood-cloak:before {
                content: "\f6ef"
            }

            .fa-hooli:before {
                content: "\f427"
            }

            .fa-horizontal-rule:before {
                content: "\f86c"
            }

            .fa-hornbill:before {
                content: "\f592"
            }

            .fa-horse:before {
                content: "\f6f0"
            }

            .fa-horse-head:before {
                content: "\f7ab"
            }

            .fa-horse-saddle:before {
                content: "\f8c3"
            }

            .fa-hospital:before {
                content: "\f0f8"
            }

            .fa-hospital-alt:before {
                content: "\f47d"
            }

            .fa-hospital-symbol:before {
                content: "\f47e"
            }

            .fa-hospital-user:before {
                content: "\f80d"
            }

            .fa-hospitals:before {
                content: "\f80e"
            }

            .fa-hot-tub:before {
                content: "\f593"
            }

            .fa-hotdog:before {
                content: "\f80f"
            }

            .fa-hotel:before {
                content: "\f594"
            }

            .fa-hotjar:before {
                content: "\f3b1"
            }

            .fa-hourglass:before {
                content: "\f254"
            }

            .fa-hourglass-end:before {
                content: "\f253"
            }

            .fa-hourglass-half:before {
                content: "\f252"
            }

            .fa-hourglass-start:before {
                content: "\f251"
            }

            .fa-house:before {
                content: "\e00d"
            }

            .fa-house-damage:before {
                content: "\f6f1"
            }

            .fa-house-day:before {
                content: "\e00e"
            }

            .fa-house-flood:before {
                content: "\f74f"
            }

            .fa-house-leave:before {
                content: "\e00f"
            }

            .fa-house-night:before {
                content: "\e010"
            }

            .fa-house-return:before {
                content: "\e011"
            }

            .fa-house-signal:before {
                content: "\e012"
            }

            .fa-house-user:before {
                content: "\e065"
            }

            .fa-houzz:before {
                content: "\f27c"
            }

            .fa-hryvnia:before {
                content: "\f6f2"
            }

            .fa-html5:before {
                content: "\f13b"
            }

            .fa-hubspot:before {
                content: "\f3b2"
            }

            .fa-humidity:before {
                content: "\f750"
            }

            .fa-hurricane:before {
                content: "\f751"
            }

            .fa-i-cursor:before {
                content: "\f246"
            }

            .fa-ice-cream:before {
                content: "\f810"
            }

            .fa-ice-skate:before {
                content: "\f7ac"
            }

            .fa-icicles:before {
                content: "\f7ad"
            }

            .fa-icons:before {
                content: "\f86d"
            }

            .fa-icons-alt:before {
                content: "\f86e"
            }

            .fa-id-badge:before {
                content: "\f2c1"
            }

            .fa-id-card:before {
                content: "\f2c2"
            }

            .fa-id-card-alt:before {
                content: "\f47f"
            }

            .fa-ideal:before {
                content: "\e013"
            }

            .fa-igloo:before {
                content: "\f7ae"
            }

            .fa-image:before {
                content: "\f03e"
            }

            .fa-image-polaroid:before {
                content: "\f8c4"
            }

            .fa-images:before {
                content: "\f302"
            }

            .fa-imdb:before {
                content: "\f2d8"
            }

            .fa-inbox:before {
                content: "\f01c"
            }

            .fa-inbox-in:before {
                content: "\f310"
            }

            .fa-inbox-out:before {
                content: "\f311"
            }

            .fa-indent:before {
                content: "\f03c"
            }

            .fa-industry:before {
                content: "\f275"
            }

            .fa-industry-alt:before {
                content: "\f3b3"
            }

            .fa-infinity:before {
                content: "\f534"
            }

            .fa-info:before {
                content: "\f129"
            }

            .fa-info-circle:before {
                content: "\f05a"
            }

            .fa-info-square:before {
                content: "\f30f"
            }

            .fa-inhaler:before {
                content: "\f5f9"
            }

            .fa-innosoft:before {
                content: "\e080"
            }

            .fa-instagram:before {
                content: "\f16d"
            }

            .fa-instagram-square:before {
                content: "\e055"
            }

            .fa-instalod:before {
                content: "\e081"
            }

            .fa-integral:before {
                content: "\f667"
            }

            .fa-intercom:before {
                content: "\f7af"
            }

            .fa-internet-explorer:before {
                content: "\f26b"
            }

            .fa-intersection:before {
                content: "\f668"
            }

            .fa-inventory:before {
                content: "\f480"
            }

            .fa-invision:before {
                content: "\f7b0"
            }

            .fa-ioxhost:before {
                content: "\f208"
            }

            .fa-island-tropical:before {
                content: "\f811"
            }

            .fa-italic:before {
                content: "\f033"
            }

            .fa-itch-io:before {
                content: "\f83a"
            }

            .fa-itunes:before {
                content: "\f3b4"
            }

            .fa-itunes-note:before {
                content: "\f3b5"
            }

            .fa-jack-o-lantern:before {
                content: "\f30e"
            }

            .fa-java:before {
                content: "\f4e4"
            }

            .fa-jedi:before {
                content: "\f669"
            }

            .fa-jedi-order:before {
                content: "\f50e"
            }

            .fa-jenkins:before {
                content: "\f3b6"
            }

            .fa-jira:before {
                content: "\f7b1"
            }

            .fa-joget:before {
                content: "\f3b7"
            }

            .fa-joint:before {
                content: "\f595"
            }

            .fa-joomla:before {
                content: "\f1aa"
            }

            .fa-journal-whills:before {
                content: "\f66a"
            }

            .fa-joystick:before {
                content: "\f8c5"
            }

            .fa-js:before {
                content: "\f3b8"
            }

            .fa-js-square:before {
                content: "\f3b9"
            }

            .fa-jsfiddle:before {
                content: "\f1cc"
            }

            .fa-jug:before {
                content: "\f8c6"
            }

            .fa-kaaba:before {
                content: "\f66b"
            }

            .fa-kaggle:before {
                content: "\f5fa"
            }

            .fa-kazoo:before {
                content: "\f8c7"
            }

            .fa-kerning:before {
                content: "\f86f"
            }

            .fa-key:before {
                content: "\f084"
            }

            .fa-key-skeleton:before {
                content: "\f6f3"
            }

            .fa-keybase:before {
                content: "\f4f5"
            }

            .fa-keyboard:before {
                content: "\f11c"
            }

            .fa-keycdn:before {
                content: "\f3ba"
            }

            .fa-keynote:before {
                content: "\f66c"
            }

            .fa-khanda:before {
                content: "\f66d"
            }

            .fa-kickstarter:before {
                content: "\f3bb"
            }

            .fa-kickstarter-k:before {
                content: "\f3bc"
            }

            .fa-kidneys:before {
                content: "\f5fb"
            }

            .fa-kiss:before {
                content: "\f596"
            }

            .fa-kiss-beam:before {
                content: "\f597"
            }

            .fa-kiss-wink-heart:before {
                content: "\f598"
            }

            .fa-kite:before {
                content: "\f6f4"
            }

            .fa-kiwi-bird:before {
                content: "\f535"
            }

            .fa-knife-kitchen:before {
                content: "\f6f5"
            }

            .fa-korvue:before {
                content: "\f42f"
            }

            .fa-lambda:before {
                content: "\f66e"
            }

            .fa-lamp:before {
                content: "\f4ca"
            }

            .fa-lamp-desk:before {
                content: "\e014"
            }

            .fa-lamp-floor:before {
                content: "\e015"
            }

            .fa-landmark:before {
                content: "\f66f"
            }

            .fa-landmark-alt:before {
                content: "\f752"
            }

            .fa-language:before {
                content: "\f1ab"
            }

            .fa-laptop:before {
                content: "\f109"
            }

            .fa-laptop-code:before {
                content: "\f5fc"
            }

            .fa-laptop-house:before {
                content: "\e066"
            }

            .fa-laptop-medical:before {
                content: "\f812"
            }

            .fa-laravel:before {
                content: "\f3bd"
            }

            .fa-lasso:before {
                content: "\f8c8"
            }

            .fa-lastfm:before {
                content: "\f202"
            }

            .fa-lastfm-square:before {
                content: "\f203"
            }

            .fa-laugh:before {
                content: "\f599"
            }

            .fa-laugh-beam:before {
                content: "\f59a"
            }

            .fa-laugh-squint:before {
                content: "\f59b"
            }

            .fa-laugh-wink:before {
                content: "\f59c"
            }

            .fa-layer-group:before {
                content: "\f5fd"
            }

            .fa-layer-minus:before {
                content: "\f5fe"
            }

            .fa-layer-plus:before {
                content: "\f5ff"
            }

            .fa-leaf:before {
                content: "\f06c"
            }

            .fa-leaf-heart:before {
                content: "\f4cb"
            }

            .fa-leaf-maple:before {
                content: "\f6f6"
            }

            .fa-leaf-oak:before {
                content: "\f6f7"
            }

            .fa-leanpub:before {
                content: "\f212"
            }

            .fa-lemon:before {
                content: "\f094"
            }

            .fa-less:before {
                content: "\f41d"
            }

            .fa-less-than:before {
                content: "\f536"
            }

            .fa-less-than-equal:before {
                content: "\f537"
            }

            .fa-level-down:before {
                content: "\f149"
            }

            .fa-level-down-alt:before {
                content: "\f3be"
            }

            .fa-level-up:before {
                content: "\f148"
            }

            .fa-level-up-alt:before {
                content: "\f3bf"
            }

            .fa-life-ring:before {
                content: "\f1cd"
            }

            .fa-light-ceiling:before {
                content: "\e016"
            }

            .fa-light-switch:before {
                content: "\e017"
            }

            .fa-light-switch-off:before {
                content: "\e018"
            }

            .fa-light-switch-on:before {
                content: "\e019"
            }

            .fa-lightbulb:before {
                content: "\f0eb"
            }

            .fa-lightbulb-dollar:before {
                content: "\f670"
            }

            .fa-lightbulb-exclamation:before {
                content: "\f671"
            }

            .fa-lightbulb-on:before {
                content: "\f672"
            }

            .fa-lightbulb-slash:before {
                content: "\f673"
            }

            .fa-lights-holiday:before {
                content: "\f7b2"
            }

            .fa-line:before {
                content: "\f3c0"
            }

            .fa-line-columns:before {
                content: "\f870"
            }

            .fa-line-height:before {
                content: "\f871"
            }

            .fa-link:before {
                content: "\f0c1"
            }

            .fa-linkedin:before {
                content: "\f08c"
            }

            .fa-linkedin-in:before {
                content: "\f0e1"
            }

            .fa-linode:before {
                content: "\f2b8"
            }

            .fa-linux:before {
                content: "\f17c"
            }

            .fa-lips:before {
                content: "\f600"
            }

            .fa-lira-sign:before {
                content: "\f195"
            }

            .fa-list:before {
                content: "\f03a"
            }

            .fa-list-alt:before {
                content: "\f022"
            }

            .fa-list-music:before {
                content: "\f8c9"
            }

            .fa-list-ol:before {
                content: "\f0cb"
            }

            .fa-list-ul:before {
                content: "\f0ca"
            }

            .fa-location:before {
                content: "\f601"
            }

            .fa-location-arrow:before {
                content: "\f124"
            }

            .fa-location-circle:before {
                content: "\f602"
            }

            .fa-location-slash:before {
                content: "\f603"
            }

            .fa-lock:before {
                content: "\f023"
            }

            .fa-lock-alt:before {
                content: "\f30d"
            }

            .fa-lock-open:before {
                content: "\f3c1"
            }

            .fa-lock-open-alt:before {
                content: "\f3c2"
            }

            .fa-long-arrow-alt-down:before {
                content: "\f309"
            }

            .fa-long-arrow-alt-left:before {
                content: "\f30a"
            }

            .fa-long-arrow-alt-right:before {
                content: "\f30b"
            }

            .fa-long-arrow-alt-up:before {
                content: "\f30c"
            }

            .fa-long-arrow-down:before {
                content: "\f175"
            }

            .fa-long-arrow-left:before {
                content: "\f177"
            }

            .fa-long-arrow-right:before {
                content: "\f178"
            }

            .fa-long-arrow-up:before {
                content: "\f176"
            }

            .fa-loveseat:before {
                content: "\f4cc"
            }

            .fa-low-vision:before {
                content: "\f2a8"
            }

            .fa-luchador:before {
                content: "\f455"
            }

            .fa-luggage-cart:before {
                content: "\f59d"
            }

            .fa-lungs:before {
                content: "\f604"
            }

            .fa-lungs-virus:before {
                content: "\e067"
            }

            .fa-lyft:before {
                content: "\f3c3"
            }

            .fa-mace:before {
                content: "\f6f8"
            }

            .fa-magento:before {
                content: "\f3c4"
            }

            .fa-magic:before {
                content: "\f0d0"
            }

            .fa-magnet:before {
                content: "\f076"
            }

            .fa-mail-bulk:before {
                content: "\f674"
            }

            .fa-mailbox:before {
                content: "\f813"
            }

            .fa-mailchimp:before {
                content: "\f59e"
            }

            .fa-male:before {
                content: "\f183"
            }

            .fa-mandalorian:before {
                content: "\f50f"
            }

            .fa-mandolin:before {
                content: "\f6f9"
            }

            .fa-map:before {
                content: "\f279"
            }

            .fa-map-marked:before {
                content: "\f59f"
            }

            .fa-map-marked-alt:before {
                content: "\f5a0"
            }

            .fa-map-marker:before {
                content: "\f041"
            }

            .fa-map-marker-alt:before {
                content: "\f3c5"
            }

            .fa-map-marker-alt-slash:before {
                content: "\f605"
            }

            .fa-map-marker-check:before {
                content: "\f606"
            }

            .fa-map-marker-edit:before {
                content: "\f607"
            }

            .fa-map-marker-exclamation:before {
                content: "\f608"
            }

            .fa-map-marker-minus:before {
                content: "\f609"
            }

            .fa-map-marker-plus:before {
                content: "\f60a"
            }

            .fa-map-marker-question:before {
                content: "\f60b"
            }

            .fa-map-marker-slash:before {
                content: "\f60c"
            }

            .fa-map-marker-smile:before {
                content: "\f60d"
            }

            .fa-map-marker-times:before {
                content: "\f60e"
            }

            .fa-map-pin:before {
                content: "\f276"
            }

            .fa-map-signs:before {
                content: "\f277"
            }

            .fa-markdown:before {
                content: "\f60f"
            }

            .fa-marker:before {
                content: "\f5a1"
            }

            .fa-mars:before {
                content: "\f222"
            }

            .fa-mars-double:before {
                content: "\f227"
            }

            .fa-mars-stroke:before {
                content: "\f229"
            }

            .fa-mars-stroke-h:before {
                content: "\f22b"
            }

            .fa-mars-stroke-v:before {
                content: "\f22a"
            }

            .fa-mask:before {
                content: "\f6fa"
            }

            .fa-mastodon:before {
                content: "\f4f6"
            }

            .fa-maxcdn:before {
                content: "\f136"
            }

            .fa-mdb:before {
                content: "\f8ca"
            }

            .fa-meat:before {
                content: "\f814"
            }

            .fa-medal:before {
                content: "\f5a2"
            }

            .fa-medapps:before {
                content: "\f3c6"
            }

            .fa-medium:before {
                content: "\f23a"
            }

            .fa-medium-m:before {
                content: "\f3c7"
            }

            .fa-medkit:before {
                content: "\f0fa"
            }

            .fa-medrt:before {
                content: "\f3c8"
            }

            .fa-meetup:before {
                content: "\f2e0"
            }

            .fa-megaphone:before {
                content: "\f675"
            }

            .fa-megaport:before {
                content: "\f5a3"
            }

            .fa-meh:before {
                content: "\f11a"
            }

            .fa-meh-blank:before {
                content: "\f5a4"
            }

            .fa-meh-rolling-eyes:before {
                content: "\f5a5"
            }

            .fa-memory:before {
                content: "\f538"
            }

            .fa-mendeley:before {
                content: "\f7b3"
            }

            .fa-menorah:before {
                content: "\f676"
            }

            .fa-mercury:before {
                content: "\f223"
            }

            .fa-meteor:before {
                content: "\f753"
            }

            .fa-microblog:before {
                content: "\e01a"
            }

            .fa-microchip:before {
                content: "\f2db"
            }

            .fa-microphone:before {
                content: "\f130"
            }

            .fa-microphone-alt:before {
                content: "\f3c9"
            }

            .fa-microphone-alt-slash:before {
                content: "\f539"
            }

            .fa-microphone-slash:before {
                content: "\f131"
            }

            .fa-microphone-stand:before {
                content: "\f8cb"
            }

            .fa-microscope:before {
                content: "\f610"
            }

            .fa-microsoft:before {
                content: "\f3ca"
            }

            .fa-microwave:before {
                content: "\e01b"
            }

            .fa-mind-share:before {
                content: "\f677"
            }

            .fa-minus:before {
                content: "\f068"
            }

            .fa-minus-circle:before {
                content: "\f056"
            }

            .fa-minus-hexagon:before {
                content: "\f307"
            }

            .fa-minus-octagon:before {
                content: "\f308"
            }

            .fa-minus-square:before {
                content: "\f146"
            }

            .fa-mistletoe:before {
                content: "\f7b4"
            }

            .fa-mitten:before {
                content: "\f7b5"
            }

            .fa-mix:before {
                content: "\f3cb"
            }

            .fa-mixcloud:before {
                content: "\f289"
            }

            .fa-mixer:before {
                content: "\e056"
            }

            .fa-mizuni:before {
                content: "\f3cc"
            }

            .fa-mobile:before {
                content: "\f10b"
            }

            .fa-mobile-alt:before {
                content: "\f3cd"
            }

            .fa-mobile-android:before {
                content: "\f3ce"
            }

            .fa-mobile-android-alt:before {
                content: "\f3cf"
            }

            .fa-modx:before {
                content: "\f285"
            }

            .fa-monero:before {
                content: "\f3d0"
            }

            .fa-money-bill:before {
                content: "\f0d6"
            }

            .fa-money-bill-alt:before {
                content: "\f3d1"
            }

            .fa-money-bill-wave:before {
                content: "\f53a"
            }

            .fa-money-bill-wave-alt:before {
                content: "\f53b"
            }

            .fa-money-check:before {
                content: "\f53c"
            }

            .fa-money-check-alt:before {
                content: "\f53d"
            }

            .fa-money-check-edit:before {
                content: "\f872"
            }

            .fa-money-check-edit-alt:before {
                content: "\f873"
            }

            .fa-monitor-heart-rate:before {
                content: "\f611"
            }

            .fa-monkey:before {
                content: "\f6fb"
            }

            .fa-monument:before {
                content: "\f5a6"
            }

            .fa-moon:before {
                content: "\f186"
            }

            .fa-moon-cloud:before {
                content: "\f754"
            }

            .fa-moon-stars:before {
                content: "\f755"
            }

            .fa-mortar-pestle:before {
                content: "\f5a7"
            }

            .fa-mosque:before {
                content: "\f678"
            }

            .fa-motorcycle:before {
                content: "\f21c"
            }

            .fa-mountain:before {
                content: "\f6fc"
            }

            .fa-mountains:before {
                content: "\f6fd"
            }

            .fa-mouse:before {
                content: "\f8cc"
            }

            .fa-mouse-alt:before {
                content: "\f8cd"
            }

            .fa-mouse-pointer:before {
                content: "\f245"
            }

            .fa-mp3-player:before {
                content: "\f8ce"
            }

            .fa-mug:before {
                content: "\f874"
            }

            .fa-mug-hot:before {
                content: "\f7b6"
            }

            .fa-mug-marshmallows:before {
                content: "\f7b7"
            }

            .fa-mug-tea:before {
                content: "\f875"
            }

            .fa-music:before {
                content: "\f001"
            }

            .fa-music-alt:before {
                content: "\f8cf"
            }

            .fa-music-alt-slash:before {
                content: "\f8d0"
            }

            .fa-music-slash:before {
                content: "\f8d1"
            }

            .fa-napster:before {
                content: "\f3d2"
            }

            .fa-narwhal:before {
                content: "\f6fe"
            }

            .fa-neos:before {
                content: "\f612"
            }

            .fa-network-wired:before {
                content: "\f6ff"
            }

            .fa-neuter:before {
                content: "\f22c"
            }

            .fa-newspaper:before {
                content: "\f1ea"
            }

            .fa-nimblr:before {
                content: "\f5a8"
            }

            .fa-node:before {
                content: "\f419"
            }

            .fa-node-js:before {
                content: "\f3d3"
            }

            .fa-not-equal:before {
                content: "\f53e"
            }

            .fa-notes-medical:before {
                content: "\f481"
            }

            .fa-npm:before {
                content: "\f3d4"
            }

            .fa-ns8:before {
                content: "\f3d5"
            }

            .fa-nutritionix:before {
                content: "\f3d6"
            }

            .fa-object-group:before {
                content: "\f247"
            }

            .fa-object-ungroup:before {
                content: "\f248"
            }

            .fa-octagon:before {
                content: "\f306"
            }

            .fa-octopus-deploy:before {
                content: "\e082"
            }

            .fa-odnoklassniki:before {
                content: "\f263"
            }

            .fa-odnoklassniki-square:before {
                content: "\f264"
            }

            .fa-oil-can:before {
                content: "\f613"
            }

            .fa-oil-temp:before {
                content: "\f614"
            }

            .fa-old-republic:before {
                content: "\f510"
            }

            .fa-om:before {
                content: "\f679"
            }

            .fa-omega:before {
                content: "\f67a"
            }

            .fa-opencart:before {
                content: "\f23d"
            }

            .fa-openid:before {
                content: "\f19b"
            }

            .fa-opera:before {
                content: "\f26a"
            }

            .fa-optin-monster:before {
                content: "\f23c"
            }

            .fa-orcid:before {
                content: "\f8d2"
            }

            .fa-ornament:before {
                content: "\f7b8"
            }

            .fa-osi:before {
                content: "\f41a"
            }

            .fa-otter:before {
                content: "\f700"
            }

            .fa-outdent:before {
                content: "\f03b"
            }

            .fa-outlet:before {
                content: "\e01c"
            }

            .fa-oven:before {
                content: "\e01d"
            }

            .fa-overline:before {
                content: "\f876"
            }

            .fa-page-break:before {
                content: "\f877"
            }

            .fa-page4:before {
                content: "\f3d7"
            }

            .fa-pagelines:before {
                content: "\f18c"
            }

            .fa-pager:before {
                content: "\f815"
            }

            .fa-paint-brush:before {
                content: "\f1fc"
            }

            .fa-paint-brush-alt:before {
                content: "\f5a9"
            }

            .fa-paint-roller:before {
                content: "\f5aa"
            }

            .fa-palette:before {
                content: "\f53f"
            }

            .fa-palfed:before {
                content: "\f3d8"
            }

            .fa-pallet:before {
                content: "\f482"
            }

            .fa-pallet-alt:before {
                content: "\f483"
            }

            .fa-paper-plane:before {
                content: "\f1d8"
            }

            .fa-paperclip:before {
                content: "\f0c6"
            }

            .fa-parachute-box:before {
                content: "\f4cd"
            }

            .fa-paragraph:before {
                content: "\f1dd"
            }

            .fa-paragraph-rtl:before {
                content: "\f878"
            }

            .fa-parking:before {
                content: "\f540"
            }

            .fa-parking-circle:before {
                content: "\f615"
            }

            .fa-parking-circle-slash:before {
                content: "\f616"
            }

            .fa-parking-slash:before {
                content: "\f617"
            }

            .fa-passport:before {
                content: "\f5ab"
            }

            .fa-pastafarianism:before {
                content: "\f67b"
            }

            .fa-paste:before {
                content: "\f0ea"
            }

            .fa-patreon:before {
                content: "\f3d9"
            }

            .fa-pause:before {
                content: "\f04c"
            }

            .fa-pause-circle:before {
                content: "\f28b"
            }

            .fa-paw:before {
                content: "\f1b0"
            }

            .fa-paw-alt:before {
                content: "\f701"
            }

            .fa-paw-claws:before {
                content: "\f702"
            }

            .fa-paypal:before {
                content: "\f1ed"
            }

            .fa-peace:before {
                content: "\f67c"
            }

            .fa-pegasus:before {
                content: "\f703"
            }

            .fa-pen:before {
                content: "\f304"
            }

            .fa-pen-alt:before {
                content: "\f305"
            }

            .fa-pen-fancy:before {
                content: "\f5ac"
            }

            .fa-pen-nib:before {
                content: "\f5ad"
            }

            .fa-pen-square:before {
                content: "\f14b"
            }

            .fa-pencil:before {
                content: "\f040"
            }

            .fa-pencil-alt:before {
                content: "\f303"
            }

            .fa-pencil-paintbrush:before {
                content: "\f618"
            }

            .fa-pencil-ruler:before {
                content: "\f5ae"
            }

            .fa-pennant:before {
                content: "\f456"
            }

            .fa-penny-arcade:before {
                content: "\f704"
            }

            .fa-people-arrows:before {
                content: "\e068"
            }

            .fa-people-carry:before {
                content: "\f4ce"
            }

            .fa-pepper-hot:before {
                content: "\f816"
            }

            .fa-perbyte:before {
                content: "\e083"
            }

            .fa-percent:before {
                content: "\f295"
            }

            .fa-percentage:before {
                content: "\f541"
            }

            .fa-periscope:before {
                content: "\f3da"
            }

            .fa-person-booth:before {
                content: "\f756"
            }

            .fa-person-carry:before {
                content: "\f4cf"
            }

            .fa-person-dolly:before {
                content: "\f4d0"
            }

            .fa-person-dolly-empty:before {
                content: "\f4d1"
            }

            .fa-person-sign:before {
                content: "\f757"
            }

            .fa-phabricator:before {
                content: "\f3db"
            }

            .fa-phoenix-framework:before {
                content: "\f3dc"
            }

            .fa-phoenix-squadron:before {
                content: "\f511"
            }

            .fa-phone:before {
                content: "\f095"
            }

            .fa-phone-alt:before {
                content: "\f879"
            }

            .fa-phone-laptop:before {
                content: "\f87a"
            }

            .fa-phone-office:before {
                content: "\f67d"
            }

            .fa-phone-plus:before {
                content: "\f4d2"
            }

            .fa-phone-rotary:before {
                content: "\f8d3"
            }

            .fa-phone-slash:before {
                content: "\f3dd"
            }

            .fa-phone-square:before {
                content: "\f098"
            }

            .fa-phone-square-alt:before {
                content: "\f87b"
            }

            .fa-phone-volume:before {
                content: "\f2a0"
            }

            .fa-photo-video:before {
                content: "\f87c"
            }

            .fa-php:before {
                content: "\f457"
            }

            .fa-pi:before {
                content: "\f67e"
            }

            .fa-piano:before {
                content: "\f8d4"
            }

            .fa-piano-keyboard:before {
                content: "\f8d5"
            }

            .fa-pie:before {
                content: "\f705"
            }

            .fa-pied-piper:before {
                content: "\f2ae"
            }

            .fa-pied-piper-alt:before {
                content: "\f1a8"
            }

            .fa-pied-piper-hat:before {
                content: "\f4e5"
            }

            .fa-pied-piper-pp:before {
                content: "\f1a7"
            }

            .fa-pied-piper-square:before {
                content: "\e01e"
            }

            .fa-pig:before {
                content: "\f706"
            }

            .fa-piggy-bank:before {
                content: "\f4d3"
            }

            .fa-pills:before {
                content: "\f484"
            }

            .fa-pinterest:before {
                content: "\f0d2"
            }

            .fa-pinterest-p:before {
                content: "\f231"
            }

            .fa-pinterest-square:before {
                content: "\f0d3"
            }

            .fa-pizza:before {
                content: "\f817"
            }

            .fa-pizza-slice:before {
                content: "\f818"
            }

            .fa-place-of-worship:before {
                content: "\f67f"
            }

            .fa-plane:before {
                content: "\f072"
            }

            .fa-plane-alt:before {
                content: "\f3de"
            }

            .fa-plane-arrival:before {
                content: "\f5af"
            }

            .fa-plane-departure:before {
                content: "\f5b0"
            }

            .fa-plane-slash:before {
                content: "\e069"
            }

            .fa-planet-moon:before {
                content: "\e01f"
            }

            .fa-planet-ringed:before {
                content: "\e020"
            }

            .fa-play:before {
                content: "\f04b"
            }

            .fa-play-circle:before {
                content: "\f144"
            }

            .fa-playstation:before {
                content: "\f3df"
            }

            .fa-plug:before {
                content: "\f1e6"
            }

            .fa-plus:before {
                content: "\f067"
            }

            .fa-plus-circle:before {
                content: "\f055"
            }

            .fa-plus-hexagon:before {
                content: "\f300"
            }

            .fa-plus-octagon:before {
                content: "\f301"
            }

            .fa-plus-square:before {
                content: "\f0fe"
            }

            .fa-podcast:before {
                content: "\f2ce"
            }

            .fa-podium:before {
                content: "\f680"
            }

            .fa-podium-star:before {
                content: "\f758"
            }

            .fa-police-box:before {
                content: "\e021"
            }

            .fa-poll:before {
                content: "\f681"
            }

            .fa-poll-h:before {
                content: "\f682"
            }

            .fa-poll-people:before {
                content: "\f759"
            }

            .fa-poo:before {
                content: "\f2fe"
            }

            .fa-poo-storm:before {
                content: "\f75a"
            }

            .fa-poop:before {
                content: "\f619"
            }

            .fa-popcorn:before {
                content: "\f819"
            }

            .fa-portal-enter:before {
                content: "\e022"
            }

            .fa-portal-exit:before {
                content: "\e023"
            }

            .fa-portrait:before {
                content: "\f3e0"
            }

            .fa-pound-sign:before {
                content: "\f154"
            }

            .fa-power-off:before {
                content: "\f011"
            }

            .fa-pray:before {
                content: "\f683"
            }

            .fa-praying-hands:before {
                content: "\f684"
            }

            .fa-prescription:before {
                content: "\f5b1"
            }

            .fa-prescription-bottle:before {
                content: "\f485"
            }

            .fa-prescription-bottle-alt:before {
                content: "\f486"
            }

            .fa-presentation:before {
                content: "\f685"
            }

            .fa-print:before {
                content: "\f02f"
            }

            .fa-print-search:before {
                content: "\f81a"
            }

            .fa-print-slash:before {
                content: "\f686"
            }

            .fa-procedures:before {
                content: "\f487"
            }

            .fa-product-hunt:before {
                content: "\f288"
            }

            .fa-project-diagram:before {
                content: "\f542"
            }

            .fa-projector:before {
                content: "\f8d6"
            }

            .fa-pump-medical:before {
                content: "\e06a"
            }

            .fa-pump-soap:before {
                content: "\e06b"
            }

            .fa-pumpkin:before {
                content: "\f707"
            }

            .fa-pushed:before {
                content: "\f3e1"
            }

            .fa-puzzle-piece:before {
                content: "\f12e"
            }

            .fa-python:before {
                content: "\f3e2"
            }

            .fa-qq:before {
                content: "\f1d6"
            }

            .fa-qrcode:before {
                content: "\f029"
            }

            .fa-question:before {
                content: "\f128"
            }

            .fa-question-circle:before {
                content: "\f059"
            }

            .fa-question-square:before {
                content: "\f2fd"
            }

            .fa-quidditch:before {
                content: "\f458"
            }

            .fa-quinscape:before {
                content: "\f459"
            }

            .fa-quora:before {
                content: "\f2c4"
            }

            .fa-quote-left:before {
                content: "\f10d"
            }

            .fa-quote-right:before {
                content: "\f10e"
            }

            .fa-quran:before {
                content: "\f687"
            }

            .fa-r-project:before {
                content: "\f4f7"
            }

            .fa-rabbit:before {
                content: "\f708"
            }

            .fa-rabbit-fast:before {
                content: "\f709"
            }

            .fa-racquet:before {
                content: "\f45a"
            }

            .fa-radar:before {
                content: "\e024"
            }

            .fa-radiation:before {
                content: "\f7b9"
            }

            .fa-radiation-alt:before {
                content: "\f7ba"
            }

            .fa-radio:before {
                content: "\f8d7"
            }

            .fa-radio-alt:before {
                content: "\f8d8"
            }

            .fa-rainbow:before {
                content: "\f75b"
            }

            .fa-raindrops:before {
                content: "\f75c"
            }

            .fa-ram:before {
                content: "\f70a"
            }

            .fa-ramp-loading:before {
                content: "\f4d4"
            }

            .fa-random:before {
                content: "\f074"
            }

            .fa-raspberry-pi:before {
                content: "\f7bb"
            }

            .fa-ravelry:before {
                content: "\f2d9"
            }

            .fa-raygun:before {
                content: "\e025"
            }

            .fa-react:before {
                content: "\f41b"
            }

            .fa-reacteurope:before {
                content: "\f75d"
            }

            .fa-readme:before {
                content: "\f4d5"
            }

            .fa-rebel:before {
                content: "\f1d0"
            }

            .fa-receipt:before {
                content: "\f543"
            }

            .fa-record-vinyl:before {
                content: "\f8d9"
            }

            .fa-rectangle-landscape:before {
                content: "\f2fa"
            }

            .fa-rectangle-portrait:before {
                content: "\f2fb"
            }

            .fa-rectangle-wide:before {
                content: "\f2fc"
            }

            .fa-recycle:before {
                content: "\f1b8"
            }

            .fa-red-river:before {
                content: "\f3e3"
            }

            .fa-reddit:before {
                content: "\f1a1"
            }

            .fa-reddit-alien:before {
                content: "\f281"
            }

            .fa-reddit-square:before {
                content: "\f1a2"
            }

            .fa-redhat:before {
                content: "\f7bc"
            }

            .fa-redo:before {
                content: "\f01e"
            }

            .fa-redo-alt:before {
                content: "\f2f9"
            }

            .fa-refrigerator:before {
                content: "\e026"
            }

            .fa-registered:before {
                content: "\f25d"
            }

            .fa-remove-format:before {
                content: "\f87d"
            }

            .fa-renren:before {
                content: "\f18b"
            }

            .fa-repeat:before {
                content: "\f363"
            }

            .fa-repeat-1:before {
                content: "\f365"
            }

            .fa-repeat-1-alt:before {
                content: "\f366"
            }

            .fa-repeat-alt:before {
                content: "\f364"
            }

            .fa-reply:before {
                content: "\f3e5"
            }

            .fa-reply-all:before {
                content: "\f122"
            }

            .fa-replyd:before {
                content: "\f3e6"
            }

            .fa-republican:before {
                content: "\f75e"
            }

            .fa-researchgate:before {
                content: "\f4f8"
            }

            .fa-resolving:before {
                content: "\f3e7"
            }

            .fa-restroom:before {
                content: "\f7bd"
            }

            .fa-retweet:before {
                content: "\f079"
            }

            .fa-retweet-alt:before {
                content: "\f361"
            }

            .fa-rev:before {
                content: "\f5b2"
            }

            .fa-ribbon:before {
                content: "\f4d6"
            }

            .fa-ring:before {
                content: "\f70b"
            }

            .fa-rings-wedding:before {
                content: "\f81b"
            }

            .fa-road:before {
                content: "\f018"
            }

            .fa-robot:before {
                content: "\f544"
            }

            .fa-rocket:before {
                content: "\f135"
            }

            .fa-rocket-launch:before {
                content: "\e027"
            }

            .fa-rocketchat:before {
                content: "\f3e8"
            }

            .fa-rockrms:before {
                content: "\f3e9"
            }

            .fa-route:before {
                content: "\f4d7"
            }

            .fa-route-highway:before {
                content: "\f61a"
            }

            .fa-route-interstate:before {
                content: "\f61b"
            }

            .fa-router:before {
                content: "\f8da"
            }

            .fa-rss:before {
                content: "\f09e"
            }

            .fa-rss-square:before {
                content: "\f143"
            }

            .fa-ruble-sign:before {
                content: "\f158"
            }

            .fa-ruler:before {
                content: "\f545"
            }

            .fa-ruler-combined:before {
                content: "\f546"
            }

            .fa-ruler-horizontal:before {
                content: "\f547"
            }

            .fa-ruler-triangle:before {
                content: "\f61c"
            }

            .fa-ruler-vertical:before {
                content: "\f548"
            }

            .fa-running:before {
                content: "\f70c"
            }

            .fa-rupee-sign:before {
                content: "\f156"
            }

            .fa-rust:before {
                content: "\e07a"
            }

            .fa-rv:before {
                content: "\f7be"
            }

            .fa-sack:before {
                content: "\f81c"
            }

            .fa-sack-dollar:before {
                content: "\f81d"
            }

            .fa-sad-cry:before {
                content: "\f5b3"
            }

            .fa-sad-tear:before {
                content: "\f5b4"
            }

            .fa-safari:before {
                content: "\f267"
            }

            .fa-salad:before {
                content: "\f81e"
            }

            .fa-salesforce:before {
                content: "\f83b"
            }

            .fa-sandwich:before {
                content: "\f81f"
            }

            .fa-sass:before {
                content: "\f41e"
            }

            .fa-satellite:before {
                content: "\f7bf"
            }

            .fa-satellite-dish:before {
                content: "\f7c0"
            }

            .fa-sausage:before {
                content: "\f820"
            }

            .fa-save:before {
                content: "\f0c7"
            }

            .fa-sax-hot:before {
                content: "\f8db"
            }

            .fa-saxophone:before {
                content: "\f8dc"
            }

            .fa-scalpel:before {
                content: "\f61d"
            }

            .fa-scalpel-path:before {
                content: "\f61e"
            }

            .fa-scanner:before {
                content: "\f488"
            }

            .fa-scanner-image:before {
                content: "\f8f3"
            }

            .fa-scanner-keyboard:before {
                content: "\f489"
            }

            .fa-scanner-touchscreen:before {
                content: "\f48a"
            }

            .fa-scarecrow:before {
                content: "\f70d"
            }

            .fa-scarf:before {
                content: "\f7c1"
            }

            .fa-schlix:before {
                content: "\f3ea"
            }

            .fa-school:before {
                content: "\f549"
            }

            .fa-screwdriver:before {
                content: "\f54a"
            }

            .fa-scribd:before {
                content: "\f28a"
            }

            .fa-scroll:before {
                content: "\f70e"
            }

            .fa-scroll-old:before {
                content: "\f70f"
            }

            .fa-scrubber:before {
                content: "\f2f8"
            }

            .fa-scythe:before {
                content: "\f710"
            }

            .fa-sd-card:before {
                content: "\f7c2"
            }

            .fa-search:before {
                content: "\f002"
            }

            .fa-search-dollar:before {
                content: "\f688"
            }

            .fa-search-location:before {
                content: "\f689"
            }

            .fa-search-minus:before {
                content: "\f010"
            }

            .fa-search-plus:before {
                content: "\f00e"
            }

            .fa-searchengin:before {
                content: "\f3eb"
            }

            .fa-seedling:before {
                content: "\f4d8"
            }

            .fa-sellcast:before {
                content: "\f2da"
            }

            .fa-sellsy:before {
                content: "\f213"
            }

            .fa-send-back:before {
                content: "\f87e"
            }

            .fa-send-backward:before {
                content: "\f87f"
            }

            .fa-sensor:before {
                content: "\e028"
            }

            .fa-sensor-alert:before {
                content: "\e029"
            }

            .fa-sensor-fire:before {
                content: "\e02a"
            }

            .fa-sensor-on:before {
                content: "\e02b"
            }

            .fa-sensor-smoke:before {
                content: "\e02c"
            }

            .fa-server:before {
                content: "\f233"
            }

            .fa-servicestack:before {
                content: "\f3ec"
            }

            .fa-shapes:before {
                content: "\f61f"
            }

            .fa-share:before {
                content: "\f064"
            }

            .fa-share-all:before {
                content: "\f367"
            }

            .fa-share-alt:before {
                content: "\f1e0"
            }

            .fa-share-alt-square:before {
                content: "\f1e1"
            }

            .fa-share-square:before {
                content: "\f14d"
            }

            .fa-sheep:before {
                content: "\f711"
            }

            .fa-shekel-sign:before {
                content: "\f20b"
            }

            .fa-shield:before {
                content: "\f132"
            }

            .fa-shield-alt:before {
                content: "\f3ed"
            }

            .fa-shield-check:before {
                content: "\f2f7"
            }

            .fa-shield-cross:before {
                content: "\f712"
            }

            .fa-shield-virus:before {
                content: "\e06c"
            }

            .fa-ship:before {
                content: "\f21a"
            }

            .fa-shipping-fast:before {
                content: "\f48b"
            }

            .fa-shipping-timed:before {
                content: "\f48c"
            }

            .fa-shirtsinbulk:before {
                content: "\f214"
            }

            .fa-shish-kebab:before {
                content: "\f821"
            }

            .fa-shoe-prints:before {
                content: "\f54b"
            }

            .fa-shopify:before {
                content: "\e057"
            }

            .fa-shopping-bag:before {
                content: "\f290"
            }

            .fa-shopping-basket:before {
                content: "\f291"
            }

            .fa-shopping-cart:before {
                content: "\f07a"
            }

            .fa-shopware:before {
                content: "\f5b5"
            }

            .fa-shovel:before {
                content: "\f713"
            }

            .fa-shovel-snow:before {
                content: "\f7c3"
            }

            .fa-shower:before {
                content: "\f2cc"
            }

            .fa-shredder:before {
                content: "\f68a"
            }

            .fa-shuttle-van:before {
                content: "\f5b6"
            }

            .fa-shuttlecock:before {
                content: "\f45b"
            }

            .fa-sickle:before {
                content: "\f822"
            }

            .fa-sigma:before {
                content: "\f68b"
            }

            .fa-sign:before {
                content: "\f4d9"
            }

            .fa-sign-in:before {
                content: "\f090"
            }

            .fa-sign-in-alt:before {
                content: "\f2f6"
            }

            .fa-sign-language:before {
                content: "\f2a7"
            }

            .fa-sign-out:before {
                content: "\f08b"
            }

            .fa-sign-out-alt:before {
                content: "\f2f5"
            }

            .fa-signal:before {
                content: "\f012"
            }

            .fa-signal-1:before {
                content: "\f68c"
            }

            .fa-signal-2:before {
                content: "\f68d"
            }

            .fa-signal-3:before {
                content: "\f68e"
            }

            .fa-signal-4:before {
                content: "\f68f"
            }

            .fa-signal-alt:before {
                content: "\f690"
            }

            .fa-signal-alt-1:before {
                content: "\f691"
            }

            .fa-signal-alt-2:before {
                content: "\f692"
            }

            .fa-signal-alt-3:before {
                content: "\f693"
            }

            .fa-signal-alt-slash:before {
                content: "\f694"
            }

            .fa-signal-slash:before {
                content: "\f695"
            }

            .fa-signal-stream:before {
                content: "\f8dd"
            }

            .fa-signature:before {
                content: "\f5b7"
            }

            .fa-sim-card:before {
                content: "\f7c4"
            }

            .fa-simplybuilt:before {
                content: "\f215"
            }

            .fa-sink:before {
                content: "\e06d"
            }

            .fa-siren:before {
                content: "\e02d"
            }

            .fa-siren-on:before {
                content: "\e02e"
            }

            .fa-sistrix:before {
                content: "\f3ee"
            }

            .fa-sitemap:before {
                content: "\f0e8"
            }

            .fa-sith:before {
                content: "\f512"
            }

            .fa-skating:before {
                content: "\f7c5"
            }

            .fa-skeleton:before {
                content: "\f620"
            }

            .fa-sketch:before {
                content: "\f7c6"
            }

            .fa-ski-jump:before {
                content: "\f7c7"
            }

            .fa-ski-lift:before {
                content: "\f7c8"
            }

            .fa-skiing:before {
                content: "\f7c9"
            }

            .fa-skiing-nordic:before {
                content: "\f7ca"
            }

            .fa-skull:before {
                content: "\f54c"
            }

            .fa-skull-cow:before {
                content: "\f8de"
            }

            .fa-skull-crossbones:before {
                content: "\f714"
            }

            .fa-skyatlas:before {
                content: "\f216"
            }

            .fa-skype:before {
                content: "\f17e"
            }

            .fa-slack:before {
                content: "\f198"
            }

            .fa-slack-hash:before {
                content: "\f3ef"
            }

            .fa-slash:before {
                content: "\f715"
            }

            .fa-sledding:before {
                content: "\f7cb"
            }

            .fa-sleigh:before {
                content: "\f7cc"
            }

            .fa-sliders-h:before {
                content: "\f1de"
            }

            .fa-sliders-h-square:before {
                content: "\f3f0"
            }

            .fa-sliders-v:before {
                content: "\f3f1"
            }

            .fa-sliders-v-square:before {
                content: "\f3f2"
            }

            .fa-slideshare:before {
                content: "\f1e7"
            }

            .fa-smile:before {
                content: "\f118"
            }

            .fa-smile-beam:before {
                content: "\f5b8"
            }

            .fa-smile-plus:before {
                content: "\f5b9"
            }

            .fa-smile-wink:before {
                content: "\f4da"
            }

            .fa-smog:before {
                content: "\f75f"
            }

            .fa-smoke:before {
                content: "\f760"
            }

            .fa-smoking:before {
                content: "\f48d"
            }

            .fa-smoking-ban:before {
                content: "\f54d"
            }

            .fa-sms:before {
                content: "\f7cd"
            }

            .fa-snake:before {
                content: "\f716"
            }

            .fa-snapchat:before {
                content: "\f2ab"
            }

            .fa-snapchat-ghost:before {
                content: "\f2ac"
            }

            .fa-snapchat-square:before {
                content: "\f2ad"
            }

            .fa-snooze:before {
                content: "\f880"
            }

            .fa-snow-blowing:before {
                content: "\f761"
            }

            .fa-snowboarding:before {
                content: "\f7ce"
            }

            .fa-snowflake:before {
                content: "\f2dc"
            }

            .fa-snowflakes:before {
                content: "\f7cf"
            }

            .fa-snowman:before {
                content: "\f7d0"
            }

            .fa-snowmobile:before {
                content: "\f7d1"
            }

            .fa-snowplow:before {
                content: "\f7d2"
            }

            .fa-soap:before {
                content: "\e06e"
            }

            .fa-socks:before {
                content: "\f696"
            }

            .fa-solar-panel:before {
                content: "\f5ba"
            }

            .fa-solar-system:before {
                content: "\e02f"
            }

            .fa-sort:before {
                content: "\f0dc"
            }

            .fa-sort-alpha-down:before {
                content: "\f15d"
            }

            .fa-sort-alpha-down-alt:before {
                content: "\f881"
            }

            .fa-sort-alpha-up:before {
                content: "\f15e"
            }

            .fa-sort-alpha-up-alt:before {
                content: "\f882"
            }

            .fa-sort-alt:before {
                content: "\f883"
            }

            .fa-sort-amount-down:before {
                content: "\f160"
            }

            .fa-sort-amount-down-alt:before {
                content: "\f884"
            }

            .fa-sort-amount-up:before {
                content: "\f161"
            }

            .fa-sort-amount-up-alt:before {
                content: "\f885"
            }

            .fa-sort-circle:before {
                content: "\e030"
            }

            .fa-sort-circle-down:before {
                content: "\e031"
            }

            .fa-sort-circle-up:before {
                content: "\e032"
            }

            .fa-sort-down:before {
                content: "\f0dd"
            }

            .fa-sort-numeric-down:before {
                content: "\f162"
            }

            .fa-sort-numeric-down-alt:before {
                content: "\f886"
            }

            .fa-sort-numeric-up:before {
                content: "\f163"
            }

            .fa-sort-numeric-up-alt:before {
                content: "\f887"
            }

            .fa-sort-shapes-down:before {
                content: "\f888"
            }

            .fa-sort-shapes-down-alt:before {
                content: "\f889"
            }

            .fa-sort-shapes-up:before {
                content: "\f88a"
            }

            .fa-sort-shapes-up-alt:before {
                content: "\f88b"
            }

            .fa-sort-size-down:before {
                content: "\f88c"
            }

            .fa-sort-size-down-alt:before {
                content: "\f88d"
            }

            .fa-sort-size-up:before {
                content: "\f88e"
            }

            .fa-sort-size-up-alt:before {
                content: "\f88f"
            }

            .fa-sort-up:before {
                content: "\f0de"
            }

            .fa-soundcloud:before {
                content: "\f1be"
            }

            .fa-soup:before {
                content: "\f823"
            }

            .fa-sourcetree:before {
                content: "\f7d3"
            }

            .fa-spa:before {
                content: "\f5bb"
            }

            .fa-space-shuttle:before {
                content: "\f197"
            }

            .fa-space-station-moon:before {
                content: "\e033"
            }

            .fa-space-station-moon-alt:before {
                content: "\e034"
            }

            .fa-spade:before {
                content: "\f2f4"
            }

            .fa-sparkles:before {
                content: "\f890"
            }

            .fa-speakap:before {
                content: "\f3f3"
            }

            .fa-speaker:before {
                content: "\f8df"
            }

            .fa-speaker-deck:before {
                content: "\f83c"
            }

            .fa-speakers:before {
                content: "\f8e0"
            }

            .fa-spell-check:before {
                content: "\f891"
            }

            .fa-spider:before {
                content: "\f717"
            }

            .fa-spider-black-widow:before {
                content: "\f718"
            }

            .fa-spider-web:before {
                content: "\f719"
            }

            .fa-spinner:before {
                content: "\f110"
            }

            .fa-spinner-third:before {
                content: "\f3f4"
            }

            .fa-splotch:before {
                content: "\f5bc"
            }

            .fa-spotify:before {
                content: "\f1bc"
            }

            .fa-spray-can:before {
                content: "\f5bd"
            }

            .fa-sprinkler:before {
                content: "\e035"
            }

            .fa-square:before {
                content: "\f0c8"
            }

            .fa-square-full:before {
                content: "\f45c"
            }

            .fa-square-root:before {
                content: "\f697"
            }

            .fa-square-root-alt:before {
                content: "\f698"
            }

            .fa-squarespace:before {
                content: "\f5be"
            }

            .fa-squirrel:before {
                content: "\f71a"
            }

            .fa-stack-exchange:before {
                content: "\f18d"
            }

            .fa-stack-overflow:before {
                content: "\f16c"
            }

            .fa-stackpath:before {
                content: "\f842"
            }

            .fa-staff:before {
                content: "\f71b"
            }

            .fa-stamp:before {
                content: "\f5bf"
            }

            .fa-star:before {
                content: "\f005"
            }

            .fa-star-and-crescent:before {
                content: "\f699"
            }

            .fa-star-christmas:before {
                content: "\f7d4"
            }

            .fa-star-exclamation:before {
                content: "\f2f3"
            }

            .fa-star-half:before {
                content: "\f089"
            }

            .fa-star-half-alt:before {
                content: "\f5c0"
            }

            .fa-star-of-david:before {
                content: "\f69a"
            }

            .fa-star-of-life:before {
                content: "\f621"
            }

            .fa-star-shooting:before {
                content: "\e036"
            }

            .fa-starfighter:before {
                content: "\e037"
            }

            .fa-starfighter-alt:before {
                content: "\e038"
            }

            .fa-stars:before {
                content: "\f762"
            }

            .fa-starship:before {
                content: "\e039"
            }

            .fa-starship-freighter:before {
                content: "\e03a"
            }

            .fa-staylinked:before {
                content: "\f3f5"
            }

            .fa-steak:before {
                content: "\f824"
            }

            .fa-steam:before {
                content: "\f1b6"
            }

            .fa-steam-square:before {
                content: "\f1b7"
            }

            .fa-steam-symbol:before {
                content: "\f3f6"
            }

            .fa-steering-wheel:before {
                content: "\f622"
            }

            .fa-step-backward:before {
                content: "\f048"
            }

            .fa-step-forward:before {
                content: "\f051"
            }

            .fa-stethoscope:before {
                content: "\f0f1"
            }

            .fa-sticker-mule:before {
                content: "\f3f7"
            }

            .fa-sticky-note:before {
                content: "\f249"
            }

            .fa-stocking:before {
                content: "\f7d5"
            }

            .fa-stomach:before {
                content: "\f623"
            }

            .fa-stop:before {
                content: "\f04d"
            }

            .fa-stop-circle:before {
                content: "\f28d"
            }

            .fa-stopwatch:before {
                content: "\f2f2"
            }

            .fa-stopwatch-20:before {
                content: "\e06f"
            }

            .fa-store:before {
                content: "\f54e"
            }

            .fa-store-alt:before {
                content: "\f54f"
            }

            .fa-store-alt-slash:before {
                content: "\e070"
            }

            .fa-store-slash:before {
                content: "\e071"
            }

            .fa-strava:before {
                content: "\f428"
            }

            .fa-stream:before {
                content: "\f550"
            }

            .fa-street-view:before {
                content: "\f21d"
            }

            .fa-stretcher:before {
                content: "\f825"
            }

            .fa-strikethrough:before {
                content: "\f0cc"
            }

            .fa-stripe:before {
                content: "\f429"
            }

            .fa-stripe-s:before {
                content: "\f42a"
            }

            .fa-stroopwafel:before {
                content: "\f551"
            }

            .fa-studiovinari:before {
                content: "\f3f8"
            }

            .fa-stumbleupon:before {
                content: "\f1a4"
            }

            .fa-stumbleupon-circle:before {
                content: "\f1a3"
            }

            .fa-subscript:before {
                content: "\f12c"
            }

            .fa-subway:before {
                content: "\f239"
            }

            .fa-suitcase:before {
                content: "\f0f2"
            }

            .fa-suitcase-rolling:before {
                content: "\f5c1"
            }

            .fa-sun:before {
                content: "\f185"
            }

            .fa-sun-cloud:before {
                content: "\f763"
            }

            .fa-sun-dust:before {
                content: "\f764"
            }

            .fa-sun-haze:before {
                content: "\f765"
            }

            .fa-sunglasses:before {
                content: "\f892"
            }

            .fa-sunrise:before {
                content: "\f766"
            }

            .fa-sunset:before {
                content: "\f767"
            }

            .fa-superpowers:before {
                content: "\f2dd"
            }

            .fa-superscript:before {
                content: "\f12b"
            }

            .fa-supple:before {
                content: "\f3f9"
            }

            .fa-surprise:before {
                content: "\f5c2"
            }

            .fa-suse:before {
                content: "\f7d6"
            }

            .fa-swatchbook:before {
                content: "\f5c3"
            }

            .fa-swift:before {
                content: "\f8e1"
            }

            .fa-swimmer:before {
                content: "\f5c4"
            }

            .fa-swimming-pool:before {
                content: "\f5c5"
            }

            .fa-sword:before {
                content: "\f71c"
            }

            .fa-sword-laser:before {
                content: "\e03b"
            }

            .fa-sword-laser-alt:before {
                content: "\e03c"
            }

            .fa-swords:before {
                content: "\f71d"
            }

            .fa-swords-laser:before {
                content: "\e03d"
            }

            .fa-symfony:before {
                content: "\f83d"
            }

            .fa-synagogue:before {
                content: "\f69b"
            }

            .fa-sync:before {
                content: "\f021"
            }

            .fa-sync-alt:before {
                content: "\f2f1"
            }

            .fa-syringe:before {
                content: "\f48e"
            }

            .fa-table:before {
                content: "\f0ce"
            }

            .fa-table-tennis:before {
                content: "\f45d"
            }

            .fa-tablet:before {
                content: "\f10a"
            }

            .fa-tablet-alt:before {
                content: "\f3fa"
            }

            .fa-tablet-android:before {
                content: "\f3fb"
            }

            .fa-tablet-android-alt:before {
                content: "\f3fc"
            }

            .fa-tablet-rugged:before {
                content: "\f48f"
            }

            .fa-tablets:before {
                content: "\f490"
            }

            .fa-tachometer:before {
                content: "\f0e4"
            }

            .fa-tachometer-alt:before {
                content: "\f3fd"
            }

            .fa-tachometer-alt-average:before {
                content: "\f624"
            }

            .fa-tachometer-alt-fast:before {
                content: "\f625"
            }

            .fa-tachometer-alt-fastest:before {
                content: "\f626"
            }

            .fa-tachometer-alt-slow:before {
                content: "\f627"
            }

            .fa-tachometer-alt-slowest:before {
                content: "\f628"
            }

            .fa-tachometer-average:before {
                content: "\f629"
            }

            .fa-tachometer-fast:before {
                content: "\f62a"
            }

            .fa-tachometer-fastest:before {
                content: "\f62b"
            }

            .fa-tachometer-slow:before {
                content: "\f62c"
            }

            .fa-tachometer-slowest:before {
                content: "\f62d"
            }

            .fa-taco:before {
                content: "\f826"
            }

            .fa-tag:before {
                content: "\f02b"
            }

            .fa-tags:before {
                content: "\f02c"
            }

            .fa-tally:before {
                content: "\f69c"
            }

            .fa-tanakh:before {
                content: "\f827"
            }

            .fa-tape:before {
                content: "\f4db"
            }

            .fa-tasks:before {
                content: "\f0ae"
            }

            .fa-tasks-alt:before {
                content: "\f828"
            }

            .fa-taxi:before {
                content: "\f1ba"
            }

            .fa-teamspeak:before {
                content: "\f4f9"
            }

            .fa-teeth:before {
                content: "\f62e"
            }

            .fa-teeth-open:before {
                content: "\f62f"
            }

            .fa-telegram:before {
                content: "\f2c6"
            }

            .fa-telegram-plane:before {
                content: "\f3fe"
            }

            .fa-telescope:before {
                content: "\e03e"
            }

            .fa-temperature-down:before {
                content: "\e03f"
            }

            .fa-temperature-frigid:before {
                content: "\f768"
            }

            .fa-temperature-high:before {
                content: "\f769"
            }

            .fa-temperature-hot:before {
                content: "\f76a"
            }

            .fa-temperature-low:before {
                content: "\f76b"
            }

            .fa-temperature-up:before {
                content: "\e040"
            }

            .fa-tencent-weibo:before {
                content: "\f1d5"
            }

            .fa-tenge:before {
                content: "\f7d7"
            }

            .fa-tennis-ball:before {
                content: "\f45e"
            }

            .fa-terminal:before {
                content: "\f120"
            }

            .fa-text:before {
                content: "\f893"
            }

            .fa-text-height:before {
                content: "\f034"
            }

            .fa-text-size:before {
                content: "\f894"
            }

            .fa-text-width:before {
                content: "\f035"
            }

            .fa-th:before {
                content: "\f00a"
            }

            .fa-th-large:before {
                content: "\f009"
            }

            .fa-th-list:before {
                content: "\f00b"
            }

            .fa-the-red-yeti:before {
                content: "\f69d"
            }

            .fa-theater-masks:before {
                content: "\f630"
            }

            .fa-themeco:before {
                content: "\f5c6"
            }

            .fa-themeisle:before {
                content: "\f2b2"
            }

            .fa-thermometer:before {
                content: "\f491"
            }

            .fa-thermometer-empty:before {
                content: "\f2cb"
            }

            .fa-thermometer-full:before {
                content: "\f2c7"
            }

            .fa-thermometer-half:before {
                content: "\f2c9"
            }

            .fa-thermometer-quarter:before {
                content: "\f2ca"
            }

            .fa-thermometer-three-quarters:before {
                content: "\f2c8"
            }

            .fa-theta:before {
                content: "\f69e"
            }

            .fa-think-peaks:before {
                content: "\f731"
            }

            .fa-thumbs-down:before {
                content: "\f165"
            }

            .fa-thumbs-up:before {
                content: "\f164"
            }

            .fa-thumbtack:before {
                content: "\f08d"
            }

            .fa-thunderstorm:before {
                content: "\f76c"
            }

            .fa-thunderstorm-moon:before {
                content: "\f76d"
            }

            .fa-thunderstorm-sun:before {
                content: "\f76e"
            }

            .fa-ticket:before {
                content: "\f145"
            }

            .fa-ticket-alt:before {
                content: "\f3ff"
            }

            .fa-tiktok:before {
                content: "\e07b"
            }

            .fa-tilde:before {
                content: "\f69f"
            }

            .fa-times:before {
                content: "\f00d"
            }

            .fa-times-circle:before {
                content: "\f057"
            }

            .fa-times-hexagon:before {
                content: "\f2ee"
            }

            .fa-times-octagon:before {
                content: "\f2f0"
            }

            .fa-times-square:before {
                content: "\f2d3"
            }

            .fa-tint:before {
                content: "\f043"
            }

            .fa-tint-slash:before {
                content: "\f5c7"
            }

            .fa-tire:before {
                content: "\f631"
            }

            .fa-tire-flat:before {
                content: "\f632"
            }

            .fa-tire-pressure-warning:before {
                content: "\f633"
            }

            .fa-tire-rugged:before {
                content: "\f634"
            }

            .fa-tired:before {
                content: "\f5c8"
            }

            .fa-toggle-off:before {
                content: "\f204"
            }

            .fa-toggle-on:before {
                content: "\f205"
            }

            .fa-toilet:before {
                content: "\f7d8"
            }

            .fa-toilet-paper:before {
                content: "\f71e"
            }

            .fa-toilet-paper-alt:before {
                content: "\f71f"
            }

            .fa-toilet-paper-slash:before {
                content: "\e072"
            }

            .fa-tombstone:before {
                content: "\f720"
            }

            .fa-tombstone-alt:before {
                content: "\f721"
            }

            .fa-toolbox:before {
                content: "\f552"
            }

            .fa-tools:before {
                content: "\f7d9"
            }

            .fa-tooth:before {
                content: "\f5c9"
            }

            .fa-toothbrush:before {
                content: "\f635"
            }

            .fa-torah:before {
                content: "\f6a0"
            }

            .fa-torii-gate:before {
                content: "\f6a1"
            }

            .fa-tornado:before {
                content: "\f76f"
            }

            .fa-tractor:before {
                content: "\f722"
            }

            .fa-trade-federation:before {
                content: "\f513"
            }

            .fa-trademark:before {
                content: "\f25c"
            }

            .fa-traffic-cone:before {
                content: "\f636"
            }

            .fa-traffic-light:before {
                content: "\f637"
            }

            .fa-traffic-light-go:before {
                content: "\f638"
            }

            .fa-traffic-light-slow:before {
                content: "\f639"
            }

            .fa-traffic-light-stop:before {
                content: "\f63a"
            }

            .fa-trailer:before {
                content: "\e041"
            }

            .fa-train:before {
                content: "\f238"
            }

            .fa-tram:before {
                content: "\f7da"
            }

            .fa-transgender:before {
                content: "\f224"
            }

            .fa-transgender-alt:before {
                content: "\f225"
            }

            .fa-transporter:before {
                content: "\e042"
            }

            .fa-transporter-1:before {
                content: "\e043"
            }

            .fa-transporter-2:before {
                content: "\e044"
            }

            .fa-transporter-3:before {
                content: "\e045"
            }

            .fa-transporter-empty:before {
                content: "\e046"
            }

            .fa-trash:before {
                content: "\f1f8"
            }

            .fa-trash-alt:before {
                content: "\f2ed"
            }

            .fa-trash-restore:before {
                content: "\f829"
            }

            .fa-trash-restore-alt:before {
                content: "\f82a"
            }

            .fa-trash-undo:before {
                content: "\f895"
            }

            .fa-trash-undo-alt:before {
                content: "\f896"
            }

            .fa-treasure-chest:before {
                content: "\f723"
            }

            .fa-tree:before {
                content: "\f1bb"
            }

            .fa-tree-alt:before {
                content: "\f400"
            }

            .fa-tree-christmas:before {
                content: "\f7db"
            }

            .fa-tree-decorated:before {
                content: "\f7dc"
            }

            .fa-tree-large:before {
                content: "\f7dd"
            }

            .fa-tree-palm:before {
                content: "\f82b"
            }

            .fa-trees:before {
                content: "\f724"
            }

            .fa-trello:before {
                content: "\f181"
            }

            .fa-triangle:before {
                content: "\f2ec"
            }

            .fa-triangle-music:before {
                content: "\f8e2"
            }

            .fa-tripadvisor:before {
                content: "\f262"
            }

            .fa-trophy:before {
                content: "\f091"
            }

            .fa-trophy-alt:before {
                content: "\f2eb"
            }

            .fa-truck:before {
                content: "\f0d1"
            }

            .fa-truck-container:before {
                content: "\f4dc"
            }

            .fa-truck-couch:before {
                content: "\f4dd"
            }

            .fa-truck-loading:before {
                content: "\f4de"
            }

            .fa-truck-monster:before {
                content: "\f63b"
            }

            .fa-truck-moving:before {
                content: "\f4df"
            }

            .fa-truck-pickup:before {
                content: "\f63c"
            }

            .fa-truck-plow:before {
                content: "\f7de"
            }

            .fa-truck-ramp:before {
                content: "\f4e0"
            }

            .fa-trumpet:before {
                content: "\f8e3"
            }

            .fa-tshirt:before {
                content: "\f553"
            }

            .fa-tty:before {
                content: "\f1e4"
            }

            .fa-tumblr:before {
                content: "\f173"
            }

            .fa-tumblr-square:before {
                content: "\f174"
            }

            .fa-turkey:before {
                content: "\f725"
            }

            .fa-turntable:before {
                content: "\f8e4"
            }

            .fa-turtle:before {
                content: "\f726"
            }

            .fa-tv:before {
                content: "\f26c"
            }

            .fa-tv-alt:before {
                content: "\f8e5"
            }

            .fa-tv-music:before {
                content: "\f8e6"
            }

            .fa-tv-retro:before {
                content: "\f401"
            }

            .fa-twitch:before {
                content: "\f1e8"
            }

            .fa-twitter:before {
                content: "\f099"
            }

            .fa-twitter-square:before {
                content: "\f081"
            }

            .fa-typewriter:before {
                content: "\f8e7"
            }

            .fa-typo3:before {
                content: "\f42b"
            }

            .fa-uber:before {
                content: "\f402"
            }

            .fa-ubuntu:before {
                content: "\f7df"
            }

            .fa-ufo:before {
                content: "\e047"
            }

            .fa-ufo-beam:before {
                content: "\e048"
            }

            .fa-uikit:before {
                content: "\f403"
            }

            .fa-umbraco:before {
                content: "\f8e8"
            }

            .fa-umbrella:before {
                content: "\f0e9"
            }

            .fa-umbrella-beach:before {
                content: "\f5ca"
            }

            .fa-uncharted:before {
                content: "\e084"
            }

            .fa-underline:before {
                content: "\f0cd"
            }

            .fa-undo:before {
                content: "\f0e2"
            }

            .fa-undo-alt:before {
                content: "\f2ea"
            }

            .fa-unicorn:before {
                content: "\f727"
            }

            .fa-union:before {
                content: "\f6a2"
            }

            .fa-uniregistry:before {
                content: "\f404"
            }

            .fa-unity:before {
                content: "\e049"
            }

            .fa-universal-access:before {
                content: "\f29a"
            }

            .fa-university:before {
                content: "\f19c"
            }

            .fa-unlink:before {
                content: "\f127"
            }

            .fa-unlock:before {
                content: "\f09c"
            }

            .fa-unlock-alt:before {
                content: "\f13e"
            }

            .fa-unsplash:before {
                content: "\e07c"
            }

            .fa-untappd:before {
                content: "\f405"
            }

            .fa-upload:before {
                content: "\f093"
            }

            .fa-ups:before {
                content: "\f7e0"
            }

            .fa-usb:before {
                content: "\f287"
            }

            .fa-usb-drive:before {
                content: "\f8e9"
            }

            .fa-usd-circle:before {
                content: "\f2e8"
            }

            .fa-usd-square:before {
                content: "\f2e9"
            }

            .fa-user:before {
                content: "\f007"
            }

            .fa-user-alien:before {
                content: "\e04a"
            }

            .fa-user-alt:before {
                content: "\f406"
            }

            .fa-user-alt-slash:before {
                content: "\f4fa"
            }

            .fa-user-astronaut:before {
                content: "\f4fb"
            }

            .fa-user-chart:before {
                content: "\f6a3"
            }

            .fa-user-check:before {
                content: "\f4fc"
            }

            .fa-user-circle:before {
                content: "\f2bd"
            }

            .fa-user-clock:before {
                content: "\f4fd"
            }

            .fa-user-cog:before {
                content: "\f4fe"
            }

            .fa-user-cowboy:before {
                content: "\f8ea"
            }

            .fa-user-crown:before {
                content: "\f6a4"
            }

            .fa-user-edit:before {
                content: "\f4ff"
            }

            .fa-user-friends:before {
                content: "\f500"
            }

            .fa-user-graduate:before {
                content: "\f501"
            }

            .fa-user-hard-hat:before {
                content: "\f82c"
            }

            .fa-user-headset:before {
                content: "\f82d"
            }

            .fa-user-injured:before {
                content: "\f728"
            }

            .fa-user-lock:before {
                content: "\f502"
            }

            .fa-user-md:before {
                content: "\f0f0"
            }

            .fa-user-md-chat:before {
                content: "\f82e"
            }

            .fa-user-minus:before {
                content: "\f503"
            }

            .fa-user-music:before {
                content: "\f8eb"
            }

            .fa-user-ninja:before {
                content: "\f504"
            }

            .fa-user-nurse:before {
                content: "\f82f"
            }

            .fa-user-plus:before {
                content: "\f234"
            }

            .fa-user-robot:before {
                content: "\e04b"
            }

            .fa-user-secret:before {
                content: "\f21b"
            }

            .fa-user-shield:before {
                content: "\f505"
            }

            .fa-user-slash:before {
                content: "\f506"
            }

            .fa-user-tag:before {
                content: "\f507"
            }

            .fa-user-tie:before {
                content: "\f508"
            }

            .fa-user-times:before {
                content: "\f235"
            }

            .fa-user-unlock:before {
                content: "\e058"
            }

            .fa-user-visor:before {
                content: "\e04c"
            }

            .fa-users:before {
                content: "\f0c0"
            }

            .fa-users-class:before {
                content: "\f63d"
            }

            .fa-users-cog:before {
                content: "\f509"
            }

            .fa-users-crown:before {
                content: "\f6a5"
            }

            .fa-users-medical:before {
                content: "\f830"
            }

            .fa-users-slash:before {
                content: "\e073"
            }

            .fa-usps:before {
                content: "\f7e1"
            }

            .fa-ussunnah:before {
                content: "\f407"
            }

            .fa-utensil-fork:before {
                content: "\f2e3"
            }

            .fa-utensil-knife:before {
                content: "\f2e4"
            }

            .fa-utensil-spoon:before {
                content: "\f2e5"
            }

            .fa-utensils:before {
                content: "\f2e7"
            }

            .fa-utensils-alt:before {
                content: "\f2e6"
            }

            .fa-vaadin:before {
                content: "\f408"
            }

            .fa-vacuum:before {
                content: "\e04d"
            }

            .fa-vacuum-robot:before {
                content: "\e04e"
            }

            .fa-value-absolute:before {
                content: "\f6a6"
            }

            .fa-vector-square:before {
                content: "\f5cb"
            }

            .fa-venus:before {
                content: "\f221"
            }

            .fa-venus-double:before {
                content: "\f226"
            }

            .fa-venus-mars:before {
                content: "\f228"
            }

            .fa-vest:before {
                content: "\e085"
            }

            .fa-vest-patches:before {
                content: "\e086"
            }

            .fa-vhs:before {
                content: "\f8ec"
            }

            .fa-viacoin:before {
                content: "\f237"
            }

            .fa-viadeo:before {
                content: "\f2a9"
            }

            .fa-viadeo-square:before {
                content: "\f2aa"
            }

            .fa-vial:before {
                content: "\f492"
            }

            .fa-vials:before {
                content: "\f493"
            }

            .fa-viber:before {
                content: "\f409"
            }

            .fa-video:before {
                content: "\f03d"
            }

            .fa-video-plus:before {
                content: "\f4e1"
            }

            .fa-video-slash:before {
                content: "\f4e2"
            }

            .fa-vihara:before {
                content: "\f6a7"
            }

            .fa-vimeo:before {
                content: "\f40a"
            }

            .fa-vimeo-square:before {
                content: "\f194"
            }

            .fa-vimeo-v:before {
                content: "\f27d"
            }

            .fa-vine:before {
                content: "\f1ca"
            }

            .fa-violin:before {
                content: "\f8ed"
            }

            .fa-virus:before {
                content: "\e074"
            }

            .fa-virus-slash:before {
                content: "\e075"
            }

            .fa-viruses:before {
                content: "\e076"
            }

            .fa-vk:before {
                content: "\f189"
            }

            .fa-vnv:before {
                content: "\f40b"
            }

            .fa-voicemail:before {
                content: "\f897"
            }

            .fa-volcano:before {
                content: "\f770"
            }

            .fa-volleyball-ball:before {
                content: "\f45f"
            }

            .fa-volume:before {
                content: "\f6a8"
            }

            .fa-volume-down:before {
                content: "\f027"
            }

            .fa-volume-mute:before {
                content: "\f6a9"
            }

            .fa-volume-off:before {
                content: "\f026"
            }

            .fa-volume-slash:before {
                content: "\f2e2"
            }

            .fa-volume-up:before {
                content: "\f028"
            }

            .fa-vote-nay:before {
                content: "\f771"
            }

            .fa-vote-yea:before {
                content: "\f772"
            }

            .fa-vr-cardboard:before {
                content: "\f729"
            }

            .fa-vuejs:before {
                content: "\f41f"
            }

            .fa-wagon-covered:before {
                content: "\f8ee"
            }

            .fa-walker:before {
                content: "\f831"
            }

            .fa-walkie-talkie:before {
                content: "\f8ef"
            }

            .fa-walking:before {
                content: "\f554"
            }

            .fa-wallet:before {
                content: "\f555"
            }

            .fa-wand:before {
                content: "\f72a"
            }

            .fa-wand-magic:before {
                content: "\f72b"
            }

            .fa-warehouse:before {
                content: "\f494"
            }

            .fa-warehouse-alt:before {
                content: "\f495"
            }

            .fa-washer:before {
                content: "\f898"
            }

            .fa-watch:before {
                content: "\f2e1"
            }

            .fa-watch-calculator:before {
                content: "\f8f0"
            }

            .fa-watch-fitness:before {
                content: "\f63e"
            }

            .fa-watchman-monitoring:before {
                content: "\e087"
            }

            .fa-water:before {
                content: "\f773"
            }

            .fa-water-lower:before {
                content: "\f774"
            }

            .fa-water-rise:before {
                content: "\f775"
            }

            .fa-wave-sine:before {
                content: "\f899"
            }

            .fa-wave-square:before {
                content: "\f83e"
            }

            .fa-wave-triangle:before {
                content: "\f89a"
            }

            .fa-waveform:before {
                content: "\f8f1"
            }

            .fa-waveform-path:before {
                content: "\f8f2"
            }

            .fa-waze:before {
                content: "\f83f"
            }

            .fa-webcam:before {
                content: "\f832"
            }

            .fa-webcam-slash:before {
                content: "\f833"
            }

            .fa-weebly:before {
                content: "\f5cc"
            }

            .fa-weibo:before {
                content: "\f18a"
            }

            .fa-weight:before {
                content: "\f496"
            }

            .fa-weight-hanging:before {
                content: "\f5cd"
            }

            .fa-weixin:before {
                content: "\f1d7"
            }

            .fa-whale:before {
                content: "\f72c"
            }

            .fa-whatsapp:before {
                content: "\f232"
            }

            .fa-whatsapp-square:before {
                content: "\f40c"
            }

            .fa-wheat:before {
                content: "\f72d"
            }

            .fa-wheelchair:before {
                content: "\f193"
            }

            .fa-whistle:before {
                content: "\f460"
            }

            .fa-whmcs:before {
                content: "\f40d"
            }

            .fa-wifi:before {
                content: "\f1eb"
            }

            .fa-wifi-1:before {
                content: "\f6aa"
            }

            .fa-wifi-2:before {
                content: "\f6ab"
            }

            .fa-wifi-slash:before {
                content: "\f6ac"
            }

            .fa-wikipedia-w:before {
                content: "\f266"
            }

            .fa-wind:before {
                content: "\f72e"
            }

            .fa-wind-turbine:before {
                content: "\f89b"
            }

            .fa-wind-warning:before {
                content: "\f776"
            }

            .fa-window:before {
                content: "\f40e"
            }

            .fa-window-alt:before {
                content: "\f40f"
            }

            .fa-window-close:before {
                content: "\f410"
            }

            .fa-window-frame:before {
                content: "\e04f"
            }

            .fa-window-frame-open:before {
                content: "\e050"
            }

            .fa-window-maximize:before {
                content: "\f2d0"
            }

            .fa-window-minimize:before {
                content: "\f2d1"
            }

            .fa-window-restore:before {
                content: "\f2d2"
            }

            .fa-windows:before {
                content: "\f17a"
            }

            .fa-windsock:before {
                content: "\f777"
            }

            .fa-wine-bottle:before {
                content: "\f72f"
            }

            .fa-wine-glass:before {
                content: "\f4e3"
            }

            .fa-wine-glass-alt:before {
                content: "\f5ce"
            }

            .fa-wix:before {
                content: "\f5cf"
            }

            .fa-wizards-of-the-coast:before {
                content: "\f730"
            }

            .fa-wodu:before {
                content: "\e088"
            }

            .fa-wolf-pack-battalion:before {
                content: "\f514"
            }

            .fa-won-sign:before {
                content: "\f159"
            }

            .fa-wordpress:before {
                content: "\f19a"
            }

            .fa-wordpress-simple:before {
                content: "\f411"
            }

            .fa-wpbeginner:before {
                content: "\f297"
            }

            .fa-wpexplorer:before {
                content: "\f2de"
            }

            .fa-wpforms:before {
                content: "\f298"
            }

            .fa-wpressr:before {
                content: "\f3e4"
            }

            .fa-wreath:before {
                content: "\f7e2"
            }

            .fa-wrench:before {
                content: "\f0ad"
            }

            .fa-x-ray:before {
                content: "\f497"
            }

            .fa-xbox:before {
                content: "\f412"
            }

            .fa-xing:before {
                content: "\f168"
            }

            .fa-xing-square:before {
                content: "\f169"
            }

            .fa-y-combinator:before {
                content: "\f23b"
            }

            .fa-yahoo:before {
                content: "\f19e"
            }

            .fa-yammer:before {
                content: "\f840"
            }

            .fa-yandex:before {
                content: "\f413"
            }

            .fa-yandex-international:before {
                content: "\f414"
            }

            .fa-yarn:before {
                content: "\f7e3"
            }

            .fa-yelp:before {
                content: "\f1e9"
            }

            .fa-yen-sign:before {
                content: "\f157"
            }

            .fa-yin-yang:before {
                content: "\f6ad"
            }

            .fa-yoast:before {
                content: "\f2b1"
            }

            .fa-youtube:before {
                content: "\f167"
            }

            .fa-youtube-square:before {
                content: "\f431"
            }

            .fa-zhihu:before {
                content: "\f63f"
            }

            .sr-only {
                border: 0;
                clip: rect(0, 0, 0, 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px
            }

            .sr-only-focusable:active,
            .sr-only-focusable:focus {
                clip: auto;
                height: auto;
                margin: 0;
                overflow: visible;
                position: static;
                width: auto
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.0.svg#fontawesome) format("svg");
                unicode-range: U+f081, U+f08c, U+f092, U+f099, U+f09b, U+f0d2-f0d5, U+f113, U+f136, U+f13b-f13c, U+f15a, U+f167-f169, U+f16c-f16e, U+f170, U+f173-f174, U+f17a, U+f17c-f17e, U+f180, U+f184, U+f189-f18c, U+f194, U+f19a-f19b, U+f1a0-f1a4, U+f1a6-f1a7, U+f1a9-f1aa, U+f1b4, U+f1b6-f1b7, U+f1bc-f1be, U+f1ca-f1cc, U+f1d0-f1d1, U+f1d4-f1d6, U+f1e7, U+f1ed-f1ee, U+f1f0-f1f2, U+f1f4-f1f5, U+f202, U+f208-f209, U+f20d-f20e, U+f211-f213, U+f215, U+f231-f232, U+f237, U+f23a-f23b, U+f23d-f23e, U+f24b-f24c, U+f260-f261, U+f263-f266, U+f268, U+f26a-f26b, U+f26d-f26e, U+f270, U+f27d-f27e, U+f280-f281, U+f284-f285, U+f287-f28a, U+f293-f294, U+f297-f299, U+f2a5-f2a6, U+f2a9, U+f2ab-f2ad, U+f2b0, U+f2b2, U+f2b4, U+f2b8, U+f2c4, U+f2c6, U+f2d6-f2d8, U+f2da, U+f2dd-f2de, U+f2e0, U+f35c, U+f368-f374, U+f378-f37d, U+f37f-f380, U+f383-f385, U+f388, U+f38b-f38f, U+f392, U+f394-f397, U+f399-f39a, U+f3a1-f3a4, U+f3a6-f3b2, U+f3b4-f3b8, U+f3ba-f3bc, U+f3c0, U+f3c3-f3c4, U+f3c6-f3c8, U+f3ca, U+f3cc, U+f3d0, U+f3d2, U+f3d4, U+f3d6-f3d7, U+f3da-f3db, U+f3df, U+f3e1-f3e3, U+f3e6-f3e7, U+f3e9-f3ec, U+f3ee-f3ef, U+f3f5-f3f6, U+f3f8-f3f9, U+f3fe, U+f402-f405, U+f407-f408, U+f40a-f40d, U+f411-f417, U+f419, U+f41b-f41d, U+f41f, U+f421, U+f426
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.1.svg#fontawesome) format("svg");
                unicode-range: U+f16b, U+f425
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.2.svg#fontawesome) format("svg");
                unicode-range: U+f42d-f42f
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.3.svg#fontawesome) format("svg");
                unicode-range: U+f18d, U+f1b5, U+f1d7, U+f210, U+f216, U+f286, U+f2b1, U+f393, U+f3b9, U+f3cb, U+f3d3, U+f3d8-f3d9, U+f3dc, U+f409, U+f423, U+f429, U+f430-f431
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.5.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.5.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.5.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.5.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.5.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.5.svg#fontawesome) format("svg");
                unicode-range: U+f452, U+f457
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.9.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.9.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.9.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.9.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.9.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.9.svg#fontawesome) format("svg");
                unicode-range: U+f44d
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.10.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.10.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.10.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.10.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.10.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.10.svg#fontawesome) format("svg");
                unicode-range: U+f4d5, U+f4e5
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.11.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.11.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.11.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.11.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.11.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.11.svg#fontawesome) format("svg");
                unicode-range: U+f203, U+f4e6-f4f2, U+f4f8
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.12.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.12.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.12.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.12.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.12.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.0.12.svg#fontawesome) format("svg");
                unicode-range: U+f4f7, U+f50a, U+f50c-f50d, U+f510, U+f512-f513
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.1.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.1.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.1.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.1.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.1.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.1.0.svg#fontawesome) format("svg");
                unicode-range: U+f25e, U+f375, U+f5a3, U+f5be, U+f5cc, U+f5cf
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.2.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.2.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.2.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.2.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.2.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.2.0.svg#fontawesome) format("svg");
                unicode-range: U+f5f1, U+f63f
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.3.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.3.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.3.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.3.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.3.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.3.0.svg#fontawesome) format("svg");
                unicode-range: U+f642
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.0.svg#fontawesome) format("svg");
                unicode-range: U+f4f3, U+f6ca, U+f6cc, U+f6dc, U+f704, U+f730
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.4.2.svg#fontawesome) format("svg");
                unicode-range: U+f3e4
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.6.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.6.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.6.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.6.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.6.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.6.0.svg#fontawesome) format("svg");
                unicode-range: U+f181, U+f77b, U+f78d, U+f790, U+f797, U+f7af-f7b1, U+f7b3, U+f7bb, U+f7df, U+f7e3
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.7.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.7.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.7.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.7.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.7.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.7.0.svg#fontawesome) format("svg");
                unicode-range: U+f198, U+f1a5, U+f1a8, U+f1f3, U+f214, U+f23c, U+f296, U+f2aa, U+f391, U+f39d, U+f3f7, U+f427, U+f4f4, U+f50e, U+f60f
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.0.svg#fontawesome) format("svg");
                unicode-range: U+f171, U+f179, U+f1e9, U+f27c, U+f3f3, U+f41a, U+f41e, U+f420, U+f428, U+f42a-f42c, U+f459, U+f4e4, U+f4f6, U+f4f9, U+f50b, U+f50f, U+f511, U+f514, U+f592, U+f5a8, U+f5b2, U+f5b5, U+f5c6, U+f5f7, U+f5fa, U+f612, U+f69d, U+f6af, U+f6c9, U+f731, U+f75d, U+f77a, U+f785, U+f789, U+f791, U+f798-f799, U+f7c6, U+f7d3, U+f7d6, U+f7e0-f7e1, U+f834-f83d, U+f83f-f840
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.1.svg#fontawesome) format("svg");
                unicode-range: U+f0e1
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.8.2.svg#fontawesome) format("svg");
                unicode-range: U+f082, U+f09a, U+f1d2-f1d3, U+f39e, U+f59e, U+f7bc, U+f841-f842
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.9.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.9.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.9.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.9.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.9.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.9.0.svg#fontawesome) format("svg");
                unicode-range: U+f39f
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.10.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.10.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.10.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.10.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.10.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.10.0.svg#fontawesome) format("svg");
                unicode-range: U+f89e
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.0.svg#fontawesome) format("svg");
                unicode-range: U+f4f5, U+f8a6, U+f8ca, U+f8d2, U+f8e1, U+f8e8
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.11.2.svg#fontawesome) format("svg");
                unicode-range: U+f3bd
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.0.svg#fontawesome) format("svg");
                unicode-range: U+f17b, U+f1e8, U+f267, U+f269, U+f2ae, U+f2c5
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.12.1.svg#fontawesome) format("svg");
                unicode-range: U+f282
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.13.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.13.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.13.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.13.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.13.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.13.1.svg#fontawesome) format("svg");
                unicode-range: U+f19e, U+f2b3, U+f2d5
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.14.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.14.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.14.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.14.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.14.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.14.0.svg#fontawesome) format("svg");
                unicode-range: U+e007, U+e013, U+e01a, U+e01e, U+e049, U+e052, U+e055-e057, U+e077-e07c, U+f262
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.0.svg#fontawesome) format("svg");
                unicode-range: U+e07d-e084, U+e087-e088, U+f3d5, U+f3e8
            }

            @font-face {
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-brands-400-5.15.1.svg#fontawesome) format("svg");
                unicode-range: U+f2d9
            }

            .fab {
                font-family: "Font Awesome 5 Brands";
                font-weight: 400
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.0.svg#fontawesome) format("svg");
                unicode-range: U+f002, U+f008-f009, U+f00b-f00c, U+f00e, U+f011, U+f013, U+f019, U+f01c, U+f022-f025, U+f02a-f02b, U+f02d, U+f030, U+f040-f041, U+f044, U+f047, U+f049-f04a, U+f04e, U+f050, U+f052-f055, U+f057-f05b, U+f05e, U+f060-f066, U+f068-f06a, U+f074, U+f077-f07a, U+f07c-f07e, U+f085, U+f089, U+f08b, U+f090, U+f093-f094, U+f098, U+f09c-f09e, U+f0a4-f0ab, U+f0b2, U+f0c1, U+f0c3, U+f0c6, U+f0c9, U+f0ce, U+f0d7-f0db, U+f0e2-f0e3, U+f0e9-f0ea, U+f0ec, U+f0f4, U+f0f8, U+f0fa-f0fe, U+f100-f103, U+f106-f108, U+f10a-f10b, U+f11c, U+f120-f122, U+f124, U+f126-f128, U+f12e, U+f134, U+f137-f13a, U+f13e, U+f141-f143, U+f146, U+f14a-f14d, U+f150-f154, U+f156-f159, U+f175-f178, U+f182-f183, U+f188, U+f191-f192, U+f195, U+f199, U+f1ad-f1ae, U+f1b0, U+f1b2-f1b3, U+f1b8, U+f1bb, U+f1c0, U+f1cd, U+f1d8, U+f1da, U+f1e0-f1e2, U+f1ea, U+f1fa, U+f1fd-f1fe, U+f204-f206, U+f20b, U+f217-f218, U+f21c, U+f222, U+f224, U+f226-f229, U+f233, U+f238-f239, U+f240-f244, U+f246, U+f255-f258, U+f25a-f25c, U+f28b, U+f28d, U+f290-f292, U+f295, U+f2a1-f2a4, U+f2a8, U+f2c7-f2cb, U+f2ce, U+f2d0, U+f2d2-f2d3, U+f2db, U+f2e6-f2e7, U+f2ea, U+f2f0-f2f1, U+f2f5-f2f7, U+f2f9, U+f2fd, U+f301, U+f303, U+f308-f30f, U+f31d, U+f320-f322, U+f325-f326, U+f328-f32e, U+f330-f332, U+f336-f337, U+f339-f33c, U+f33e, U+f340-f34c, U+f350-f353, U+f355, U+f358-f35b, U+f360-f367, U+f376, U+f37e, U+f387, U+f389-f38a, U+f390, U+f39b-f39c, U+f3a0, U+f3b3, U+f3be-f3bf, U+f3c2, U+f3c5, U+f3cd-f3cf, U+f3de, U+f3e5, U+f3ed, U+f3f0, U+f3f2, U+f3fa-f3fc, U+f400-f401, U+f40e-f410, U+10f002, U+10f008-10f009, U+10f00b-10f00c, U+10f00e, U+10f011, U+10f013, U+10f019, U+10f01c, U+10f022-10f025, U+10f02a-10f02b, U+10f02d, U+10f030, U+10f040-10f041, U+10f044, U+10f047, U+10f049-10f04a, U+10f04e, U+10f050, U+10f052-10f055, U+10f057-10f05b, U+10f05e, U+10f060-10f066, U+10f068-10f06a, U+10f074, U+10f077-10f07a, U+10f07c-10f07e, U+10f085, U+10f089, U+10f08b, U+10f090, U+10f093-10f094, U+10f098, U+10f09c-10f09e, U+10f0a4-10f0ab, U+10f0b2, U+10f0c1, U+10f0c3, U+10f0c6, U+10f0c9, U+10f0ce, U+10f0d7-10f0db, U+10f0e2-10f0e3, U+10f0e9-10f0ea, U+10f0ec, U+10f0f4, U+10f0f8, U+10f0fa-10f0fe, U+10f100-10f103, U+10f106-10f108, U+10f10a-10f10b, U+10f11c, U+10f120-10f122, U+10f124, U+10f126-10f128, U+10f12e, U+10f134, U+10f137-10f13a, U+10f13e, U+10f141-10f143, U+10f146, U+10f14a-10f14d, U+10f150-10f154, U+10f156-10f159, U+10f175-10f178, U+10f182-10f183, U+10f188, U+10f191-10f192, U+10f195, U+10f199, U+10f1ad-10f1ae, U+10f1b0, U+10f1b2-10f1b3, U+10f1b8, U+10f1bb, U+10f1c0, U+10f1cd, U+10f1d8, U+10f1da, U+10f1e0-10f1e2, U+10f1ea, U+10f1fa, U+10f1fd-10f1fe, U+10f204-10f206, U+10f20b, U+10f217-10f218, U+10f21c, U+10f222, U+10f224, U+10f226-10f229, U+10f233, U+10f238-10f239, U+10f240-10f244, U+10f246, U+10f255-10f258, U+10f25a-10f25c, U+10f28b, U+10f28d, U+10f290-10f292, U+10f295, U+10f2a1-10f2a4, U+10f2a8, U+10f2c7-10f2cb, U+10f2ce, U+10f2d0, U+10f2d2-10f2d3, U+10f2db, U+10f2e6-10f2e7, U+10f2ea, U+10f2f0-10f2f1, U+10f2f5-10f2f7, U+10f2f9, U+10f2fd, U+10f301, U+10f303, U+10f308-10f30f, U+10f31d, U+10f320-10f322, U+10f325-10f326, U+10f328-10f32e, U+10f330-10f332, U+10f336-10f337, U+10f339-10f33c, U+10f33e, U+10f340-10f34c, U+10f350-10f353, U+10f355, U+10f358-10f35b, U+10f360-10f367, U+10f376, U+10f37e, U+10f387, U+10f389-10f38a, U+10f390, U+10f39b-10f39c, U+10f3a0, U+10f3b3, U+10f3be-10f3bf, U+10f3c2, U+10f3c5, U+10f3cd-10f3cf, U+10f3de, U+10f3e5, U+10f3ed, U+10f3f0, U+10f3f2, U+10f3fa-10f3fc, U+10f400-10f401, U+10f40e-10f410
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.1.svg#fontawesome) format("svg");
                unicode-range: U+f3c1, U+10f3c1
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.3.svg#fontawesome) format("svg");
                unicode-range: U+f245, U+f2b9, U+f2bb, U+f2c1, U+f3e0, U+10f245, U+10f2b9, U+10f2bb, U+10f2c1, U+10f3e0
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.5.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.5.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.5.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.5.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.5.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.5.svg#fontawesome) format("svg");
                unicode-range: U+f1e3, U+f432, U+f437-f438, U+f449-f44c, U+f44f-f451, U+f453, U+f455, U+f458, U+f45a-f45b, U+f45d, U+10f1e3, U+10f432, U+10f437-10f438, U+10f449-10f44c, U+10f44f-10f451, U+10f453, U+10f455, U+10f458, U+10f45a-10f45b, U+10f45d
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.7.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.7.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.7.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.7.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.7.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.7.svg#fontawesome) format("svg");
                unicode-range: U+f0d1, U+f0f1, U+f0f9, U+f21e, U+f461, U+f463-f46f, U+f472-f475, U+f479-f47a, U+f47d-f47e, U+f481-f487, U+f489, U+f48b-f496, U+10f0d1, U+10f0f1, U+10f0f9, U+10f21e, U+10f461, U+10f463-10f46f, U+10f472-10f475, U+10f479-10f47a, U+10f47d-10f47e, U+10f481-10f487, U+10f489, U+10f48b-10f496
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.9.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.9.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.9.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.9.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.9.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.9.svg#fontawesome) format("svg");
                unicode-range: U+f03d, U+f06c, U+f086, U+f0f2, U+f10d-f10e, U+f187, U+f2b5, U+f2e9, U+f2fe, U+f3dd, U+f47b-f47c, U+f498, U+f49a-f49b, U+f49d, U+f49f-f4b9, U+f4bb-f4bf, U+f4c2-f4c6, U+f4c8, U+f4cb-f4d2, U+f4d4, U+f4d6, U+f4d8-f4d9, U+f4db-f4e2, U+10f03d, U+10f06c, U+10f086, U+10f0f2, U+10f10d-10f10e, U+10f187, U+10f2b5, U+10f2e9, U+10f2fe, U+10f3dd, U+10f47b-10f47c, U+10f498, U+10f49a-10f49b, U+10f49d, U+10f49f-10f4b9, U+10f4bb-10f4bf, U+10f4c2-10f4c6, U+10f4c8, U+10f4cb-10f4d2, U+10f4d4, U+10f4d6, U+10f4d8-10f4d9, U+10f4db-10f4e2
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.10.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.10.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.10.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.10.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.10.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.10.svg#fontawesome) format("svg");
                unicode-range: U+f471, U+f4ca, U+10f471, U+10f4ca
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.11.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.11.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.11.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.11.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.11.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.11.svg#fontawesome) format("svg");
                unicode-range: U+f007, U+f0c0, U+f0c2, U+f0ed-f0ee, U+f0f0, U+f1de, U+f21b, U+f234-f235, U+f381-f382, U+f3f1, U+f406, U+f4e6, U+f4fa-f501, U+f503-f509, U+10f007, U+10f0c0, U+10f0c2, U+10f0ed-10f0ee, U+10f0f0, U+10f1de, U+10f21b, U+10f234-10f235, U+10f381-10f382, U+10f3f1, U+10f406, U+10f4e6, U+10f4fa-10f501, U+10f503-10f509
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.13.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.13.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.13.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.13.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.13.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.0.13.svg#fontawesome) format("svg");
                unicode-range: U+f010, U+f067, U+f072, U+f0ad, U+f0d6, U+f0e8, U+f130-f131, U+f24e, U+f3c9, U+f3d1, U+f517, U+f519-f51e, U+f520-f52c, U+f52e, U+f530-f533, U+f535-f543, U+f545-f54b, U+f54d, U+f54f-f552, U+f554-f555, U+10f010, U+10f067, U+10f072, U+10f0ad, U+10f0d6, U+10f0e8, U+10f130-10f131, U+10f24e, U+10f3c9, U+10f3d1, U+10f517, U+10f519-10f51e, U+10f520-10f52c, U+10f52e, U+10f530-10f533, U+10f535-10f543, U+10f545-10f54b, U+10f54d, U+10f54f-10f552, U+10f554-10f555
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.0.svg#fontawesome) format("svg");
                unicode-range: U+f043, U+f0c4, U+f0d0, U+f125, U+f1ba, U+f1fb-f1fc, U+f207, U+f236, U+f279, U+f304-f305, U+f52d, U+f557-f558, U+f55a-f55f, U+f562-f566, U+f568, U+f56a-f56b, U+f575-f577, U+f57b, U+f586, U+f588, U+f58d-f590, U+f593-f595, U+f59d, U+f59f-f5a2, U+f5a6-f5a7, U+f5a9-f5af, U+f5b1, U+f5b6, U+f5b9-f5bd, U+f5c4-f5c5, U+f5c7, U+f5c9-f5cb, U+f5cd, U+10f043, U+10f0c4, U+10f0d0, U+10f125, U+10f1ba, U+10f1fb-10f1fc, U+10f207, U+10f236, U+10f279, U+10f304-10f305, U+10f52d, U+10f557-10f558, U+10f55a-10f55f, U+10f562-10f566, U+10f568, U+10f56a-10f56b, U+10f575-10f577, U+10f57b, U+10f586, U+10f588, U+10f58d-10f590, U+10f593-10f595, U+10f59d, U+10f59f-10f5a2, U+10f5a6-10f5a7, U+10f5a9-10f5af, U+10f5b1, U+10f5b6, U+10f5b9-10f5bd, U+10f5c4-10f5c5, U+10f5c7, U+10f5c9-10f5cb, U+10f5cd
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.1.1.svg#fontawesome) format("svg");
                unicode-range: U+f386, U+10f386
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.2.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.2.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.2.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.2.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.2.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.2.0.svg#fontawesome) format("svg");
                unicode-range: U+f018, U+f0e4, U+f109, U+f1b9, U+f1e5, U+f1f6, U+f21d, U+f276-f277, U+f3fd, U+f4d7, U+f518, U+f5d0-f5d1, U+f5d4-f5da, U+f5dd, U+f5df-f5e5, U+f5e8-f5ea, U+f5ed-f5f0, U+f5f2, U+f5f4-f5f5, U+f5f8-f5f9, U+f5fb-f600, U+f603-f60e, U+f610, U+f614, U+f617-f619, U+f61c-f61e, U+f620-f621, U+f623-f62f, U+f633, U+f635-f63d, U+10f018, U+10f0e4, U+10f109, U+10f1b9, U+10f1e5, U+10f1f6, U+10f21d, U+10f276-10f277, U+10f3fd, U+10f4d7, U+10f518, U+10f5d0-10f5d1, U+10f5d4-10f5da, U+10f5dd, U+10f5df-10f5e5, U+10f5e8-10f5ea, U+10f5ed-10f5f0, U+10f5f2, U+10f5f4-10f5f5, U+10f5f8-10f5f9, U+10f5fb-10f600, U+10f603-10f60e, U+10f610, U+10f614, U+10f617-10f619, U+10f61c-10f61e, U+10f620-10f621, U+10f623-10f62f, U+10f633, U+10f635-10f63d
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.3.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.3.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.3.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.3.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.3.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.3.0.svg#fontawesome) format("svg");
                unicode-range: U+f027-f028, U+f080, U+f0a1, U+f0b1, U+f0eb, U+f200-f201, U+f2e2, U+f61a, U+f640, U+f643-f647, U+f64a-f64b, U+f64d-f653, U+f655-f656, U+f65d, U+f65f-f663, U+f665, U+f667-f669, U+f66b-f671, U+f673-f675, U+f678-f67b, U+f67d-f680, U+f683-f689, U+f68b, U+f694-f695, U+f697-f699, U+f69b-f69c, U+f69e-f69f, U+f6a1-f6a9, U+f6ac, U+10f027-10f028, U+10f080, U+10f0a1, U+10f0b1, U+10f0eb, U+10f200-10f201, U+10f2e2, U+10f61a, U+10f640, U+10f643-10f647, U+10f64a-10f64b, U+10f64d-10f653, U+10f655-10f656, U+10f65d, U+10f65f-10f663, U+10f665, U+10f667-10f669, U+10f66b-10f671, U+10f673-10f675, U+10f678-10f67b, U+10f67d-10f680, U+10f683-10f689, U+10f68b, U+10f694-10f695, U+10f697-10f699, U+10f69b-10f69c, U+10f69e-10f69f, U+10f6a1-10f6a9, U+10f6ac
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.0.svg#fontawesome) format("svg");
                unicode-range: U+f499, U+f676, U+f6ae, U+f6b0-f6b3, U+f6b5-f6bc, U+f6bf, U+f6c2, U+f6c5, U+f6c7-f6c8, U+f6cb, U+f6cd-f6d2, U+f6d5, U+f6d8-f6d9, U+f6db, U+f6de, U+f6e2-f6e3, U+f6e5-f6e7, U+f6e9-f6ec, U+f6ee, U+f6f1-f6f3, U+f6f5-f6f8, U+f6fc-f6fd, U+f6ff-f703, U+f707, U+f70a-f70b, U+f711-f713, U+f715-f71d, U+f720-f724, U+f726-f729, U+f72b, U+f72d, U+f72f, U+10f499, U+10f676, U+10f6ae, U+10f6b0-10f6b3, U+10f6b5-10f6bc, U+10f6bf, U+10f6c2, U+10f6c5, U+10f6c7-10f6c8, U+10f6cb, U+10f6cd-10f6d2, U+10f6d5, U+10f6d8-10f6d9, U+10f6db, U+10f6de, U+10f6e2-10f6e3, U+10f6e5-10f6e7, U+10f6e9-10f6ec, U+10f6ee, U+10f6f1-10f6f3, U+10f6f5-10f6f8, U+10f6fc-10f6fd, U+10f6ff-10f703, U+10f707, U+10f70a-10f70b, U+10f711-10f713, U+10f715-10f71d, U+10f720-10f724, U+10f726-10f729, U+10f72b, U+10f72d, U+10f72f
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.4.1.svg#fontawesome) format("svg");
                unicode-range: U+f72a, U+10f72a
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.5.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.5.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.5.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.5.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.5.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.5.0.svg#fontawesome) format("svg");
                unicode-range: U+f0e7, U+f185, U+f2dc, U+f6c3-f6c4, U+f72e, U+f732-f735, U+f737-f750, U+f752, U+f754-f758, U+f75a, U+f75c, U+f75e-f761, U+f763-f76e, U+f771-f776, U+10f0e7, U+10f185, U+10f2dc, U+10f6c3-10f6c4, U+10f72e, U+10f732-10f735, U+10f737-10f750, U+10f752, U+10f754-10f758, U+10f75a, U+10f75c, U+10f75e-10f761, U+10f763-10f76e, U+10f771-10f776
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.0.svg#fontawesome) format("svg");
                unicode-range: U+f06b, U+f5b7, U+f77d, U+f77f, U+f781-f782, U+f788, U+f78a-f78c, U+f78e-f78f, U+f792-f796, U+f79a-f7a1, U+f7a3-f7a4, U+f7a7-f7a8, U+f7aa, U+f7ac-f7ae, U+f7b4-f7b6, U+f7b8, U+f7bd-f7be, U+f7c1-f7c3, U+f7c5, U+f7c7-f7d2, U+f7d4, U+f7d7-f7d8, U+f7da-f7dc, U+f7de, U+f7e2, U+10f06b, U+10f5b7, U+10f77d, U+10f77f, U+10f781-10f782, U+10f788, U+10f78a-10f78c, U+10f78e-10f78f, U+10f792-10f796, U+10f79a-10f7a1, U+10f7a3-10f7a4, U+10f7a7-10f7a8, U+10f7aa, U+10f7ac-10f7ae, U+10f7b4-10f7b6, U+10f7b8, U+10f7bd-10f7be, U+10f7c1-10f7c3, U+10f7c5, U+10f7c7-10f7d2, U+10f7d4, U+10f7d7-10f7d8, U+10f7da-10f7dc, U+10f7de, U+10f7e2
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.1.svg#fontawesome) format("svg");
                unicode-range: U+f071, U+10f071
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.6.3.svg#fontawesome) format("svg");
                unicode-range: U+f7e4, U+10f7e4
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.0.svg#fontawesome) format("svg");
                unicode-range: U+f00a, U+f015, U+f06e, U+f070, U+f1e4, U+f2a0, U+f377, U+f470, U+f49c, U+f49e, U+f4c9, U+f6d6-f6d7, U+f705, U+f725, U+f77e, U+f780, U+f7e5-f7e7, U+f7e9-f7f0, U+f7f2-f7fc, U+f7fe, U+f800-f802, U+f804-f805, U+f807-f80f, U+f811-f812, U+f814-f818, U+f81b, U+f81e-f823, U+f825-f827, U+f82c-f82e, U+f830-f833, U+10f00a, U+10f015, U+10f06e, U+10f070, U+10f1e4, U+10f2a0, U+10f377, U+10f470, U+10f49c, U+10f49e, U+10f4c9, U+10f6d6-10f6d7, U+10f705, U+10f725, U+10f77e, U+10f780, U+10f7e5-10f7e7, U+10f7e9-10f7f0, U+10f7f2-10f7fc, U+10f7fe, U+10f800-10f802, U+10f804-10f805, U+10f807-10f80f, U+10f811-10f812, U+10f814-10f818, U+10f81b, U+10f81e-10f823, U+10f825-10f827, U+10f82c-10f82e, U+10f830-10f833
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.7.1.svg#fontawesome) format("svg");
                unicode-range: U+f7f1, U+10f7f1
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.0.svg#fontawesome) format("svg");
                unicode-range: U+f01e, U+f021, U+f026, U+f076, U+f12d, U+f31e, U+f356, U+f45f, U+f5b0, U+f83e, U+10f01e, U+10f021, U+10f026, U+10f076, U+10f12d, U+10f31e, U+10f356, U+10f45f, U+10f5b0, U+10f83e
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.8.2.svg#fontawesome) format("svg");
                unicode-range: U+f560, U+10f560
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.9.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.9.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.9.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.9.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.9.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.9.0.svg#fontawesome) format("svg");
                unicode-range: U+f036-f03c, U+f0ae, U+f0ca-f0cd, U+f15d-f15e, U+f160-f163, U+f1dd, U+f313-f315, U+f34e, U+f439-f448, U+f502, U+f677, U+f843-f855, U+f858-f85e, U+f860-f862, U+f864, U+f866-f878, U+f87a, U+f87c-f87d, U+f880-f892, U+f897-f89b, U+10f036-10f03c, U+10f0ae, U+10f0ca-10f0cd, U+10f15d-10f15e, U+10f160-10f163, U+10f1dd, U+10f313-10f315, U+10f34e, U+10f439-10f448, U+10f502, U+10f677, U+10f843-10f855, U+10f858-10f85e, U+10f860-10f862, U+10f864, U+10f866-10f878, U+10f87a, U+10f87c-10f87d, U+10f880-10f892, U+10f897-10f89b
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.1.svg#fontawesome) format("svg");
                unicode-range: U+f000, U+f012, U+f029, U+f03e, U+f06d, U+f075, U+f07b, U+f083-f084, U+f0a0, U+f11e, U+f140, U+f19d, U+f20a, U+f247-f248, U+f251-f254, U+f25d, U+f275, U+f27a, U+f2c2, U+f2d1, U+f302, U+f310-f311, U+f34d, U+f3a5, U+f435, U+f454, U+f456, U+f476, U+f47f-f480, U+f52f, U+f534, U+f561, U+f578, U+f591, U+f5db, U+f5e7, U+f5f6, U+f611, U+f613, U+f654, U+f681-f682, U+f68c-f693, U+f6be, U+f6da, U+f6e4, U+f6ed, U+f6ef-f6f0, U+f6f4, U+f6fa-f6fb, U+f6fe, U+f72c, U+f751, U+f759, U+f75b, U+f779, U+f77c, U+f786-f787, U+f7ab, U+f7b2, U+f7b7, U+f7e8, U+f813, U+f85f, U+f863, U+f87b, U+f89c-f89d, U+10f000, U+10f012, U+10f029, U+10f03e, U+10f06d, U+10f075, U+10f07b, U+10f083-10f084, U+10f0a0, U+10f11e, U+10f140, U+10f19d, U+10f20a, U+10f247-10f248, U+10f251-10f254, U+10f25d, U+10f275, U+10f27a, U+10f2c2, U+10f2d1, U+10f302, U+10f310-10f311, U+10f34d, U+10f3a5, U+10f435, U+10f454, U+10f456, U+10f476, U+10f47f-10f480, U+10f52f, U+10f534, U+10f561, U+10f578, U+10f591, U+10f5db, U+10f5e7, U+10f5f6, U+10f611, U+10f613, U+10f654, U+10f681-10f682, U+10f68c-10f693, U+10f6be, U+10f6da, U+10f6e4, U+10f6ed, U+10f6ef-10f6f0, U+10f6f4, U+10f6fa-10f6fb, U+10f6fe, U+10f72c, U+10f751, U+10f759, U+10f75b, U+10f779, U+10f77c, U+10f786-10f787, U+10f7ab, U+10f7b2, U+10f7b7, U+10f7e8, U+10f813, U+10f85f, U+10f863, U+10f87b, U+10f89c-10f89d
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.10.2.svg#fontawesome) format("svg");
                unicode-range: U+f004-f005, U+f02c, U+f02e, U+f031-f035, U+f04b-f04d, U+f056, U+f073, U+f08d, U+f095, U+f0a3, U+f0c5, U+f0c7-f0c8, U+f0dc-f0de, U+f0e0, U+f110-f111, U+f129-f12c, U+f132-f133, U+f144-f145, U+f15b-f15c, U+f164-f165, U+f193, U+f197, U+f1ab, U+f1c1-f1c9, U+f1ce, U+f1dc, U+f1f8-f1f9, U+f219, U+f249, U+f271-f274, U+f29a, U+f29e, U+f2a7, U+f2b6, U+f2e1, U+f2e3-f2e5, U+f2ec-f2ed, U+f2f2, U+f2f4, U+f2fa-f2fc, U+f306, U+f312, U+f316, U+f31a, U+f31c, U+f327, U+f333-f335, U+f3f4, U+f3ff, U+f45c, U+f460, U+f462, U+f477-f478, U+f497, U+f4ba, U+f4d3, U+f54c, U+f553, U+f559, U+f56c-f574, U+f5bf, U+f5c1, U+f5f3, U+f630-f632, U+f634, U+f63e, U+f641, U+f659-f65c, U+f696, U+f6a0, U+f6b4, U+f6bd, U+f6dd, U+f706, U+f708-f709, U+f70d-f710, U+f714, U+f71e-f71f, U+f736, U+f76f-f770, U+f777, U+f783-f784, U+f7a9, U+f7c4, U+f7d5, U+f7d9, U+f7dd, U+f7fd, U+f81c-f81d, U+f824, U+f828-f82a, U+f856-f857, U+f865, U+f879, U+f87e, U+f893-f896, U+10f004-10f005, U+10f02c, U+10f02e, U+10f031-10f035, U+10f04b-10f04d, U+10f056, U+10f073, U+10f08d, U+10f095, U+10f0a3, U+10f0c5, U+10f0c7-10f0c8, U+10f0dc-10f0de, U+10f0e0, U+10f110-10f111, U+10f129-10f12c, U+10f132-10f133, U+10f144-10f145, U+10f15b-10f15c, U+10f164-10f165, U+10f193, U+10f197, U+10f1ab, U+10f1c1-10f1c9, U+10f1ce, U+10f1dc, U+10f1f8-10f1f9, U+10f219, U+10f249, U+10f271-10f274, U+10f29a, U+10f29e, U+10f2a7, U+10f2b6, U+10f2e1, U+10f2e3-10f2e5, U+10f2ec-10f2ed, U+10f2f2, U+10f2f4, U+10f2fa-10f2fc, U+10f306, U+10f312, U+10f316, U+10f31a, U+10f31c, U+10f327, U+10f333-10f335, U+10f3f4, U+10f3ff, U+10f45c, U+10f460, U+10f462, U+10f477-10f478, U+10f497, U+10f4ba, U+10f4d3, U+10f54c, U+10f553, U+10f559, U+10f56c-10f574, U+10f5bf, U+10f5c1, U+10f5f3, U+10f630-10f632, U+10f634, U+10f63e, U+10f641, U+10f659-10f65c, U+10f696, U+10f6a0, U+10f6b4, U+10f6bd, U+10f6dd, U+10f706, U+10f708-10f709, U+10f70d-10f710, U+10f714, U+10f71e-10f71f, U+10f736, U+10f76f-10f770, U+10f777, U+10f783-10f784, U+10f7a9, U+10f7c4, U+10f7d5, U+10f7d9, U+10f7dd, U+10f7fd, U+10f81c-10f81d, U+10f824, U+10f828-10f82a, U+10f856-10f857, U+10f865, U+10f879, U+10f87e, U+10f893-10f896
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.0.svg#fontawesome) format("svg");
                unicode-range: U+f001, U+f02f, U+f042, U+f08e, U+f091, U+f0f3, U+f104-f105, U+f11b, U+f13d, U+f149, U+f1ac, U+f1ec, U+f223, U+f225, U+f22a-f22c, U+f24d, U+f26c, U+f29d, U+f2eb, U+f2ee, U+f2f3, U+f300, U+f307, U+f323-f324, U+f338, U+f33d, U+f35d, U+f48a, U+f4c0, U+f569, U+f5dc, U+f5eb, U+f601, U+f61b, U+f64c, U+f664, U+f66a, U+f68a, U+f6c0-f6c1, U+f6df-f6e1, U+f6e8, U+f6f9, U+f70c, U+f7a6, U+f81a, U+f89f-f8a5, U+f8a7-f8b6, U+f8b8-f8b9, U+f8bb-f8c9, U+f8cb-f8d1, U+f8d3, U+f8d5-f8dd, U+f8df-f8e0, U+f8e2-f8e7, U+f8e9-f8ed, U+f8ef-f8f2, U+10f001, U+10f02f, U+10f042, U+10f08e, U+10f091, U+10f0f3, U+10f104-10f105, U+10f11b, U+10f13d, U+10f149, U+10f1ac, U+10f1ec, U+10f223, U+10f225, U+10f22a-10f22c, U+10f24d, U+10f26c, U+10f29d, U+10f2eb, U+10f2ee, U+10f2f3, U+10f300, U+10f307, U+10f323-10f324, U+10f338, U+10f33d, U+10f35d, U+10f48a, U+10f4c0, U+10f569, U+10f5dc, U+10f5eb, U+10f601, U+10f61b, U+10f64c, U+10f664, U+10f66a, U+10f68a, U+10f6c0-10f6c1, U+10f6df-10f6e1, U+10f6e8, U+10f6f9, U+10f70c, U+10f7a6, U+10f81a, U+10f89f-10f8a5, U+10f8a7-10f8b6, U+10f8b8-10f8b9, U+10f8bb-10f8c9, U+10f8cb-10f8d1, U+10f8d3, U+10f8d5-10f8dd, U+10f8df-10f8e0, U+10f8e2-10f8e7, U+10f8e9-10f8ed, U+10f8ef-10f8f2
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.1.svg#fontawesome) format("svg");
                unicode-range: U+f00d, U+f048, U+f051, U+f0ac, U+f0b0, U+f118-f11a, U+f148, U+f14e, U+f155, U+f186, U+f19c, U+f1eb, U+f21a, U+f221, U+f22d, U+f2bd, U+f2e8, U+f2f8, U+f354, U+f357, U+f433-f434, U+f436, U+f44e, U+f45e, U+f4c7, U+f4da, U+f4e3, U+f51f, U+f54e, U+f556, U+f567, U+f579-f57a, U+f57c-f585, U+f587, U+f589-f58a, U+f58c, U+f596-f59c, U+f5a4-f5a5, U+f5b3-f5b4, U+f5b8, U+f5c0, U+f5c2-f5c3, U+f5c8, U+f5ce, U+f5de, U+f5e6, U+f5ec, U+f602, U+f615-f616, U+f622, U+f648-f649, U+f67c, U+f69a, U+f6aa-f6ab, U+f6ad, U+f7a2, U+f7a5, U+f7b9-f7ba, U+f7ff, U+f803, U+f806, U+f810, U+f819, U+f82b, U+f87f, U+f8de, U+f8ee, U+10f00d, U+10f048, U+10f051, U+10f0ac, U+10f0b0, U+10f118-10f11a, U+10f148, U+10f14e, U+10f155, U+10f186, U+10f19c, U+10f1eb, U+10f21a, U+10f221, U+10f22d, U+10f2bd, U+10f2e8, U+10f2f8, U+10f354, U+10f357, U+10f433-10f434, U+10f436, U+10f44e, U+10f45e, U+10f4c7, U+10f4da, U+10f4e3, U+10f51f, U+10f54e, U+10f556, U+10f567, U+10f579-10f57a, U+10f57c-10f585, U+10f587, U+10f589-10f58a, U+10f58c, U+10f596-10f59c, U+10f5a4-10f5a5, U+10f5b3-10f5b4, U+10f5b8, U+10f5c0, U+10f5c2-10f5c3, U+10f5c8, U+10f5ce, U+10f5de, U+10f5e6, U+10f5ec, U+10f602, U+10f615-10f616, U+10f622, U+10f648-10f649, U+10f67c, U+10f69a, U+10f6aa-10f6ab, U+10f6ad, U+10f7a2, U+10f7a5, U+10f7b9-10f7ba, U+10f7ff, U+10f803, U+10f806, U+10f810, U+10f819, U+10f82b, U+10f87f, U+10f8de, U+10f8ee
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.11.2.svg#fontawesome) format("svg");
                unicode-range: U+f488, U+f8b7, U+f8f3, U+10f488, U+10f8b7, U+10f8f3
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.0.svg#fontawesome) format("svg");
                unicode-range: U+f135, U+f1e6, U+f259, U+f2cc-f2cd, U+f422, U+f424, U+f515-f516, U+f544, U+f58b, U+f5d2-f5d3, U+f61f, U+f657-f658, U+f666, U+f672, U+f6d3-f6d4, U+f753, U+f762, U+f7bf-f7c0, U+f82f, U+f8ba, U+f8d4, U+f8f4-f8ff, U+10f135, U+10f1e6, U+10f259, U+10f2cc-10f2cd, U+10f422, U+10f424, U+10f515-10f516, U+10f544, U+10f58b, U+10f5d2-10f5d3, U+10f61f, U+10f657-10f658, U+10f666, U+10f672, U+10f6d3-10f6d4, U+10f753, U+10f762, U+10f7bf-10f7c0, U+10f82f, U+10f8ba, U+10f8d4, U+10f8f4-10f8ff
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.12.1.svg#fontawesome) format("svg");
                unicode-range: U+f017, U+f317-f319, U+f65e, U+f6c6, U+10f017, U+10f317-10f319, U+10f65e, U+10f6c6
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.13.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.13.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.13.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.13.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.13.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.13.0.svg#fontawesome) format("svg");
                unicode-range: U+f4c1, U+10f4c1
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.14.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.14.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.14.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.14.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.14.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.14.0.svg#fontawesome) format("svg");
                unicode-range: U+e000-e006, U+e008-e012, U+e014-e019, U+e01b-e01d, U+e01f-e048, U+e04a-e051, U+e053-e054, U+e058-e076, U+10e000-10e006, U+10e008-10e012, U+10e014-10e019, U+10e01b-10e01d, U+10e01f-10e048, U+10e04a-10e051, U+10e053-10e054, U+10e058-10e076
            }

            @font-face {
                font-family: "Font Awesome 5 Duotone";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.15.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.15.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.15.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.15.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.15.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-duotone-900-5.15.1.svg#fontawesome) format("svg");
                unicode-range: U+e085-e086, U+10e085-10e086
            }

            .fad {
                position: relative;
                font-family: "Font Awesome 5 Duotone";
                font-weight: 900
            }

            .fad:before {
                position: absolute;
                color: var(--fa-primary-color, inherit);
                opacity: 1;
                opacity: var(--fa-primary-opacity, 1)
            }

            .fad:after {
                color: var(--fa-secondary-color, inherit)
            }

            .fa-swap-opacity .fad:before,
            .fad.fa-swap-opacity:before,
            .fad:after {
                opacity: .4;
                opacity: var(--fa-secondary-opacity, .4)
            }

            .fa-swap-opacity .fad:after,
            .fad.fa-swap-opacity:after {
                opacity: 1;
                opacity: var(--fa-primary-opacity, 1)
            }

            .fad.fa-inverse {
                color: #fff
            }

            .fad.fa-stack-1x,
            .fad.fa-stack-2x {
                position: absolute
            }

            .fad.fa-fw:before,
            .fad.fa-stack-1x:before,
            .fad.fa-stack-2x:before {
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%)
            }

            .fad.fa-abacus:after {
                content: "\10f640"
            }

            .fad.fa-acorn:after {
                content: "\10f6ae"
            }

            .fad.fa-ad:after {
                content: "\10f641"
            }

            .fad.fa-address-book:after {
                content: "\10f2b9"
            }

            .fad.fa-address-card:after {
                content: "\10f2bb"
            }

            .fad.fa-adjust:after {
                content: "\10f042"
            }

            .fad.fa-air-conditioner:after {
                content: "\10f8f4"
            }

            .fad.fa-air-freshener:after {
                content: "\10f5d0"
            }

            .fad.fa-alarm-clock:after {
                content: "\10f34e"
            }

            .fad.fa-alarm-exclamation:after {
                content: "\10f843"
            }

            .fad.fa-alarm-plus:after {
                content: "\10f844"
            }

            .fad.fa-alarm-snooze:after {
                content: "\10f845"
            }

            .fad.fa-album:after {
                content: "\10f89f"
            }

            .fad.fa-album-collection:after {
                content: "\10f8a0"
            }

            .fad.fa-alicorn:after {
                content: "\10f6b0"
            }

            .fad.fa-alien:after {
                content: "\10f8f5"
            }

            .fad.fa-alien-monster:after {
                content: "\10f8f6"
            }

            .fad.fa-align-center:after {
                content: "\10f037"
            }

            .fad.fa-align-justify:after {
                content: "\10f039"
            }

            .fad.fa-align-left:after {
                content: "\10f036"
            }

            .fad.fa-align-right:after {
                content: "\10f038"
            }

            .fad.fa-align-slash:after {
                content: "\10f846"
            }

            .fad.fa-allergies:after {
                content: "\10f461"
            }

            .fad.fa-ambulance:after {
                content: "\10f0f9"
            }

            .fad.fa-american-sign-language-interpreting:after {
                content: "\10f2a3"
            }

            .fad.fa-amp-guitar:after {
                content: "\10f8a1"
            }

            .fad.fa-analytics:after {
                content: "\10f643"
            }

            .fad.fa-anchor:after {
                content: "\10f13d"
            }

            .fad.fa-angel:after {
                content: "\10f779"
            }

            .fad.fa-angle-double-down:after {
                content: "\10f103"
            }

            .fad.fa-angle-double-left:after {
                content: "\10f100"
            }

            .fad.fa-angle-double-right:after {
                content: "\10f101"
            }

            .fad.fa-angle-double-up:after {
                content: "\10f102"
            }

            .fad.fa-angle-down:after {
                content: "\10f107"
            }

            .fad.fa-angle-left:after {
                content: "\10f104"
            }

            .fad.fa-angle-right:after {
                content: "\10f105"
            }

            .fad.fa-angle-up:after {
                content: "\10f106"
            }

            .fad.fa-angry:after {
                content: "\10f556"
            }

            .fad.fa-ankh:after {
                content: "\10f644"
            }

            .fad.fa-apple-alt:after {
                content: "\10f5d1"
            }

            .fad.fa-apple-crate:after {
                content: "\10f6b1"
            }

            .fad.fa-archive:after {
                content: "\10f187"
            }

            .fad.fa-archway:after {
                content: "\10f557"
            }

            .fad.fa-arrow-alt-circle-down:after {
                content: "\10f358"
            }

            .fad.fa-arrow-alt-circle-left:after {
                content: "\10f359"
            }

            .fad.fa-arrow-alt-circle-right:after {
                content: "\10f35a"
            }

            .fad.fa-arrow-alt-circle-up:after {
                content: "\10f35b"
            }

            .fad.fa-arrow-alt-down:after {
                content: "\10f354"
            }

            .fad.fa-arrow-alt-from-bottom:after {
                content: "\10f346"
            }

            .fad.fa-arrow-alt-from-left:after {
                content: "\10f347"
            }

            .fad.fa-arrow-alt-from-right:after {
                content: "\10f348"
            }

            .fad.fa-arrow-alt-from-top:after {
                content: "\10f349"
            }

            .fad.fa-arrow-alt-left:after {
                content: "\10f355"
            }

            .fad.fa-arrow-alt-right:after {
                content: "\10f356"
            }

            .fad.fa-arrow-alt-square-down:after {
                content: "\10f350"
            }

            .fad.fa-arrow-alt-square-left:after {
                content: "\10f351"
            }

            .fad.fa-arrow-alt-square-right:after {
                content: "\10f352"
            }

            .fad.fa-arrow-alt-square-up:after {
                content: "\10f353"
            }

            .fad.fa-arrow-alt-to-bottom:after {
                content: "\10f34a"
            }

            .fad.fa-arrow-alt-to-left:after {
                content: "\10f34b"
            }

            .fad.fa-arrow-alt-to-right:after {
                content: "\10f34c"
            }

            .fad.fa-arrow-alt-to-top:after {
                content: "\10f34d"
            }

            .fad.fa-arrow-alt-up:after {
                content: "\10f357"
            }

            .fad.fa-arrow-circle-down:after {
                content: "\10f0ab"
            }

            .fad.fa-arrow-circle-left:after {
                content: "\10f0a8"
            }

            .fad.fa-arrow-circle-right:after {
                content: "\10f0a9"
            }

            .fad.fa-arrow-circle-up:after {
                content: "\10f0aa"
            }

            .fad.fa-arrow-down:after {
                content: "\10f063"
            }

            .fad.fa-arrow-from-bottom:after {
                content: "\10f342"
            }

            .fad.fa-arrow-from-left:after {
                content: "\10f343"
            }

            .fad.fa-arrow-from-right:after {
                content: "\10f344"
            }

            .fad.fa-arrow-from-top:after {
                content: "\10f345"
            }

            .fad.fa-arrow-left:after {
                content: "\10f060"
            }

            .fad.fa-arrow-right:after {
                content: "\10f061"
            }

            .fad.fa-arrow-square-down:after {
                content: "\10f339"
            }

            .fad.fa-arrow-square-left:after {
                content: "\10f33a"
            }

            .fad.fa-arrow-square-right:after {
                content: "\10f33b"
            }

            .fad.fa-arrow-square-up:after {
                content: "\10f33c"
            }

            .fad.fa-arrow-to-bottom:after {
                content: "\10f33d"
            }

            .fad.fa-arrow-to-left:after {
                content: "\10f33e"
            }

            .fad.fa-arrow-to-right:after {
                content: "\10f340"
            }

            .fad.fa-arrow-to-top:after {
                content: "\10f341"
            }

            .fad.fa-arrow-up:after {
                content: "\10f062"
            }

            .fad.fa-arrows:after {
                content: "\10f047"
            }

            .fad.fa-arrows-alt:after {
                content: "\10f0b2"
            }

            .fad.fa-arrows-alt-h:after {
                content: "\10f337"
            }

            .fad.fa-arrows-alt-v:after {
                content: "\10f338"
            }

            .fad.fa-arrows-h:after {
                content: "\10f07e"
            }

            .fad.fa-arrows-v:after {
                content: "\10f07d"
            }

            .fad.fa-assistive-listening-systems:after {
                content: "\10f2a2"
            }

            .fad.fa-asterisk:after {
                content: "\10f069"
            }

            .fad.fa-at:after {
                content: "\10f1fa"
            }

            .fad.fa-atlas:after {
                content: "\10f558"
            }

            .fad.fa-atom:after {
                content: "\10f5d2"
            }

            .fad.fa-atom-alt:after {
                content: "\10f5d3"
            }

            .fad.fa-audio-description:after {
                content: "\10f29e"
            }

            .fad.fa-award:after {
                content: "\10f559"
            }

            .fad.fa-axe:after {
                content: "\10f6b2"
            }

            .fad.fa-axe-battle:after {
                content: "\10f6b3"
            }

            .fad.fa-baby:after {
                content: "\10f77c"
            }

            .fad.fa-baby-carriage:after {
                content: "\10f77d"
            }

            .fad.fa-backpack:after {
                content: "\10f5d4"
            }

            .fad.fa-backspace:after {
                content: "\10f55a"
            }

            .fad.fa-backward:after {
                content: "\10f04a"
            }

            .fad.fa-bacon:after {
                content: "\10f7e5"
            }

            .fad.fa-bacteria:after {
                content: "\10e059"
            }

            .fad.fa-bacterium:after {
                content: "\10e05a"
            }

            .fad.fa-badge:after {
                content: "\10f335"
            }

            .fad.fa-badge-check:after {
                content: "\10f336"
            }

            .fad.fa-badge-dollar:after {
                content: "\10f645"
            }

            .fad.fa-badge-percent:after {
                content: "\10f646"
            }

            .fad.fa-badge-sheriff:after {
                content: "\10f8a2"
            }

            .fad.fa-badger-honey:after {
                content: "\10f6b4"
            }

            .fad.fa-bags-shopping:after {
                content: "\10f847"
            }

            .fad.fa-bahai:after {
                content: "\10f666"
            }

            .fad.fa-balance-scale:after {
                content: "\10f24e"
            }

            .fad.fa-balance-scale-left:after {
                content: "\10f515"
            }

            .fad.fa-balance-scale-right:after {
                content: "\10f516"
            }

            .fad.fa-ball-pile:after {
                content: "\10f77e"
            }

            .fad.fa-ballot:after {
                content: "\10f732"
            }

            .fad.fa-ballot-check:after {
                content: "\10f733"
            }

            .fad.fa-ban:after {
                content: "\10f05e"
            }

            .fad.fa-band-aid:after {
                content: "\10f462"
            }

            .fad.fa-banjo:after {
                content: "\10f8a3"
            }

            .fad.fa-barcode:after {
                content: "\10f02a"
            }

            .fad.fa-barcode-alt:after {
                content: "\10f463"
            }

            .fad.fa-barcode-read:after {
                content: "\10f464"
            }

            .fad.fa-barcode-scan:after {
                content: "\10f465"
            }

            .fad.fa-bars:after {
                content: "\10f0c9"
            }

            .fad.fa-baseball:after {
                content: "\10f432"
            }

            .fad.fa-baseball-ball:after {
                content: "\10f433"
            }

            .fad.fa-basketball-ball:after {
                content: "\10f434"
            }

            .fad.fa-basketball-hoop:after {
                content: "\10f435"
            }

            .fad.fa-bat:after {
                content: "\10f6b5"
            }

            .fad.fa-bath:after {
                content: "\10f2cd"
            }

            .fad.fa-battery-bolt:after {
                content: "\10f376"
            }

            .fad.fa-battery-empty:after {
                content: "\10f244"
            }

            .fad.fa-battery-full:after {
                content: "\10f240"
            }

            .fad.fa-battery-half:after {
                content: "\10f242"
            }

            .fad.fa-battery-quarter:after {
                content: "\10f243"
            }

            .fad.fa-battery-slash:after {
                content: "\10f377"
            }

            .fad.fa-battery-three-quarters:after {
                content: "\10f241"
            }

            .fad.fa-bed:after {
                content: "\10f236"
            }

            .fad.fa-bed-alt:after {
                content: "\10f8f7"
            }

            .fad.fa-bed-bunk:after {
                content: "\10f8f8"
            }

            .fad.fa-bed-empty:after {
                content: "\10f8f9"
            }

            .fad.fa-beer:after {
                content: "\10f0fc"
            }

            .fad.fa-bell:after {
                content: "\10f0f3"
            }

            .fad.fa-bell-exclamation:after {
                content: "\10f848"
            }

            .fad.fa-bell-on:after {
                content: "\10f8fa"
            }

            .fad.fa-bell-plus:after {
                content: "\10f849"
            }

            .fad.fa-bell-school:after {
                content: "\10f5d5"
            }

            .fad.fa-bell-school-slash:after {
                content: "\10f5d6"
            }

            .fad.fa-bell-slash:after {
                content: "\10f1f6"
            }

            .fad.fa-bells:after {
                content: "\10f77f"
            }

            .fad.fa-betamax:after {
                content: "\10f8a4"
            }

            .fad.fa-bezier-curve:after {
                content: "\10f55b"
            }

            .fad.fa-bible:after {
                content: "\10f647"
            }

            .fad.fa-bicycle:after {
                content: "\10f206"
            }

            .fad.fa-biking:after {
                content: "\10f84a"
            }

            .fad.fa-biking-mountain:after {
                content: "\10f84b"
            }

            .fad.fa-binoculars:after {
                content: "\10f1e5"
            }

            .fad.fa-biohazard:after {
                content: "\10f780"
            }

            .fad.fa-birthday-cake:after {
                content: "\10f1fd"
            }

            .fad.fa-blanket:after {
                content: "\10f498"
            }

            .fad.fa-blender:after {
                content: "\10f517"
            }

            .fad.fa-blender-phone:after {
                content: "\10f6b6"
            }

            .fad.fa-blind:after {
                content: "\10f29d"
            }

            .fad.fa-blinds:after {
                content: "\10f8fb"
            }

            .fad.fa-blinds-open:after {
                content: "\10f8fc"
            }

            .fad.fa-blinds-raised:after {
                content: "\10f8fd"
            }

            .fad.fa-blog:after {
                content: "\10f781"
            }

            .fad.fa-bold:after {
                content: "\10f032"
            }

            .fad.fa-bolt:after {
                content: "\10f0e7"
            }

            .fad.fa-bomb:after {
                content: "\10f1e2"
            }

            .fad.fa-bone:after {
                content: "\10f5d7"
            }

            .fad.fa-bone-break:after {
                content: "\10f5d8"
            }

            .fad.fa-bong:after {
                content: "\10f55c"
            }

            .fad.fa-book:after {
                content: "\10f02d"
            }

            .fad.fa-book-alt:after {
                content: "\10f5d9"
            }

            .fad.fa-book-dead:after {
                content: "\10f6b7"
            }

            .fad.fa-book-heart:after {
                content: "\10f499"
            }

            .fad.fa-book-medical:after {
                content: "\10f7e6"
            }

            .fad.fa-book-open:after {
                content: "\10f518"
            }

            .fad.fa-book-reader:after {
                content: "\10f5da"
            }

            .fad.fa-book-spells:after {
                content: "\10f6b8"
            }

            .fad.fa-book-user:after {
                content: "\10f7e7"
            }

            .fad.fa-bookmark:after {
                content: "\10f02e"
            }

            .fad.fa-books:after {
                content: "\10f5db"
            }

            .fad.fa-books-medical:after {
                content: "\10f7e8"
            }

            .fad.fa-boombox:after {
                content: "\10f8a5"
            }

            .fad.fa-boot:after {
                content: "\10f782"
            }

            .fad.fa-booth-curtain:after {
                content: "\10f734"
            }

            .fad.fa-border-all:after {
                content: "\10f84c"
            }

            .fad.fa-border-bottom:after {
                content: "\10f84d"
            }

            .fad.fa-border-center-h:after {
                content: "\10f89c"
            }

            .fad.fa-border-center-v:after {
                content: "\10f89d"
            }

            .fad.fa-border-inner:after {
                content: "\10f84e"
            }

            .fad.fa-border-left:after {
                content: "\10f84f"
            }

            .fad.fa-border-none:after {
                content: "\10f850"
            }

            .fad.fa-border-outer:after {
                content: "\10f851"
            }

            .fad.fa-border-right:after {
                content: "\10f852"
            }

            .fad.fa-border-style:after {
                content: "\10f853"
            }

            .fad.fa-border-style-alt:after {
                content: "\10f854"
            }

            .fad.fa-border-top:after {
                content: "\10f855"
            }

            .fad.fa-bow-arrow:after {
                content: "\10f6b9"
            }

            .fad.fa-bowling-ball:after {
                content: "\10f436"
            }

            .fad.fa-bowling-pins:after {
                content: "\10f437"
            }

            .fad.fa-box:after {
                content: "\10f466"
            }

            .fad.fa-box-alt:after {
                content: "\10f49a"
            }

            .fad.fa-box-ballot:after {
                content: "\10f735"
            }

            .fad.fa-box-check:after {
                content: "\10f467"
            }

            .fad.fa-box-fragile:after {
                content: "\10f49b"
            }

            .fad.fa-box-full:after {
                content: "\10f49c"
            }

            .fad.fa-box-heart:after {
                content: "\10f49d"
            }

            .fad.fa-box-open:after {
                content: "\10f49e"
            }

            .fad.fa-box-tissue:after {
                content: "\10e05b"
            }

            .fad.fa-box-up:after {
                content: "\10f49f"
            }

            .fad.fa-box-usd:after {
                content: "\10f4a0"
            }

            .fad.fa-boxes:after {
                content: "\10f468"
            }

            .fad.fa-boxes-alt:after {
                content: "\10f4a1"
            }

            .fad.fa-boxing-glove:after {
                content: "\10f438"
            }

            .fad.fa-brackets:after {
                content: "\10f7e9"
            }

            .fad.fa-brackets-curly:after {
                content: "\10f7ea"
            }

            .fad.fa-braille:after {
                content: "\10f2a1"
            }

            .fad.fa-brain:after {
                content: "\10f5dc"
            }

            .fad.fa-bread-loaf:after {
                content: "\10f7eb"
            }

            .fad.fa-bread-slice:after {
                content: "\10f7ec"
            }

            .fad.fa-briefcase:after {
                content: "\10f0b1"
            }

            .fad.fa-briefcase-medical:after {
                content: "\10f469"
            }

            .fad.fa-bring-forward:after {
                content: "\10f856"
            }

            .fad.fa-bring-front:after {
                content: "\10f857"
            }

            .fad.fa-broadcast-tower:after {
                content: "\10f519"
            }

            .fad.fa-broom:after {
                content: "\10f51a"
            }

            .fad.fa-browser:after {
                content: "\10f37e"
            }

            .fad.fa-brush:after {
                content: "\10f55d"
            }

            .fad.fa-bug:after {
                content: "\10f188"
            }

            .fad.fa-building:after {
                content: "\10f1ad"
            }

            .fad.fa-bullhorn:after {
                content: "\10f0a1"
            }

            .fad.fa-bullseye:after {
                content: "\10f140"
            }

            .fad.fa-bullseye-arrow:after {
                content: "\10f648"
            }

            .fad.fa-bullseye-pointer:after {
                content: "\10f649"
            }

            .fad.fa-burger-soda:after {
                content: "\10f858"
            }

            .fad.fa-burn:after {
                content: "\10f46a"
            }

            .fad.fa-burrito:after {
                content: "\10f7ed"
            }

            .fad.fa-bus:after {
                content: "\10f207"
            }

            .fad.fa-bus-alt:after {
                content: "\10f55e"
            }

            .fad.fa-bus-school:after {
                content: "\10f5dd"
            }

            .fad.fa-business-time:after {
                content: "\10f64a"
            }

            .fad.fa-cabinet-filing:after {
                content: "\10f64b"
            }

            .fad.fa-cactus:after {
                content: "\10f8a7"
            }

            .fad.fa-calculator:after {
                content: "\10f1ec"
            }

            .fad.fa-calculator-alt:after {
                content: "\10f64c"
            }

            .fad.fa-calendar:after {
                content: "\10f133"
            }

            .fad.fa-calendar-alt:after {
                content: "\10f073"
            }

            .fad.fa-calendar-check:after {
                content: "\10f274"
            }

            .fad.fa-calendar-day:after {
                content: "\10f783"
            }

            .fad.fa-calendar-edit:after {
                content: "\10f333"
            }

            .fad.fa-calendar-exclamation:after {
                content: "\10f334"
            }

            .fad.fa-calendar-minus:after {
                content: "\10f272"
            }

            .fad.fa-calendar-plus:after {
                content: "\10f271"
            }

            .fad.fa-calendar-star:after {
                content: "\10f736"
            }

            .fad.fa-calendar-times:after {
                content: "\10f273"
            }

            .fad.fa-calendar-week:after {
                content: "\10f784"
            }

            .fad.fa-camcorder:after {
                content: "\10f8a8"
            }

            .fad.fa-camera:after {
                content: "\10f030"
            }

            .fad.fa-camera-alt:after {
                content: "\10f332"
            }

            .fad.fa-camera-home:after {
                content: "\10f8fe"
            }

            .fad.fa-camera-movie:after {
                content: "\10f8a9"
            }

            .fad.fa-camera-polaroid:after {
                content: "\10f8aa"
            }

            .fad.fa-camera-retro:after {
                content: "\10f083"
            }

            .fad.fa-campfire:after {
                content: "\10f6ba"
            }

            .fad.fa-campground:after {
                content: "\10f6bb"
            }

            .fad.fa-candle-holder:after {
                content: "\10f6bc"
            }

            .fad.fa-candy-cane:after {
                content: "\10f786"
            }

            .fad.fa-candy-corn:after {
                content: "\10f6bd"
            }

            .fad.fa-cannabis:after {
                content: "\10f55f"
            }

            .fad.fa-capsules:after {
                content: "\10f46b"
            }

            .fad.fa-car:after {
                content: "\10f1b9"
            }

            .fad.fa-car-alt:after {
                content: "\10f5de"
            }

            .fad.fa-car-battery:after {
                content: "\10f5df"
            }

            .fad.fa-car-building:after {
                content: "\10f859"
            }

            .fad.fa-car-bump:after {
                content: "\10f5e0"
            }

            .fad.fa-car-bus:after {
                content: "\10f85a"
            }

            .fad.fa-car-crash:after {
                content: "\10f5e1"
            }

            .fad.fa-car-garage:after {
                content: "\10f5e2"
            }

            .fad.fa-car-mechanic:after {
                content: "\10f5e3"
            }

            .fad.fa-car-side:after {
                content: "\10f5e4"
            }

            .fad.fa-car-tilt:after {
                content: "\10f5e5"
            }

            .fad.fa-car-wash:after {
                content: "\10f5e6"
            }

            .fad.fa-caravan:after {
                content: "\10f8ff"
            }

            .fad.fa-caravan-alt:after {
                content: "\10e000"
            }

            .fad.fa-caret-circle-down:after {
                content: "\10f32d"
            }

            .fad.fa-caret-circle-left:after {
                content: "\10f32e"
            }

            .fad.fa-caret-circle-right:after {
                content: "\10f330"
            }

            .fad.fa-caret-circle-up:after {
                content: "\10f331"
            }

            .fad.fa-caret-down:after {
                content: "\10f0d7"
            }

            .fad.fa-caret-left:after {
                content: "\10f0d9"
            }

            .fad.fa-caret-right:after {
                content: "\10f0da"
            }

            .fad.fa-caret-square-down:after {
                content: "\10f150"
            }

            .fad.fa-caret-square-left:after {
                content: "\10f191"
            }

            .fad.fa-caret-square-right:after {
                content: "\10f152"
            }

            .fad.fa-caret-square-up:after {
                content: "\10f151"
            }

            .fad.fa-caret-up:after {
                content: "\10f0d8"
            }

            .fad.fa-carrot:after {
                content: "\10f787"
            }

            .fad.fa-cars:after {
                content: "\10f85b"
            }

            .fad.fa-cart-arrow-down:after {
                content: "\10f218"
            }

            .fad.fa-cart-plus:after {
                content: "\10f217"
            }

            .fad.fa-cash-register:after {
                content: "\10f788"
            }

            .fad.fa-cassette-tape:after {
                content: "\10f8ab"
            }

            .fad.fa-cat:after {
                content: "\10f6be"
            }

            .fad.fa-cat-space:after {
                content: "\10e001"
            }

            .fad.fa-cauldron:after {
                content: "\10f6bf"
            }

            .fad.fa-cctv:after {
                content: "\10f8ac"
            }

            .fad.fa-certificate:after {
                content: "\10f0a3"
            }

            .fad.fa-chair:after {
                content: "\10f6c0"
            }

            .fad.fa-chair-office:after {
                content: "\10f6c1"
            }

            .fad.fa-chalkboard:after {
                content: "\10f51b"
            }

            .fad.fa-chalkboard-teacher:after {
                content: "\10f51c"
            }

            .fad.fa-charging-station:after {
                content: "\10f5e7"
            }

            .fad.fa-chart-area:after {
                content: "\10f1fe"
            }

            .fad.fa-chart-bar:after {
                content: "\10f080"
            }

            .fad.fa-chart-line:after {
                content: "\10f201"
            }

            .fad.fa-chart-line-down:after {
                content: "\10f64d"
            }

            .fad.fa-chart-network:after {
                content: "\10f78a"
            }

            .fad.fa-chart-pie:after {
                content: "\10f200"
            }

            .fad.fa-chart-pie-alt:after {
                content: "\10f64e"
            }

            .fad.fa-chart-scatter:after {
                content: "\10f7ee"
            }

            .fad.fa-check:after {
                content: "\10f00c"
            }

            .fad.fa-check-circle:after {
                content: "\10f058"
            }

            .fad.fa-check-double:after {
                content: "\10f560"
            }

            .fad.fa-check-square:after {
                content: "\10f14a"
            }

            .fad.fa-cheese:after {
                content: "\10f7ef"
            }

            .fad.fa-cheese-swiss:after {
                content: "\10f7f0"
            }

            .fad.fa-cheeseburger:after {
                content: "\10f7f1"
            }

            .fad.fa-chess:after {
                content: "\10f439"
            }

            .fad.fa-chess-bishop:after {
                content: "\10f43a"
            }

            .fad.fa-chess-bishop-alt:after {
                content: "\10f43b"
            }

            .fad.fa-chess-board:after {
                content: "\10f43c"
            }

            .fad.fa-chess-clock:after {
                content: "\10f43d"
            }

            .fad.fa-chess-clock-alt:after {
                content: "\10f43e"
            }

            .fad.fa-chess-king:after {
                content: "\10f43f"
            }

            .fad.fa-chess-king-alt:after {
                content: "\10f440"
            }

            .fad.fa-chess-knight:after {
                content: "\10f441"
            }

            .fad.fa-chess-knight-alt:after {
                content: "\10f442"
            }

            .fad.fa-chess-pawn:after {
                content: "\10f443"
            }

            .fad.fa-chess-pawn-alt:after {
                content: "\10f444"
            }

            .fad.fa-chess-queen:after {
                content: "\10f445"
            }

            .fad.fa-chess-queen-alt:after {
                content: "\10f446"
            }

            .fad.fa-chess-rook:after {
                content: "\10f447"
            }

            .fad.fa-chess-rook-alt:after {
                content: "\10f448"
            }

            .fad.fa-chevron-circle-down:after {
                content: "\10f13a"
            }

            .fad.fa-chevron-circle-left:after {
                content: "\10f137"
            }

            .fad.fa-chevron-circle-right:after {
                content: "\10f138"
            }

            .fad.fa-chevron-circle-up:after {
                content: "\10f139"
            }

            .fad.fa-chevron-double-down:after {
                content: "\10f322"
            }

            .fad.fa-chevron-double-left:after {
                content: "\10f323"
            }

            .fad.fa-chevron-double-right:after {
                content: "\10f324"
            }

            .fad.fa-chevron-double-up:after {
                content: "\10f325"
            }

            .fad.fa-chevron-down:after {
                content: "\10f078"
            }

            .fad.fa-chevron-left:after {
                content: "\10f053"
            }

            .fad.fa-chevron-right:after {
                content: "\10f054"
            }

            .fad.fa-chevron-square-down:after {
                content: "\10f329"
            }

            .fad.fa-chevron-square-left:after {
                content: "\10f32a"
            }

            .fad.fa-chevron-square-right:after {
                content: "\10f32b"
            }

            .fad.fa-chevron-square-up:after {
                content: "\10f32c"
            }

            .fad.fa-chevron-up:after {
                content: "\10f077"
            }

            .fad.fa-child:after {
                content: "\10f1ae"
            }

            .fad.fa-chimney:after {
                content: "\10f78b"
            }

            .fad.fa-church:after {
                content: "\10f51d"
            }

            .fad.fa-circle:after {
                content: "\10f111"
            }

            .fad.fa-circle-notch:after {
                content: "\10f1ce"
            }

            .fad.fa-city:after {
                content: "\10f64f"
            }

            .fad.fa-clarinet:after {
                content: "\10f8ad"
            }

            .fad.fa-claw-marks:after {
                content: "\10f6c2"
            }

            .fad.fa-clinic-medical:after {
                content: "\10f7f2"
            }

            .fad.fa-clipboard:after {
                content: "\10f328"
            }

            .fad.fa-clipboard-check:after {
                content: "\10f46c"
            }

            .fad.fa-clipboard-list:after {
                content: "\10f46d"
            }

            .fad.fa-clipboard-list-check:after {
                content: "\10f737"
            }

            .fad.fa-clipboard-prescription:after {
                content: "\10f5e8"
            }

            .fad.fa-clipboard-user:after {
                content: "\10f7f3"
            }

            .fad.fa-clock:after {
                content: "\10f017"
            }

            .fad.fa-clone:after {
                content: "\10f24d"
            }

            .fad.fa-closed-captioning:after {
                content: "\10f20a"
            }

            .fad.fa-cloud:after {
                content: "\10f0c2"
            }

            .fad.fa-cloud-download:after {
                content: "\10f0ed"
            }

            .fad.fa-cloud-download-alt:after {
                content: "\10f381"
            }

            .fad.fa-cloud-drizzle:after {
                content: "\10f738"
            }

            .fad.fa-cloud-hail:after {
                content: "\10f739"
            }

            .fad.fa-cloud-hail-mixed:after {
                content: "\10f73a"
            }

            .fad.fa-cloud-meatball:after {
                content: "\10f73b"
            }

            .fad.fa-cloud-moon:after {
                content: "\10f6c3"
            }

            .fad.fa-cloud-moon-rain:after {
                content: "\10f73c"
            }

            .fad.fa-cloud-music:after {
                content: "\10f8ae"
            }

            .fad.fa-cloud-rain:after {
                content: "\10f73d"
            }

            .fad.fa-cloud-rainbow:after {
                content: "\10f73e"
            }

            .fad.fa-cloud-showers:after {
                content: "\10f73f"
            }

            .fad.fa-cloud-showers-heavy:after {
                content: "\10f740"
            }

            .fad.fa-cloud-sleet:after {
                content: "\10f741"
            }

            .fad.fa-cloud-snow:after {
                content: "\10f742"
            }

            .fad.fa-cloud-sun:after {
                content: "\10f6c4"
            }

            .fad.fa-cloud-sun-rain:after {
                content: "\10f743"
            }

            .fad.fa-cloud-upload:after {
                content: "\10f0ee"
            }

            .fad.fa-cloud-upload-alt:after {
                content: "\10f382"
            }

            .fad.fa-clouds:after {
                content: "\10f744"
            }

            .fad.fa-clouds-moon:after {
                content: "\10f745"
            }

            .fad.fa-clouds-sun:after {
                content: "\10f746"
            }

            .fad.fa-club:after {
                content: "\10f327"
            }

            .fad.fa-cocktail:after {
                content: "\10f561"
            }

            .fad.fa-code:after {
                content: "\10f121"
            }

            .fad.fa-code-branch:after {
                content: "\10f126"
            }

            .fad.fa-code-commit:after {
                content: "\10f386"
            }

            .fad.fa-code-merge:after {
                content: "\10f387"
            }

            .fad.fa-coffee:after {
                content: "\10f0f4"
            }

            .fad.fa-coffee-pot:after {
                content: "\10e002"
            }

            .fad.fa-coffee-togo:after {
                content: "\10f6c5"
            }

            .fad.fa-coffin:after {
                content: "\10f6c6"
            }

            .fad.fa-coffin-cross:after {
                content: "\10e051"
            }

            .fad.fa-cog:after {
                content: "\10f013"
            }

            .fad.fa-cogs:after {
                content: "\10f085"
            }

            .fad.fa-coin:after {
                content: "\10f85c"
            }

            .fad.fa-coins:after {
                content: "\10f51e"
            }

            .fad.fa-columns:after {
                content: "\10f0db"
            }

            .fad.fa-comet:after {
                content: "\10e003"
            }

            .fad.fa-comment:after {
                content: "\10f075"
            }

            .fad.fa-comment-alt:after {
                content: "\10f27a"
            }

            .fad.fa-comment-alt-check:after {
                content: "\10f4a2"
            }

            .fad.fa-comment-alt-dollar:after {
                content: "\10f650"
            }

            .fad.fa-comment-alt-dots:after {
                content: "\10f4a3"
            }

            .fad.fa-comment-alt-edit:after {
                content: "\10f4a4"
            }

            .fad.fa-comment-alt-exclamation:after {
                content: "\10f4a5"
            }

            .fad.fa-comment-alt-lines:after {
                content: "\10f4a6"
            }

            .fad.fa-comment-alt-medical:after {
                content: "\10f7f4"
            }

            .fad.fa-comment-alt-minus:after {
                content: "\10f4a7"
            }

            .fad.fa-comment-alt-music:after {
                content: "\10f8af"
            }

            .fad.fa-comment-alt-plus:after {
                content: "\10f4a8"
            }

            .fad.fa-comment-alt-slash:after {
                content: "\10f4a9"
            }

            .fad.fa-comment-alt-smile:after {
                content: "\10f4aa"
            }

            .fad.fa-comment-alt-times:after {
                content: "\10f4ab"
            }

            .fad.fa-comment-check:after {
                content: "\10f4ac"
            }

            .fad.fa-comment-dollar:after {
                content: "\10f651"
            }

            .fad.fa-comment-dots:after {
                content: "\10f4ad"
            }

            .fad.fa-comment-edit:after {
                content: "\10f4ae"
            }

            .fad.fa-comment-exclamation:after {
                content: "\10f4af"
            }

            .fad.fa-comment-lines:after {
                content: "\10f4b0"
            }

            .fad.fa-comment-medical:after {
                content: "\10f7f5"
            }

            .fad.fa-comment-minus:after {
                content: "\10f4b1"
            }

            .fad.fa-comment-music:after {
                content: "\10f8b0"
            }

            .fad.fa-comment-plus:after {
                content: "\10f4b2"
            }

            .fad.fa-comment-slash:after {
                content: "\10f4b3"
            }

            .fad.fa-comment-smile:after {
                content: "\10f4b4"
            }

            .fad.fa-comment-times:after {
                content: "\10f4b5"
            }

            .fad.fa-comments:after {
                content: "\10f086"
            }

            .fad.fa-comments-alt:after {
                content: "\10f4b6"
            }

            .fad.fa-comments-alt-dollar:after {
                content: "\10f652"
            }

            .fad.fa-comments-dollar:after {
                content: "\10f653"
            }

            .fad.fa-compact-disc:after {
                content: "\10f51f"
            }

            .fad.fa-compass:after {
                content: "\10f14e"
            }

            .fad.fa-compass-slash:after {
                content: "\10f5e9"
            }

            .fad.fa-compress:after {
                content: "\10f066"
            }

            .fad.fa-compress-alt:after {
                content: "\10f422"
            }

            .fad.fa-compress-arrows-alt:after {
                content: "\10f78c"
            }

            .fad.fa-compress-wide:after {
                content: "\10f326"
            }

            .fad.fa-computer-classic:after {
                content: "\10f8b1"
            }

            .fad.fa-computer-speaker:after {
                content: "\10f8b2"
            }

            .fad.fa-concierge-bell:after {
                content: "\10f562"
            }

            .fad.fa-construction:after {
                content: "\10f85d"
            }

            .fad.fa-container-storage:after {
                content: "\10f4b7"
            }

            .fad.fa-conveyor-belt:after {
                content: "\10f46e"
            }

            .fad.fa-conveyor-belt-alt:after {
                content: "\10f46f"
            }

            .fad.fa-cookie:after {
                content: "\10f563"
            }

            .fad.fa-cookie-bite:after {
                content: "\10f564"
            }

            .fad.fa-copy:after {
                content: "\10f0c5"
            }

            .fad.fa-copyright:after {
                content: "\10f1f9"
            }

            .fad.fa-corn:after {
                content: "\10f6c7"
            }

            .fad.fa-couch:after {
                content: "\10f4b8"
            }

            .fad.fa-cow:after {
                content: "\10f6c8"
            }

            .fad.fa-cowbell:after {
                content: "\10f8b3"
            }

            .fad.fa-cowbell-more:after {
                content: "\10f8b4"
            }

            .fad.fa-credit-card:after {
                content: "\10f09d"
            }

            .fad.fa-credit-card-blank:after {
                content: "\10f389"
            }

            .fad.fa-credit-card-front:after {
                content: "\10f38a"
            }

            .fad.fa-cricket:after {
                content: "\10f449"
            }

            .fad.fa-croissant:after {
                content: "\10f7f6"
            }

            .fad.fa-crop:after {
                content: "\10f125"
            }

            .fad.fa-crop-alt:after {
                content: "\10f565"
            }

            .fad.fa-cross:after {
                content: "\10f654"
            }

            .fad.fa-crosshairs:after {
                content: "\10f05b"
            }

            .fad.fa-crow:after {
                content: "\10f520"
            }

            .fad.fa-crown:after {
                content: "\10f521"
            }

            .fad.fa-crutch:after {
                content: "\10f7f7"
            }

            .fad.fa-crutches:after {
                content: "\10f7f8"
            }

            .fad.fa-cube:after {
                content: "\10f1b2"
            }

            .fad.fa-cubes:after {
                content: "\10f1b3"
            }

            .fad.fa-curling:after {
                content: "\10f44a"
            }

            .fad.fa-cut:after {
                content: "\10f0c4"
            }

            .fad.fa-dagger:after {
                content: "\10f6cb"
            }

            .fad.fa-database:after {
                content: "\10f1c0"
            }

            .fad.fa-deaf:after {
                content: "\10f2a4"
            }

            .fad.fa-debug:after {
                content: "\10f7f9"
            }

            .fad.fa-deer:after {
                content: "\10f78e"
            }

            .fad.fa-deer-rudolph:after {
                content: "\10f78f"
            }

            .fad.fa-democrat:after {
                content: "\10f747"
            }

            .fad.fa-desktop:after {
                content: "\10f108"
            }

            .fad.fa-desktop-alt:after {
                content: "\10f390"
            }

            .fad.fa-dewpoint:after {
                content: "\10f748"
            }

            .fad.fa-dharmachakra:after {
                content: "\10f655"
            }

            .fad.fa-diagnoses:after {
                content: "\10f470"
            }

            .fad.fa-diamond:after {
                content: "\10f219"
            }

            .fad.fa-dice:after {
                content: "\10f522"
            }

            .fad.fa-dice-d10:after {
                content: "\10f6cd"
            }

            .fad.fa-dice-d12:after {
                content: "\10f6ce"
            }

            .fad.fa-dice-d20:after {
                content: "\10f6cf"
            }

            .fad.fa-dice-d4:after {
                content: "\10f6d0"
            }

            .fad.fa-dice-d6:after {
                content: "\10f6d1"
            }

            .fad.fa-dice-d8:after {
                content: "\10f6d2"
            }

            .fad.fa-dice-five:after {
                content: "\10f523"
            }

            .fad.fa-dice-four:after {
                content: "\10f524"
            }

            .fad.fa-dice-one:after {
                content: "\10f525"
            }

            .fad.fa-dice-six:after {
                content: "\10f526"
            }

            .fad.fa-dice-three:after {
                content: "\10f527"
            }

            .fad.fa-dice-two:after {
                content: "\10f528"
            }

            .fad.fa-digging:after {
                content: "\10f85e"
            }

            .fad.fa-digital-tachograph:after {
                content: "\10f566"
            }

            .fad.fa-diploma:after {
                content: "\10f5ea"
            }

            .fad.fa-directions:after {
                content: "\10f5eb"
            }

            .fad.fa-disc-drive:after {
                content: "\10f8b5"
            }

            .fad.fa-disease:after {
                content: "\10f7fa"
            }

            .fad.fa-divide:after {
                content: "\10f529"
            }

            .fad.fa-dizzy:after {
                content: "\10f567"
            }

            .fad.fa-dna:after {
                content: "\10f471"
            }

            .fad.fa-do-not-enter:after {
                content: "\10f5ec"
            }

            .fad.fa-dog:after {
                content: "\10f6d3"
            }

            .fad.fa-dog-leashed:after {
                content: "\10f6d4"
            }

            .fad.fa-dollar-sign:after {
                content: "\10f155"
            }

            .fad.fa-dolly:after {
                content: "\10f472"
            }

            .fad.fa-dolly-empty:after {
                content: "\10f473"
            }

            .fad.fa-dolly-flatbed:after {
                content: "\10f474"
            }

            .fad.fa-dolly-flatbed-alt:after {
                content: "\10f475"
            }

            .fad.fa-dolly-flatbed-empty:after {
                content: "\10f476"
            }

            .fad.fa-donate:after {
                content: "\10f4b9"
            }

            .fad.fa-door-closed:after {
                content: "\10f52a"
            }

            .fad.fa-door-open:after {
                content: "\10f52b"
            }

            .fad.fa-dot-circle:after {
                content: "\10f192"
            }

            .fad.fa-dove:after {
                content: "\10f4ba"
            }

            .fad.fa-download:after {
                content: "\10f019"
            }

            .fad.fa-drafting-compass:after {
                content: "\10f568"
            }

            .fad.fa-dragon:after {
                content: "\10f6d5"
            }

            .fad.fa-draw-circle:after {
                content: "\10f5ed"
            }

            .fad.fa-draw-polygon:after {
                content: "\10f5ee"
            }

            .fad.fa-draw-square:after {
                content: "\10f5ef"
            }

            .fad.fa-dreidel:after {
                content: "\10f792"
            }

            .fad.fa-drone:after {
                content: "\10f85f"
            }

            .fad.fa-drone-alt:after {
                content: "\10f860"
            }

            .fad.fa-drum:after {
                content: "\10f569"
            }

            .fad.fa-drum-steelpan:after {
                content: "\10f56a"
            }

            .fad.fa-drumstick:after {
                content: "\10f6d6"
            }

            .fad.fa-drumstick-bite:after {
                content: "\10f6d7"
            }

            .fad.fa-dryer:after {
                content: "\10f861"
            }

            .fad.fa-dryer-alt:after {
                content: "\10f862"
            }

            .fad.fa-duck:after {
                content: "\10f6d8"
            }

            .fad.fa-dumbbell:after {
                content: "\10f44b"
            }

            .fad.fa-dumpster:after {
                content: "\10f793"
            }

            .fad.fa-dumpster-fire:after {
                content: "\10f794"
            }

            .fad.fa-dungeon:after {
                content: "\10f6d9"
            }

            .fad.fa-ear:after {
                content: "\10f5f0"
            }

            .fad.fa-ear-muffs:after {
                content: "\10f795"
            }

            .fad.fa-eclipse:after {
                content: "\10f749"
            }

            .fad.fa-eclipse-alt:after {
                content: "\10f74a"
            }

            .fad.fa-edit:after {
                content: "\10f044"
            }

            .fad.fa-egg:after {
                content: "\10f7fb"
            }

            .fad.fa-egg-fried:after {
                content: "\10f7fc"
            }

            .fad.fa-eject:after {
                content: "\10f052"
            }

            .fad.fa-elephant:after {
                content: "\10f6da"
            }

            .fad.fa-ellipsis-h:after {
                content: "\10f141"
            }

            .fad.fa-ellipsis-h-alt:after {
                content: "\10f39b"
            }

            .fad.fa-ellipsis-v:after {
                content: "\10f142"
            }

            .fad.fa-ellipsis-v-alt:after {
                content: "\10f39c"
            }

            .fad.fa-empty-set:after {
                content: "\10f656"
            }

            .fad.fa-engine-warning:after {
                content: "\10f5f2"
            }

            .fad.fa-envelope:after {
                content: "\10f0e0"
            }

            .fad.fa-envelope-open:after {
                content: "\10f2b6"
            }

            .fad.fa-envelope-open-dollar:after {
                content: "\10f657"
            }

            .fad.fa-envelope-open-text:after {
                content: "\10f658"
            }

            .fad.fa-envelope-square:after {
                content: "\10f199"
            }

            .fad.fa-equals:after {
                content: "\10f52c"
            }

            .fad.fa-eraser:after {
                content: "\10f12d"
            }

            .fad.fa-ethernet:after {
                content: "\10f796"
            }

            .fad.fa-euro-sign:after {
                content: "\10f153"
            }

            .fad.fa-exchange:after {
                content: "\10f0ec"
            }

            .fad.fa-exchange-alt:after {
                content: "\10f362"
            }

            .fad.fa-exclamation:after {
                content: "\10f12a"
            }

            .fad.fa-exclamation-circle:after {
                content: "\10f06a"
            }

            .fad.fa-exclamation-square:after {
                content: "\10f321"
            }

            .fad.fa-exclamation-triangle:after {
                content: "\10f071"
            }

            .fad.fa-expand:after {
                content: "\10f065"
            }

            .fad.fa-expand-alt:after {
                content: "\10f424"
            }

            .fad.fa-expand-arrows:after {
                content: "\10f31d"
            }

            .fad.fa-expand-arrows-alt:after {
                content: "\10f31e"
            }

            .fad.fa-expand-wide:after {
                content: "\10f320"
            }

            .fad.fa-external-link:after {
                content: "\10f08e"
            }

            .fad.fa-external-link-alt:after {
                content: "\10f35d"
            }

            .fad.fa-external-link-square:after {
                content: "\10f14c"
            }

            .fad.fa-external-link-square-alt:after {
                content: "\10f360"
            }

            .fad.fa-eye:after {
                content: "\10f06e"
            }

            .fad.fa-eye-dropper:after {
                content: "\10f1fb"
            }

            .fad.fa-eye-evil:after {
                content: "\10f6db"
            }

            .fad.fa-eye-slash:after {
                content: "\10f070"
            }

            .fad.fa-fan:after {
                content: "\10f863"
            }

            .fad.fa-fan-table:after {
                content: "\10e004"
            }

            .fad.fa-farm:after {
                content: "\10f864"
            }

            .fad.fa-fast-backward:after {
                content: "\10f049"
            }

            .fad.fa-fast-forward:after {
                content: "\10f050"
            }

            .fad.fa-faucet:after {
                content: "\10e005"
            }

            .fad.fa-faucet-drip:after {
                content: "\10e006"
            }

            .fad.fa-fax:after {
                content: "\10f1ac"
            }

            .fad.fa-feather:after {
                content: "\10f52d"
            }

            .fad.fa-feather-alt:after {
                content: "\10f56b"
            }

            .fad.fa-female:after {
                content: "\10f182"
            }

            .fad.fa-field-hockey:after {
                content: "\10f44c"
            }

            .fad.fa-fighter-jet:after {
                content: "\10f0fb"
            }

            .fad.fa-file:after {
                content: "\10f15b"
            }

            .fad.fa-file-alt:after {
                content: "\10f15c"
            }

            .fad.fa-file-archive:after {
                content: "\10f1c6"
            }

            .fad.fa-file-audio:after {
                content: "\10f1c7"
            }

            .fad.fa-file-certificate:after {
                content: "\10f5f3"
            }

            .fad.fa-file-chart-line:after {
                content: "\10f659"
            }

            .fad.fa-file-chart-pie:after {
                content: "\10f65a"
            }

            .fad.fa-file-check:after {
                content: "\10f316"
            }

            .fad.fa-file-code:after {
                content: "\10f1c9"
            }

            .fad.fa-file-contract:after {
                content: "\10f56c"
            }

            .fad.fa-file-csv:after {
                content: "\10f6dd"
            }

            .fad.fa-file-download:after {
                content: "\10f56d"
            }

            .fad.fa-file-edit:after {
                content: "\10f31c"
            }

            .fad.fa-file-excel:after {
                content: "\10f1c3"
            }

            .fad.fa-file-exclamation:after {
                content: "\10f31a"
            }

            .fad.fa-file-export:after {
                content: "\10f56e"
            }

            .fad.fa-file-image:after {
                content: "\10f1c5"
            }

            .fad.fa-file-import:after {
                content: "\10f56f"
            }

            .fad.fa-file-invoice:after {
                content: "\10f570"
            }

            .fad.fa-file-invoice-dollar:after {
                content: "\10f571"
            }

            .fad.fa-file-medical:after {
                content: "\10f477"
            }

            .fad.fa-file-medical-alt:after {
                content: "\10f478"
            }

            .fad.fa-file-minus:after {
                content: "\10f318"
            }

            .fad.fa-file-music:after {
                content: "\10f8b6"
            }

            .fad.fa-file-pdf:after {
                content: "\10f1c1"
            }

            .fad.fa-file-plus:after {
                content: "\10f319"
            }

            .fad.fa-file-powerpoint:after {
                content: "\10f1c4"
            }

            .fad.fa-file-prescription:after {
                content: "\10f572"
            }

            .fad.fa-file-search:after {
                content: "\10f865"
            }

            .fad.fa-file-signature:after {
                content: "\10f573"
            }

            .fad.fa-file-spreadsheet:after {
                content: "\10f65b"
            }

            .fad.fa-file-times:after {
                content: "\10f317"
            }

            .fad.fa-file-upload:after {
                content: "\10f574"
            }

            .fad.fa-file-user:after {
                content: "\10f65c"
            }

            .fad.fa-file-video:after {
                content: "\10f1c8"
            }

            .fad.fa-file-word:after {
                content: "\10f1c2"
            }

            .fad.fa-files-medical:after {
                content: "\10f7fd"
            }

            .fad.fa-fill:after {
                content: "\10f575"
            }

            .fad.fa-fill-drip:after {
                content: "\10f576"
            }

            .fad.fa-film:after {
                content: "\10f008"
            }

            .fad.fa-film-alt:after {
                content: "\10f3a0"
            }

            .fad.fa-film-canister:after {
                content: "\10f8b7"
            }

            .fad.fa-filter:after {
                content: "\10f0b0"
            }

            .fad.fa-fingerprint:after {
                content: "\10f577"
            }

            .fad.fa-fire:after {
                content: "\10f06d"
            }

            .fad.fa-fire-alt:after {
                content: "\10f7e4"
            }

            .fad.fa-fire-extinguisher:after {
                content: "\10f134"
            }

            .fad.fa-fire-smoke:after {
                content: "\10f74b"
            }

            .fad.fa-fireplace:after {
                content: "\10f79a"
            }

            .fad.fa-first-aid:after {
                content: "\10f479"
            }

            .fad.fa-fish:after {
                content: "\10f578"
            }

            .fad.fa-fish-cooked:after {
                content: "\10f7fe"
            }

            .fad.fa-fist-raised:after {
                content: "\10f6de"
            }

            .fad.fa-flag:after {
                content: "\10f024"
            }

            .fad.fa-flag-alt:after {
                content: "\10f74c"
            }

            .fad.fa-flag-checkered:after {
                content: "\10f11e"
            }

            .fad.fa-flag-usa:after {
                content: "\10f74d"
            }

            .fad.fa-flame:after {
                content: "\10f6df"
            }

            .fad.fa-flashlight:after {
                content: "\10f8b8"
            }

            .fad.fa-flask:after {
                content: "\10f0c3"
            }

            .fad.fa-flask-poison:after {
                content: "\10f6e0"
            }

            .fad.fa-flask-potion:after {
                content: "\10f6e1"
            }

            .fad.fa-flower:after {
                content: "\10f7ff"
            }

            .fad.fa-flower-daffodil:after {
                content: "\10f800"
            }

            .fad.fa-flower-tulip:after {
                content: "\10f801"
            }

            .fad.fa-flushed:after {
                content: "\10f579"
            }

            .fad.fa-flute:after {
                content: "\10f8b9"
            }

            .fad.fa-flux-capacitor:after {
                content: "\10f8ba"
            }

            .fad.fa-fog:after {
                content: "\10f74e"
            }

            .fad.fa-folder:after {
                content: "\10f07b"
            }

            .fad.fa-folder-download:after {
                content: "\10e053"
            }

            .fad.fa-folder-minus:after {
                content: "\10f65d"
            }

            .fad.fa-folder-open:after {
                content: "\10f07c"
            }

            .fad.fa-folder-plus:after {
                content: "\10f65e"
            }

            .fad.fa-folder-times:after {
                content: "\10f65f"
            }

            .fad.fa-folder-tree:after {
                content: "\10f802"
            }

            .fad.fa-folder-upload:after {
                content: "\10e054"
            }

            .fad.fa-folders:after {
                content: "\10f660"
            }

            .fad.fa-font:after {
                content: "\10f031"
            }

            .fad.fa-font-awesome-logo-full:after {
                content: "\10f4e6"
            }

            .fad.fa-font-case:after {
                content: "\10f866"
            }

            .fad.fa-football-ball:after {
                content: "\10f44e"
            }

            .fad.fa-football-helmet:after {
                content: "\10f44f"
            }

            .fad.fa-forklift:after {
                content: "\10f47a"
            }

            .fad.fa-forward:after {
                content: "\10f04e"
            }

            .fad.fa-fragile:after {
                content: "\10f4bb"
            }

            .fad.fa-french-fries:after {
                content: "\10f803"
            }

            .fad.fa-frog:after {
                content: "\10f52e"
            }

            .fad.fa-frosty-head:after {
                content: "\10f79b"
            }

            .fad.fa-frown:after {
                content: "\10f119"
            }

            .fad.fa-frown-open:after {
                content: "\10f57a"
            }

            .fad.fa-function:after {
                content: "\10f661"
            }

            .fad.fa-funnel-dollar:after {
                content: "\10f662"
            }

            .fad.fa-futbol:after {
                content: "\10f1e3"
            }

            .fad.fa-galaxy:after {
                content: "\10e008"
            }

            .fad.fa-game-board:after {
                content: "\10f867"
            }

            .fad.fa-game-board-alt:after {
                content: "\10f868"
            }

            .fad.fa-game-console-handheld:after {
                content: "\10f8bb"
            }

            .fad.fa-gamepad:after {
                content: "\10f11b"
            }

            .fad.fa-gamepad-alt:after {
                content: "\10f8bc"
            }

            .fad.fa-garage:after {
                content: "\10e009"
            }

            .fad.fa-garage-car:after {
                content: "\10e00a"
            }

            .fad.fa-garage-open:after {
                content: "\10e00b"
            }

            .fad.fa-gas-pump:after {
                content: "\10f52f"
            }

            .fad.fa-gas-pump-slash:after {
                content: "\10f5f4"
            }

            .fad.fa-gavel:after {
                content: "\10f0e3"
            }

            .fad.fa-gem:after {
                content: "\10f3a5"
            }

            .fad.fa-genderless:after {
                content: "\10f22d"
            }

            .fad.fa-ghost:after {
                content: "\10f6e2"
            }

            .fad.fa-gift:after {
                content: "\10f06b"
            }

            .fad.fa-gift-card:after {
                content: "\10f663"
            }

            .fad.fa-gifts:after {
                content: "\10f79c"
            }

            .fad.fa-gingerbread-man:after {
                content: "\10f79d"
            }

            .fad.fa-glass:after {
                content: "\10f804"
            }

            .fad.fa-glass-champagne:after {
                content: "\10f79e"
            }

            .fad.fa-glass-cheers:after {
                content: "\10f79f"
            }

            .fad.fa-glass-citrus:after {
                content: "\10f869"
            }

            .fad.fa-glass-martini:after {
                content: "\10f000"
            }

            .fad.fa-glass-martini-alt:after {
                content: "\10f57b"
            }

            .fad.fa-glass-whiskey:after {
                content: "\10f7a0"
            }

            .fad.fa-glass-whiskey-rocks:after {
                content: "\10f7a1"
            }

            .fad.fa-glasses:after {
                content: "\10f530"
            }

            .fad.fa-glasses-alt:after {
                content: "\10f5f5"
            }

            .fad.fa-globe:after {
                content: "\10f0ac"
            }

            .fad.fa-globe-africa:after {
                content: "\10f57c"
            }

            .fad.fa-globe-americas:after {
                content: "\10f57d"
            }

            .fad.fa-globe-asia:after {
                content: "\10f57e"
            }

            .fad.fa-globe-europe:after {
                content: "\10f7a2"
            }

            .fad.fa-globe-snow:after {
                content: "\10f7a3"
            }

            .fad.fa-globe-stand:after {
                content: "\10f5f6"
            }

            .fad.fa-golf-ball:after {
                content: "\10f450"
            }

            .fad.fa-golf-club:after {
                content: "\10f451"
            }

            .fad.fa-gopuram:after {
                content: "\10f664"
            }

            .fad.fa-graduation-cap:after {
                content: "\10f19d"
            }

            .fad.fa-gramophone:after {
                content: "\10f8bd"
            }

            .fad.fa-greater-than:after {
                content: "\10f531"
            }

            .fad.fa-greater-than-equal:after {
                content: "\10f532"
            }

            .fad.fa-grimace:after {
                content: "\10f57f"
            }

            .fad.fa-grin:after {
                content: "\10f580"
            }

            .fad.fa-grin-alt:after {
                content: "\10f581"
            }

            .fad.fa-grin-beam:after {
                content: "\10f582"
            }

            .fad.fa-grin-beam-sweat:after {
                content: "\10f583"
            }

            .fad.fa-grin-hearts:after {
                content: "\10f584"
            }

            .fad.fa-grin-squint:after {
                content: "\10f585"
            }

            .fad.fa-grin-squint-tears:after {
                content: "\10f586"
            }

            .fad.fa-grin-stars:after {
                content: "\10f587"
            }

            .fad.fa-grin-tears:after {
                content: "\10f588"
            }

            .fad.fa-grin-tongue:after {
                content: "\10f589"
            }

            .fad.fa-grin-tongue-squint:after {
                content: "\10f58a"
            }

            .fad.fa-grin-tongue-wink:after {
                content: "\10f58b"
            }

            .fad.fa-grin-wink:after {
                content: "\10f58c"
            }

            .fad.fa-grip-horizontal:after {
                content: "\10f58d"
            }

            .fad.fa-grip-lines:after {
                content: "\10f7a4"
            }

            .fad.fa-grip-lines-vertical:after {
                content: "\10f7a5"
            }

            .fad.fa-grip-vertical:after {
                content: "\10f58e"
            }

            .fad.fa-guitar:after {
                content: "\10f7a6"
            }

            .fad.fa-guitar-electric:after {
                content: "\10f8be"
            }

            .fad.fa-guitars:after {
                content: "\10f8bf"
            }

            .fad.fa-h-square:after {
                content: "\10f0fd"
            }

            .fad.fa-h1:after {
                content: "\10f313"
            }

            .fad.fa-h2:after {
                content: "\10f314"
            }

            .fad.fa-h3:after {
                content: "\10f315"
            }

            .fad.fa-h4:after {
                content: "\10f86a"
            }

            .fad.fa-hamburger:after {
                content: "\10f805"
            }

            .fad.fa-hammer:after {
                content: "\10f6e3"
            }

            .fad.fa-hammer-war:after {
                content: "\10f6e4"
            }

            .fad.fa-hamsa:after {
                content: "\10f665"
            }

            .fad.fa-hand-heart:after {
                content: "\10f4bc"
            }

            .fad.fa-hand-holding:after {
                content: "\10f4bd"
            }

            .fad.fa-hand-holding-box:after {
                content: "\10f47b"
            }

            .fad.fa-hand-holding-heart:after {
                content: "\10f4be"
            }

            .fad.fa-hand-holding-magic:after {
                content: "\10f6e5"
            }

            .fad.fa-hand-holding-medical:after {
                content: "\10e05c"
            }

            .fad.fa-hand-holding-seedling:after {
                content: "\10f4bf"
            }

            .fad.fa-hand-holding-usd:after {
                content: "\10f4c0"
            }

            .fad.fa-hand-holding-water:after {
                content: "\10f4c1"
            }

            .fad.fa-hand-lizard:after {
                content: "\10f258"
            }

            .fad.fa-hand-middle-finger:after {
                content: "\10f806"
            }

            .fad.fa-hand-paper:after {
                content: "\10f256"
            }

            .fad.fa-hand-peace:after {
                content: "\10f25b"
            }

            .fad.fa-hand-point-down:after {
                content: "\10f0a7"
            }

            .fad.fa-hand-point-left:after {
                content: "\10f0a5"
            }

            .fad.fa-hand-point-right:after {
                content: "\10f0a4"
            }

            .fad.fa-hand-point-up:after {
                content: "\10f0a6"
            }

            .fad.fa-hand-pointer:after {
                content: "\10f25a"
            }

            .fad.fa-hand-receiving:after {
                content: "\10f47c"
            }

            .fad.fa-hand-rock:after {
                content: "\10f255"
            }

            .fad.fa-hand-scissors:after {
                content: "\10f257"
            }

            .fad.fa-hand-sparkles:after {
                content: "\10e05d"
            }

            .fad.fa-hand-spock:after {
                content: "\10f259"
            }

            .fad.fa-hands:after {
                content: "\10f4c2"
            }

            .fad.fa-hands-heart:after {
                content: "\10f4c3"
            }

            .fad.fa-hands-helping:after {
                content: "\10f4c4"
            }

            .fad.fa-hands-usd:after {
                content: "\10f4c5"
            }

            .fad.fa-hands-wash:after {
                content: "\10e05e"
            }

            .fad.fa-handshake:after {
                content: "\10f2b5"
            }

            .fad.fa-handshake-alt:after {
                content: "\10f4c6"
            }

            .fad.fa-handshake-alt-slash:after {
                content: "\10e05f"
            }

            .fad.fa-handshake-slash:after {
                content: "\10e060"
            }

            .fad.fa-hanukiah:after {
                content: "\10f6e6"
            }

            .fad.fa-hard-hat:after {
                content: "\10f807"
            }

            .fad.fa-hashtag:after {
                content: "\10f292"
            }

            .fad.fa-hat-chef:after {
                content: "\10f86b"
            }

            .fad.fa-hat-cowboy:after {
                content: "\10f8c0"
            }

            .fad.fa-hat-cowboy-side:after {
                content: "\10f8c1"
            }

            .fad.fa-hat-santa:after {
                content: "\10f7a7"
            }

            .fad.fa-hat-winter:after {
                content: "\10f7a8"
            }

            .fad.fa-hat-witch:after {
                content: "\10f6e7"
            }

            .fad.fa-hat-wizard:after {
                content: "\10f6e8"
            }

            .fad.fa-hdd:after {
                content: "\10f0a0"
            }

            .fad.fa-head-side:after {
                content: "\10f6e9"
            }

            .fad.fa-head-side-brain:after {
                content: "\10f808"
            }

            .fad.fa-head-side-cough:after {
                content: "\10e061"
            }

            .fad.fa-head-side-cough-slash:after {
                content: "\10e062"
            }

            .fad.fa-head-side-headphones:after {
                content: "\10f8c2"
            }

            .fad.fa-head-side-mask:after {
                content: "\10e063"
            }

            .fad.fa-head-side-medical:after {
                content: "\10f809"
            }

            .fad.fa-head-side-virus:after {
                content: "\10e064"
            }

            .fad.fa-head-vr:after {
                content: "\10f6ea"
            }

            .fad.fa-heading:after {
                content: "\10f1dc"
            }

            .fad.fa-headphones:after {
                content: "\10f025"
            }

            .fad.fa-headphones-alt:after {
                content: "\10f58f"
            }

            .fad.fa-headset:after {
                content: "\10f590"
            }

            .fad.fa-heart:after {
                content: "\10f004"
            }

            .fad.fa-heart-broken:after {
                content: "\10f7a9"
            }

            .fad.fa-heart-circle:after {
                content: "\10f4c7"
            }

            .fad.fa-heart-rate:after {
                content: "\10f5f8"
            }

            .fad.fa-heart-square:after {
                content: "\10f4c8"
            }

            .fad.fa-heartbeat:after {
                content: "\10f21e"
            }

            .fad.fa-heat:after {
                content: "\10e00c"
            }

            .fad.fa-helicopter:after {
                content: "\10f533"
            }

            .fad.fa-helmet-battle:after {
                content: "\10f6eb"
            }

            .fad.fa-hexagon:after {
                content: "\10f312"
            }

            .fad.fa-highlighter:after {
                content: "\10f591"
            }

            .fad.fa-hiking:after {
                content: "\10f6ec"
            }

            .fad.fa-hippo:after {
                content: "\10f6ed"
            }

            .fad.fa-history:after {
                content: "\10f1da"
            }

            .fad.fa-hockey-mask:after {
                content: "\10f6ee"
            }

            .fad.fa-hockey-puck:after {
                content: "\10f453"
            }

            .fad.fa-hockey-sticks:after {
                content: "\10f454"
            }

            .fad.fa-holly-berry:after {
                content: "\10f7aa"
            }

            .fad.fa-home:after {
                content: "\10f015"
            }

            .fad.fa-home-alt:after {
                content: "\10f80a"
            }

            .fad.fa-home-heart:after {
                content: "\10f4c9"
            }

            .fad.fa-home-lg:after {
                content: "\10f80b"
            }

            .fad.fa-home-lg-alt:after {
                content: "\10f80c"
            }

            .fad.fa-hood-cloak:after {
                content: "\10f6ef"
            }

            .fad.fa-horizontal-rule:after {
                content: "\10f86c"
            }

            .fad.fa-horse:after {
                content: "\10f6f0"
            }

            .fad.fa-horse-head:after {
                content: "\10f7ab"
            }

            .fad.fa-horse-saddle:after {
                content: "\10f8c3"
            }

            .fad.fa-hospital:after {
                content: "\10f0f8"
            }

            .fad.fa-hospital-alt:after {
                content: "\10f47d"
            }

            .fad.fa-hospital-symbol:after {
                content: "\10f47e"
            }

            .fad.fa-hospital-user:after {
                content: "\10f80d"
            }

            .fad.fa-hospitals:after {
                content: "\10f80e"
            }

            .fad.fa-hot-tub:after {
                content: "\10f593"
            }

            .fad.fa-hotdog:after {
                content: "\10f80f"
            }

            .fad.fa-hotel:after {
                content: "\10f594"
            }

            .fad.fa-hourglass:after {
                content: "\10f254"
            }

            .fad.fa-hourglass-end:after {
                content: "\10f253"
            }

            .fad.fa-hourglass-half:after {
                content: "\10f252"
            }

            .fad.fa-hourglass-start:after {
                content: "\10f251"
            }

            .fad.fa-house:after {
                content: "\10e00d"
            }

            .fad.fa-house-damage:after {
                content: "\10f6f1"
            }

            .fad.fa-house-day:after {
                content: "\10e00e"
            }

            .fad.fa-house-flood:after {
                content: "\10f74f"
            }

            .fad.fa-house-leave:after {
                content: "\10e00f"
            }

            .fad.fa-house-night:after {
                content: "\10e010"
            }

            .fad.fa-house-return:after {
                content: "\10e011"
            }

            .fad.fa-house-signal:after {
                content: "\10e012"
            }

            .fad.fa-house-user:after {
                content: "\10e065"
            }

            .fad.fa-hryvnia:after {
                content: "\10f6f2"
            }

            .fad.fa-humidity:after {
                content: "\10f750"
            }

            .fad.fa-hurricane:after {
                content: "\10f751"
            }

            .fad.fa-i-cursor:after {
                content: "\10f246"
            }

            .fad.fa-ice-cream:after {
                content: "\10f810"
            }

            .fad.fa-ice-skate:after {
                content: "\10f7ac"
            }

            .fad.fa-icicles:after {
                content: "\10f7ad"
            }

            .fad.fa-icons:after {
                content: "\10f86d"
            }

            .fad.fa-icons-alt:after {
                content: "\10f86e"
            }

            .fad.fa-id-badge:after {
                content: "\10f2c1"
            }

            .fad.fa-id-card:after {
                content: "\10f2c2"
            }

            .fad.fa-id-card-alt:after {
                content: "\10f47f"
            }

            .fad.fa-igloo:after {
                content: "\10f7ae"
            }

            .fad.fa-image:after {
                content: "\10f03e"
            }

            .fad.fa-image-polaroid:after {
                content: "\10f8c4"
            }

            .fad.fa-images:after {
                content: "\10f302"
            }

            .fad.fa-inbox:after {
                content: "\10f01c"
            }

            .fad.fa-inbox-in:after {
                content: "\10f310"
            }

            .fad.fa-inbox-out:after {
                content: "\10f311"
            }

            .fad.fa-indent:after {
                content: "\10f03c"
            }

            .fad.fa-industry:after {
                content: "\10f275"
            }

            .fad.fa-industry-alt:after {
                content: "\10f3b3"
            }

            .fad.fa-infinity:after {
                content: "\10f534"
            }

            .fad.fa-info:after {
                content: "\10f129"
            }

            .fad.fa-info-circle:after {
                content: "\10f05a"
            }

            .fad.fa-info-square:after {
                content: "\10f30f"
            }

            .fad.fa-inhaler:after {
                content: "\10f5f9"
            }

            .fad.fa-integral:after {
                content: "\10f667"
            }

            .fad.fa-intersection:after {
                content: "\10f668"
            }

            .fad.fa-inventory:after {
                content: "\10f480"
            }

            .fad.fa-island-tropical:after {
                content: "\10f811"
            }

            .fad.fa-italic:after {
                content: "\10f033"
            }

            .fad.fa-jack-o-lantern:after {
                content: "\10f30e"
            }

            .fad.fa-jedi:after {
                content: "\10f669"
            }

            .fad.fa-joint:after {
                content: "\10f595"
            }

            .fad.fa-journal-whills:after {
                content: "\10f66a"
            }

            .fad.fa-joystick:after {
                content: "\10f8c5"
            }

            .fad.fa-jug:after {
                content: "\10f8c6"
            }

            .fad.fa-kaaba:after {
                content: "\10f66b"
            }

            .fad.fa-kazoo:after {
                content: "\10f8c7"
            }

            .fad.fa-kerning:after {
                content: "\10f86f"
            }

            .fad.fa-key:after {
                content: "\10f084"
            }

            .fad.fa-key-skeleton:after {
                content: "\10f6f3"
            }

            .fad.fa-keyboard:after {
                content: "\10f11c"
            }

            .fad.fa-keynote:after {
                content: "\10f66c"
            }

            .fad.fa-khanda:after {
                content: "\10f66d"
            }

            .fad.fa-kidneys:after {
                content: "\10f5fb"
            }

            .fad.fa-kiss:after {
                content: "\10f596"
            }

            .fad.fa-kiss-beam:after {
                content: "\10f597"
            }

            .fad.fa-kiss-wink-heart:after {
                content: "\10f598"
            }

            .fad.fa-kite:after {
                content: "\10f6f4"
            }

            .fad.fa-kiwi-bird:after {
                content: "\10f535"
            }

            .fad.fa-knife-kitchen:after {
                content: "\10f6f5"
            }

            .fad.fa-lambda:after {
                content: "\10f66e"
            }

            .fad.fa-lamp:after {
                content: "\10f4ca"
            }

            .fad.fa-lamp-desk:after {
                content: "\10e014"
            }

            .fad.fa-lamp-floor:after {
                content: "\10e015"
            }

            .fad.fa-landmark:after {
                content: "\10f66f"
            }

            .fad.fa-landmark-alt:after {
                content: "\10f752"
            }

            .fad.fa-language:after {
                content: "\10f1ab"
            }

            .fad.fa-laptop:after {
                content: "\10f109"
            }

            .fad.fa-laptop-code:after {
                content: "\10f5fc"
            }

            .fad.fa-laptop-house:after {
                content: "\10e066"
            }

            .fad.fa-laptop-medical:after {
                content: "\10f812"
            }

            .fad.fa-lasso:after {
                content: "\10f8c8"
            }

            .fad.fa-laugh:after {
                content: "\10f599"
            }

            .fad.fa-laugh-beam:after {
                content: "\10f59a"
            }

            .fad.fa-laugh-squint:after {
                content: "\10f59b"
            }

            .fad.fa-laugh-wink:after {
                content: "\10f59c"
            }

            .fad.fa-layer-group:after {
                content: "\10f5fd"
            }

            .fad.fa-layer-minus:after {
                content: "\10f5fe"
            }

            .fad.fa-layer-plus:after {
                content: "\10f5ff"
            }

            .fad.fa-leaf:after {
                content: "\10f06c"
            }

            .fad.fa-leaf-heart:after {
                content: "\10f4cb"
            }

            .fad.fa-leaf-maple:after {
                content: "\10f6f6"
            }

            .fad.fa-leaf-oak:after {
                content: "\10f6f7"
            }

            .fad.fa-lemon:after {
                content: "\10f094"
            }

            .fad.fa-less-than:after {
                content: "\10f536"
            }

            .fad.fa-less-than-equal:after {
                content: "\10f537"
            }

            .fad.fa-level-down:after {
                content: "\10f149"
            }

            .fad.fa-level-down-alt:after {
                content: "\10f3be"
            }

            .fad.fa-level-up:after {
                content: "\10f148"
            }

            .fad.fa-level-up-alt:after {
                content: "\10f3bf"
            }

            .fad.fa-life-ring:after {
                content: "\10f1cd"
            }

            .fad.fa-light-ceiling:after {
                content: "\10e016"
            }

            .fad.fa-light-switch:after {
                content: "\10e017"
            }

            .fad.fa-light-switch-off:after {
                content: "\10e018"
            }

            .fad.fa-light-switch-on:after {
                content: "\10e019"
            }

            .fad.fa-lightbulb:after {
                content: "\10f0eb"
            }

            .fad.fa-lightbulb-dollar:after {
                content: "\10f670"
            }

            .fad.fa-lightbulb-exclamation:after {
                content: "\10f671"
            }

            .fad.fa-lightbulb-on:after {
                content: "\10f672"
            }

            .fad.fa-lightbulb-slash:after {
                content: "\10f673"
            }

            .fad.fa-lights-holiday:after {
                content: "\10f7b2"
            }

            .fad.fa-line-columns:after {
                content: "\10f870"
            }

            .fad.fa-line-height:after {
                content: "\10f871"
            }

            .fad.fa-link:after {
                content: "\10f0c1"
            }

            .fad.fa-lips:after {
                content: "\10f600"
            }

            .fad.fa-lira-sign:after {
                content: "\10f195"
            }

            .fad.fa-list:after {
                content: "\10f03a"
            }

            .fad.fa-list-alt:after {
                content: "\10f022"
            }

            .fad.fa-list-music:after {
                content: "\10f8c9"
            }

            .fad.fa-list-ol:after {
                content: "\10f0cb"
            }

            .fad.fa-list-ul:after {
                content: "\10f0ca"
            }

            .fad.fa-location:after {
                content: "\10f601"
            }

            .fad.fa-location-arrow:after {
                content: "\10f124"
            }

            .fad.fa-location-circle:after {
                content: "\10f602"
            }

            .fad.fa-location-slash:after {
                content: "\10f603"
            }

            .fad.fa-lock:after {
                content: "\10f023"
            }

            .fad.fa-lock-alt:after {
                content: "\10f30d"
            }

            .fad.fa-lock-open:after {
                content: "\10f3c1"
            }

            .fad.fa-lock-open-alt:after {
                content: "\10f3c2"
            }

            .fad.fa-long-arrow-alt-down:after {
                content: "\10f309"
            }

            .fad.fa-long-arrow-alt-left:after {
                content: "\10f30a"
            }

            .fad.fa-long-arrow-alt-right:after {
                content: "\10f30b"
            }

            .fad.fa-long-arrow-alt-up:after {
                content: "\10f30c"
            }

            .fad.fa-long-arrow-down:after {
                content: "\10f175"
            }

            .fad.fa-long-arrow-left:after {
                content: "\10f177"
            }

            .fad.fa-long-arrow-right:after {
                content: "\10f178"
            }

            .fad.fa-long-arrow-up:after {
                content: "\10f176"
            }

            .fad.fa-loveseat:after {
                content: "\10f4cc"
            }

            .fad.fa-low-vision:after {
                content: "\10f2a8"
            }

            .fad.fa-luchador:after {
                content: "\10f455"
            }

            .fad.fa-luggage-cart:after {
                content: "\10f59d"
            }

            .fad.fa-lungs:after {
                content: "\10f604"
            }

            .fad.fa-lungs-virus:after {
                content: "\10e067"
            }

            .fad.fa-mace:after {
                content: "\10f6f8"
            }

            .fad.fa-magic:after {
                content: "\10f0d0"
            }

            .fad.fa-magnet:after {
                content: "\10f076"
            }

            .fad.fa-mail-bulk:after {
                content: "\10f674"
            }

            .fad.fa-mailbox:after {
                content: "\10f813"
            }

            .fad.fa-male:after {
                content: "\10f183"
            }

            .fad.fa-mandolin:after {
                content: "\10f6f9"
            }

            .fad.fa-map:after {
                content: "\10f279"
            }

            .fad.fa-map-marked:after {
                content: "\10f59f"
            }

            .fad.fa-map-marked-alt:after {
                content: "\10f5a0"
            }

            .fad.fa-map-marker:after {
                content: "\10f041"
            }

            .fad.fa-map-marker-alt:after {
                content: "\10f3c5"
            }

            .fad.fa-map-marker-alt-slash:after {
                content: "\10f605"
            }

            .fad.fa-map-marker-check:after {
                content: "\10f606"
            }

            .fad.fa-map-marker-edit:after {
                content: "\10f607"
            }

            .fad.fa-map-marker-exclamation:after {
                content: "\10f608"
            }

            .fad.fa-map-marker-minus:after {
                content: "\10f609"
            }

            .fad.fa-map-marker-plus:after {
                content: "\10f60a"
            }

            .fad.fa-map-marker-question:after {
                content: "\10f60b"
            }

            .fad.fa-map-marker-slash:after {
                content: "\10f60c"
            }

            .fad.fa-map-marker-smile:after {
                content: "\10f60d"
            }

            .fad.fa-map-marker-times:after {
                content: "\10f60e"
            }

            .fad.fa-map-pin:after {
                content: "\10f276"
            }

            .fad.fa-map-signs:after {
                content: "\10f277"
            }

            .fad.fa-marker:after {
                content: "\10f5a1"
            }

            .fad.fa-mars:after {
                content: "\10f222"
            }

            .fad.fa-mars-double:after {
                content: "\10f227"
            }

            .fad.fa-mars-stroke:after {
                content: "\10f229"
            }

            .fad.fa-mars-stroke-h:after {
                content: "\10f22b"
            }

            .fad.fa-mars-stroke-v:after {
                content: "\10f22a"
            }

            .fad.fa-mask:after {
                content: "\10f6fa"
            }

            .fad.fa-meat:after {
                content: "\10f814"
            }

            .fad.fa-medal:after {
                content: "\10f5a2"
            }

            .fad.fa-medkit:after {
                content: "\10f0fa"
            }

            .fad.fa-megaphone:after {
                content: "\10f675"
            }

            .fad.fa-meh:after {
                content: "\10f11a"
            }

            .fad.fa-meh-blank:after {
                content: "\10f5a4"
            }

            .fad.fa-meh-rolling-eyes:after {
                content: "\10f5a5"
            }

            .fad.fa-memory:after {
                content: "\10f538"
            }

            .fad.fa-menorah:after {
                content: "\10f676"
            }

            .fad.fa-mercury:after {
                content: "\10f223"
            }

            .fad.fa-meteor:after {
                content: "\10f753"
            }

            .fad.fa-microchip:after {
                content: "\10f2db"
            }

            .fad.fa-microphone:after {
                content: "\10f130"
            }

            .fad.fa-microphone-alt:after {
                content: "\10f3c9"
            }

            .fad.fa-microphone-alt-slash:after {
                content: "\10f539"
            }

            .fad.fa-microphone-slash:after {
                content: "\10f131"
            }

            .fad.fa-microphone-stand:after {
                content: "\10f8cb"
            }

            .fad.fa-microscope:after {
                content: "\10f610"
            }

            .fad.fa-microwave:after {
                content: "\10e01b"
            }

            .fad.fa-mind-share:after {
                content: "\10f677"
            }

            .fad.fa-minus:after {
                content: "\10f068"
            }

            .fad.fa-minus-circle:after {
                content: "\10f056"
            }

            .fad.fa-minus-hexagon:after {
                content: "\10f307"
            }

            .fad.fa-minus-octagon:after {
                content: "\10f308"
            }

            .fad.fa-minus-square:after {
                content: "\10f146"
            }

            .fad.fa-mistletoe:after {
                content: "\10f7b4"
            }

            .fad.fa-mitten:after {
                content: "\10f7b5"
            }

            .fad.fa-mobile:after {
                content: "\10f10b"
            }

            .fad.fa-mobile-alt:after {
                content: "\10f3cd"
            }

            .fad.fa-mobile-android:after {
                content: "\10f3ce"
            }

            .fad.fa-mobile-android-alt:after {
                content: "\10f3cf"
            }

            .fad.fa-money-bill:after {
                content: "\10f0d6"
            }

            .fad.fa-money-bill-alt:after {
                content: "\10f3d1"
            }

            .fad.fa-money-bill-wave:after {
                content: "\10f53a"
            }

            .fad.fa-money-bill-wave-alt:after {
                content: "\10f53b"
            }

            .fad.fa-money-check:after {
                content: "\10f53c"
            }

            .fad.fa-money-check-alt:after {
                content: "\10f53d"
            }

            .fad.fa-money-check-edit:after {
                content: "\10f872"
            }

            .fad.fa-money-check-edit-alt:after {
                content: "\10f873"
            }

            .fad.fa-monitor-heart-rate:after {
                content: "\10f611"
            }

            .fad.fa-monkey:after {
                content: "\10f6fb"
            }

            .fad.fa-monument:after {
                content: "\10f5a6"
            }

            .fad.fa-moon:after {
                content: "\10f186"
            }

            .fad.fa-moon-cloud:after {
                content: "\10f754"
            }

            .fad.fa-moon-stars:after {
                content: "\10f755"
            }

            .fad.fa-mortar-pestle:after {
                content: "\10f5a7"
            }

            .fad.fa-mosque:after {
                content: "\10f678"
            }

            .fad.fa-motorcycle:after {
                content: "\10f21c"
            }

            .fad.fa-mountain:after {
                content: "\10f6fc"
            }

            .fad.fa-mountains:after {
                content: "\10f6fd"
            }

            .fad.fa-mouse:after {
                content: "\10f8cc"
            }

            .fad.fa-mouse-alt:after {
                content: "\10f8cd"
            }

            .fad.fa-mouse-pointer:after {
                content: "\10f245"
            }

            .fad.fa-mp3-player:after {
                content: "\10f8ce"
            }

            .fad.fa-mug:after {
                content: "\10f874"
            }

            .fad.fa-mug-hot:after {
                content: "\10f7b6"
            }

            .fad.fa-mug-marshmallows:after {
                content: "\10f7b7"
            }

            .fad.fa-mug-tea:after {
                content: "\10f875"
            }

            .fad.fa-music:after {
                content: "\10f001"
            }

            .fad.fa-music-alt:after {
                content: "\10f8cf"
            }

            .fad.fa-music-alt-slash:after {
                content: "\10f8d0"
            }

            .fad.fa-music-slash:after {
                content: "\10f8d1"
            }

            .fad.fa-narwhal:after {
                content: "\10f6fe"
            }

            .fad.fa-network-wired:after {
                content: "\10f6ff"
            }

            .fad.fa-neuter:after {
                content: "\10f22c"
            }

            .fad.fa-newspaper:after {
                content: "\10f1ea"
            }

            .fad.fa-not-equal:after {
                content: "\10f53e"
            }

            .fad.fa-notes-medical:after {
                content: "\10f481"
            }

            .fad.fa-object-group:after {
                content: "\10f247"
            }

            .fad.fa-object-ungroup:after {
                content: "\10f248"
            }

            .fad.fa-octagon:after {
                content: "\10f306"
            }

            .fad.fa-oil-can:after {
                content: "\10f613"
            }

            .fad.fa-oil-temp:after {
                content: "\10f614"
            }

            .fad.fa-om:after {
                content: "\10f679"
            }

            .fad.fa-omega:after {
                content: "\10f67a"
            }

            .fad.fa-ornament:after {
                content: "\10f7b8"
            }

            .fad.fa-otter:after {
                content: "\10f700"
            }

            .fad.fa-outdent:after {
                content: "\10f03b"
            }

            .fad.fa-outlet:after {
                content: "\10e01c"
            }

            .fad.fa-oven:after {
                content: "\10e01d"
            }

            .fad.fa-overline:after {
                content: "\10f876"
            }

            .fad.fa-page-break:after {
                content: "\10f877"
            }

            .fad.fa-pager:after {
                content: "\10f815"
            }

            .fad.fa-paint-brush:after {
                content: "\10f1fc"
            }

            .fad.fa-paint-brush-alt:after {
                content: "\10f5a9"
            }

            .fad.fa-paint-roller:after {
                content: "\10f5aa"
            }

            .fad.fa-palette:after {
                content: "\10f53f"
            }

            .fad.fa-pallet:after {
                content: "\10f482"
            }

            .fad.fa-pallet-alt:after {
                content: "\10f483"
            }

            .fad.fa-paper-plane:after {
                content: "\10f1d8"
            }

            .fad.fa-paperclip:after {
                content: "\10f0c6"
            }

            .fad.fa-parachute-box:after {
                content: "\10f4cd"
            }

            .fad.fa-paragraph:after {
                content: "\10f1dd"
            }

            .fad.fa-paragraph-rtl:after {
                content: "\10f878"
            }

            .fad.fa-parking:after {
                content: "\10f540"
            }

            .fad.fa-parking-circle:after {
                content: "\10f615"
            }

            .fad.fa-parking-circle-slash:after {
                content: "\10f616"
            }

            .fad.fa-parking-slash:after {
                content: "\10f617"
            }

            .fad.fa-passport:after {
                content: "\10f5ab"
            }

            .fad.fa-pastafarianism:after {
                content: "\10f67b"
            }

            .fad.fa-paste:after {
                content: "\10f0ea"
            }

            .fad.fa-pause:after {
                content: "\10f04c"
            }

            .fad.fa-pause-circle:after {
                content: "\10f28b"
            }

            .fad.fa-paw:after {
                content: "\10f1b0"
            }

            .fad.fa-paw-alt:after {
                content: "\10f701"
            }

            .fad.fa-paw-claws:after {
                content: "\10f702"
            }

            .fad.fa-peace:after {
                content: "\10f67c"
            }

            .fad.fa-pegasus:after {
                content: "\10f703"
            }

            .fad.fa-pen:after {
                content: "\10f304"
            }

            .fad.fa-pen-alt:after {
                content: "\10f305"
            }

            .fad.fa-pen-fancy:after {
                content: "\10f5ac"
            }

            .fad.fa-pen-nib:after {
                content: "\10f5ad"
            }

            .fad.fa-pen-square:after {
                content: "\10f14b"
            }

            .fad.fa-pencil:after {
                content: "\10f040"
            }

            .fad.fa-pencil-alt:after {
                content: "\10f303"
            }

            .fad.fa-pencil-paintbrush:after {
                content: "\10f618"
            }

            .fad.fa-pencil-ruler:after {
                content: "\10f5ae"
            }

            .fad.fa-pennant:after {
                content: "\10f456"
            }

            .fad.fa-people-arrows:after {
                content: "\10e068"
            }

            .fad.fa-people-carry:after {
                content: "\10f4ce"
            }

            .fad.fa-pepper-hot:after {
                content: "\10f816"
            }

            .fad.fa-percent:after {
                content: "\10f295"
            }

            .fad.fa-percentage:after {
                content: "\10f541"
            }

            .fad.fa-person-booth:after {
                content: "\10f756"
            }

            .fad.fa-person-carry:after {
                content: "\10f4cf"
            }

            .fad.fa-person-dolly:after {
                content: "\10f4d0"
            }

            .fad.fa-person-dolly-empty:after {
                content: "\10f4d1"
            }

            .fad.fa-person-sign:after {
                content: "\10f757"
            }

            .fad.fa-phone:after {
                content: "\10f095"
            }

            .fad.fa-phone-alt:after {
                content: "\10f879"
            }

            .fad.fa-phone-laptop:after {
                content: "\10f87a"
            }

            .fad.fa-phone-office:after {
                content: "\10f67d"
            }

            .fad.fa-phone-plus:after {
                content: "\10f4d2"
            }

            .fad.fa-phone-rotary:after {
                content: "\10f8d3"
            }

            .fad.fa-phone-slash:after {
                content: "\10f3dd"
            }

            .fad.fa-phone-square:after {
                content: "\10f098"
            }

            .fad.fa-phone-square-alt:after {
                content: "\10f87b"
            }

            .fad.fa-phone-volume:after {
                content: "\10f2a0"
            }

            .fad.fa-photo-video:after {
                content: "\10f87c"
            }

            .fad.fa-pi:after {
                content: "\10f67e"
            }

            .fad.fa-piano:after {
                content: "\10f8d4"
            }

            .fad.fa-piano-keyboard:after {
                content: "\10f8d5"
            }

            .fad.fa-pie:after {
                content: "\10f705"
            }

            .fad.fa-pig:after {
                content: "\10f706"
            }

            .fad.fa-piggy-bank:after {
                content: "\10f4d3"
            }

            .fad.fa-pills:after {
                content: "\10f484"
            }

            .fad.fa-pizza:after {
                content: "\10f817"
            }

            .fad.fa-pizza-slice:after {
                content: "\10f818"
            }

            .fad.fa-place-of-worship:after {
                content: "\10f67f"
            }

            .fad.fa-plane:after {
                content: "\10f072"
            }

            .fad.fa-plane-alt:after {
                content: "\10f3de"
            }

            .fad.fa-plane-arrival:after {
                content: "\10f5af"
            }

            .fad.fa-plane-departure:after {
                content: "\10f5b0"
            }

            .fad.fa-plane-slash:after {
                content: "\10e069"
            }

            .fad.fa-planet-moon:after {
                content: "\10e01f"
            }

            .fad.fa-planet-ringed:after {
                content: "\10e020"
            }

            .fad.fa-play:after {
                content: "\10f04b"
            }

            .fad.fa-play-circle:after {
                content: "\10f144"
            }

            .fad.fa-plug:after {
                content: "\10f1e6"
            }

            .fad.fa-plus:after {
                content: "\10f067"
            }

            .fad.fa-plus-circle:after {
                content: "\10f055"
            }

            .fad.fa-plus-hexagon:after {
                content: "\10f300"
            }

            .fad.fa-plus-octagon:after {
                content: "\10f301"
            }

            .fad.fa-plus-square:after {
                content: "\10f0fe"
            }

            .fad.fa-podcast:after {
                content: "\10f2ce"
            }

            .fad.fa-podium:after {
                content: "\10f680"
            }

            .fad.fa-podium-star:after {
                content: "\10f758"
            }

            .fad.fa-police-box:after {
                content: "\10e021"
            }

            .fad.fa-poll:after {
                content: "\10f681"
            }

            .fad.fa-poll-h:after {
                content: "\10f682"
            }

            .fad.fa-poll-people:after {
                content: "\10f759"
            }

            .fad.fa-poo:after {
                content: "\10f2fe"
            }

            .fad.fa-poo-storm:after {
                content: "\10f75a"
            }

            .fad.fa-poop:after {
                content: "\10f619"
            }

            .fad.fa-popcorn:after {
                content: "\10f819"
            }

            .fad.fa-portal-enter:after {
                content: "\10e022"
            }

            .fad.fa-portal-exit:after {
                content: "\10e023"
            }

            .fad.fa-portrait:after {
                content: "\10f3e0"
            }

            .fad.fa-pound-sign:after {
                content: "\10f154"
            }

            .fad.fa-power-off:after {
                content: "\10f011"
            }

            .fad.fa-pray:after {
                content: "\10f683"
            }

            .fad.fa-praying-hands:after {
                content: "\10f684"
            }

            .fad.fa-prescription:after {
                content: "\10f5b1"
            }

            .fad.fa-prescription-bottle:after {
                content: "\10f485"
            }

            .fad.fa-prescription-bottle-alt:after {
                content: "\10f486"
            }

            .fad.fa-presentation:after {
                content: "\10f685"
            }

            .fad.fa-print:after {
                content: "\10f02f"
            }

            .fad.fa-print-search:after {
                content: "\10f81a"
            }

            .fad.fa-print-slash:after {
                content: "\10f686"
            }

            .fad.fa-procedures:after {
                content: "\10f487"
            }

            .fad.fa-project-diagram:after {
                content: "\10f542"
            }

            .fad.fa-projector:after {
                content: "\10f8d6"
            }

            .fad.fa-pump-medical:after {
                content: "\10e06a"
            }

            .fad.fa-pump-soap:after {
                content: "\10e06b"
            }

            .fad.fa-pumpkin:after {
                content: "\10f707"
            }

            .fad.fa-puzzle-piece:after {
                content: "\10f12e"
            }

            .fad.fa-qrcode:after {
                content: "\10f029"
            }

            .fad.fa-question:after {
                content: "\10f128"
            }

            .fad.fa-question-circle:after {
                content: "\10f059"
            }

            .fad.fa-question-square:after {
                content: "\10f2fd"
            }

            .fad.fa-quidditch:after {
                content: "\10f458"
            }

            .fad.fa-quote-left:after {
                content: "\10f10d"
            }

            .fad.fa-quote-right:after {
                content: "\10f10e"
            }

            .fad.fa-quran:after {
                content: "\10f687"
            }

            .fad.fa-rabbit:after {
                content: "\10f708"
            }

            .fad.fa-rabbit-fast:after {
                content: "\10f709"
            }

            .fad.fa-racquet:after {
                content: "\10f45a"
            }

            .fad.fa-radar:after {
                content: "\10e024"
            }

            .fad.fa-radiation:after {
                content: "\10f7b9"
            }

            .fad.fa-radiation-alt:after {
                content: "\10f7ba"
            }

            .fad.fa-radio:after {
                content: "\10f8d7"
            }

            .fad.fa-radio-alt:after {
                content: "\10f8d8"
            }

            .fad.fa-rainbow:after {
                content: "\10f75b"
            }

            .fad.fa-raindrops:after {
                content: "\10f75c"
            }

            .fad.fa-ram:after {
                content: "\10f70a"
            }

            .fad.fa-ramp-loading:after {
                content: "\10f4d4"
            }

            .fad.fa-random:after {
                content: "\10f074"
            }

            .fad.fa-raygun:after {
                content: "\10e025"
            }

            .fad.fa-receipt:after {
                content: "\10f543"
            }

            .fad.fa-record-vinyl:after {
                content: "\10f8d9"
            }

            .fad.fa-rectangle-landscape:after {
                content: "\10f2fa"
            }

            .fad.fa-rectangle-portrait:after {
                content: "\10f2fb"
            }

            .fad.fa-rectangle-wide:after {
                content: "\10f2fc"
            }

            .fad.fa-recycle:after {
                content: "\10f1b8"
            }

            .fad.fa-redo:after {
                content: "\10f01e"
            }

            .fad.fa-redo-alt:after {
                content: "\10f2f9"
            }

            .fad.fa-refrigerator:after {
                content: "\10e026"
            }

            .fad.fa-registered:after {
                content: "\10f25d"
            }

            .fad.fa-remove-format:after {
                content: "\10f87d"
            }

            .fad.fa-repeat:after {
                content: "\10f363"
            }

            .fad.fa-repeat-1:after {
                content: "\10f365"
            }

            .fad.fa-repeat-1-alt:after {
                content: "\10f366"
            }

            .fad.fa-repeat-alt:after {
                content: "\10f364"
            }

            .fad.fa-reply:after {
                content: "\10f3e5"
            }

            .fad.fa-reply-all:after {
                content: "\10f122"
            }

            .fad.fa-republican:after {
                content: "\10f75e"
            }

            .fad.fa-restroom:after {
                content: "\10f7bd"
            }

            .fad.fa-retweet:after {
                content: "\10f079"
            }

            .fad.fa-retweet-alt:after {
                content: "\10f361"
            }

            .fad.fa-ribbon:after {
                content: "\10f4d6"
            }

            .fad.fa-ring:after {
                content: "\10f70b"
            }

            .fad.fa-rings-wedding:after {
                content: "\10f81b"
            }

            .fad.fa-road:after {
                content: "\10f018"
            }

            .fad.fa-robot:after {
                content: "\10f544"
            }

            .fad.fa-rocket:after {
                content: "\10f135"
            }

            .fad.fa-rocket-launch:after {
                content: "\10e027"
            }

            .fad.fa-route:after {
                content: "\10f4d7"
            }

            .fad.fa-route-highway:after {
                content: "\10f61a"
            }

            .fad.fa-route-interstate:after {
                content: "\10f61b"
            }

            .fad.fa-router:after {
                content: "\10f8da"
            }

            .fad.fa-rss:after {
                content: "\10f09e"
            }

            .fad.fa-rss-square:after {
                content: "\10f143"
            }

            .fad.fa-ruble-sign:after {
                content: "\10f158"
            }

            .fad.fa-ruler:after {
                content: "\10f545"
            }

            .fad.fa-ruler-combined:after {
                content: "\10f546"
            }

            .fad.fa-ruler-horizontal:after {
                content: "\10f547"
            }

            .fad.fa-ruler-triangle:after {
                content: "\10f61c"
            }

            .fad.fa-ruler-vertical:after {
                content: "\10f548"
            }

            .fad.fa-running:after {
                content: "\10f70c"
            }

            .fad.fa-rupee-sign:after {
                content: "\10f156"
            }

            .fad.fa-rv:after {
                content: "\10f7be"
            }

            .fad.fa-sack:after {
                content: "\10f81c"
            }

            .fad.fa-sack-dollar:after {
                content: "\10f81d"
            }

            .fad.fa-sad-cry:after {
                content: "\10f5b3"
            }

            .fad.fa-sad-tear:after {
                content: "\10f5b4"
            }

            .fad.fa-salad:after {
                content: "\10f81e"
            }

            .fad.fa-sandwich:after {
                content: "\10f81f"
            }

            .fad.fa-satellite:after {
                content: "\10f7bf"
            }

            .fad.fa-satellite-dish:after {
                content: "\10f7c0"
            }

            .fad.fa-sausage:after {
                content: "\10f820"
            }

            .fad.fa-save:after {
                content: "\10f0c7"
            }

            .fad.fa-sax-hot:after {
                content: "\10f8db"
            }

            .fad.fa-saxophone:after {
                content: "\10f8dc"
            }

            .fad.fa-scalpel:after {
                content: "\10f61d"
            }

            .fad.fa-scalpel-path:after {
                content: "\10f61e"
            }

            .fad.fa-scanner:after {
                content: "\10f488"
            }

            .fad.fa-scanner-image:after {
                content: "\10f8f3"
            }

            .fad.fa-scanner-keyboard:after {
                content: "\10f489"
            }

            .fad.fa-scanner-touchscreen:after {
                content: "\10f48a"
            }

            .fad.fa-scarecrow:after {
                content: "\10f70d"
            }

            .fad.fa-scarf:after {
                content: "\10f7c1"
            }

            .fad.fa-school:after {
                content: "\10f549"
            }

            .fad.fa-screwdriver:after {
                content: "\10f54a"
            }

            .fad.fa-scroll:after {
                content: "\10f70e"
            }

            .fad.fa-scroll-old:after {
                content: "\10f70f"
            }

            .fad.fa-scrubber:after {
                content: "\10f2f8"
            }

            .fad.fa-scythe:after {
                content: "\10f710"
            }

            .fad.fa-sd-card:after {
                content: "\10f7c2"
            }

            .fad.fa-search:after {
                content: "\10f002"
            }

            .fad.fa-search-dollar:after {
                content: "\10f688"
            }

            .fad.fa-search-location:after {
                content: "\10f689"
            }

            .fad.fa-search-minus:after {
                content: "\10f010"
            }

            .fad.fa-search-plus:after {
                content: "\10f00e"
            }

            .fad.fa-seedling:after {
                content: "\10f4d8"
            }

            .fad.fa-send-back:after {
                content: "\10f87e"
            }

            .fad.fa-send-backward:after {
                content: "\10f87f"
            }

            .fad.fa-sensor:after {
                content: "\10e028"
            }

            .fad.fa-sensor-alert:after {
                content: "\10e029"
            }

            .fad.fa-sensor-fire:after {
                content: "\10e02a"
            }

            .fad.fa-sensor-on:after {
                content: "\10e02b"
            }

            .fad.fa-sensor-smoke:after {
                content: "\10e02c"
            }

            .fad.fa-server:after {
                content: "\10f233"
            }

            .fad.fa-shapes:after {
                content: "\10f61f"
            }

            .fad.fa-share:after {
                content: "\10f064"
            }

            .fad.fa-share-all:after {
                content: "\10f367"
            }

            .fad.fa-share-alt:after {
                content: "\10f1e0"
            }

            .fad.fa-share-alt-square:after {
                content: "\10f1e1"
            }

            .fad.fa-share-square:after {
                content: "\10f14d"
            }

            .fad.fa-sheep:after {
                content: "\10f711"
            }

            .fad.fa-shekel-sign:after {
                content: "\10f20b"
            }

            .fad.fa-shield:after {
                content: "\10f132"
            }

            .fad.fa-shield-alt:after {
                content: "\10f3ed"
            }

            .fad.fa-shield-check:after {
                content: "\10f2f7"
            }

            .fad.fa-shield-cross:after {
                content: "\10f712"
            }

            .fad.fa-shield-virus:after {
                content: "\10e06c"
            }

            .fad.fa-ship:after {
                content: "\10f21a"
            }

            .fad.fa-shipping-fast:after {
                content: "\10f48b"
            }

            .fad.fa-shipping-timed:after {
                content: "\10f48c"
            }

            .fad.fa-shish-kebab:after {
                content: "\10f821"
            }

            .fad.fa-shoe-prints:after {
                content: "\10f54b"
            }

            .fad.fa-shopping-bag:after {
                content: "\10f290"
            }

            .fad.fa-shopping-basket:after {
                content: "\10f291"
            }

            .fad.fa-shopping-cart:after {
                content: "\10f07a"
            }

            .fad.fa-shovel:after {
                content: "\10f713"
            }

            .fad.fa-shovel-snow:after {
                content: "\10f7c3"
            }

            .fad.fa-shower:after {
                content: "\10f2cc"
            }

            .fad.fa-shredder:after {
                content: "\10f68a"
            }

            .fad.fa-shuttle-van:after {
                content: "\10f5b6"
            }

            .fad.fa-shuttlecock:after {
                content: "\10f45b"
            }

            .fad.fa-sickle:after {
                content: "\10f822"
            }

            .fad.fa-sigma:after {
                content: "\10f68b"
            }

            .fad.fa-sign:after {
                content: "\10f4d9"
            }

            .fad.fa-sign-in:after {
                content: "\10f090"
            }

            .fad.fa-sign-in-alt:after {
                content: "\10f2f6"
            }

            .fad.fa-sign-language:after {
                content: "\10f2a7"
            }

            .fad.fa-sign-out:after {
                content: "\10f08b"
            }

            .fad.fa-sign-out-alt:after {
                content: "\10f2f5"
            }

            .fad.fa-signal:after {
                content: "\10f012"
            }

            .fad.fa-signal-1:after {
                content: "\10f68c"
            }

            .fad.fa-signal-2:after {
                content: "\10f68d"
            }

            .fad.fa-signal-3:after {
                content: "\10f68e"
            }

            .fad.fa-signal-4:after {
                content: "\10f68f"
            }

            .fad.fa-signal-alt:after {
                content: "\10f690"
            }

            .fad.fa-signal-alt-1:after {
                content: "\10f691"
            }

            .fad.fa-signal-alt-2:after {
                content: "\10f692"
            }

            .fad.fa-signal-alt-3:after {
                content: "\10f693"
            }

            .fad.fa-signal-alt-slash:after {
                content: "\10f694"
            }

            .fad.fa-signal-slash:after {
                content: "\10f695"
            }

            .fad.fa-signal-stream:after {
                content: "\10f8dd"
            }

            .fad.fa-signature:after {
                content: "\10f5b7"
            }

            .fad.fa-sim-card:after {
                content: "\10f7c4"
            }

            .fad.fa-sink:after {
                content: "\10e06d"
            }

            .fad.fa-siren:after {
                content: "\10e02d"
            }

            .fad.fa-siren-on:after {
                content: "\10e02e"
            }

            .fad.fa-sitemap:after {
                content: "\10f0e8"
            }

            .fad.fa-skating:after {
                content: "\10f7c5"
            }

            .fad.fa-skeleton:after {
                content: "\10f620"
            }

            .fad.fa-ski-jump:after {
                content: "\10f7c7"
            }

            .fad.fa-ski-lift:after {
                content: "\10f7c8"
            }

            .fad.fa-skiing:after {
                content: "\10f7c9"
            }

            .fad.fa-skiing-nordic:after {
                content: "\10f7ca"
            }

            .fad.fa-skull:after {
                content: "\10f54c"
            }

            .fad.fa-skull-cow:after {
                content: "\10f8de"
            }

            .fad.fa-skull-crossbones:after {
                content: "\10f714"
            }

            .fad.fa-slash:after {
                content: "\10f715"
            }

            .fad.fa-sledding:after {
                content: "\10f7cb"
            }

            .fad.fa-sleigh:after {
                content: "\10f7cc"
            }

            .fad.fa-sliders-h:after {
                content: "\10f1de"
            }

            .fad.fa-sliders-h-square:after {
                content: "\10f3f0"
            }

            .fad.fa-sliders-v:after {
                content: "\10f3f1"
            }

            .fad.fa-sliders-v-square:after {
                content: "\10f3f2"
            }

            .fad.fa-smile:after {
                content: "\10f118"
            }

            .fad.fa-smile-beam:after {
                content: "\10f5b8"
            }

            .fad.fa-smile-plus:after {
                content: "\10f5b9"
            }

            .fad.fa-smile-wink:after {
                content: "\10f4da"
            }

            .fad.fa-smog:after {
                content: "\10f75f"
            }

            .fad.fa-smoke:after {
                content: "\10f760"
            }

            .fad.fa-smoking:after {
                content: "\10f48d"
            }

            .fad.fa-smoking-ban:after {
                content: "\10f54d"
            }

            .fad.fa-sms:after {
                content: "\10f7cd"
            }

            .fad.fa-snake:after {
                content: "\10f716"
            }

            .fad.fa-snooze:after {
                content: "\10f880"
            }

            .fad.fa-snow-blowing:after {
                content: "\10f761"
            }

            .fad.fa-snowboarding:after {
                content: "\10f7ce"
            }

            .fad.fa-snowflake:after {
                content: "\10f2dc"
            }

            .fad.fa-snowflakes:after {
                content: "\10f7cf"
            }

            .fad.fa-snowman:after {
                content: "\10f7d0"
            }

            .fad.fa-snowmobile:after {
                content: "\10f7d1"
            }

            .fad.fa-snowplow:after {
                content: "\10f7d2"
            }

            .fad.fa-soap:after {
                content: "\10e06e"
            }

            .fad.fa-socks:after {
                content: "\10f696"
            }

            .fad.fa-solar-panel:after {
                content: "\10f5ba"
            }

            .fad.fa-solar-system:after {
                content: "\10e02f"
            }

            .fad.fa-sort:after {
                content: "\10f0dc"
            }

            .fad.fa-sort-alpha-down:after {
                content: "\10f15d"
            }

            .fad.fa-sort-alpha-down-alt:after {
                content: "\10f881"
            }

            .fad.fa-sort-alpha-up:after {
                content: "\10f15e"
            }

            .fad.fa-sort-alpha-up-alt:after {
                content: "\10f882"
            }

            .fad.fa-sort-alt:after {
                content: "\10f883"
            }

            .fad.fa-sort-amount-down:after {
                content: "\10f160"
            }

            .fad.fa-sort-amount-down-alt:after {
                content: "\10f884"
            }

            .fad.fa-sort-amount-up:after {
                content: "\10f161"
            }

            .fad.fa-sort-amount-up-alt:after {
                content: "\10f885"
            }

            .fad.fa-sort-circle:after {
                content: "\10e030"
            }

            .fad.fa-sort-circle-down:after {
                content: "\10e031"
            }

            .fad.fa-sort-circle-up:after {
                content: "\10e032"
            }

            .fad.fa-sort-down:after {
                content: "\10f0dd"
            }

            .fad.fa-sort-numeric-down:after {
                content: "\10f162"
            }

            .fad.fa-sort-numeric-down-alt:after {
                content: "\10f886"
            }

            .fad.fa-sort-numeric-up:after {
                content: "\10f163"
            }

            .fad.fa-sort-numeric-up-alt:after {
                content: "\10f887"
            }

            .fad.fa-sort-shapes-down:after {
                content: "\10f888"
            }

            .fad.fa-sort-shapes-down-alt:after {
                content: "\10f889"
            }

            .fad.fa-sort-shapes-up:after {
                content: "\10f88a"
            }

            .fad.fa-sort-shapes-up-alt:after {
                content: "\10f88b"
            }

            .fad.fa-sort-size-down:after {
                content: "\10f88c"
            }

            .fad.fa-sort-size-down-alt:after {
                content: "\10f88d"
            }

            .fad.fa-sort-size-up:after {
                content: "\10f88e"
            }

            .fad.fa-sort-size-up-alt:after {
                content: "\10f88f"
            }

            .fad.fa-sort-up:after {
                content: "\10f0de"
            }

            .fad.fa-soup:after {
                content: "\10f823"
            }

            .fad.fa-spa:after {
                content: "\10f5bb"
            }

            .fad.fa-space-shuttle:after {
                content: "\10f197"
            }

            .fad.fa-space-station-moon:after {
                content: "\10e033"
            }

            .fad.fa-space-station-moon-alt:after {
                content: "\10e034"
            }

            .fad.fa-spade:after {
                content: "\10f2f4"
            }

            .fad.fa-sparkles:after {
                content: "\10f890"
            }

            .fad.fa-speaker:after {
                content: "\10f8df"
            }

            .fad.fa-speakers:after {
                content: "\10f8e0"
            }

            .fad.fa-spell-check:after {
                content: "\10f891"
            }

            .fad.fa-spider:after {
                content: "\10f717"
            }

            .fad.fa-spider-black-widow:after {
                content: "\10f718"
            }

            .fad.fa-spider-web:after {
                content: "\10f719"
            }

            .fad.fa-spinner:after {
                content: "\10f110"
            }

            .fad.fa-spinner-third:after {
                content: "\10f3f4"
            }

            .fad.fa-splotch:after {
                content: "\10f5bc"
            }

            .fad.fa-spray-can:after {
                content: "\10f5bd"
            }

            .fad.fa-sprinkler:after {
                content: "\10e035"
            }

            .fad.fa-square:after {
                content: "\10f0c8"
            }

            .fad.fa-square-full:after {
                content: "\10f45c"
            }

            .fad.fa-square-root:after {
                content: "\10f697"
            }

            .fad.fa-square-root-alt:after {
                content: "\10f698"
            }

            .fad.fa-squirrel:after {
                content: "\10f71a"
            }

            .fad.fa-staff:after {
                content: "\10f71b"
            }

            .fad.fa-stamp:after {
                content: "\10f5bf"
            }

            .fad.fa-star:after {
                content: "\10f005"
            }

            .fad.fa-star-and-crescent:after {
                content: "\10f699"
            }

            .fad.fa-star-christmas:after {
                content: "\10f7d4"
            }

            .fad.fa-star-exclamation:after {
                content: "\10f2f3"
            }

            .fad.fa-star-half:after {
                content: "\10f089"
            }

            .fad.fa-star-half-alt:after {
                content: "\10f5c0"
            }

            .fad.fa-star-of-david:after {
                content: "\10f69a"
            }

            .fad.fa-star-of-life:after {
                content: "\10f621"
            }

            .fad.fa-star-shooting:after {
                content: "\10e036"
            }

            .fad.fa-starfighter:after {
                content: "\10e037"
            }

            .fad.fa-starfighter-alt:after {
                content: "\10e038"
            }

            .fad.fa-stars:after {
                content: "\10f762"
            }

            .fad.fa-starship:after {
                content: "\10e039"
            }

            .fad.fa-starship-freighter:after {
                content: "\10e03a"
            }

            .fad.fa-steak:after {
                content: "\10f824"
            }

            .fad.fa-steering-wheel:after {
                content: "\10f622"
            }

            .fad.fa-step-backward:after {
                content: "\10f048"
            }

            .fad.fa-step-forward:after {
                content: "\10f051"
            }

            .fad.fa-stethoscope:after {
                content: "\10f0f1"
            }

            .fad.fa-sticky-note:after {
                content: "\10f249"
            }

            .fad.fa-stocking:after {
                content: "\10f7d5"
            }

            .fad.fa-stomach:after {
                content: "\10f623"
            }

            .fad.fa-stop:after {
                content: "\10f04d"
            }

            .fad.fa-stop-circle:after {
                content: "\10f28d"
            }

            .fad.fa-stopwatch:after {
                content: "\10f2f2"
            }

            .fad.fa-stopwatch-20:after {
                content: "\10e06f"
            }

            .fad.fa-store:after {
                content: "\10f54e"
            }

            .fad.fa-store-alt:after {
                content: "\10f54f"
            }

            .fad.fa-store-alt-slash:after {
                content: "\10e070"
            }

            .fad.fa-store-slash:after {
                content: "\10e071"
            }

            .fad.fa-stream:after {
                content: "\10f550"
            }

            .fad.fa-street-view:after {
                content: "\10f21d"
            }

            .fad.fa-stretcher:after {
                content: "\10f825"
            }

            .fad.fa-strikethrough:after {
                content: "\10f0cc"
            }

            .fad.fa-stroopwafel:after {
                content: "\10f551"
            }

            .fad.fa-subscript:after {
                content: "\10f12c"
            }

            .fad.fa-subway:after {
                content: "\10f239"
            }

            .fad.fa-suitcase:after {
                content: "\10f0f2"
            }

            .fad.fa-suitcase-rolling:after {
                content: "\10f5c1"
            }

            .fad.fa-sun:after {
                content: "\10f185"
            }

            .fad.fa-sun-cloud:after {
                content: "\10f763"
            }

            .fad.fa-sun-dust:after {
                content: "\10f764"
            }

            .fad.fa-sun-haze:after {
                content: "\10f765"
            }

            .fad.fa-sunglasses:after {
                content: "\10f892"
            }

            .fad.fa-sunrise:after {
                content: "\10f766"
            }

            .fad.fa-sunset:after {
                content: "\10f767"
            }

            .fad.fa-superscript:after {
                content: "\10f12b"
            }

            .fad.fa-surprise:after {
                content: "\10f5c2"
            }

            .fad.fa-swatchbook:after {
                content: "\10f5c3"
            }

            .fad.fa-swimmer:after {
                content: "\10f5c4"
            }

            .fad.fa-swimming-pool:after {
                content: "\10f5c5"
            }

            .fad.fa-sword:after {
                content: "\10f71c"
            }

            .fad.fa-sword-laser:after {
                content: "\10e03b"
            }

            .fad.fa-sword-laser-alt:after {
                content: "\10e03c"
            }

            .fad.fa-swords:after {
                content: "\10f71d"
            }

            .fad.fa-swords-laser:after {
                content: "\10e03d"
            }

            .fad.fa-synagogue:after {
                content: "\10f69b"
            }

            .fad.fa-sync:after {
                content: "\10f021"
            }

            .fad.fa-sync-alt:after {
                content: "\10f2f1"
            }

            .fad.fa-syringe:after {
                content: "\10f48e"
            }

            .fad.fa-table:after {
                content: "\10f0ce"
            }

            .fad.fa-table-tennis:after {
                content: "\10f45d"
            }

            .fad.fa-tablet:after {
                content: "\10f10a"
            }

            .fad.fa-tablet-alt:after {
                content: "\10f3fa"
            }

            .fad.fa-tablet-android:after {
                content: "\10f3fb"
            }

            .fad.fa-tablet-android-alt:after {
                content: "\10f3fc"
            }

            .fad.fa-tablet-rugged:after {
                content: "\10f48f"
            }

            .fad.fa-tablets:after {
                content: "\10f490"
            }

            .fad.fa-tachometer:after {
                content: "\10f0e4"
            }

            .fad.fa-tachometer-alt:after {
                content: "\10f3fd"
            }

            .fad.fa-tachometer-alt-average:after {
                content: "\10f624"
            }

            .fad.fa-tachometer-alt-fast:after {
                content: "\10f625"
            }

            .fad.fa-tachometer-alt-fastest:after {
                content: "\10f626"
            }

            .fad.fa-tachometer-alt-slow:after {
                content: "\10f627"
            }

            .fad.fa-tachometer-alt-slowest:after {
                content: "\10f628"
            }

            .fad.fa-tachometer-average:after {
                content: "\10f629"
            }

            .fad.fa-tachometer-fast:after {
                content: "\10f62a"
            }

            .fad.fa-tachometer-fastest:after {
                content: "\10f62b"
            }

            .fad.fa-tachometer-slow:after {
                content: "\10f62c"
            }

            .fad.fa-tachometer-slowest:after {
                content: "\10f62d"
            }

            .fad.fa-taco:after {
                content: "\10f826"
            }

            .fad.fa-tag:after {
                content: "\10f02b"
            }

            .fad.fa-tags:after {
                content: "\10f02c"
            }

            .fad.fa-tally:after {
                content: "\10f69c"
            }

            .fad.fa-tanakh:after {
                content: "\10f827"
            }

            .fad.fa-tape:after {
                content: "\10f4db"
            }

            .fad.fa-tasks:after {
                content: "\10f0ae"
            }

            .fad.fa-tasks-alt:after {
                content: "\10f828"
            }

            .fad.fa-taxi:after {
                content: "\10f1ba"
            }

            .fad.fa-teeth:after {
                content: "\10f62e"
            }

            .fad.fa-teeth-open:after {
                content: "\10f62f"
            }

            .fad.fa-telescope:after {
                content: "\10e03e"
            }

            .fad.fa-temperature-down:after {
                content: "\10e03f"
            }

            .fad.fa-temperature-frigid:after {
                content: "\10f768"
            }

            .fad.fa-temperature-high:after {
                content: "\10f769"
            }

            .fad.fa-temperature-hot:after {
                content: "\10f76a"
            }

            .fad.fa-temperature-low:after {
                content: "\10f76b"
            }

            .fad.fa-temperature-up:after {
                content: "\10e040"
            }

            .fad.fa-tenge:after {
                content: "\10f7d7"
            }

            .fad.fa-tennis-ball:after {
                content: "\10f45e"
            }

            .fad.fa-terminal:after {
                content: "\10f120"
            }

            .fad.fa-text:after {
                content: "\10f893"
            }

            .fad.fa-text-height:after {
                content: "\10f034"
            }

            .fad.fa-text-size:after {
                content: "\10f894"
            }

            .fad.fa-text-width:after {
                content: "\10f035"
            }

            .fad.fa-th:after {
                content: "\10f00a"
            }

            .fad.fa-th-large:after {
                content: "\10f009"
            }

            .fad.fa-th-list:after {
                content: "\10f00b"
            }

            .fad.fa-theater-masks:after {
                content: "\10f630"
            }

            .fad.fa-thermometer:after {
                content: "\10f491"
            }

            .fad.fa-thermometer-empty:after {
                content: "\10f2cb"
            }

            .fad.fa-thermometer-full:after {
                content: "\10f2c7"
            }

            .fad.fa-thermometer-half:after {
                content: "\10f2c9"
            }

            .fad.fa-thermometer-quarter:after {
                content: "\10f2ca"
            }

            .fad.fa-thermometer-three-quarters:after {
                content: "\10f2c8"
            }

            .fad.fa-theta:after {
                content: "\10f69e"
            }

            .fad.fa-thumbs-down:after {
                content: "\10f165"
            }

            .fad.fa-thumbs-up:after {
                content: "\10f164"
            }

            .fad.fa-thumbtack:after {
                content: "\10f08d"
            }

            .fad.fa-thunderstorm:after {
                content: "\10f76c"
            }

            .fad.fa-thunderstorm-moon:after {
                content: "\10f76d"
            }

            .fad.fa-thunderstorm-sun:after {
                content: "\10f76e"
            }

            .fad.fa-ticket:after {
                content: "\10f145"
            }

            .fad.fa-ticket-alt:after {
                content: "\10f3ff"
            }

            .fad.fa-tilde:after {
                content: "\10f69f"
            }

            .fad.fa-times:after {
                content: "\10f00d"
            }

            .fad.fa-times-circle:after {
                content: "\10f057"
            }

            .fad.fa-times-hexagon:after {
                content: "\10f2ee"
            }

            .fad.fa-times-octagon:after {
                content: "\10f2f0"
            }

            .fad.fa-times-square:after {
                content: "\10f2d3"
            }

            .fad.fa-tint:after {
                content: "\10f043"
            }

            .fad.fa-tint-slash:after {
                content: "\10f5c7"
            }

            .fad.fa-tire:after {
                content: "\10f631"
            }

            .fad.fa-tire-flat:after {
                content: "\10f632"
            }

            .fad.fa-tire-pressure-warning:after {
                content: "\10f633"
            }

            .fad.fa-tire-rugged:after {
                content: "\10f634"
            }

            .fad.fa-tired:after {
                content: "\10f5c8"
            }

            .fad.fa-toggle-off:after {
                content: "\10f204"
            }

            .fad.fa-toggle-on:after {
                content: "\10f205"
            }

            .fad.fa-toilet:after {
                content: "\10f7d8"
            }

            .fad.fa-toilet-paper:after {
                content: "\10f71e"
            }

            .fad.fa-toilet-paper-alt:after {
                content: "\10f71f"
            }

            .fad.fa-toilet-paper-slash:after {
                content: "\10e072"
            }

            .fad.fa-tombstone:after {
                content: "\10f720"
            }

            .fad.fa-tombstone-alt:after {
                content: "\10f721"
            }

            .fad.fa-toolbox:after {
                content: "\10f552"
            }

            .fad.fa-tools:after {
                content: "\10f7d9"
            }

            .fad.fa-tooth:after {
                content: "\10f5c9"
            }

            .fad.fa-toothbrush:after {
                content: "\10f635"
            }

            .fad.fa-torah:after {
                content: "\10f6a0"
            }

            .fad.fa-torii-gate:after {
                content: "\10f6a1"
            }

            .fad.fa-tornado:after {
                content: "\10f76f"
            }

            .fad.fa-tractor:after {
                content: "\10f722"
            }

            .fad.fa-trademark:after {
                content: "\10f25c"
            }

            .fad.fa-traffic-cone:after {
                content: "\10f636"
            }

            .fad.fa-traffic-light:after {
                content: "\10f637"
            }

            .fad.fa-traffic-light-go:after {
                content: "\10f638"
            }

            .fad.fa-traffic-light-slow:after {
                content: "\10f639"
            }

            .fad.fa-traffic-light-stop:after {
                content: "\10f63a"
            }

            .fad.fa-trailer:after {
                content: "\10e041"
            }

            .fad.fa-train:after {
                content: "\10f238"
            }

            .fad.fa-tram:after {
                content: "\10f7da"
            }

            .fad.fa-transgender:after {
                content: "\10f224"
            }

            .fad.fa-transgender-alt:after {
                content: "\10f225"
            }

            .fad.fa-transporter:after {
                content: "\10e042"
            }

            .fad.fa-transporter-1:after {
                content: "\10e043"
            }

            .fad.fa-transporter-2:after {
                content: "\10e044"
            }

            .fad.fa-transporter-3:after {
                content: "\10e045"
            }

            .fad.fa-transporter-empty:after {
                content: "\10e046"
            }

            .fad.fa-trash:after {
                content: "\10f1f8"
            }

            .fad.fa-trash-alt:after {
                content: "\10f2ed"
            }

            .fad.fa-trash-restore:after {
                content: "\10f829"
            }

            .fad.fa-trash-restore-alt:after {
                content: "\10f82a"
            }

            .fad.fa-trash-undo:after {
                content: "\10f895"
            }

            .fad.fa-trash-undo-alt:after {
                content: "\10f896"
            }

            .fad.fa-treasure-chest:after {
                content: "\10f723"
            }

            .fad.fa-tree:after {
                content: "\10f1bb"
            }

            .fad.fa-tree-alt:after {
                content: "\10f400"
            }

            .fad.fa-tree-christmas:after {
                content: "\10f7db"
            }

            .fad.fa-tree-decorated:after {
                content: "\10f7dc"
            }

            .fad.fa-tree-large:after {
                content: "\10f7dd"
            }

            .fad.fa-tree-palm:after {
                content: "\10f82b"
            }

            .fad.fa-trees:after {
                content: "\10f724"
            }

            .fad.fa-triangle:after {
                content: "\10f2ec"
            }

            .fad.fa-triangle-music:after {
                content: "\10f8e2"
            }

            .fad.fa-trophy:after {
                content: "\10f091"
            }

            .fad.fa-trophy-alt:after {
                content: "\10f2eb"
            }

            .fad.fa-truck:after {
                content: "\10f0d1"
            }

            .fad.fa-truck-container:after {
                content: "\10f4dc"
            }

            .fad.fa-truck-couch:after {
                content: "\10f4dd"
            }

            .fad.fa-truck-loading:after {
                content: "\10f4de"
            }

            .fad.fa-truck-monster:after {
                content: "\10f63b"
            }

            .fad.fa-truck-moving:after {
                content: "\10f4df"
            }

            .fad.fa-truck-pickup:after {
                content: "\10f63c"
            }

            .fad.fa-truck-plow:after {
                content: "\10f7de"
            }

            .fad.fa-truck-ramp:after {
                content: "\10f4e0"
            }

            .fad.fa-trumpet:after {
                content: "\10f8e3"
            }

            .fad.fa-tshirt:after {
                content: "\10f553"
            }

            .fad.fa-tty:after {
                content: "\10f1e4"
            }

            .fad.fa-turkey:after {
                content: "\10f725"
            }

            .fad.fa-turntable:after {
                content: "\10f8e4"
            }

            .fad.fa-turtle:after {
                content: "\10f726"
            }

            .fad.fa-tv:after {
                content: "\10f26c"
            }

            .fad.fa-tv-alt:after {
                content: "\10f8e5"
            }

            .fad.fa-tv-music:after {
                content: "\10f8e6"
            }

            .fad.fa-tv-retro:after {
                content: "\10f401"
            }

            .fad.fa-typewriter:after {
                content: "\10f8e7"
            }

            .fad.fa-ufo:after {
                content: "\10e047"
            }

            .fad.fa-ufo-beam:after {
                content: "\10e048"
            }

            .fad.fa-umbrella:after {
                content: "\10f0e9"
            }

            .fad.fa-umbrella-beach:after {
                content: "\10f5ca"
            }

            .fad.fa-underline:after {
                content: "\10f0cd"
            }

            .fad.fa-undo:after {
                content: "\10f0e2"
            }

            .fad.fa-undo-alt:after {
                content: "\10f2ea"
            }

            .fad.fa-unicorn:after {
                content: "\10f727"
            }

            .fad.fa-union:after {
                content: "\10f6a2"
            }

            .fad.fa-universal-access:after {
                content: "\10f29a"
            }

            .fad.fa-university:after {
                content: "\10f19c"
            }

            .fad.fa-unlink:after {
                content: "\10f127"
            }

            .fad.fa-unlock:after {
                content: "\10f09c"
            }

            .fad.fa-unlock-alt:after {
                content: "\10f13e"
            }

            .fad.fa-upload:after {
                content: "\10f093"
            }

            .fad.fa-usb-drive:after {
                content: "\10f8e9"
            }

            .fad.fa-usd-circle:after {
                content: "\10f2e8"
            }

            .fad.fa-usd-square:after {
                content: "\10f2e9"
            }

            .fad.fa-user:after {
                content: "\10f007"
            }

            .fad.fa-user-alien:after {
                content: "\10e04a"
            }

            .fad.fa-user-alt:after {
                content: "\10f406"
            }

            .fad.fa-user-alt-slash:after {
                content: "\10f4fa"
            }

            .fad.fa-user-astronaut:after {
                content: "\10f4fb"
            }

            .fad.fa-user-chart:after {
                content: "\10f6a3"
            }

            .fad.fa-user-check:after {
                content: "\10f4fc"
            }

            .fad.fa-user-circle:after {
                content: "\10f2bd"
            }

            .fad.fa-user-clock:after {
                content: "\10f4fd"
            }

            .fad.fa-user-cog:after {
                content: "\10f4fe"
            }

            .fad.fa-user-cowboy:after {
                content: "\10f8ea"
            }

            .fad.fa-user-crown:after {
                content: "\10f6a4"
            }

            .fad.fa-user-edit:after {
                content: "\10f4ff"
            }

            .fad.fa-user-friends:after {
                content: "\10f500"
            }

            .fad.fa-user-graduate:after {
                content: "\10f501"
            }

            .fad.fa-user-hard-hat:after {
                content: "\10f82c"
            }

            .fad.fa-user-headset:after {
                content: "\10f82d"
            }

            .fad.fa-user-injured:after {
                content: "\10f728"
            }

            .fad.fa-user-lock:after {
                content: "\10f502"
            }

            .fad.fa-user-md:after {
                content: "\10f0f0"
            }

            .fad.fa-user-md-chat:after {
                content: "\10f82e"
            }

            .fad.fa-user-minus:after {
                content: "\10f503"
            }

            .fad.fa-user-music:after {
                content: "\10f8eb"
            }

            .fad.fa-user-ninja:after {
                content: "\10f504"
            }

            .fad.fa-user-nurse:after {
                content: "\10f82f"
            }

            .fad.fa-user-plus:after {
                content: "\10f234"
            }

            .fad.fa-user-robot:after {
                content: "\10e04b"
            }

            .fad.fa-user-secret:after {
                content: "\10f21b"
            }

            .fad.fa-user-shield:after {
                content: "\10f505"
            }

            .fad.fa-user-slash:after {
                content: "\10f506"
            }

            .fad.fa-user-tag:after {
                content: "\10f507"
            }

            .fad.fa-user-tie:after {
                content: "\10f508"
            }

            .fad.fa-user-times:after {
                content: "\10f235"
            }

            .fad.fa-user-unlock:after {
                content: "\10e058"
            }

            .fad.fa-user-visor:after {
                content: "\10e04c"
            }

            .fad.fa-users:after {
                content: "\10f0c0"
            }

            .fad.fa-users-class:after {
                content: "\10f63d"
            }

            .fad.fa-users-cog:after {
                content: "\10f509"
            }

            .fad.fa-users-crown:after {
                content: "\10f6a5"
            }

            .fad.fa-users-medical:after {
                content: "\10f830"
            }

            .fad.fa-users-slash:after {
                content: "\10e073"
            }

            .fad.fa-utensil-fork:after {
                content: "\10f2e3"
            }

            .fad.fa-utensil-knife:after {
                content: "\10f2e4"
            }

            .fad.fa-utensil-spoon:after {
                content: "\10f2e5"
            }

            .fad.fa-utensils:after {
                content: "\10f2e7"
            }

            .fad.fa-utensils-alt:after {
                content: "\10f2e6"
            }

            .fad.fa-vacuum:after {
                content: "\10e04d"
            }

            .fad.fa-vacuum-robot:after {
                content: "\10e04e"
            }

            .fad.fa-value-absolute:after {
                content: "\10f6a6"
            }

            .fad.fa-vector-square:after {
                content: "\10f5cb"
            }

            .fad.fa-venus:after {
                content: "\10f221"
            }

            .fad.fa-venus-double:after {
                content: "\10f226"
            }

            .fad.fa-venus-mars:after {
                content: "\10f228"
            }

            .fad.fa-vest:after {
                content: "\10e085"
            }

            .fad.fa-vest-patches:after {
                content: "\10e086"
            }

            .fad.fa-vhs:after {
                content: "\10f8ec"
            }

            .fad.fa-vial:after {
                content: "\10f492"
            }

            .fad.fa-vials:after {
                content: "\10f493"
            }

            .fad.fa-video:after {
                content: "\10f03d"
            }

            .fad.fa-video-plus:after {
                content: "\10f4e1"
            }

            .fad.fa-video-slash:after {
                content: "\10f4e2"
            }

            .fad.fa-vihara:after {
                content: "\10f6a7"
            }

            .fad.fa-violin:after {
                content: "\10f8ed"
            }

            .fad.fa-virus:after {
                content: "\10e074"
            }

            .fad.fa-virus-slash:after {
                content: "\10e075"
            }

            .fad.fa-viruses:after {
                content: "\10e076"
            }

            .fad.fa-voicemail:after {
                content: "\10f897"
            }

            .fad.fa-volcano:after {
                content: "\10f770"
            }

            .fad.fa-volleyball-ball:after {
                content: "\10f45f"
            }

            .fad.fa-volume:after {
                content: "\10f6a8"
            }

            .fad.fa-volume-down:after {
                content: "\10f027"
            }

            .fad.fa-volume-mute:after {
                content: "\10f6a9"
            }

            .fad.fa-volume-off:after {
                content: "\10f026"
            }

            .fad.fa-volume-slash:after {
                content: "\10f2e2"
            }

            .fad.fa-volume-up:after {
                content: "\10f028"
            }

            .fad.fa-vote-nay:after {
                content: "\10f771"
            }

            .fad.fa-vote-yea:after {
                content: "\10f772"
            }

            .fad.fa-vr-cardboard:after {
                content: "\10f729"
            }

            .fad.fa-wagon-covered:after {
                content: "\10f8ee"
            }

            .fad.fa-walker:after {
                content: "\10f831"
            }

            .fad.fa-walkie-talkie:after {
                content: "\10f8ef"
            }

            .fad.fa-walking:after {
                content: "\10f554"
            }

            .fad.fa-wallet:after {
                content: "\10f555"
            }

            .fad.fa-wand:after {
                content: "\10f72a"
            }

            .fad.fa-wand-magic:after {
                content: "\10f72b"
            }

            .fad.fa-warehouse:after {
                content: "\10f494"
            }

            .fad.fa-warehouse-alt:after {
                content: "\10f495"
            }

            .fad.fa-washer:after {
                content: "\10f898"
            }

            .fad.fa-watch:after {
                content: "\10f2e1"
            }

            .fad.fa-watch-calculator:after {
                content: "\10f8f0"
            }

            .fad.fa-watch-fitness:after {
                content: "\10f63e"
            }

            .fad.fa-water:after {
                content: "\10f773"
            }

            .fad.fa-water-lower:after {
                content: "\10f774"
            }

            .fad.fa-water-rise:after {
                content: "\10f775"
            }

            .fad.fa-wave-sine:after {
                content: "\10f899"
            }

            .fad.fa-wave-square:after {
                content: "\10f83e"
            }

            .fad.fa-wave-triangle:after {
                content: "\10f89a"
            }

            .fad.fa-waveform:after {
                content: "\10f8f1"
            }

            .fad.fa-waveform-path:after {
                content: "\10f8f2"
            }

            .fad.fa-webcam:after {
                content: "\10f832"
            }

            .fad.fa-webcam-slash:after {
                content: "\10f833"
            }

            .fad.fa-weight:after {
                content: "\10f496"
            }

            .fad.fa-weight-hanging:after {
                content: "\10f5cd"
            }

            .fad.fa-whale:after {
                content: "\10f72c"
            }

            .fad.fa-wheat:after {
                content: "\10f72d"
            }

            .fad.fa-wheelchair:after {
                content: "\10f193"
            }

            .fad.fa-whistle:after {
                content: "\10f460"
            }

            .fad.fa-wifi:after {
                content: "\10f1eb"
            }

            .fad.fa-wifi-1:after {
                content: "\10f6aa"
            }

            .fad.fa-wifi-2:after {
                content: "\10f6ab"
            }

            .fad.fa-wifi-slash:after {
                content: "\10f6ac"
            }

            .fad.fa-wind:after {
                content: "\10f72e"
            }

            .fad.fa-wind-turbine:after {
                content: "\10f89b"
            }

            .fad.fa-wind-warning:after {
                content: "\10f776"
            }

            .fad.fa-window:after {
                content: "\10f40e"
            }

            .fad.fa-window-alt:after {
                content: "\10f40f"
            }

            .fad.fa-window-close:after {
                content: "\10f410"
            }

            .fad.fa-window-frame:after {
                content: "\10e04f"
            }

            .fad.fa-window-frame-open:after {
                content: "\10e050"
            }

            .fad.fa-window-maximize:after {
                content: "\10f2d0"
            }

            .fad.fa-window-minimize:after {
                content: "\10f2d1"
            }

            .fad.fa-window-restore:after {
                content: "\10f2d2"
            }

            .fad.fa-windsock:after {
                content: "\10f777"
            }

            .fad.fa-wine-bottle:after {
                content: "\10f72f"
            }

            .fad.fa-wine-glass:after {
                content: "\10f4e3"
            }

            .fad.fa-wine-glass-alt:after {
                content: "\10f5ce"
            }

            .fad.fa-won-sign:after {
                content: "\10f159"
            }

            .fad.fa-wreath:after {
                content: "\10f7e2"
            }

            .fad.fa-wrench:after {
                content: "\10f0ad"
            }

            .fad.fa-x-ray:after {
                content: "\10f497"
            }

            .fad.fa-yen-sign:after {
                content: "\10f157"
            }

            .fad.fa-yin-yang:after {
                content: "\10f6ad"
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.0.svg#fontawesome) format("svg");
                unicode-range: U+f002, U+f008-f009, U+f00b-f00c, U+f00e, U+f011, U+f013, U+f019, U+f01c, U+f022-f025, U+f02a-f02b, U+f02d, U+f030, U+f040-f041, U+f044, U+f047, U+f049-f04a, U+f04e, U+f050, U+f052-f055, U+f057-f05b, U+f05e, U+f060-f066, U+f068-f06a, U+f074, U+f077-f07a, U+f07c-f07e, U+f085, U+f089, U+f08b, U+f090, U+f093-f094, U+f098, U+f09c-f09e, U+f0a4-f0ab, U+f0b2, U+f0c1, U+f0c3, U+f0c6, U+f0c9, U+f0ce, U+f0d7-f0db, U+f0e2-f0e3, U+f0e9-f0ea, U+f0ec, U+f0f4, U+f0f8, U+f0fa-f0fe, U+f100-f103, U+f106-f108, U+f10a-f10b, U+f11c, U+f120-f122, U+f124, U+f126-f128, U+f12e, U+f134, U+f137-f13a, U+f13e, U+f141-f143, U+f146, U+f14a-f14d, U+f150-f154, U+f156-f159, U+f175-f178, U+f182-f183, U+f188, U+f191-f192, U+f195, U+f199, U+f1ad-f1ae, U+f1b0, U+f1b2-f1b3, U+f1b8, U+f1bb, U+f1c0, U+f1cd, U+f1d8, U+f1da, U+f1e0-f1e2, U+f1ea, U+f1fa, U+f1fd-f1fe, U+f204-f206, U+f20b, U+f217-f218, U+f21c, U+f222, U+f224, U+f226-f229, U+f233, U+f238-f239, U+f240-f244, U+f246, U+f255-f258, U+f25a-f25c, U+f28b, U+f28d, U+f290-f292, U+f295, U+f2a1-f2a4, U+f2a8, U+f2c7-f2cb, U+f2ce, U+f2d0, U+f2d2-f2d3, U+f2db, U+f2e6-f2e7, U+f2ea, U+f2f0-f2f1, U+f2f5-f2f7, U+f2f9, U+f2fd, U+f301, U+f303, U+f308-f30f, U+f31d, U+f320-f322, U+f325-f326, U+f328-f32e, U+f330-f332, U+f336-f337, U+f339-f33c, U+f33e, U+f340-f34c, U+f350-f353, U+f355, U+f358-f35b, U+f360-f367, U+f376, U+f37e, U+f387, U+f389-f38a, U+f390, U+f39b-f39c, U+f3a0, U+f3b3, U+f3be-f3bf, U+f3c2, U+f3c5, U+f3cd-f3cf, U+f3de, U+f3e5, U+f3ed, U+f3f0, U+f3f2, U+f3fa-f3fc, U+f400-f401, U+f40e-f410
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.1.svg#fontawesome) format("svg");
                unicode-range: U+f3c1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.3.svg#fontawesome) format("svg");
                unicode-range: U+f245, U+f2b9, U+f2bb, U+f2c1, U+f3e0
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.5.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.5.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.5.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.5.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.5.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.5.svg#fontawesome) format("svg");
                unicode-range: U+f1e3, U+f432, U+f437-f438, U+f449-f44c, U+f44f-f451, U+f453, U+f455, U+f458, U+f45a-f45b, U+f45d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.7.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.7.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.7.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.7.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.7.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.7.svg#fontawesome) format("svg");
                unicode-range: U+f0d1, U+f0f1, U+f0f9, U+f21e, U+f461, U+f463-f46f, U+f472-f475, U+f479-f47a, U+f47d-f47e, U+f481-f487, U+f489, U+f48b-f496
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.9.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.9.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.9.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.9.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.9.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.9.svg#fontawesome) format("svg");
                unicode-range: U+f03d, U+f06c, U+f086, U+f0f2, U+f10d-f10e, U+f187, U+f2b5, U+f2e9, U+f2fe, U+f3dd, U+f47b-f47c, U+f498, U+f49a-f49b, U+f49d, U+f49f-f4b9, U+f4bb-f4bf, U+f4c2-f4c6, U+f4c8, U+f4cb-f4d2, U+f4d4, U+f4d6, U+f4d8-f4d9, U+f4db-f4e2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.10.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.10.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.10.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.10.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.10.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.10.svg#fontawesome) format("svg");
                unicode-range: U+f471, U+f4ca
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.11.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.11.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.11.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.11.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.11.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.11.svg#fontawesome) format("svg");
                unicode-range: U+f007, U+f0c0, U+f0c2, U+f0ed-f0ee, U+f0f0, U+f1de, U+f21b, U+f234-f235, U+f381-f382, U+f3f1, U+f406, U+f4e6, U+f4fa-f501, U+f503-f509
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.13.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.13.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.13.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.13.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.13.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.0.13.svg#fontawesome) format("svg");
                unicode-range: U+f010, U+f067, U+f072, U+f0ad, U+f0d6, U+f0e8, U+f130-f131, U+f24e, U+f3c9, U+f3d1, U+f517, U+f519-f51e, U+f520-f52c, U+f52e, U+f530-f533, U+f535-f543, U+f545-f54b, U+f54d, U+f54f-f552, U+f554-f555
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.0.svg#fontawesome) format("svg");
                unicode-range: U+f043, U+f0c4, U+f0d0, U+f125, U+f1ba, U+f1fb-f1fc, U+f207, U+f236, U+f279, U+f304-f305, U+f52d, U+f557-f558, U+f55a-f55f, U+f562-f566, U+f568, U+f56a-f56b, U+f575-f577, U+f57b, U+f586, U+f588, U+f58d-f590, U+f593-f595, U+f59d, U+f59f-f5a2, U+f5a6-f5a7, U+f5a9-f5af, U+f5b1, U+f5b6, U+f5b9-f5bd, U+f5c4-f5c5, U+f5c7, U+f5c9-f5cb, U+f5cd
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.1.1.svg#fontawesome) format("svg");
                unicode-range: U+f386
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.2.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.2.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.2.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.2.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.2.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.2.0.svg#fontawesome) format("svg");
                unicode-range: U+f018, U+f0e4, U+f109, U+f1b9, U+f1e5, U+f1f6, U+f21d, U+f276-f277, U+f3fd, U+f4d7, U+f518, U+f5d0-f5d1, U+f5d4-f5da, U+f5dd, U+f5df-f5e5, U+f5e8-f5ea, U+f5ed-f5f0, U+f5f2, U+f5f4-f5f5, U+f5f8-f5f9, U+f5fb-f600, U+f603-f60e, U+f610, U+f614, U+f617-f619, U+f61c-f61e, U+f620-f621, U+f623-f62f, U+f633, U+f635-f63d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.3.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.3.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.3.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.3.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.3.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.3.0.svg#fontawesome) format("svg");
                unicode-range: U+f027-f028, U+f080, U+f0a1, U+f0b1, U+f0eb, U+f200-f201, U+f2e2, U+f61a, U+f640, U+f643-f647, U+f64a-f64b, U+f64d-f653, U+f655-f656, U+f65d, U+f65f-f663, U+f665, U+f667-f669, U+f66b-f671, U+f673-f675, U+f678-f67b, U+f67d-f680, U+f683-f689, U+f68b, U+f694-f695, U+f697-f699, U+f69b-f69c, U+f69e-f69f, U+f6a1-f6a9, U+f6ac
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.0.svg#fontawesome) format("svg");
                unicode-range: U+f499, U+f676, U+f6ae, U+f6b0-f6b3, U+f6b5-f6bc, U+f6bf, U+f6c2, U+f6c5, U+f6c7-f6c8, U+f6cb, U+f6cd-f6d2, U+f6d5, U+f6d8-f6d9, U+f6db, U+f6de, U+f6e2-f6e3, U+f6e5-f6e7, U+f6e9-f6ec, U+f6ee, U+f6f1-f6f3, U+f6f5-f6f8, U+f6fc-f6fd, U+f6ff-f703, U+f707, U+f70a-f70b, U+f711-f713, U+f715-f71d, U+f720-f724, U+f726-f729, U+f72b, U+f72d, U+f72f
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.4.1.svg#fontawesome) format("svg");
                unicode-range: U+f72a
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.5.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.5.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.5.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.5.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.5.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.5.0.svg#fontawesome) format("svg");
                unicode-range: U+f0e7, U+f185, U+f2dc, U+f6c3-f6c4, U+f72e, U+f732-f735, U+f737-f750, U+f752, U+f754-f758, U+f75a, U+f75c, U+f75e-f761, U+f763-f76e, U+f771-f776
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.0.svg#fontawesome) format("svg");
                unicode-range: U+f06b, U+f5b7, U+f77d, U+f77f, U+f781-f782, U+f788, U+f78a-f78c, U+f78e-f78f, U+f792-f796, U+f79a-f7a1, U+f7a3-f7a4, U+f7a7-f7a8, U+f7aa, U+f7ac-f7ae, U+f7b4-f7b6, U+f7b8, U+f7bd-f7be, U+f7c1-f7c3, U+f7c5, U+f7c7-f7d2, U+f7d4, U+f7d7-f7d8, U+f7da-f7dc, U+f7de, U+f7e2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.1.svg#fontawesome) format("svg");
                unicode-range: U+f071
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.6.3.svg#fontawesome) format("svg");
                unicode-range: U+f7e4
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.0.svg#fontawesome) format("svg");
                unicode-range: U+f00a, U+f015, U+f06e, U+f070, U+f1e4, U+f2a0, U+f377, U+f470, U+f49c, U+f49e, U+f4c9, U+f6d6-f6d7, U+f705, U+f725, U+f77e, U+f780, U+f7e5-f7e7, U+f7e9-f7f0, U+f7f2-f7fc, U+f7fe, U+f800-f802, U+f804-f805, U+f807-f80f, U+f811-f812, U+f814-f818, U+f81b, U+f81e-f823, U+f825-f827, U+f82c-f82e, U+f830-f833
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.7.1.svg#fontawesome) format("svg");
                unicode-range: U+f7f1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.0.svg#fontawesome) format("svg");
                unicode-range: U+f01e, U+f021, U+f026, U+f076, U+f12d, U+f31e, U+f356, U+f45f, U+f5b0, U+f83e
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.8.2.svg#fontawesome) format("svg");
                unicode-range: U+f560
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.9.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.9.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.9.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.9.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.9.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.9.0.svg#fontawesome) format("svg");
                unicode-range: U+f036-f03c, U+f0ae, U+f0ca-f0cd, U+f15d-f15e, U+f160-f163, U+f1dd, U+f313-f315, U+f34e, U+f439-f448, U+f502, U+f677, U+f843-f855, U+f858-f85e, U+f860-f862, U+f864, U+f866-f878, U+f87a, U+f87c-f87d, U+f880-f892, U+f897-f89b
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.1.svg#fontawesome) format("svg");
                unicode-range: U+f000, U+f012, U+f029, U+f03e, U+f06d, U+f075, U+f07b, U+f083-f084, U+f0a0, U+f11e, U+f140, U+f19d, U+f20a, U+f247-f248, U+f251-f254, U+f25d, U+f275, U+f27a, U+f2c2, U+f2d1, U+f302, U+f310-f311, U+f34d, U+f3a5, U+f435, U+f454, U+f456, U+f476, U+f47f-f480, U+f52f, U+f534, U+f561, U+f578, U+f591, U+f5db, U+f5e7, U+f5f6, U+f611, U+f613, U+f654, U+f681-f682, U+f68c-f693, U+f6be, U+f6da, U+f6e4, U+f6ed, U+f6ef-f6f0, U+f6f4, U+f6fa-f6fb, U+f6fe, U+f72c, U+f751, U+f759, U+f75b, U+f779, U+f77c, U+f786-f787, U+f7ab, U+f7b2, U+f7b7, U+f7e8, U+f813, U+f85f, U+f863, U+f87b, U+f89c-f89d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.10.2.svg#fontawesome) format("svg");
                unicode-range: U+f004-f005, U+f02c, U+f02e, U+f031-f035, U+f04b-f04d, U+f056, U+f073, U+f08d, U+f095, U+f0a3, U+f0c5, U+f0c7-f0c8, U+f0dc-f0de, U+f0e0, U+f110-f111, U+f129-f12c, U+f132-f133, U+f144-f145, U+f15b-f15c, U+f164-f165, U+f193, U+f197, U+f1ab, U+f1c1-f1c9, U+f1ce, U+f1dc, U+f1f8-f1f9, U+f219, U+f249, U+f271-f274, U+f29a, U+f29e, U+f2a7, U+f2b6, U+f2e1, U+f2e3-f2e5, U+f2ec-f2ed, U+f2f2, U+f2f4, U+f2fa-f2fc, U+f306, U+f312, U+f316, U+f31a, U+f31c, U+f327, U+f333-f335, U+f3f4, U+f3ff, U+f45c, U+f460, U+f462, U+f477-f478, U+f497, U+f4ba, U+f4d3, U+f54c, U+f553, U+f559, U+f56c-f574, U+f5bf, U+f5c1, U+f5f3, U+f630-f632, U+f634, U+f63e, U+f641, U+f659-f65c, U+f696, U+f6a0, U+f6b4, U+f6bd, U+f6dd, U+f706, U+f708-f709, U+f70d-f710, U+f714, U+f71e-f71f, U+f736, U+f76f-f770, U+f777, U+f783-f784, U+f7a9, U+f7c4, U+f7d5, U+f7d9, U+f7dd, U+f7fd, U+f81c-f81d, U+f824, U+f828-f82a, U+f856-f857, U+f865, U+f879, U+f87e, U+f893-f896
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.0.svg#fontawesome) format("svg");
                unicode-range: U+f001, U+f02f, U+f042, U+f08e, U+f091, U+f0f3, U+f104-f105, U+f11b, U+f13d, U+f149, U+f1ac, U+f1ec, U+f223, U+f225, U+f22a-f22c, U+f24d, U+f26c, U+f29d, U+f2eb, U+f2ee, U+f2f3, U+f300, U+f307, U+f323-f324, U+f338, U+f33d, U+f35d, U+f48a, U+f4c0, U+f569, U+f5dc, U+f5eb, U+f601, U+f61b, U+f64c, U+f664, U+f66a, U+f68a, U+f6c0-f6c1, U+f6df-f6e1, U+f6e8, U+f6f9, U+f70c, U+f7a6, U+f81a, U+f89f-f8a5, U+f8a7-f8b6, U+f8b8-f8b9, U+f8bb-f8c9, U+f8cb-f8d1, U+f8d3, U+f8d5-f8dd, U+f8df-f8e0, U+f8e2-f8e7, U+f8e9-f8ed, U+f8ef-f8f2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.1.svg#fontawesome) format("svg");
                unicode-range: U+f00d, U+f048, U+f051, U+f0ac, U+f0b0, U+f118-f11a, U+f148, U+f14e, U+f155, U+f186, U+f19c, U+f1eb, U+f21a, U+f221, U+f22d, U+f2bd, U+f2e8, U+f2f8, U+f354, U+f357, U+f433-f434, U+f436, U+f44e, U+f45e, U+f4c7, U+f4da, U+f4e3, U+f51f, U+f54e, U+f556, U+f567, U+f579-f57a, U+f57c-f585, U+f587, U+f589-f58a, U+f58c, U+f596-f59c, U+f5a4-f5a5, U+f5b3-f5b4, U+f5b8, U+f5c0, U+f5c2-f5c3, U+f5c8, U+f5ce, U+f5de, U+f5e6, U+f5ec, U+f602, U+f615-f616, U+f622, U+f648-f649, U+f67c, U+f69a, U+f6aa-f6ab, U+f6ad, U+f7a2, U+f7a5, U+f7b9-f7ba, U+f7ff, U+f803, U+f806, U+f810, U+f819, U+f82b, U+f87f, U+f8de, U+f8ee
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.11.2.svg#fontawesome) format("svg");
                unicode-range: U+f488, U+f8b7, U+f8f3
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.0.svg#fontawesome) format("svg");
                unicode-range: U+f135, U+f1e6, U+f259, U+f2cc-f2cd, U+f422, U+f424, U+f515-f516, U+f544, U+f58b, U+f5d2-f5d3, U+f61f, U+f657-f658, U+f666, U+f672, U+f6d3-f6d4, U+f753, U+f762, U+f7bf-f7c0, U+f82f, U+f8ba, U+f8d4, U+f8f4-f8ff
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.12.1.svg#fontawesome) format("svg");
                unicode-range: U+f017, U+f317-f319, U+f65e, U+f6c6
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.13.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.13.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.13.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.13.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.13.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.13.0.svg#fontawesome) format("svg");
                unicode-range: U+f4c1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.14.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.14.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.14.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.14.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.14.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.14.0.svg#fontawesome) format("svg");
                unicode-range: U+e000-e006, U+e008-e012, U+e014-e019, U+e01b-e01d, U+e01f-e048, U+e04a-e051, U+e053-e054, U+e058-e076
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.15.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.15.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.15.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.15.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.15.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-light-300-5.15.1.svg#fontawesome) format("svg");
                unicode-range: U+e085-e086
            }

            .fal {
                font-weight: 300
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.svg#fontawesome) format("svg");
                unicode-range: U+f022, U+f024, U+f044, U+f057-f059, U+f07c, U+f089, U+f094, U+f09d, U+f0a4-f0a7, U+f0f8, U+f0fe, U+f11c, U+f146, U+f14a, U+f14d, U+f150-f152, U+f191-f192, U+f1ad, U+f1cd, U+f1d8, U+f1ea, U+f255-f258, U+f25a-f25b, U+f28b, U+f28d, U+f2d0, U+f2d2, U+f328, U+f358-f35b, U+f410
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.0.svg#fontawesome) format("svg");
                unicode-range: U+f002, U+f008-f009, U+f00b-f00c, U+f00e, U+f011, U+f013, U+f019, U+f01c, U+f023, U+f025, U+f02a-f02b, U+f02d, U+f030, U+f040-f041, U+f047, U+f049-f04a, U+f04e, U+f050, U+f052-f055, U+f05a-f05b, U+f05e, U+f060-f066, U+f068-f06a, U+f074, U+f077-f07a, U+f07d-f07e, U+f085, U+f08b, U+f090, U+f093, U+f098, U+f09c, U+f09e, U+f0a8-f0ab, U+f0b2, U+f0c1, U+f0c3, U+f0c6, U+f0c9, U+f0ce, U+f0d7-f0db, U+f0e2-f0e3, U+f0e9-f0ea, U+f0ec, U+f0f4, U+f0fa-f0fd, U+f100-f103, U+f106-f108, U+f10a-f10b, U+f120-f122, U+f124, U+f126-f128, U+f12e, U+f134, U+f137-f13a, U+f13e, U+f141-f143, U+f14b-f14c, U+f153-f154, U+f156-f159, U+f175-f178, U+f182-f183, U+f188, U+f195, U+f199, U+f1ae, U+f1b0, U+f1b2-f1b3, U+f1b8, U+f1bb, U+f1c0, U+f1da, U+f1e0-f1e2, U+f1fa, U+f1fd-f1fe, U+f204-f206, U+f20b, U+f217-f218, U+f21c, U+f222, U+f224, U+f226-f229, U+f233, U+f238-f239, U+f240-f244, U+f246, U+f25c, U+f290-f292, U+f295, U+f2a1-f2a4, U+f2a8, U+f2c7-f2cb, U+f2ce, U+f2d3, U+f2db, U+f2e6-f2e7, U+f2ea, U+f2f0-f2f1, U+f2f5-f2f7, U+f2f9, U+f2fd, U+f301, U+f303, U+f308-f30f, U+f31d, U+f320-f322, U+f325-f326, U+f329-f32e, U+f330-f332, U+f336-f337, U+f339-f33c, U+f33e, U+f340-f34c, U+f350-f353, U+f355, U+f360-f367, U+f376, U+f37e, U+f387, U+f389-f38a, U+f390, U+f39b-f39c, U+f3a0, U+f3b3, U+f3be-f3bf, U+f3c2, U+f3c5, U+f3cd-f3cf, U+f3de, U+f3e5, U+f3ed, U+f3f0, U+f3f2, U+f3fa-f3fc, U+f400-f401, U+f40e-f40f
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.1.svg#fontawesome) format("svg");
                unicode-range: U+f3c1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.svg#fontawesome) format("svg");
                unicode-range: U+f2b9, U+f2bb, U+f2c1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.3.svg#fontawesome) format("svg");
                unicode-range: U+f245, U+f3e0
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.svg#fontawesome) format("svg");
                unicode-range: U+f1e3
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.5.svg#fontawesome) format("svg");
                unicode-range: U+f432, U+f437-f438, U+f449-f44c, U+f44f-f451, U+f453, U+f455, U+f458, U+f45a-f45b, U+f45d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.7.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.7.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.7.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.7.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.7.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.7.svg#fontawesome) format("svg");
                unicode-range: U+f0d1, U+f0f1, U+f0f9, U+f21e, U+f461, U+f463-f46f, U+f472-f475, U+f479-f47a, U+f47d-f47e, U+f481-f487, U+f489, U+f48b-f496
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.svg#fontawesome) format("svg");
                unicode-range: U+f086, U+f2b5, U+f4ad
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.9.svg#fontawesome) format("svg");
                unicode-range: U+f03d, U+f06c, U+f0f2, U+f10d-f10e, U+f187, U+f2e9, U+f2fe, U+f3dd, U+f47b-f47c, U+f498, U+f49a-f49b, U+f49d, U+f49f-f4ac, U+f4ae-f4b9, U+f4bb-f4bf, U+f4c2-f4c6, U+f4c8, U+f4cb-f4d2, U+f4d4, U+f4d6, U+f4d8-f4d9, U+f4db-f4e2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.10.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.10.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.10.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.10.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.10.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.10.svg#fontawesome) format("svg");
                unicode-range: U+f471, U+f4ca
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.svg#fontawesome) format("svg");
                unicode-range: U+f007, U+f4e6
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.11.svg#fontawesome) format("svg");
                unicode-range: U+f0c0, U+f0c2, U+f0ed-f0ee, U+f0f0, U+f1de, U+f21b, U+f234-f235, U+f381-f382, U+f3f1, U+f406, U+f4fa-f501, U+f503-f509
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.svg#fontawesome) format("svg");
                unicode-range: U+f3d1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.0.13.svg#fontawesome) format("svg");
                unicode-range: U+f010, U+f067, U+f072, U+f0ad, U+f0d6, U+f0e8, U+f130-f131, U+f24e, U+f3c9, U+f517, U+f519-f51e, U+f520-f52c, U+f52e, U+f530-f533, U+f535-f543, U+f545-f54b, U+f54d, U+f54f-f552, U+f554-f555
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.svg#fontawesome) format("svg");
                unicode-range: U+f279, U+f586, U+f588
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.0.svg#fontawesome) format("svg");
                unicode-range: U+f043, U+f0c4, U+f0d0, U+f125, U+f1ba, U+f1fb-f1fc, U+f207, U+f236, U+f304-f305, U+f52d, U+f557-f558, U+f55a-f55f, U+f562-f566, U+f568, U+f56a-f56b, U+f575-f577, U+f57b, U+f58d-f590, U+f593-f595, U+f59d, U+f59f-f5a2, U+f5a6-f5a7, U+f5a9-f5af, U+f5b1, U+f5b6, U+f5b9-f5bd, U+f5c4-f5c5, U+f5c7, U+f5c9-f5cb, U+f5cd
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.1.1.svg#fontawesome) format("svg");
                unicode-range: U+f386
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.svg#fontawesome) format("svg");
                unicode-range: U+f1f6
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.2.0.svg#fontawesome) format("svg");
                unicode-range: U+f018, U+f0e4, U+f109, U+f1b9, U+f1e5, U+f21d, U+f276-f277, U+f3fd, U+f4d7, U+f518, U+f5d0-f5d1, U+f5d4-f5da, U+f5dd, U+f5df-f5e5, U+f5e8-f5ea, U+f5ed-f5f0, U+f5f2, U+f5f4-f5f5, U+f5f8-f5f9, U+f5fb-f600, U+f603-f60e, U+f610, U+f614, U+f617-f619, U+f61c-f61e, U+f620-f621, U+f623-f62f, U+f633, U+f635-f63d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.svg#fontawesome) format("svg");
                unicode-range: U+f080, U+f0eb
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.3.0.svg#fontawesome) format("svg");
                unicode-range: U+f027-f028, U+f0a1, U+f0b1, U+f200-f201, U+f2e2, U+f61a, U+f640, U+f643-f647, U+f64a-f64b, U+f64d-f653, U+f655-f656, U+f65d, U+f65f-f663, U+f665, U+f667-f669, U+f66b-f671, U+f673-f675, U+f678-f67b, U+f67d-f680, U+f683-f689, U+f68b, U+f694-f695, U+f697-f699, U+f69b-f69c, U+f69e-f69f, U+f6a1-f6a9, U+f6ac
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.0.svg#fontawesome) format("svg");
                unicode-range: U+f499, U+f676, U+f6ae, U+f6b0-f6b3, U+f6b5-f6bc, U+f6bf, U+f6c2, U+f6c5, U+f6c7-f6c8, U+f6cb, U+f6cd-f6d2, U+f6d5, U+f6d8-f6d9, U+f6db, U+f6de, U+f6e2-f6e3, U+f6e5-f6e7, U+f6e9-f6ec, U+f6ee, U+f6f1-f6f3, U+f6f5-f6f8, U+f6fc-f6fd, U+f6ff-f703, U+f707, U+f70a-f70b, U+f711-f713, U+f715-f71d, U+f720-f724, U+f726-f729, U+f72b, U+f72d, U+f72f
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.4.1.svg#fontawesome) format("svg");
                unicode-range: U+f72a
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.svg#fontawesome) format("svg");
                unicode-range: U+f185, U+f2dc
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.5.0.svg#fontawesome) format("svg");
                unicode-range: U+f0e7, U+f6c3-f6c4, U+f72e, U+f732-f735, U+f737-f750, U+f752, U+f754-f758, U+f75a, U+f75c, U+f75e-f761, U+f763-f76e, U+f771-f776
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.0.svg#fontawesome) format("svg");
                unicode-range: U+f06b, U+f5b7, U+f77d, U+f77f, U+f781-f782, U+f788, U+f78a-f78c, U+f78e-f78f, U+f792-f796, U+f79a-f7a1, U+f7a3-f7a4, U+f7a7-f7a8, U+f7aa, U+f7ac-f7ae, U+f7b4-f7b6, U+f7b8, U+f7bd-f7be, U+f7c1-f7c3, U+f7c5, U+f7c7-f7d2, U+f7d4, U+f7d7-f7d8, U+f7da-f7dc, U+f7de, U+f7e2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.1.svg#fontawesome) format("svg");
                unicode-range: U+f071
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.6.3.svg#fontawesome) format("svg");
                unicode-range: U+f7e4
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.svg#fontawesome) format("svg");
                unicode-range: U+f06e, U+f070
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.0.svg#fontawesome) format("svg");
                unicode-range: U+f00a, U+f015, U+f1e4, U+f2a0, U+f377, U+f470, U+f49c, U+f49e, U+f4c9, U+f6d6-f6d7, U+f705, U+f725, U+f77e, U+f780, U+f7e5-f7e7, U+f7e9-f7f0, U+f7f2-f7fc, U+f7fe, U+f800-f802, U+f804-f805, U+f807-f80f, U+f811-f812, U+f814-f818, U+f81b, U+f81e-f823, U+f825-f827, U+f82c-f82e, U+f830-f833
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.7.1.svg#fontawesome) format("svg");
                unicode-range: U+f7f1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.0.svg#fontawesome) format("svg");
                unicode-range: U+f01e, U+f021, U+f026, U+f076, U+f12d, U+f31e, U+f356, U+f45f, U+f5b0, U+f83e
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.8.2.svg#fontawesome) format("svg");
                unicode-range: U+f560
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.9.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.9.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.9.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.9.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.9.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.9.0.svg#fontawesome) format("svg");
                unicode-range: U+f036-f03c, U+f0ae, U+f0ca-f0cd, U+f15d-f15e, U+f160-f163, U+f1dd, U+f313-f315, U+f34e, U+f439-f448, U+f502, U+f677, U+f843-f855, U+f858-f85e, U+f860-f862, U+f864, U+f866-f878, U+f87a, U+f87c-f87d, U+f880-f892, U+f897-f89b
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.svg#fontawesome) format("svg");
                unicode-range: U+f03e, U+f075, U+f07b, U+f0a0, U+f20a, U+f247-f248, U+f254, U+f25d, U+f27a, U+f2c2, U+f2d1, U+f302, U+f3a5
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.1.svg#fontawesome) format("svg");
                unicode-range: U+f000, U+f012, U+f029, U+f06d, U+f083-f084, U+f11e, U+f140, U+f19d, U+f251-f253, U+f275, U+f310-f311, U+f34d, U+f435, U+f454, U+f456, U+f476, U+f47f-f480, U+f52f, U+f534, U+f561, U+f578, U+f591, U+f5db, U+f5e7, U+f5f6, U+f611, U+f613, U+f654, U+f681-f682, U+f68c-f693, U+f6be, U+f6da, U+f6e4, U+f6ed, U+f6ef-f6f0, U+f6f4, U+f6fa-f6fb, U+f6fe, U+f72c, U+f751, U+f759, U+f75b, U+f779, U+f77c, U+f786-f787, U+f7ab, U+f7b2, U+f7b7, U+f7e8, U+f813, U+f85f, U+f863, U+f87b, U+f89c-f89d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.svg#fontawesome) format("svg");
                unicode-range: U+f004-f005, U+f02e, U+f073, U+f0c5, U+f0c7-f0c8, U+f0e0, U+f111, U+f133, U+f144, U+f15b-f15c, U+f164-f165, U+f1c1-f1c9, U+f1f9, U+f249, U+f271-f274, U+f2b6, U+f2ed
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.10.2.svg#fontawesome) format("svg");
                unicode-range: U+f02c, U+f031-f035, U+f04b-f04d, U+f056, U+f08d, U+f095, U+f0a3, U+f0dc-f0de, U+f110, U+f129-f12c, U+f132, U+f145, U+f193, U+f197, U+f1ab, U+f1ce, U+f1dc, U+f1f8, U+f219, U+f29a, U+f29e, U+f2a7, U+f2e1, U+f2e3-f2e5, U+f2ec, U+f2f2, U+f2f4, U+f2fa-f2fc, U+f306, U+f312, U+f316, U+f31a, U+f31c, U+f327, U+f333-f335, U+f3f4, U+f3ff, U+f45c, U+f460, U+f462, U+f477-f478, U+f497, U+f4ba, U+f4d3, U+f54c, U+f553, U+f559, U+f56c-f574, U+f5bf, U+f5c1, U+f5f3, U+f630-f632, U+f634, U+f63e, U+f641, U+f659-f65c, U+f696, U+f6a0, U+f6b4, U+f6bd, U+f6dd, U+f706, U+f708-f709, U+f70d-f710, U+f714, U+f71e-f71f, U+f736, U+f76f-f770, U+f777, U+f783-f784, U+f7a9, U+f7c4, U+f7d5, U+f7d9, U+f7dd, U+f7fd, U+f81c-f81d, U+f824, U+f828-f82a, U+f856-f857, U+f865, U+f879, U+f87e, U+f893-f896
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.svg#fontawesome) format("svg");
                unicode-range: U+f0f3, U+f24d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.0.svg#fontawesome) format("svg");
                unicode-range: U+f001, U+f02f, U+f042, U+f08e, U+f091, U+f104-f105, U+f11b, U+f13d, U+f149, U+f1ac, U+f1ec, U+f223, U+f225, U+f22a-f22c, U+f26c, U+f29d, U+f2eb, U+f2ee, U+f2f3, U+f300, U+f307, U+f323-f324, U+f338, U+f33d, U+f35d, U+f48a, U+f4c0, U+f569, U+f5dc, U+f5eb, U+f601, U+f61b, U+f64c, U+f664, U+f66a, U+f68a, U+f6c0-f6c1, U+f6df-f6e1, U+f6e8, U+f6f9, U+f70c, U+f7a6, U+f81a, U+f89f-f8a5, U+f8a7-f8b6, U+f8b8-f8b9, U+f8bb-f8c9, U+f8cb-f8d1, U+f8d3, U+f8d5-f8dd, U+f8df-f8e0, U+f8e2-f8e7, U+f8e9-f8ed, U+f8ef-f8f2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.svg#fontawesome) format("svg");
                unicode-range: U+f118-f11a, U+f14e, U+f186, U+f2bd, U+f4da, U+f556, U+f567, U+f579-f57a, U+f57f-f585, U+f587, U+f589-f58a, U+f58c, U+f596-f59c, U+f5a4-f5a5, U+f5b3-f5b4, U+f5b8, U+f5c2, U+f5c8
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.1.svg#fontawesome) format("svg");
                unicode-range: U+f00d, U+f048, U+f051, U+f0ac, U+f0b0, U+f148, U+f155, U+f19c, U+f1eb, U+f21a, U+f221, U+f22d, U+f2e8, U+f2f8, U+f354, U+f357, U+f433-f434, U+f436, U+f44e, U+f45e, U+f4c7, U+f4e3, U+f51f, U+f54e, U+f57c-f57e, U+f5c0, U+f5c3, U+f5ce, U+f5de, U+f5e6, U+f5ec, U+f602, U+f615-f616, U+f622, U+f648-f649, U+f67c, U+f69a, U+f6aa-f6ab, U+f6ad, U+f7a2, U+f7a5, U+f7b9-f7ba, U+f7ff, U+f803, U+f806, U+f810, U+f819, U+f82b, U+f87f, U+f8de, U+f8ee
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.11.2.svg#fontawesome) format("svg");
                unicode-range: U+f488, U+f8b7, U+f8f3
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.svg#fontawesome) format("svg");
                unicode-range: U+f259, U+f58b
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.0.svg#fontawesome) format("svg");
                unicode-range: U+f135, U+f1e6, U+f2cc-f2cd, U+f422, U+f424, U+f515-f516, U+f544, U+f5d2-f5d3, U+f61f, U+f657-f658, U+f666, U+f672, U+f6d3-f6d4, U+f753, U+f762, U+f7bf-f7c0, U+f82f, U+f8ba, U+f8d4, U+f8f4-f8ff
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.svg#fontawesome) format("svg");
                unicode-range: U+f017
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.12.1.svg#fontawesome) format("svg");
                unicode-range: U+f317-f319, U+f65e, U+f6c6
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.13.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.13.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.13.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.13.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.13.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.13.0.svg#fontawesome) format("svg");
                unicode-range: U+f4c1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.14.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.14.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.14.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.14.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.14.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.14.0.svg#fontawesome) format("svg");
                unicode-range: U+e000-e006, U+e008-e012, U+e014-e019, U+e01b-e01d, U+e01f-e048, U+e04a-e051, U+e053-e054, U+e058-e076
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.15.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.15.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.15.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.15.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.15.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-regular-400-5.15.1.svg#fontawesome) format("svg");
                unicode-range: U+e085-e086
            }

            .fal,
            .far {
                font-family: "Font Awesome 5 Pro"
            }

            .far {
                font-weight: 400
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.svg#fontawesome) format("svg");
                unicode-range: U+f002, U+f008-f009, U+f00b-f00c, U+f00e, U+f011, U+f013, U+f019, U+f01c, U+f022-f025, U+f02a-f02b, U+f02d, U+f030, U+f041, U+f044, U+f049-f04a, U+f04e, U+f050, U+f052-f055, U+f057-f05b, U+f05e, U+f060-f066, U+f068-f06a, U+f074, U+f077-f07a, U+f07c, U+f085, U+f089, U+f093-f094, U+f098, U+f09c-f09e, U+f0a4-f0ab, U+f0b2, U+f0c1, U+f0c3, U+f0c6, U+f0c9, U+f0ce, U+f0d7-f0db, U+f0e2-f0e3, U+f0e9-f0ea, U+f0f4, U+f0f8, U+f0fa-f0fe, U+f100-f103, U+f106-f108, U+f10a-f10b, U+f11c, U+f120-f122, U+f124, U+f126-f128, U+f12e, U+f134, U+f137-f13a, U+f13e, U+f141-f143, U+f146, U+f14a-f14b, U+f14d, U+f150-f154, U+f156-f159, U+f182-f183, U+f188, U+f191-f192, U+f195, U+f199, U+f1ad-f1ae, U+f1b0, U+f1b2-f1b3, U+f1b8, U+f1bb, U+f1c0, U+f1cd, U+f1d8, U+f1da, U+f1e0-f1e2, U+f1ea, U+f1fa, U+f1fd-f1fe, U+f204-f206, U+f20b, U+f217-f218, U+f21c, U+f222, U+f224, U+f226-f229, U+f233, U+f238-f239, U+f240-f244, U+f246, U+f255-f258, U+f25a-f25c, U+f28b, U+f28d, U+f290-f292, U+f295, U+f2a1-f2a4, U+f2a8, U+f2c7-f2cb, U+f2ce, U+f2d0, U+f2d2, U+f2db, U+f2e7, U+f2ea, U+f2f1, U+f2f5-f2f6, U+f2f9, U+f303, U+f309-f30c, U+f328, U+f337, U+f358-f35b, U+f360, U+f362, U+f3be-f3bf, U+f3c5, U+f3cd, U+f3e5, U+f3ed, U+f3fa, U+f410
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.0.svg#fontawesome) format("svg");
                unicode-range: U+f040, U+f047, U+f07d-f07e, U+f08b, U+f090, U+f0ec, U+f14c, U+f175-f178, U+f2d3, U+f2e6, U+f2f0, U+f2f7, U+f2fd, U+f301, U+f308, U+f30d-f30f, U+f31d, U+f320-f322, U+f325-f326, U+f329-f32e, U+f330-f332, U+f336, U+f339-f33c, U+f33e, U+f340-f34c, U+f350-f353, U+f355, U+f361, U+f363-f367, U+f376, U+f37e, U+f387, U+f389-f38a, U+f390, U+f39b-f39c, U+f3a0, U+f3b3, U+f3c2, U+f3ce-f3cf, U+f3de, U+f3f0, U+f3f2, U+f3fb-f3fc, U+f400-f401, U+f40e-f40f
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.1.svg#fontawesome) format("svg");
                unicode-range: U+f3c1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.3.svg#fontawesome) format("svg");
                unicode-range: U+f245, U+f2b9, U+f2bb, U+f2c1, U+f3e0
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.svg#fontawesome) format("svg");
                unicode-range: U+f1e3, U+f44b, U+f450, U+f453, U+f458, U+f45d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.5.svg#fontawesome) format("svg");
                unicode-range: U+f432, U+f437-f438, U+f449-f44a, U+f44c, U+f44f, U+f451, U+f455, U+f45a-f45b
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.svg#fontawesome) format("svg");
                unicode-range: U+f0d1, U+f0f1, U+f0f9, U+f21e, U+f461, U+f466, U+f468-f46d, U+f472, U+f474, U+f479, U+f47d-f47e, U+f481-f482, U+f484-f487, U+f48b, U+f48d-f48e, U+f490-f494, U+f496
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.7.svg#fontawesome) format("svg");
                unicode-range: U+f463-f465, U+f467, U+f46e-f46f, U+f473, U+f475, U+f47a, U+f483, U+f489, U+f48c, U+f48f, U+f495
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.svg#fontawesome) format("svg");
                unicode-range: U+f03d, U+f06c, U+f086, U+f0f2, U+f10d-f10e, U+f187, U+f2b5, U+f2fe, U+f3dd, U+f4ad, U+f4b3, U+f4b8-f4b9, U+f4bd-f4be, U+f4c2, U+f4c4, U+f4cd-f4ce, U+f4d6, U+f4d8-f4d9, U+f4db, U+f4de-f4df, U+f4e2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.9.svg#fontawesome) format("svg");
                unicode-range: U+f2e9, U+f47b-f47c, U+f498, U+f49a-f49b, U+f49d, U+f49f-f4ac, U+f4ae-f4b2, U+f4b4-f4b7, U+f4bb-f4bc, U+f4bf, U+f4c3, U+f4c5-f4c6, U+f4c8, U+f4cb-f4cc, U+f4cf-f4d2, U+f4d4, U+f4dc-f4dd, U+f4e0-f4e1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.svg#fontawesome) format("svg");
                unicode-range: U+f471
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.10.svg#fontawesome) format("svg");
                unicode-range: U+f4ca
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.svg#fontawesome) format("svg");
                unicode-range: U+f007, U+f0c0, U+f0c2, U+f0f0, U+f1de, U+f21b, U+f234-f235, U+f381-f382, U+f406, U+f4e6, U+f4fa-f501, U+f503-f509
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.11.svg#fontawesome) format("svg");
                unicode-range: U+f0ed-f0ee, U+f3f1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.13.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.13.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.13.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.13.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.13.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.0.13.svg#fontawesome) format("svg");
                unicode-range: U+f010, U+f067, U+f072, U+f0ad, U+f0d6, U+f0e8, U+f130-f131, U+f24e, U+f3c9, U+f3d1, U+f517, U+f519-f51e, U+f520-f52c, U+f52e, U+f530-f533, U+f535-f543, U+f545-f54b, U+f54d, U+f54f-f552, U+f554-f555
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.svg#fontawesome) format("svg");
                unicode-range: U+f043, U+f0c4, U+f0d0, U+f125, U+f1ba, U+f1fb-f1fc, U+f207, U+f236, U+f279, U+f304-f305, U+f52d, U+f557-f558, U+f55a-f55f, U+f562-f566, U+f568, U+f56a-f56b, U+f575-f577, U+f57b, U+f586, U+f588, U+f58d-f590, U+f593-f595, U+f59d, U+f59f-f5a2, U+f5a6-f5a7, U+f5aa-f5af, U+f5b1, U+f5b6, U+f5ba-f5bd, U+f5c4-f5c5, U+f5c7, U+f5c9-f5cb, U+f5cd
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.0.svg#fontawesome) format("svg");
                unicode-range: U+f5a9, U+f5b9
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.1.1.svg#fontawesome) format("svg");
                unicode-range: U+f386
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.svg#fontawesome) format("svg");
                unicode-range: U+f018, U+f109, U+f1b9, U+f1e5, U+f1f6, U+f21d, U+f276-f277, U+f3fd, U+f4d7, U+f518, U+f5d0-f5d1, U+f5d7, U+f5da, U+f5df, U+f5e1, U+f5e4, U+f5ee, U+f5fc-f5fd, U+f604, U+f610, U+f619, U+f621, U+f62e-f62f, U+f637, U+f63b-f63c
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.2.0.svg#fontawesome) format("svg");
                unicode-range: U+f0e4, U+f5d4-f5d6, U+f5d8-f5d9, U+f5dd, U+f5e0, U+f5e2-f5e3, U+f5e5, U+f5e8-f5ea, U+f5ed, U+f5ef-f5f0, U+f5f2, U+f5f4-f5f5, U+f5f8-f5f9, U+f5fb, U+f5fe-f600, U+f603, U+f605-f60e, U+f614, U+f617-f618, U+f61c-f61e, U+f620, U+f623-f62d, U+f633, U+f635-f636, U+f638-f63a, U+f63d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.svg#fontawesome) format("svg");
                unicode-range: U+f027-f028, U+f080, U+f0a1, U+f0b1, U+f0eb, U+f200-f201, U+f644, U+f647, U+f64a, U+f64f, U+f651, U+f653, U+f655, U+f65d, U+f662, U+f665, U+f669, U+f66b, U+f66d, U+f66f, U+f674, U+f678-f679, U+f67b, U+f67f, U+f683-f684, U+f687-f689, U+f698-f699, U+f69b, U+f6a1, U+f6a7, U+f6a9
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.3.0.svg#fontawesome) format("svg");
                unicode-range: U+f2e2, U+f61a, U+f640, U+f643, U+f645-f646, U+f64b, U+f64d-f64e, U+f650, U+f652, U+f656, U+f65f-f661, U+f663, U+f667-f668, U+f66c, U+f66e, U+f670-f671, U+f673, U+f675, U+f67a, U+f67d-f67e, U+f680, U+f685-f686, U+f68b, U+f694-f695, U+f697, U+f69c, U+f69e-f69f, U+f6a2-f6a6, U+f6a8, U+f6ac
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.svg#fontawesome) format("svg");
                unicode-range: U+f676, U+f6b6-f6b7, U+f6bb, U+f6cf, U+f6d1, U+f6d5, U+f6d9, U+f6de, U+f6e2-f6e3, U+f6e6, U+f6ec, U+f6f1-f6f2, U+f6fc, U+f6ff-f700, U+f70b, U+f715, U+f717, U+f722, U+f728-f729, U+f72f
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.0.svg#fontawesome) format("svg");
                unicode-range: U+f499, U+f6ae, U+f6b0-f6b3, U+f6b5, U+f6b8-f6ba, U+f6bc, U+f6bf, U+f6c2, U+f6c5, U+f6c7-f6c8, U+f6cb, U+f6cd-f6ce, U+f6d0, U+f6d2, U+f6d8, U+f6db, U+f6e5, U+f6e7, U+f6e9-f6eb, U+f6ee, U+f6f3, U+f6f5-f6f8, U+f6fd, U+f701-f703, U+f707, U+f70a, U+f711-f713, U+f716, U+f718-f71d, U+f720-f721, U+f723-f724, U+f726-f727, U+f72b, U+f72d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.4.1.svg#fontawesome) format("svg");
                unicode-range: U+f72a
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.svg#fontawesome) format("svg");
                unicode-range: U+f0e7, U+f185, U+f2dc, U+f6c3-f6c4, U+f72e, U+f73b-f73d, U+f740, U+f743, U+f747, U+f74d, U+f756, U+f75a, U+f75e-f75f, U+f769, U+f76b, U+f772-f773
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.5.0.svg#fontawesome) format("svg");
                unicode-range: U+f732-f735, U+f737-f73a, U+f73e-f73f, U+f741-f742, U+f744-f746, U+f748-f74c, U+f74e-f750, U+f752, U+f754-f755, U+f757-f758, U+f75c, U+f760-f761, U+f763-f768, U+f76a, U+f76c-f76e, U+f771, U+f774-f776
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.svg#fontawesome) format("svg");
                unicode-range: U+f06b, U+f5b7, U+f77d, U+f781, U+f788, U+f78c, U+f793-f794, U+f796, U+f79c, U+f79f-f7a0, U+f7a4, U+f7aa, U+f7ad-f7ae, U+f7b5-f7b6, U+f7bd, U+f7c2, U+f7c5, U+f7c9-f7ca, U+f7cc-f7ce, U+f7d0, U+f7d2, U+f7d7-f7d8, U+f7da
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.0.svg#fontawesome) format("svg");
                unicode-range: U+f77f, U+f782, U+f78a-f78b, U+f78e-f78f, U+f792, U+f795, U+f79a-f79b, U+f79d-f79e, U+f7a1, U+f7a3, U+f7a7-f7a8, U+f7ac, U+f7b4, U+f7b8, U+f7be, U+f7c1, U+f7c3, U+f7c7-f7c8, U+f7cb, U+f7cf, U+f7d1, U+f7d4, U+f7db-f7dc, U+f7de, U+f7e2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.1.svg#fontawesome) format("svg");
                unicode-range: U+f071
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.3.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.3.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.3.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.3.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.3.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.6.3.svg#fontawesome) format("svg");
                unicode-range: U+f7e4
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.svg#fontawesome) format("svg");
                unicode-range: U+f00a, U+f015, U+f06e, U+f070, U+f1e4, U+f2a0, U+f470, U+f49e, U+f6d7, U+f780, U+f7e5-f7e6, U+f7ec, U+f7ef, U+f7f2, U+f7f5, U+f7f7, U+f7fa-f7fb, U+f805, U+f807, U+f80d, U+f80f, U+f812, U+f815-f816, U+f818
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.0.svg#fontawesome) format("svg");
                unicode-range: U+f377, U+f49c, U+f4c9, U+f6d6, U+f705, U+f725, U+f77e, U+f7e7, U+f7e9-f7eb, U+f7ed-f7ee, U+f7f0, U+f7f3-f7f4, U+f7f6, U+f7f8-f7f9, U+f7fc, U+f7fe, U+f800-f802, U+f804, U+f808-f80c, U+f80e, U+f811, U+f814, U+f817, U+f81b, U+f81e-f823, U+f825-f827, U+f82c-f82e, U+f830-f833
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.7.1.svg#fontawesome) format("svg");
                unicode-range: U+f7f1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.svg#fontawesome) format("svg");
                unicode-range: U+f01e, U+f021, U+f026, U+f076, U+f12d, U+f31e, U+f45f, U+f5b0, U+f83e
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.0.svg#fontawesome) format("svg");
                unicode-range: U+f356
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.8.2.svg#fontawesome) format("svg");
                unicode-range: U+f560
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.svg#fontawesome) format("svg");
                unicode-range: U+f036-f03c, U+f0ae, U+f0ca-f0cd, U+f15d-f15e, U+f160-f163, U+f1dd, U+f439-f43a, U+f43c, U+f43f, U+f441, U+f443, U+f445, U+f447, U+f502, U+f84a, U+f84c, U+f850, U+f853, U+f86d, U+f87c-f87d, U+f881-f882, U+f884-f887, U+f891, U+f897
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.9.0.svg#fontawesome) format("svg");
                unicode-range: U+f313-f315, U+f34e, U+f43b, U+f43d-f43e, U+f440, U+f442, U+f444, U+f446, U+f448, U+f677, U+f843-f849, U+f84b, U+f84d-f84f, U+f851-f852, U+f854-f855, U+f858-f85e, U+f860-f862, U+f864, U+f866-f86c, U+f86e-f878, U+f87a, U+f880, U+f883, U+f888-f890, U+f892, U+f898-f89b
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.svg#fontawesome) format("svg");
                unicode-range: U+f000, U+f012, U+f029, U+f03e, U+f06d, U+f075, U+f07b, U+f083-f084, U+f0a0, U+f11e, U+f140, U+f19d, U+f20a, U+f247-f248, U+f251-f254, U+f25d, U+f275, U+f27a, U+f2c2, U+f2d1, U+f302, U+f3a5, U+f47f, U+f52f, U+f534, U+f561, U+f578, U+f591, U+f5e7, U+f613, U+f654, U+f681-f682, U+f6be, U+f6ed, U+f6f0, U+f6fa, U+f75b, U+f77c, U+f786-f787, U+f7ab, U+f863, U+f87b
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.1.svg#fontawesome) format("svg");
                unicode-range: U+f310-f311, U+f34d, U+f435, U+f454, U+f456, U+f476, U+f480, U+f5db, U+f5f6, U+f611, U+f68c-f693, U+f6da, U+f6e4, U+f6ef, U+f6f4, U+f6fb, U+f6fe, U+f72c, U+f751, U+f759, U+f779, U+f7b2, U+f7b7, U+f7e8, U+f813, U+f85f, U+f89c-f89d
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.svg#fontawesome) format("svg");
                unicode-range: U+f004-f005, U+f02c, U+f02e, U+f031-f035, U+f04b-f04d, U+f056, U+f073, U+f08d, U+f095, U+f0a3, U+f0c5, U+f0c7-f0c8, U+f0dc-f0de, U+f0e0, U+f110-f111, U+f129-f12c, U+f133, U+f144, U+f15b-f15c, U+f164-f165, U+f193, U+f197, U+f1ab, U+f1c1-f1c9, U+f1ce, U+f1dc, U+f1f8-f1f9, U+f249, U+f271-f274, U+f29a, U+f29e, U+f2a7, U+f2b6, U+f2e5, U+f2ed, U+f2f2, U+f3ff, U+f45c, U+f462, U+f477-f478, U+f497, U+f4ba, U+f4d3, U+f54c, U+f553, U+f559, U+f56c-f574, U+f5bf, U+f5c1, U+f630, U+f641, U+f696, U+f6a0, U+f6dd, U+f70e, U+f714, U+f71e, U+f783-f784, U+f7a9, U+f7c4, U+f7d9, U+f829-f82a, U+f879
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.10.2.svg#fontawesome) format("svg");
                unicode-range: U+f132, U+f145, U+f219, U+f2e1, U+f2e3-f2e4, U+f2ec, U+f2f4, U+f2fa-f2fc, U+f306, U+f312, U+f316, U+f31a, U+f31c, U+f327, U+f333-f335, U+f3f4, U+f460, U+f5f3, U+f631-f632, U+f634, U+f63e, U+f659-f65c, U+f6b4, U+f6bd, U+f706, U+f708-f709, U+f70d, U+f70f-f710, U+f71f, U+f736, U+f76f-f770, U+f777, U+f7d5, U+f7dd, U+f7fd, U+f81c-f81d, U+f824, U+f828, U+f856-f857, U+f865, U+f87e, U+f893-f896
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.svg#fontawesome) format("svg");
                unicode-range: U+f001, U+f02f, U+f042, U+f091, U+f0f3, U+f104-f105, U+f11b, U+f13d, U+f1ac, U+f1ec, U+f223, U+f225, U+f22a-f22c, U+f24d, U+f26c, U+f29d, U+f338, U+f35d, U+f4c0, U+f569, U+f5dc, U+f5eb, U+f664, U+f66a, U+f6c0, U+f6e8, U+f70c, U+f7a6, U+f8c0-f8c1, U+f8cc, U+f8d9
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.0.svg#fontawesome) format("svg");
                unicode-range: U+f08e, U+f149, U+f2eb, U+f2ee, U+f2f3, U+f300, U+f307, U+f323-f324, U+f33d, U+f48a, U+f601, U+f61b, U+f64c, U+f68a, U+f6c1, U+f6df-f6e1, U+f6f9, U+f81a, U+f89f-f8a5, U+f8a7-f8b6, U+f8b8-f8b9, U+f8bb-f8bf, U+f8c2-f8c9, U+f8cb, U+f8cd-f8d1, U+f8d3, U+f8d5-f8d8, U+f8da-f8dd, U+f8df-f8e0, U+f8e2-f8e7, U+f8e9-f8ed, U+f8ef-f8f2
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.svg#fontawesome) format("svg");
                unicode-range: U+f00d, U+f048, U+f051, U+f0ac, U+f0b0, U+f118-f11a, U+f14e, U+f155, U+f186, U+f19c, U+f1eb, U+f21a, U+f221, U+f22d, U+f2bd, U+f433-f434, U+f436, U+f44e, U+f4da, U+f4e3, U+f51f, U+f54e, U+f556, U+f567, U+f579-f57a, U+f57c-f585, U+f587, U+f589-f58a, U+f58c, U+f596-f59c, U+f5a4-f5a5, U+f5b3-f5b4, U+f5b8, U+f5c0, U+f5c2-f5c3, U+f5c8, U+f5ce, U+f5de, U+f67c, U+f69a, U+f6ad, U+f7a2, U+f7a5, U+f7b9-f7ba, U+f806, U+f810
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.1.svg#fontawesome) format("svg");
                unicode-range: U+f148, U+f2e8, U+f2f8, U+f354, U+f357, U+f45e, U+f4c7, U+f5e6, U+f5ec, U+f602, U+f615-f616, U+f622, U+f648-f649, U+f6aa-f6ab, U+f7ff, U+f803, U+f819, U+f82b, U+f87f, U+f8de, U+f8ee
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.2.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.2.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.2.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.2.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.2.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.11.2.svg#fontawesome) format("svg");
                unicode-range: U+f488, U+f8b7, U+f8f3
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.svg#fontawesome) format("svg");
                unicode-range: U+f135, U+f1e6, U+f259, U+f2cc-f2cd, U+f422, U+f424, U+f515-f516, U+f544, U+f58b, U+f5d2, U+f61f, U+f658, U+f666, U+f6d3, U+f753, U+f7bf-f7c0, U+f82f, U+f8ff
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.0.svg#fontawesome) format("svg");
                unicode-range: U+f5d3, U+f657, U+f672, U+f6d4, U+f762, U+f8ba, U+f8d4, U+f8f4-f8fe
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.svg#fontawesome) format("svg");
                unicode-range: U+f017, U+f65e
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.12.1.svg#fontawesome) format("svg");
                unicode-range: U+f317-f319, U+f6c6
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.13.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.13.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.13.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.13.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.13.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.13.0.svg#fontawesome) format("svg");
                unicode-range: U+f4c1
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.svg#fontawesome) format("svg");
                unicode-range: U+e005, U+e041, U+e059-e076
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.14.0.svg#fontawesome) format("svg");
                unicode-range: U+e000-e004, U+e006, U+e008-e012, U+e014-e019, U+e01b-e01d, U+e01f-e040, U+e042-e048, U+e04a-e051, U+e053-e054, U+e058
            }

            @font-face {
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 900;
                font-display: block;
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.15.1.eot);
                src: url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.15.1.eot?#iefix) format("embedded-opentype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.15.1.woff2) format("woff2"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.15.1.woff) format("woff"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.15.1.ttf) format("truetype"), url(https://kit-pro.fontawesome.com/releases/v5.15.2/webfonts/pro-fa-solid-900-5.15.1.svg#fontawesome) format("svg");
                unicode-range: U+e085-e086
            }

            .fa,
            .fas {
                font-family: "Font Awesome 5 Pro";
                font-weight: 900
            }
        </style>


        <script src="{{asset('global/js/notiflix-aio-2.7.0.min.js')}}"></script>
        <script src="{{asset('global/js/pusher.min.js')}}"></script>
        <script src="{{asset('global/js/vue.min.js')}}"></script>
        <script src="{{asset('global/js/axios.min.js')}}"></script>
        <!-- custom script -->
        <script src="{{asset('darkpurple/js/dashboard.js')}}"></script>


    


        <script src="{{asset('darkpurple/js/apexcharts.js')}}"></script>

        <script>
            "use strict";

            var options = {
                theme: {
                    mode: "light",
                },

                series: [{
                        name: "Investment",
                        color: 'rgba(247, 147, 26, 1)',
                        data: [16182, 11483, 7837, 14253, 100, 0, 13369, 23818, 18603.55, 23031, 284, 0]
                    },
                    {
                        name: "Payout",
                        color: 'rgba(240, 16, 16, 1)',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    },
                    {
                        name: "Deposit",
                        color: 'rgba(255, 72, 0, 1)',
                        data: [0, 0, 0, 10070, 0, 0, 10701, 17658, 25165, 39193.55, 520, 0]
                    },
                    {
                        name: "Deposit Bonus",
                        color: 'rgba(39, 144, 195, 1)',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    },
                    {
                        name: "Investment Bonus",
                        color: 'rgba(136, 203, 245, 1)',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    }
                ],
                chart: {
                    type: 'bar',
                    // height: ini,
                    background: '#fff',
                    toolbar: {
                        show: false
                    }

                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],

                },
                yaxis: {
                    title: {
                        text: ""
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    colors: ['#fff'],
                    y: {
                        formatter: function(val) {
                            return "$" + val + ""
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#container"), options);
            chart.render();

            function copyFunction() {
                var copyText = document.getElementById("sponsorURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                /*For mobile devices*/
                document.execCommand("copy");
                Notiflix.Notify.Success(`Copied: ${copyText.value}`);
            }
        </script>
        <script type="module">
            import {
                initializeApp
            } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
            import {
                getMessaging,
                getToken,
                onMessage
            } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-messaging.js";

            const firebaseConfig = {
                apiKey: "AIzaSyDQ6Nqnb3mJ83alr3t_nvFH709GhtLtFV4",
                authDomain: "p2p-test-5f5c6.firebaseapp.com",
                projectId: "p2p-test-5f5c6",
                storageBucket: "p2p-test-5f5c6.appspot.com",
                messagingSenderId: "109168593126",
                appId: "1:109168593126:web:3fcebf6e272b3260e3d327",
                measurementId: "G-FLLWEYC3DL"
            };

            const app = initializeApp(firebaseConfig);
            const messaging = getMessaging(app);
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('' + `/firebase-messaging-sw.js`, {
                    scope: './'
                }).then(function(registration) {
                    requestPermissionAndGenerateToken(registration);
                }).catch(function(error) {});
            } else {}

            onMessage(messaging, (payload) => {
                if (payload.data.foreground || parseInt(payload.data.foreground) == 1) {
                    const title = payload.notification.title;
                    const options = {
                        body: payload.notification.body,
                        icon: payload.notification.icon,
                    };
                    new Notification(title, options);
                }
            });

            function requestPermissionAndGenerateToken(registration) {
                document.addEventListener("click", function(event) {
                    if (event.target.id == 'allow-notification') {
                        Notification.requestPermission().then((permission) => {
                            if (permission === 'granted') {
                                getToken(messaging, {
                                        serviceWorkerRegistration: registration,
                                        vapidKey: "BL4-tqqvkWjU92hz3Us65K1wY5D7m6-kLnXLq_l-mMEIGrBrifMd-Ex_BDCtA5IlpxcMtCk3Tj0-5Ah8qqXlts0"
                                    })
                                    .then((token) => {
                                        $.ajax({
                                            url: "https://purple-hyip.bugfinder.net/user/save-token",
                                            method: "post",
                                            data: {
                                                token: token,
                                            },
                                            success: function(res) {}
                                        });
                                        window.newApp.notificationPermission = 'granted';
                                    });
                            } else {
                                window.newApp.notificationPermission = 'denied';
                            }
                        });
                    }
                });
            }
        </script>
        <script>
            window.newApp = new Vue({
                el: "#firebase-app",
                data: {
                    notificationPermission: Notification.permission,
                    is_notification_skipped: sessionStorage.getItem('is_notification_skipped') == '1'
                },
                methods: {
                    skipNotification() {
                        sessionStorage.setItem('is_notification_skipped', '1');
                        this.is_notification_skipped = true;
                    }
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Selecciona todos los enlaces que tienen la capacidad de colapsar elementos
                var dropdownToggles = document.querySelectorAll('.sidebar-link.collapsed[data-toggle="collapse"]');

                // Agrega un escuchador de eventos para cada enlace
                dropdownToggles.forEach(function(toggle) {
                    toggle.addEventListener('click', function(event) {
                        event.preventDefault();

                        // Obtiene el ID del submenú a partir del atributo href del enlace clickeado
                        var dropdownId = toggle.getAttribute('href').substring(1);
                        var dropdown = document.getElementById(dropdownId);

                        // Alternar la clase 'show' para mostrar u ocultar el submenú correspondiente
                        if (dropdown) {
                            dropdown.classList.toggle('show');
                        }
                    });
                });
            });
        </script>



        <svg id="SvgjsSvg1168" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
            <defs id="SvgjsDefs1169"></defs>
            <polyline id="SvgjsPolyline1170" points="0,0"></polyline>
            <path id="SvgjsPath1171" d="M0 0 "></path>
        </svg>
</body>

</html>