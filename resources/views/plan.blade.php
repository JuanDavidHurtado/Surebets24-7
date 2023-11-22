@extends('layouts.app')

@section('content')

@php
$data = DB::select("SELECT * FROM inversion AS i WHERE i.invEstado = 'ACTIVO'");
@endphp

<!-- banner section -->
<style>
    .banner-section {
        background-image: url(https://purple-hyip.bugfinder.net/assets/uploads/logo/partials_darkpurple_banner.png) !important;
    }
</style>
<section class="banner-section">
    <div class="overlay">
        <div class="container">
            <div class="row">

                <div class="col text-center">
                    <h3>Plan</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{route('about')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Plan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- pricing section -->
<section class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>OFERTA DE INVERSIÓN</h5>
                    <h2>Planes de Inversión</h2>
                    <p>Los planes de inversión son estrategias estructuradas diseñadas para asignar recursos financieros con el objetivo de generar rendimientos y hacer crecer el capital de los inversionistas. Estos planes son fundamentales para quienes buscan maximizar sus ganancias y gestionar eficientemente sus activos. Algunos elementos clave de los planes de inversión incluyen la identificación de metas financieras, el perfil de riesgo del inversionista y la diversificación de cartera.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 g-lg-5 justify-content-center">
            @foreach($data as $inversion)
            <div class="col-lg-4 col-md-6">
                <div class="pricing-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <h4 class="text-capitalize">{{ $inversion->invNombre }}</h4>
                    <h2>{{ $inversion->invValor }} USD</h2>
                    <h5>{{ $inversion->invPorcentaje }} %<small class="small-font"> Ganancia</small></h5>
                    <ul>
                        <li>
                            <i class="far fa-chevron-double-right"></i> Comision Referido
                            <span class="badge">Si</span>
                        </li>
                        <li>
                            <i class="far fa-chevron-double-right"></i> El capital respaldado <small><span class="badge">Si</span></small>
                        </li>

                        <li>
                            <span class="badge">Porcentaje Comision Referido {{ $inversion->invPorcentajeComision }} %</span>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn-custom investNow">
                        Invertir Ahora
                    </a>
                    <span class="feature text-capitalize">Popular</span>
                </div>
            </div>
            @endforeach
        </div>
</section>

<section>
    <center>
        <div class="col-11">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <!--div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div-->
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [{
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "US 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR to USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "Bitcoin"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "Ethereum"
                            }
                        ],
                        "showSymbolLogo": true,
                        "colorTheme": "dark",
                        "isTransparent": false,
                        "largeChartUrl": "",
                        "displayMode": "adaptive",
                        "locale": "en"
                    }
                </script>
            </div>
        </div>
    </center>
</section>


<section class="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>ELIJA INVERSIÓN</h5>
                    <h2>¿Por qué elegir un plan de inversión?</h2>
                    <p>Elegir un plan de inversión ofrece una ruta estructurada para hacer crecer tus fondos, brindando beneficios como rendimientos predefinidos, flexibilidad en los períodos de inversión y la posibilidad de recuperar el capital. Estos planes permiten a los inversores maximizar ganancias, diversificar carteras y trabajar hacia metas financieras con mayor confianza y estabilidad, adaptándose a diversas preferencias y niveles de riesgo.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac1031952101672220721.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Gestión experta</h4>
                        <p>
                            Confía en nuestro equipo de expertos en inversiones para optimizar y administrar tus fondos de manera profesional. Con dedicación y experiencia, trabajamos para maximizar tus rendimientos y ofrecerte asesoramiento personalizado. Delega la gestión de tus inversiones en manos expertas y potencia tu éxito financiero. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac103b79dad1672220731.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Compañía registrada</h4>
                        <p>
                            Nuestra compañía está debidamente registrada bajo las leyes y regulaciones pertinentes. Este estatus legal demuestra nuestro compromiso con la transparencia, la responsabilidad y el cumplimiento normativo, brindándoles a nuestros clientes la confianza de trabajar con una entidad establecida y reconocida por las autoridades competentes. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac1043c78011672220739.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Inversión segura</h4>
                        <p>
                            Invierte con confianza en nuestra plataforma líder. Te proporcionamos un entorno seguro respaldado por sólidas prácticas financieras y medidas de seguridad avanzadas. Tu tranquilidad es nuestra prioridad. Con nosotros, tu inversión está protegida y respaldada por un equipo comprometido con tu éxito financiero.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac104f998a11672220751.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Seguridad verificada</h4>
                        <p>
                            Estamos enfocados en tu seguridad, implementamos rigurosas medidas de protección para resguardar tu información personal. Utilizamos tecnologías avanzadas de cifrado y protocolos de seguridad para garantizar la confidencialidad de tus datos y brindarte tranquilidad en cada interacción. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac10576a5051672220759.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Retiro Instantáneo</h4>
                        <p>
                            Disfruta de la conveniencia con nuestro servicio de retiro instantáneo. Retira tus ganancias de manera rápida y eficiente, sin demoras ni complicaciones. Estamos comprometidos a proporcionarte una experiencia de inversión sin contratiempos, permitiéndote acceder a tus fondos de manera ágil y segura. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="deposit-withdraw-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>mercado de criptomonedas</h5>
                    <h2>Criptomonedas</h2>
                    <p>El mercado de criptomonedas es un espacio descentralizado para comprar, vender e intercambiar activos digitales como Bitcoin. Funciona sin intervención gubernamental y utiliza tecnologías como la cadena de bloques para garantizar transparencia y seguridad. Aunque ofrece oportunidades de inversión, su alta volatilidad y falta de regulación global implican riesgos. Inversores deben investigar cuidadosamente antes de participar.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="deposit-switcher">
                    <button tab-id="tab1" class="tab active">mercado de criptomonedas</button>
                    <button tab-id="tab2" class="tab">mapa de calor de Forex</button>
                </div>
                <div id="tab1" class="content active">
                    <div class="table-parent table-responsive">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                {
                                    "width": "1110",
                                    "height": "490",
                                    "defaultColumn": "overview",
                                    "screener_type": "crypto_mkt",
                                    "displayCurrency": "USD",
                                    "colorTheme": "dark",
                                    "locale": "es",
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                    </div>
                </div>

                <div id="tab2" class="content">
                    <div class="table-parent table-responsive">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                                {
                                    "width": 1110,
                                    "height": 490,
                                    "currencies": [
                                        "EUR",
                                        "USD",
                                        "JPY",
                                        "GBP",
                                        "CHF",
                                        "AUD",
                                        "CAD",
                                        "NZD",
                                        "CNY"
                                    ],
                                    "isTransparent": false,
                                    "colorTheme": "dark",
                                    "locale": "es",
                                    "largeChartUrl": ""
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section -->
<section class="faq-section faq-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="header-text text-center">
                    <h2>Preguntas Frecuentes: Todo lo que Necesitas Saber</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h5 class="accordion-header " id="headingOne0">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne0" aria-expanded="true" aria-controls="collapseOne0">
                                ¿Que es Surebets24/7? </button>
                        </h5>
                        <div id="collapseOne0" class="accordion-collapse collapse show" aria-labelledby="headingOne0" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Es un modelo de negocio innovador que es adecuado tanto para emprendedores como para personas que no tienen experiencia en esta área. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header " id="headingOne1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                ¿Qué puedo construir con Surebets24/7? </button>
                        </h5>
                        <div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne1" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Construye todo lo que quieras con este kit de inversiones de usuario!
                                Es flexible, multipropósito y está lleno de beneficios para que las use
                                durante tu estadia aqui. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header " id="headingOne2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                ¿Como funciona Surebets24/7? </button>
                        </h5>
                        <div id="collapseOne2" class="accordion-collapse collapse " aria-labelledby="headingOne2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Surebets24/7 pone en tus manos diferentes planes de inversiones los cuales puedes adquirir exclusivamente
                                con fracciones de bitcoin. Surebets24/7 trabaja capitales en diversos mercados y tiene como base la
                                minería de bitcoin, y otras criptomonedas, no obstante, aprovechamos al máximo el trading financiero
                                de los diferentes mercados que mueven las bolsas de valores mas importantes del mundo.
                                De esta manera garantizamos a nuestros clientes inversionistas el reintegro de sus respectivos
                                capitales y sus rentabilidades ofrecidas de acuerdo con el plan adquirido. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header " id="headingOne3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                ¿Con qué marcos se integra? </button>
                        </h5>
                        <div id="collapseOne3" class="accordion-collapse collapse " aria-labelledby="headingOne3" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Nuestros productos profesionales basados ​​en inversiones se crean teniendo en
                                cuenta la integración de marcos. pensando siempre en el inversor, y
                                la rentabilidad que este va a generar. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection