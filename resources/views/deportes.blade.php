@extends('layouts/app')

@section('content')

<!-- home section -->
<section class="home-section">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-7">
                <div class="text-box">
                    <!--h5 class="my-4">Una plataforma rentable para inversiones de alto margen</h5-->
                    <h2>Aprende, invierte y gana en Surebets24/7, y conviértete en un maestro dominando las diferentes <span class="text-stroke">modalidades deportivas.</span></h2>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn-custom" href="{{route('login')}}">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="countings">
                    <div class="box">
                        <h3>25609</h3>
                        <h5>Todos los Usuarios</h5>
                    </div>
                    <div class="box">
                        <h3>12.5M</h3>
                        <h5>Inversion Promedio</h5>
                    </div>
                    <div class="box">
                        <h3>130</h3>
                        <h5>Paises Admitidos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <div class="img-box" data-aos="fade-right" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <img src="{{asset('darkpurple/img/we-are-best.png')}}" class="img-fluid" alt="about image" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-box" data-aos="fade-left" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="header-text">
                        <h5>APRENDE CON NOSOTROS</h5>
                        <h2>surebets24siete.com</h2>
                    </div>
                    <p>
                        <i>Te brindamos todo el soporte, experiencia, seguridad y confianza incluso antes de ingresar,
                            para que nos sigas eligiendo.
                            </i>
                    </p>
                    <p>
                    <p>Somos una empresa con una amplia experiencia en el mundo del arbitraje deportivo y esto
                        nos ha llevado a desarrollar un curso que te permitirá convertirte en un Sport Trader
                        profesional. Investigamos e innovamos constantemente para mejorar nuestros servicios y
                        tecnologías, con la finalidad de llegar a un mayor público y con un precio accesible,
                        persiguiendo así, la idea de brindar una libertad económica y personal a nuestra familia,
                        gracias a la inversión inteligente, el uso de herramientas y educación de calidad.</p>
                    <p><br /></p>
                    
                    <a class="btn-custom mt-4" href="{{route('portal_academico')}}">Saber más</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="investor-section">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>Surebets24/7</h5>
                    <h2>
                        PORQUE SOMOS LOS MEJORES
                    </h2>
                    <h4>EN SUREBEST24SIETE.COM ESTAMOS COMPROMETIDOS EN BRINDAR UNA ENSEÑANZA DE CALIDAD.</h4>
                    <p>- NOS ENCONTRAMOS ADAPTADOS A LAS NECESIDADES DE LATINOAMÉRICA.</p>
                    <p>- INGRESO A LA COMUNIDAD ACTIVA.</p>
                    <p>- CONTAMOS CON AGRADABLES INSTALACIONES FÍSICAS.</p>
                    

                </div>
            </div>
        </div>
  
    </div>
</section>
<section class="about-section">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <div class="img-box" data-aos="fade-left" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <img src="{{asset('darkpurple/img/our-team.png')}}" class="img-fluid" alt="about image" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-box" data-aos="fade-left" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="header-text">
                            <h2>NUESTRO EQUIPO</h2>
                    </div>
                    <p>Somos una empresa que cuenta con colaboradores altamente
                        capacitados, Sport Trader profesionales formados con la
                        metodología de Surebets24/7.com que brindan asistencia y
                        soporte a todos nuestros estudiantes y están contigo durante todo
                        el proceso académico, y con nuestras áreas de TI, marketing,
                        comercial, académica y administración y permite que esta
                        empresa funcione eficientemente.</p>
                    <p>Contamos con un ambiente apto para demostrar que nuestra
                        metodología funciona y es real, pues tenemos a nuestros Sport
                        Trader profesionales operando surebets con nuestro capital<br /></p>
                    
                    <a class="btn-custom mt-4" href="{{route('portal_academico')}}">Saber más</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="investor-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>Surebets24/7</h5>
                    <h2>
                        POR QUE ELEGIRNOS
                    </h2>
                   

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="investors owl-carousel investors">
                    <div class="investor-box">
                        <div class="img-box">
                            <img src="{{asset('darkpurple/img/building-columns-solid.svg')}}" alt="Building Columns" style="width: 5em; height: 5em;">
                        </div>
                        <div class="text-box">
                            <h5>Experiencia</h5>
                            <span>Surebets24/7</span>
                            <h4>Más de 800 alumnos del mundo, un equipo de
                                profesionales y años de experiencia constituyen a
                                Surebets24/7.com como la mejor academia
                                </h4>
                        </div>
                    </div>

                    <div class="investor-box">
                        <div class="img-box">
                            <img src="{{asset('darkpurple/img/user-group.png')}}" alt="Building Columns" style="width: 5em; height: 5em;">

                        </div>
                        <div class="text-box">
                            <h5>Equipo de expertos</h5>
                            <span>Surebets24/7</span>
                            <h4>Nuestros usuarios disfrutan de experimentados
                                instructores con amplio conocimiento y
                                destreza, dispuestos a resolver todas sus
                                dudas.</h4>
                        </div>
                    </div>
                    <div class="investor-box">
                        <div class="img-box">
                            <img src="{{asset('darkpurple/img/pc.png')}}" alt="Building Columns" style="width: 5em; height: 5em;">
                        </div>
                        <div class="text-box">
                            <h5>Lecciones</h5>
                            <span>Surebets24/7</span>
                            <h4>Material didáctico, fácil y sencillo de entender,
                                con más de 40 temas diferentes enfocados en
                                Surebets, Valuebets y Scalping con asesoria
                                personalizada</h4>
                        </div>
                    </div>
                            
                </div>
            </div>
        </div>
    </div>
</section>
@endsection