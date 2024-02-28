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



<section class="feature-section">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="d-flex">
                        <div class="icon-box">
                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/content/63ac0f992a32b1672220569.png" alt="feature image" />
                        </div>
                        <h2>25609</h2>
                    </div>
                    <h4>Todos los Usuarios</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="d-flex">
                        <div class="icon-box">
                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/content/63ac0fa3a5c781672220579.png" alt="feature image" />
                        </div>
                        <h2>12.5M</h2>
                    </div>
                    <h4>Inversion Promedio</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="d-flex">
                        <div class="icon-box">
                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/content/63ac0faed0e511672220590.png" alt="feature image" />
                        </div>
                        <h2>130</h2>
                    </div>
                    <h4>Paises<br> Admitidos</h4>
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
                    <img src="{{asset('darkpurple/img/img_acerca_1.jpeg')}}" class="img-fluid" alt="about image" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-box" data-aos="fade-left" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="header-text">
                        <h5>SOBRE NOSOTROS</h5>
                        <h2>Bienvenido a Surebets24/7</h2>
                    </div>
                    <p>
                        <i>Somos una academia de arbitraje deportivo, que brinda conocimiento de 0 a 100 en surebets,
                            somos pioneros en implementar un modelo de aprendizaje único y eficiente y lo hemos
                            complementado con el mejor método de inversión seguro y sostenible.</i>
                    </p>
                    <p>
                    <p>en Surebets24/7.com
                        buscamos que los participantes obtengan todo el conocimiento necesario para iniciar de
                        manera independiente en el mundo del arbitraje deportivo si así lo desea, o que se
                        convierta en un inversor gracias al respaldo que brinda nuestra academia.</p>
                    <p><br /></p>
                    <p>trabajamos para posicionarnos como la mejor academia de Surebets en Latinoamérica.</p>
                    </p>
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
                        APRENDAMOS DE ARBITRAJE DEPORTIVO
                    </h2>
                    <p>LOS SUREBETS TAMBIÉN CONOCIDOS COMO ARBITRAJE DEPORTIVO CONSISTE EN APOSTAR EN TODOS LOS RESULTADOS POSIBLES DE UN EVENTO Y GANAR SEA CUAL SEA EL RESULTADO, ESTO APROVECHANDO LAS DIFERENTES COTIZACIONES EN LAS DISTINTAS CASAS DE APUESTAS, CONVIRTIENDO UNA APUESTA EN UNA INVERSIÓN 100% SEGURA.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="investors owl-carousel investors">
                    <div class="investor-box">
                        <div class="img-box">
                            <i class="fal fa-regular fa-futbol" aria-hidden="true" style="font-size: 5em;"></i>
                        </div>
                        <div class="text-box">
                            <h5>Futbol</h5>
                            <span>Surebets24/7</span>
                            <h4>Futbol</h4>
                        </div>
                    </div>

                    <div class="investor-box">
                        <div class="img-box">
                            <i class="fal fa-solid fa-table-tennis" aria-hidden="true" style="font-size: 5em;"></i>
                        </div>
                        <div class="text-box">
                            <h5>Tenis</h5>
                            <span>Surebets24/7</span>
                            <h4>Tenis</h4>
                        </div>
                    </div>
                    <div class="investor-box">
                        <div class="img-box">
                            <i class="fal fa-solid fa-baseball" aria-hidden="true" style="font-size: 5em;"></i>
                        </div>
                        <div class="text-box">
                            <h5>Beisbol</h5>
                            <span>Surebets24/7</span>
                            <h4>Beisbol</h4>
                        </div>
                    </div>
                    <div class="investor-box">
                        <div class="img-box">
                            <i class="fal fa-solid fa-bicycle" aria-hidden="true" style="font-size: 5em;"></i>
                        </div>
                        <div class="text-box">
                            <h5>Ciclismo</h5>
                            <span>Surebets24/7</span>
                            <h4>Ciclismo</h4>
                        </div>
                    </div>

                    <div class="investor-box">
                        <div class="img-box">
                            <i class="fal fa-solid fa-snowflake" aria-hidden="true" style="font-size: 5em;"></i>
                        </div>
                        <div class="text-box">
                            <h5>Deportes de Invierno</h5>
                            <span>Surebets24/7</span>
                            <h4>Deportes Invierno</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section class="deposit-withdraw-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>NOT HIDDEN CHARGE</h5>
                    <h2>Last Deposits &amp; Withdrawals</h2>
                    <p>Help agencies to define their new business objectives and then create professional software.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="deposit-switcher">
                    <button tab-id="tab1" class="tab active">Deposit</button>
                    <button tab-id="tab2" class="tab">Withdraw</button>
                </div>
                <div id="tab1" class="content active">
                    <div class="table-parent table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Gateway</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ajay Sarkar</td>
                                    <td>$ 10000</td>
                                    <td>
                                        <span class="currency">
                                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637d80b68e0.jpg" alt="" />
                                            RazorPay
                                        </span>
                                    </td>
                                    <td>18 Nov, 2023 06:26 PM</td>
                                </tr>
                                <tr>
                                    <td>Alex Hales</td>
                                    <td>$ 1000</td>
                                    <td>
                                        <span class="currency">
                                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/64a9057f0bec51688798591.png" alt="" />
                                            Binance
                                        </span>
                                    </td>
                                    <td>18 Nov, 2023 06:08 PM</td>
                                </tr>
                                <tr>
                                    <td>Alex Hales</td>
                                    <td>$ 1000</td>
                                    <td>
                                        <span class="currency">
                                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/64a9057f0bec51688798591.png" alt="" />
                                            Binance
                                        </span>
                                    </td>
                                    <td>18 Nov, 2023 04:41 PM</td>
                                </tr>
                                <tr>
                                    <td>Alex Hales</td>
                                    <td>$ 1000</td>
                                    <td>
                                        <span class="currency">
                                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/64a9057f0bec51688798591.png" alt="" />
                                            Binance
                                        </span>
                                    </td>
                                    <td>18 Nov, 2023 03:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Alex Hales</td>
                                    <td>$ 100</td>
                                    <td>
                                        <span class="currency">
                                            <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/64a9057f0bec51688798591.png" alt="" />
                                            Binance
                                        </span>
                                    </td>
                                    <td>17 Nov, 2023 11:16 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="tab2" class="content">
                    <div class="table-parent table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Gateway</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section-->
