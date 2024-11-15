@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}
    ">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Bienvenido </h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">PANEL</a></li>
                    <li class="active">Bienvenido</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Privacy Policy-->
    <section class="section section-md bg-default">
        <div class="container">
            <!-- Terms list-->
            <dl class="list-terms">
                <dt class="heading-6">Bienvenido a Surebets24/7.com</dt>
                <dd>En Surebets24/7.com, nos dedicamos a transformar tu pasión por las apuestas en una carrera exitosa y
                    lucrativa mediante el arbitraje de apuestas deportivas. Nuestra academia está diseñada para ofrecer una
                    formación integral y especializada, adaptada a todos los niveles de experiencia.</dd>
                <dt class="heading-6">Ofrecemos tres cursos distintos para satisfacer tus necesidades de aprendizaje</dt>
                <dt class="heading-6">Curso Basico</dt>

                <dd>Ideal para principiantes, el Curso Básico cubre los fundamentos del arbitraje de apuestas. Aprenderás
                    sobre los conceptos esenciales, las técnicas básicas y las herramientas necesarias para empezar a
                    identificar y aprovechar las oportunidades de arbitraje. Este curso te proporcionará una base sólida
                    para entender cómo funcionan las apuestas deportivas y cómo puedes obtener beneficios de manera
                    consistente.</dd>
                <dt class="heading-6">Curso Pro</dt>
                <dd>Dirigido a aquellos que ya tienen conocimientos básicos de arbitraje y buscan llevar sus habilidades al
                    siguiente nivel. En el Curso Pro, profundizamos en estrategias avanzadas, análisis de riesgos y gestión
                    de fondos. También aprenderás a utilizar software especializado y a realizar análisis detallados para
                    maximizar tus ganancias. Este curso está diseñado para convertirte en un experto en arbitraje de
                    apuestas.</dd>
                <dt class="heading-6">Curso Personalizado</dt>
                <dd>Nuestro Curso Personalizado está hecho a medida para adaptarse a tus necesidades y objetivos
                    específicos. Ya sea que necesites ayuda en áreas específicas o desees un enfoque más individualizado,
                    este curso ofrece tutorías personalizadas y un plan de estudios flexible. Trabajarás directamente con
                    nuestros expertos para desarrollar un enfoque único que optimice tus resultados en el arbitraje de
                    apuestas.
                </dd>

                <dd>En Surebets24/7.com, nos comprometemos a proporcionarte las herramientas y conocimientos necesarios para
                    que puedas alcanzar el éxito en el mundo del arbitraje de apuestas. Únete a nuestra academia y comienza
                    tu camino hacia una carrera exitosa y rentable en el arbitraje deportivo.</dd>
                <dt class="heading-6">¡Inscríbete hoy y da el primer paso hacia tu futuro con Surebets24/7.com!</dt>
            </dl>
        </div>
    </section>
@endsection
