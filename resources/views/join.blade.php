@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}
    ">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Unete Hoy Mismo </h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">PANEL</a></li>
                    <li class="active">Unete Hoy Mismo</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Privacy Policy-->
    <section class="section section-md bg-default">
        <div class="container">
            <!-- Terms list-->
            <dl class="list-terms">
                <dt class="heading-6">Descubre Surebets24/7.com</dt>
                <dt class="heading-6"> Tu Plataforma de Inversión en Arbitraje Deportivo</dt>
                <dd>En Surebets24/7.com, hemos creado una plataforma de inversión única, diseñada para brindarte
                    oportunidades excepcionales de generar ingresos a través del arbitraje deportivo. Nuestra plataforma
                    ofrece cinco niveles de inversión diferentes, adaptados a tus necesidades y objetivos financieros.</dd>
                <dt class="heading-6">Niveles de Inversion</dt>

                <dd>Elige entre nuestros cinco niveles de inversión y encuentra el que mejor se ajuste a tu perfil y
                    expectativas. Cada nivel está diseñado para maximizar tus ganancias y minimizar los riesgos,
                    proporcionándote una experiencia de inversión segura y rentable.</dd>
                <dt class="heading-6">Comisiones y Bonificaciones</dt>
                <dd>En Surebets24/7.com, no solo ganas por tus inversiones, sino que también puedes generar ingresos
                    adicionales mediante nuestras atractivas comisiones y bonificaciones:</dd>
                <dt class="heading-6">Comisiones Directas</dt>
                <dd>Obtén comisiones desde el 7% hasta el 20% por cada nuevo participante que registres en la plataforma.
                    Cuantas más personas invites, mayores serán tus ganancias.
                </dd>
                <dt class="heading-6">Bono Binario:</dt>
                <dd>Disfruta de un bono binario del 10% que te permite incrementar tus ingresos de manera significativa.
                </dd>
                <dt class="heading-6">Comisiones por Venta de Servicios:</dt>
                <dd>Gana un 30% de comisión por la venta de nuestros cursos de aprendizaje y bots automatizados. Estos
                    servicios son altamente demandados y ofrecen grandes oportunidades de ingresos.</dd>


                <dt class="heading-6">Plan de Premios por Puntos</dt>
                <dd>Nuestro plan de premios por puntos te brinda la oportunidad de escalar posiciones dentro de la
                    plataforma. A medida que subes de posición, podrás ganar premios y bonos adicionales, recompensándote
                    por tu dedicación y esfuerzo.</dd>


                <dt class="heading-6">Tu Camino al Éxito</dt>
                <dd>En Surebets24/7.com, nos comprometemos a proporcionarte todas las herramientas y recursos necesarios
                    para que alcances el éxito en el mundo del arbitraje deportivo. Nuestra plataforma está diseñada para
                    que puedas maximizar tus ganancias a través de múltiples fuentes de ingresos y un plan de crecimiento
                    claro y efectivo.</dd>

                <dd>unete hoy mismo a Surebets24/7.com y comienza a transformar tus inversiones en verdaderas oportunidades
                    de éxito y rentabilidad.</dd>
            </dl>
        </div>
    </section>
@endsection