<section class="how-it-work">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="video-box">
                    <a class="play-vdo" href="{{ asset('darkpurple/video/vid_acerca_01.mp4') }}" data-fancybox="video" target="_blank">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="work-process">
                    <h2 class="mb-5">Cómo funciona</h2>
                    <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                        <div class="count">
                            <h2>1<span>.</span></h2>
                        </div>
                        <div class="text">
                            <h4>Registrate &amp; Inicia Sesion</h4>
                            <p>
                            <p>El primer paso es crear una cuenta, enseguida iniciar sesion</p>
                            </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                        <div class="count">
                            <h2>2<span>.</span></h2>
                        </div>
                        <div class="text">
                            <h4>Seleccione un servicio</h4>
                            <p>
                            <p>Selecciona los servicios que desees, ya sea pertenecer a nuestra academia de aprendizaje o realizar inversiones.</p>
                            </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                        <div class="count">
                            <h2>3<span>.</span></h2>
                        </div>
                        <div class="text">
                            <h4>Aprende y Gana</h4>
                            <p>
                            <p>Diviertete aprendiendo y generando ganancias.</p>
                            </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                        <div class="count">
                            <h2>4<span>.</span></h2>
                        </div>
                        <div class="text">
                            <h4>Disfrute de súper resultados</h4>
                            <p>
                            <p>Embárquese en un viaje emocionante hacia el logro de súper resultados, aprendizaje continuo y un futuro financiero sólido</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- referral bonus -->
<!--section class="referral-bonus">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>Bonus</h5>
                    <h2>Referral Bonus Level</h2>
                    <p>Get On First Level Refferal Commission</p>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="box box1 noRtl" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="https://purple-hyip.bugfinder.net/assets/themes/darkpurple/img/icon-2.png" alt="" />
                    </div>
                    <div class="text-box">
                        <h4>60%</h4>
                        <h5>level 1</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box box2 noRtl" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="https://purple-hyip.bugfinder.net/assets/themes/darkpurple/img/icon-2.png" alt="" />
                    </div>
                    <div class="text-box">
                        <h4>30%</h4>
                        <h5>level 2</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box box3 noRtl" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="icon-box">
                        <img src="https://purple-hyip.bugfinder.net/assets/themes/darkpurple/img/icon-2.png" alt="" />
                    </div>
                    <div class="text-box">
                        <h4>15%</h4>
                        <h5>level 3</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section-->
