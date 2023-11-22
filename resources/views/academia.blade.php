@extends('layouts.app')

@section('content')

@php
$data = DB::select("SELECT
c.idCurso,
c.curNombre,
c.curValor,
(SELECT COUNT(*) FROM contenido AS cont WHERE cont.conEstado='ACTIVO' AND cont.curso_idCurso = c.idCurso) AS cantidad_registros
FROM curso AS c
WHERE c.curEstado='ACTIVO';");
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
                    <h3>Portal Academico</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{route('about')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Potal Academico</li>
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
                    <h5>CURSO PROFESIONAL DE SUREBETS</h5>
                    <h2>Academia de Aprendizaje</h2>
                    <p>En este curso profesional de surebets por un mes, dirigido por
                        Surebets24/7.com, aprenderás a operar surebets desde cero,
                        contarás con clases teóricas en video y clases practicas en vivo
                        donde podrás operar en vivo con los profesores de
                        Surebets24/7.com y copiar las señales en vivo y tener una mejor
                        experiencia de aprendizaje.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 g-lg-5 justify-content-center">
            @foreach($data as $curso)
            <div class="col-lg-5 col-md-6">
                <div class="pricing-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <h4 class="text-capitalize">{{ $curso->curNombre }}</h4>
                    <h2>{{ $curso->curValor }} USD</h2>
                    <h5>Modulos de aprendizaje <small class="small-font">{{ $curso->cantidad_registros }}</small></h5>
                    <ul>
                        <li>
                            <i class="far fa-chevron-double-right"></i> Materiales de lectura adicionales <span class="badge">Si</span>
                        </li>
                        <li>
                            <i class="far fa-chevron-double-right"></i>Videos exclusivos <span class="badge">Si</span></small>
                        </li>
                        <li>
                            <i class="far fa-chevron-double-right"></i>Foros de discusión dirigidos por expertos <span class="badge">Si</span></small>
                        </li>
                        <li>
                            <span class="badge">Acompañamiento de Expertos</span>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn-custom investNow">
                        Comprar Ahora
                    </a>
                    <span class="feature text-capitalize">Popular</span>
                </div>
            </div>
            @endforeach
        </div>
</section>

<section class="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>ELIJA TU MEJOR OPCION</h5>
                    <h2>Acerca de estos cursos</h2>
                    <p>En estos cursos profesionales de surebets dirigido por
                        SUREBETS24/7.COM, aprenderás a operar surebets desde
                        cero, contarás con clases teóricas en video y clases practicas
                        en vivo donde podrás operar en vivo con los profesores de
                        SUREBETS24/7.COM y copiar las señales en vivo y tener una
                        mejor experiencia de aprendizaje.
                        También contarás con acceso a señales live y prematch para
                        que operes por tu propia cuenta, esta opción está habilitada
                        para Latinoamérica.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac103b79dad1672220731.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Materiales incluidos</h4>
                        <p>
                            Este completo paquete de aprendizaje no solo ofrece clases teóricas, sino que también proporciona clases prácticas en vivo para una experiencia de aprendizaje más inmersiva. Además, se brinda acceso exclusivo a señales en vivo, lo que permite a los participantes estar al tanto de situaciones en tiempo real y aprender a tomar decisiones fundamentadas sobre la marcha. La inclusión de sesiones prepartido añade un componente práctico adicional, permitiendo a los estudiantes prepararse de manera efectiva para escenarios específicos que puedan surgir en situaciones reales. Este enfoque integral garantiza que los participantes no solo adquieran conocimientos teóricos, sino que también desarrollen habilidades prácticas y adquieran experiencia práctica en el campo correspondiente. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac104f998a11672220751.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Requisitos</h4>
                        <p>
                            Para aprovechar al máximo este programa, solo necesitarás disponer de una conexión a Internet estable y contar con un ordenador para participar activamente en las sesiones en vivo. Es esencial que instales la aplicación Zoom, ya que será la plataforma mediante la cual accederás y participarás en las clases en tiempo real. Con estos elementos básicos, estarás listo para sumergirte en una experiencia educativa enriquecedora y participativa. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="{{asset('darkpurple/img/63ac1031952101672220721.png')}}" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Audiencia</h4>
                        <p>
                            Este curso está diseñado para personas apasionadas
                            por las apuestas deportivas que desean sumergirse
                            en el fascinante mundo de las surebets.<br> No importa
                            si eres un novato absoluto o ya tienes experiencia,
                            nuestra enseñanza desde cero se adapta a todos los
                            niveles.<br><br> ¡Únete y descubre las estrategias que
                            te llevarán a operar con éxito en este emocionante
                            ámbito! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                                ¿Que Aprenderas? </button>
                        </h5>
                        <div id="collapseOne0" class="accordion-collapse collapse show" aria-labelledby="headingOne0" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Aprenderás a operar surebets de manera exitosa,
                                desde cero. Te enseñaremos sobre limitaciones, casas
                                de apuestas, sistema de surebets, mercados de riesgo,
                                hándicaps y lo mejor, operarás con nosotros en vivo
                                para que solo tengas que copiar señales. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header " id="headingOne1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                ¿Cuáles son los temas principales que se cubren en el curso? </button>
                        </h5>
                        <div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne1" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                En el curso, te sumergirás en el mundo de las surebets, abordando aspectos cruciales como limitaciones, casas de apuestas, sistemas de surebets, mercados de riesgo, hándicaps y, lo más emocionante, participarás en operaciones en vivo para aprender a copiar señales de manera efectiva. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header " id="headingOne2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                ¿Necesito tener experiencia previa en apuestas deportivas para unirme al curso? </button>
                        </h5>
                        <div id="collapseOne2" class="accordion-collapse collapse " aria-labelledby="headingOne2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                No es necesario tener experiencia previa. Este curso está diseñado para todos, desde principiantes hasta aquellos con experiencia. Comenzaremos desde cero, brindándote las bases necesarias para que te conviertas en un operador exitoso de surebets. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header " id="headingOne3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                ¿Cuál es la metodología utilizada para enseñar a copiar señales en vivo? </button>
                        </h5>
                        <div id="collapseOne3" class="accordion-collapse collapse " aria-labelledby="headingOne3" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Durante las sesiones prácticas en vivo, te guiaremos a través del proceso de copiar señales de manera efectiva. Exploraremos estrategias, analizaremos situaciones en tiempo real y te proporcionaremos las herramientas necesarias para desarrollar habilidades sólidas en la ejecución de operaciones basadas en señales. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection