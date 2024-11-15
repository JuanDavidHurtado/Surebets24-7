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
                <dd>En Surebets24/7.com, hemos establecido un estándar de excelencia en el mundo de las apuestas deportivas
                    online. Nuestra plataforma está diseñada para proporcionar una experiencia inigualable con la mejor
                    tecnología y una gama completa de opciones de apuestas en todos los deportes y categorías existentes.
                    Además, ofrecemos la conveniencia y seguridad de aceptar apuestas en criptomonedas, incluyendo USDT.
                </dd>
                <dt class="heading-6">Tecnología de Vanguardia y Seguridad</dt>

                <dd>Surebets24/7.com utiliza la tecnología más avanzada para garantizar una experiencia de usuario fluida,
                    rápida y segura. Nuestra plataforma está equipada con sistemas de encriptación de última generación que
                    protegen tus datos y transacciones, asegurando un entorno de apuestas seguro y confiable.</dd>
                <dt class="heading-6">Variedad de Deportes y Categorías
                </dt>
                <dd>Nuestra plataforma cubre todos los deportes del mundo y todas las categorías existentes, ofreciendo una
                    diversidad sin igual:</dd>
                <dt class="heading-6">Fútbol:</dt>
                <dd>Desde las ligas más prestigiosas como la Premier League, La Liga, Serie A, Bundesliga y Ligue 1, hasta
                    torneos internacionales como la Champions League, la Copa Mundial de la FIFA, y ligas regionales y
                    locales.
                    Baloncesto: Apuestas en la NBA, Euroliga, FIBA, y ligas nacionales de todo el mundo.
                </dd>
                <dt class="heading-6">Tenis:</dt>

                <dd>Cobertura completa de los Grand Slams, ATP, WTA y torneos ITF.
                    Deportes Americanos: NFL, MLB, NHL, NBA y más.</dd>
                <dt class="heading-6">E-Sports:</dt>
                <dd>Torneos y ligas de juegos como League of Legends, Dota 2, CS:GO, Fortnite y más.</dd>


                <dt class="heading-6">Deportes de Motor:</dt>
                <dd>Fórmula 1, MotoGP, NASCAR, y rally.</dd>

                <dt class="heading-6">Boxeo y MMA:</dt>
                <dd>Todos los grandes combates y eventos de UFC, Bellator y más.</dd>

                <dt class="heading-6">Golf:</dt>
                <dd>Torneos del PGA Tour, European Tour, y otros eventos internacionales.</dd>

                <dt class="heading-6">Cricket, Rugby, Hockey, y muchos más:</dt>
                <dd>Todos los deportes y eventos que puedas imaginar, desde los más populares hasta los menos conocidos.
                    Apuestas en Vivo y Estadísticas en Tiempo Real
                    Nuestra plataforma de apuestas en vivo te permite participar en la acción mientras se desarrolla. Con
                    actualizaciones en tiempo real y cuotas competitivas, puedes realizar apuestas informadas durante los
                    eventos. Además, proporcionamos estadísticas detalladas y herramientas de análisis para ayudarte a tomar
                    las mejores decisiones.</dd>


                <dt class="heading-6">Apuestas en Criptomonedas</dt>
                <dd>En Surebets24/7.com, nos mantenemos a la vanguardia de la innovación aceptando apuestas en
                    criptomonedas. Puedes realizar tus apuestas utilizando Bitcoin, Ethereum, y USDT (Tether), garantizando
                    transacciones rápidas y seguras. Esta opción te proporciona mayor flexibilidad y conveniencia en tus
                    operaciones.</dd>


                <dt class="heading-6">Bonificaciones y Promociones</dt>
                <dd>Ofrecemos atractivas bonificaciones y promociones diseñadas para maximizar tu experiencia. Desde bonos
                    de bienvenida hasta apuestas gratuitas y programas de fidelidad, en Surebets24/7.com siempre hay una
                    oferta para mejorar tus ganancias.</dd>


                <dt class="heading-6">Atención al Cliente y Soporte Técnico</dt>
                <dd>Nuestro equipo de atención al cliente está disponible 24/7 para asistirte con cualquier consulta o
                    problema que puedas tener. Nos enorgullece ofrecer un servicio rápido, eficiente y amigable, asegurando
                    que tu experiencia en nuestra plataforma sea siempre la mejor.</dd>

                <dt class="heading-6">Cumplimiento y Regulación</dt>
                <dd>Surebets24/7.com opera bajo estrictos estándares de regulación y cumplimiento, asegurando un entorno de
                    apuestas justo y transparente. Cumplimos con todas las normativas internacionales y locales,
                    garantizando la integridad de nuestras operaciones y la seguridad de nuestros usuarios.</dd>

                <dd>Únete a Surebets24/7.com hoy mismo y descubre la plataforma de apuestas deportivas más completa y
                    avanzada del mundo. Con una cobertura global de todos los deportes y categorías, tecnología de
                    vanguardia, opciones de apuestas en criptomonedas, y un compromiso inquebrantable con la calidad y la
                    seguridad, Surebets24/7.com es tu mejor elección para una experiencia de apuestas deportivas online
                    inigualable.
                </dd>
            </dl>
        </div>
    </section>
@endsection