<!-- testimonial section -->
<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h2>¿CÓMO FUNCIONAN LOS SUREBETS?</h2>
                    <h6>Se trata de realizar dos apuestas obligatoriamente contrarias en dos diferentes casas de apuestas, ejemplo: Rayo Vallecano vs Getafe (- 5.5 goles en el partido) y realizar otra apuesta Rayo Vallecano vs Getafe (+ 5.5 goles en el partido). Por ende, una de las apuestas se perderá, y obligatoriamente una de las apuestas se ganará. Esto hace que por las diferentes cuotas que manejan las casas de apuestas, haya diferenciales y que se genere una ganancia normalmente entre un 3% a un 7% por cada surebet hecho. La diferencia puntual con una apuesta es que un surebet no conlleva ningún tipo de riesgo, independientemente del resultado del evento deportivo, siempre se ganará.</h6>
                    <h5>Beneficios</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="testimonials owl-carousel testimonial_carousel">
                    <div class="review-box">
                        <div class="text">
                            <p>
                                Mejora de tu economía personal y familiar.</p>
                            <div class="quote">
                                <img src="{{asset('darkpurple/img/img_acerca_5.jpeg')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="review-box">
                        <div class="text">
                            <p>
                                Disponibilidad de horarios. </p>
                            <div class="quote">
                                <img src="{{asset('darkpurple/img/img_acerca_5.jpeg')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="review-box">
                        <div class="text">
                            <p>
                                Estabilidad emocional y personal. </p>
                            <div class="quote">
                                <img src="{{asset('darkpurple/img/img_acerca_5.jpeg')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="review-box">
                        <div class="text">
                            <p>
                                Una nueva línea de ingresos recurrentes y segura. </p>
                            <div class="quote">
                                <img src="{{asset('darkpurple/img/img_acerca_5.jpeg')}}" />
                            </div>
                        </div>

                    </div>
                    <div class="review-box">
                        <div class="text">
                            <p>
                                Trabajas desde cualquier ubicación. </p>
                            <div class="quote">
                                <img src="{{asset('darkpurple/img/img_acerca_5.jpeg')}}" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section -->
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>Que Ofrecemos</h5>
                    <h6>brindamos una experiencia integral diseñada para satisfacer tus necesidades.
                        Desde recursos de aprendizaje y asesoramiento personalizado hasta planes
                        seguros para invertir, proporcionamos un ecosistema completo. Nuestra oferta
                        abarca la oportunidad de aprender, crecer financieramente y tomar decisiones
                        informadas, respaldadas por un compromiso constante con la excelencia y la
                        satisfacción del usuario.
                    </h6>
                </div>
            </div>
        </div>
        <div class="row g-4 g-lg-5">
            <div class="col-lg-4 col-md-6">
                <div class="blog-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="img-box">
                        <a href="#">
                            <img src="{{asset('darkpurple/img/img_acerca_2.jpg')}}" class="img-fluid" alt="blog-image" />
                        </a>
                    </div>
                    <div class="text-box">
                        <div class="date-author">
                            <span><i class="far fa-calendar-alt"></i> <?php echo date('d M, Y'); ?> </span>
                        </div>
                        <a href="#" class="title">Pronosticos en Prematch</a>
                        <p>
                            Los pronósticos en prematch se fundamentan en un exhaustivo análisis de diversos
                            elementos que pueden influir en el resultado de un evento deportivo antes de que este
                            comience </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="img-box">
                        <a href="#">
                            <img src="{{asset('darkpurple/img/img_acerca_3.jpg')}}" class="img-fluid" alt="blog-image" />
                        </a>
                    </div>
                    <div class="text-box">
                        <div class="date-author">
                            <span><i class="far fa-calendar-alt"></i> <?php echo date('d M, Y'); ?> </span>
                        </div>
                        <a href="#" class="title">Seguridad y Transparencia</a>
                        <p>
                            En el ámbito de las inversiones y el aprendizaje, destacamos nuestra dedicación a la seguridad y
                            transparencia. Nos esforzamos por proporcionar un entorno educativo fiable, donde cada inversor
                            tenga acceso a información clara y precisa. Nuestro compromiso con la seguridad financiera se refleja
                            en prácticas transparentes que buscan empoderar a los usuarios a medida que avanzan en su viaje de
                            inversión y aprendizaje. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-box" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <div class="img-box">
                        <a href="#">
                            <img src="{{asset('darkpurple/img/img_acerca_4.jpg')}}" class="img-fluid" alt="blog-image" />
                        </a>
                    </div>
                    <div class="text-box">
                        <div class="date-author">
                            <span><i class="far fa-calendar-alt"></i> <?php echo date('d M, Y'); ?> </span>
                        </div>
                        <a href="#" class="title">Acompañamientos Personales</a>
                        <p>
                            A los usuarios se le dara un acompañamiento personalizado, adaptado a sus necesidades
                            y metas específicas. Este enfoque individualizado implica brindar apoyo continuo, establecer
                            objetivos alcanzables y ofrecer orientación práctica para potenciar su crecimiento y bienestar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-section">
    <div class="container">
        <div class="row" >
            <div class="col-12">
                <div class="header-text text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                    <h2>ÚNETE A LA EXPERIENCIA EN ARBITRAJE DEPORTIVOS CON ASESORAMIENTO PREMIUM Y UNA COMUNIDAD DE ÉXITO</h2>
                    <a>Arbitraje deportivo siguiendo la normatividad, con los mejores software y el mejor equipo en áreas
                        como marketing, contabilidad, informática,administración, para ofrecer de este servicio el
                        mejor en calidad. Todo un mundo de oportunidades a tu alcance. Ven y has parte de este gran sueño
                        que inicia completamente gratis donde tendrás un asesoramiento personalizado en modo premium y
                        entenderás todo acerca de las apuestas deportivas aún sin que ni siquiera gustes de ello o sin importar
                        tu género, tenemos nuestro servicio al cliente enfocado en diferentes áreas para ayudarte en la
                        que necesites, NO SOMOS UN MULTINIVEL tampoco queremos serlo, queremos ayudar y ganar
                        juntos. Surebets24/7.com, ven y has parte de esta gran comunidad, somos una familia y crecemos
                        rápido, cupos limitados.</a>
             
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-- payment gateway -->
<section class="payment-gateway">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="gateways owl-carousel partners">
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5fe439f477bb7.jpg" alt="Blockchain" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/61d16f5313ee41641115475.jpg" alt="Bank Transfer" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5fe038332ad52.jpg" alt="Block.io" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/cashmaal.jpg" alt="cashmaal" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b6c79b0e05a1672923035.jpg" alt="Konnect" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b6c5f19bbd21672922609.jpg" alt="Free kassa" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/64a9057f0bec51688798591.png" alt="Binance" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637de6d9fef.jpg" alt="Authorize.Net" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b6a0f262c9f1672913138.jpg" alt="Nowpayments" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b6c23aac9181672921658.png" alt="MAGUA PAY" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b6ab4d45abb1672915789.webp" alt="Khalti Payment" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b6c9e2b69431672923618.png" alt="Mypay Np" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b69d81f06f21672912257.png" alt="peachpayments" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/63b6b02748f191672917031.png" alt="Midtrans" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637d6a0b22d.jpg" alt="Flutterwave" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637da3c44d2.jpg" alt="instamojo" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637b5622d23.jpg" alt="Paypal" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f659e5355859.jpg" alt="Coingate" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5ffd7d962985e1610448278.jpg" alt="CoinPayments" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f6703145a5ca.jpg" alt="Coinbase Commerce" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f645d1bc1f24.jpg" alt="Mercado Pago" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637db537958.jpg" alt="Mollie" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5fbca5d05057f.jpg" alt="Monnify" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f64d52d09e13.jpg" alt="Payeer" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637d069177e.jpg" alt="PayStack" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637cbfb4d4c.jpg" alt="PayTM" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f6390dbaa6ff.jpg" alt="PayUmoney" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f64d522d8bea.jpg" alt="Perfect Money" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637d80b68e0.jpg" alt="RazorPay" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637e002d11b.jpg" alt="SecurionPay" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637d53da3e7.jpg" alt="VoguePay" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f645d432b9c0.jpg" alt="Stripe " />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637c7fcb9ef.jpg" alt="Skrill" />
                    </div>
                    <div class="box">
                        <img src="https://purple-hyip.bugfinder.net/assets/uploads/gateway/5f637e7eae68b.jpg" alt="2checkout" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection