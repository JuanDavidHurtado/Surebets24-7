@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}
    ">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">POLÍTICA DE PRIVACIDAD</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">PANEL</a></li>
                    <li class="active">POLÍTICA DE PRIVACIDAD</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Privacy Policy-->
    <section class="section section-md bg-default">
        <div class="container">
            <!-- Terms list-->
            <dl class="list-terms">
                <dt class="heading-6">Políticas de Privacidad de Surebets24/7.com
                </dt>
                <dt class="heading-6">Introduccion</dt>
                <dd>En Surebets24/7.com, nos comprometemos a proteger la privacidad y la seguridad de nuestros usuarios.
                    Esta política de privacidad describe cómo recopilamos, utilizamos y protegemos su información personal
                    cuando utiliza nuestra academia de arbitraje deportivo, plataforma de inversión y servicio de bots
                    automatizados.</dd>
                <dt class="heading-6">Información que Recopilamos.</dt>
                <dd>Recopilamos varios tipos de información para proporcionar y mejorar nuestros servicios:

                    Información Personal: Nombre, dirección de correo electrónico, número de teléfono y detalles de pago.
                    Información de Uso: Datos sobre cómo utiliza nuestra plataforma, incluidos los cursos que toma, las
                    inversiones que realiza y el uso de nuestros bots.
                    Información Técnica: Dirección IP, tipo de navegador, proveedor de servicios de Internet, páginas de
                    referencia/salida y sello de fecha/hora.</dd>
                <dt class="heading-6">Uso de la Informacion</dt>
                <dd>Utilizamos la información recopilada para:

                    Proveer Servicios: Para administrar y gestionar su cuenta, procesar transacciones y proporcionar los
                    servicios solicitados.
                    Mejorar Nuestros Servicios: Para entender cómo se utilizan nuestros servicios y mejorar la funcionalidad
                    y la experiencia del usuario.
                    Comunicación: Para enviarle actualizaciones, promociones, y otra información relevante sobre nuestros
                    servicios.
                    Seguridad: Para proteger nuestros sistemas y prevenir fraudes y abusos.</dd>
                <dt class="heading-6">Compartir Informacion</dt>
                <dd>No vendemos, alquilamos ni compartimos su información personal con terceros, excepto en las siguientes
                    circunstancias:

                    Con Proveedores de Servicios: Podemos compartir información con proveedores de servicios que nos ayudan
                    a operar nuestra plataforma y ofrecer nuestros servicios.
                    Requisitos Legales: Podemos divulgar información si es requerido por ley o en respuesta a una solicitud
                    legal válida, como una orden judicial.</dd>
                <dt class="heading-6">Seguridad de la Informacion</dt>
                <dd>Implementamos medidas de seguridad técnicas y organizativas adecuadas para proteger su información
                    personal contra el acceso no autorizado, la alteración, la divulgación o la destrucción.</dd>
                <dt class="heading-6">Sus Derechos</dt>
                <dd>Usted tiene derecho a acceder, corregir, actualizar y eliminar su información personal. También puede
                    optar por no recibir comunicaciones promocionales siguiendo las instrucciones de cancelación de
                    suscripción en dichos correos electrónicos.</dd>


                <dt class="heading-6">Cookies y Tecnologias Similares</dt>
                <dd>Utilizamos cookies y tecnologías similares para mejorar la funcionalidad de nuestra plataforma, analizar
                    el uso y personalizar su experiencia. Puede controlar el uso de cookies a través de la configuración de
                    su navegador.</dd>
                <dt class="heading-6">Cambios en la Politica de Privacidad</dt>
                <dd>Podemos actualizar esta política de privacidad de vez en cuando. Cualquier cambio se publicará en esta
                    página, y si los cambios son significativos, le proporcionaremos un aviso más destacado.</dd>
                <dt class="heading-6">Contacto</dt>
                <dd>Si tiene alguna pregunta o inquietud sobre esta política de privacidad o nuestras prácticas de
                    privacidad, por favor contáctenos a través de:</dd>
            </dl>
            <a class="link privacy-link" href="{{route('contact-us')}}">ver contacto</a>
        </div>
    </section>
@endsection
