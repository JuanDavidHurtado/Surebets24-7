@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Entrada de blog</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('sports')}}">Panel</a></li>
                    <li><a href="#">Paginas</a></li>
                    <li class="active">Entrada de blog</li>
                </ul>
            </div>
        </div>

    </section>

    <!-- Blog Post-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-8">
                    <div class="blog-post">
                        <!-- Badge-->
                        <div class="badge badge-secondary">Noticias
                        </div>
                        <h3 class="blog-post-title">La semana en apuestas deportivas: Penn National saca un 'MGM'</h3>
                        <div class="blog-post-header">
                            <div class="blog-post-author"><img class="img-circle"
                                    src="
                                {{ asset('plantilla/images/user-3-63x63.jpg') }}
                                "
                                    alt="" width="63" height="63" />
                                <p class="post-author">Katrin Burns</p>
                            </div>
                            <div class="blog-post-meta">
                                <time class="blog-post-time" datetime="2023"><span class="icon mdi mdi-clock"></span>15 de
                                    abril de 2023</time>
                                <div class="blog-post-comment"><span class="icon mdi mdi-comment-outline"></span>345</div>
                                <div class="blog-post-view"><span class="icon fl-justicons-visible6"></span>234</div>
                            </div>
                        </div>
                        <div class="blog-post-author-quote">
                            <p>
                                Las apuestas deportivas representan una oportunidad emocionante para sumergirse aún más en
                                el fascinante mundo del deporte. Para muchos, estas apuestas añaden una dimensión adicional
                                de emoción y competencia a los eventos deportivos, transformando lo que podría ser una
                                experiencia pasiva en un emocionante juego de predicciones y estrategias. Sin embargo, es
                                fundamental reconocer que junto con esta emoción vienen riesgos significativos.</p>
                        </div>
                        <div class="blog-post-share">
                            <p>COMPARTIR ESTA PUBLICACION</p>
                            <ul class="group">
                                <li><a class="icon fa-facebook" href="#"></a></li>
                                <li><a class="icon fa-twitter" href="#"></a></li>
                                <li><a class="icon fa-google-plus" href="#"></a></li>
                                <li><a class="icon fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="blog-post-content">
                            <p>Uno de los principales riesgos asociados con las apuestas deportivas es la posibilidad de
                                sufrir pérdidas financieras. Cuando se involucran sumas de dinero en los resultados de los
                                eventos deportivos, existe siempre la posibilidad de que las apuestas no resulten como se
                                esperaba, lo que puede conducir a pérdidas monetarias. Además, la tentación de seguir
                                apostando para recuperar las pérdidas puede agravar aún más la situación financiera.</p><img
                                src="{{ asset('plantilla/images/blog-post-1-683x407.jpg') }}
                                "
                                alt="" width="683" height="407" />
                            <p>Otro riesgo importante es el potencial de desarrollar una adicción al juego. Las apuestas
                                deportivas pueden ser increíblemente emocionantes, y para algunas personas, esta emoción
                                puede convertirse en una obsesión difícil de controlar. El deseo constante de participar en
                                más apuestas y la incapacidad de detenerse incluso cuando se reconoce que es perjudicial son
                                señales de advertencia de una posible adicción al juego, que puede tener graves
                                consecuencias para la vida personal, financiera y emocional.

                                A pesar de estos riesgos, creo firmemente que es posible disfrutar de las apuestas
                                deportivas de manera responsable y consciente. Esto implica establecer límites claros en
                                cuanto a la cantidad de dinero y tiempo dedicados a las apuestas, así como estar siempre
                                consciente de las propias motivaciones y emociones al participar en esta actividad. Además,
                                es importante recordar que las apuestas deportivas no deben comprometer la estabilidad
                                financiera ni el bienestar personal. En última instancia, el disfrute de las apuestas
                                deportivas debe equilibrarse con la responsabilidad y la moderación para garantizar una
                                experiencia positiva y segura.</p>
                            <!-- Quote Default-->
                            <article class="quote-default">
                                <div class="quote-default-text">
                                    <p class="q">Esta semana en las apuestas deportivas resultó ser muy impredecible.
                                    </p>
                                </div>
                            </article>
                            <p>a imprevisibilidad es una característica fascinante de las apuestas deportivas que puede
                                generar tanto emoción como frustración. Cada semana, los resultados pueden sorprender
                                incluso a los apostadores más experimentados, ya que el mundo del deporte está lleno de
                                giros inesperados y sorpresas inesperadas. Esta imprevisibilidad añade un elemento adicional
                                de emoción y tensión a la experiencia de las apuestas deportivas, ya que nunca se sabe con
                                certeza qué equipo saldrá victorioso o cómo se desarrollará un evento específico.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 owl-carousel-outer-navigation">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Noticias relacionadas
                                    </h5>
                                    <div class="owl-carousel-arrows-outline">
                                        <div class="owl-nav">
                                            <button class="owl-arrow owl-arrow-prev"></button>
                                            <button class="owl-arrow owl-arrow-next"></button>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Blog Carousel-->
                            <div class="owl-carousel" data-items="1" data-sm-items="2" data-dots="false" data-nav="true"
                                data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false"
                                data-nav-custom=".owl-carousel-outer-navigation">
                                <!-- Post Carmen-->
                                <article class="post-carmen"><img
                                        src="{{ asset('plantilla/images/news-5-2-369x343.jpg') }}
                                    "
                                        alt="" width="369" height="343" />
                                    <div class="post-carmen-header">
                                        <!-- Badge-->
                                        <div class="badge badge-secondary">El equipo
                                        </div>
                                    </div>
                                    <div class="post-carmen-main">
                                        <h4 class="post-carmen-title"><a href="{{ route('blog-post') }}">Matthews: mostre
                                                que
                                                Todavía soy capaz de ganar</a></h4>
                                        <div class="post-carmen-meta">
                                            <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril de 2023</time>
                                            </div>
                                            <div class="post-carmen-comment"><span
                                                    class="icon mdi mdi-comment-outline"></span><a href="#">345</a>
                                            </div>
                                            <div class="post-carmen-view"><span
                                                    class="icon fl-justicons-visible6"></span>234
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Post Carmen-->
                                <article class="post-carmen"><img
                                        src="{{ asset('plantilla/images/news-5-3-369x343.jpg') }}
                                   "
                                        alt="" width="369" height="343" />
                                    <div class="post-carmen-header">
                                        <!-- Post Video Button--><a class="post-video-button" href="#modal1"
                                            data-bs-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
                                    </div>
                                    <div class="post-carmen-main">
                                        <h4 class="post-carmen-title"><a href="{{ route('blog-post') }}">Hodgson, Klopp y
                                                FSG dos grandes decisiones</a></h4>
                                        <div class="post-carmen-meta">
                                            <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril de 2023</time>
                                            </div>
                                            <div class="post-carmen-comment"><span
                                                    class="icon mdi mdi-comment-outline"></span><a href="#">345</a>
                                            </div>
                                            <div class="post-carmen-view"><span
                                                    class="icon fl-justicons-visible6"></span>234
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Post Carmen-->
                                <article class="post-carmen"><img
                                        src="{{ asset('plantilla/images/news-5-4-369x343.jpg') }}
                                    "
                                        alt="" width="369" height="343" />
                                    <div class="post-carmen-header">
                                        <!-- Badge-->
                                        <div class="badge badge-primary">La Liga
                                        </div>
                                    </div>
                                    <div class="post-carmen-main">
                                        <h4 class="post-carmen-title"><a href="{{ route('blog-post') }}">¿Por qué Messi
                                                cambiaría el Barça por el Manchester?</a></h4>
                                        <div class="post-carmen-meta">
                                            <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                                                <time datetime="2023">15 de abril de 2023</time>
                                            </div>
                                            <div class="post-carmen-comment"><span
                                                    class="icon mdi mdi-comment-outline"></span><a href="#">345</a>
                                            </div>
                                            <div class="post-carmen-view"><span
                                                    class="icon fl-justicons-visible6"></span>234
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">3 comentarios
                                    </h5>
                                </div>
                            </article>

                            <div class="blog-post-comments">
                                <!-- Post Comment-->
                                <div class="post-comment post-comment-parent">
                                    <div class="post-comment-aside"><img class="img-circle"
                                            src="
                                        {{ asset('plantilla/images/user-4-69x69.jpg') }}
                                        "
                                            alt="" width="69" height="69" />
                                    </div>
                                    <div class="post-comment-main">
                                        <div class="post-comment-header">
                                            <h5 class="author-name">Linda Peterson</h5>
                                            <time class="post-comment-time" datetime="2023">hace 2 días
                                            </time>
                                        </div>
                                        <div class="post-comment-text">
                                            <p>Esta apreciación destaca el reconocimiento de la emoción que pueden generar
                                                las apuestas deportivas, pero también subraya la importancia de abordarlas
                                                con responsabilidad y cuidado para evitar riesgos financieros y emocionales.
                                            </p>
                                        </div>
                                        <div class="post-comment-footer">
                                            <div class="comment-like"><span
                                                    class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a>
                                            </div>
                                            <div class="comment-reply"><span
                                                    class="icon mdi mdi-comment-outline"></span><a
                                                    href="#">Responder</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Comment-->
                                <div class="post-comment post-comment-child">
                                    <div class="post-comment-aside"><img class="img-circle"
                                            src="
                                        {{ asset('plantilla/images/user-5-69x69.jpg') }}
                                       "
                                            alt="" width="69" height="69" />
                                    </div>
                                    <div class="post-comment-main">
                                        <div class="post-comment-header">
                                            <h5 class="author-name">Erika Wood</h5>
                                            <time class="post-comment-time" datetime="2023">hace 2 días
                                            </time>
                                        </div>
                                        <div class="post-comment-text">
                                            <p>Esta apreciación resalta la emoción que las apuestas deportivas pueden
                                                brindar, al agregar un elemento adicional de competencia y entretenimiento a
                                                los eventos deportivos. Reconoce el atractivo que estas apuestas tienen para
                                                algunos, al permitirles participar activamente en los juegos y demostrar su
                                                conocimiento sobre el deporte.</p>
                                        </div>
                                        <div class="post-comment-footer">
                                            <div class="comment-like"><span
                                                    class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a>
                                            </div>
                                            <div class="comment-reply"><span
                                                    class="icon mdi mdi-comment-outline"></span><a
                                                    href="#">Responder</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Comment-->
                                <div class="post-comment">
                                    <div class="post-comment-aside"><img class="img-circle"
                                            src="
                                        {{ asset('plantilla/images/user-6-69x69.jpg') }}
                                        "
                                            alt="" width="69" height="69" />
                                    </div>
                                    <div class="post-comment-main">
                                        <div class="post-comment-header">
                                            <h5 class="author-name">Sam McMillan</h5>
                                            <time class="post-comment-time" datetime="2023">hace 2 días
                                            </time>
                                        </div>
                                        <div class="post-comment-text">
                                            <p>En mi opinión, las apuestas deportivas son una manera emocionante de añadir
                                                emoción extra a los eventos deportivos. Son una forma divertida de
                                                participar activamente y poner a prueba tus habilidades de pronóstico.
                                                Aunque es importante apostar de manera responsable, creo que pueden mejorar
                                                la experiencia global del juego.</p>
                                        </div>
                                        <div class="post-comment-footer">
                                            <div class="comment-like"><span
                                                    class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a>
                                            </div>
                                            <div class="comment-reply"><span
                                                    class="icon mdi mdi-comment-outline"></span><a
                                                    href="#">Responder</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="comment-box-aside"><img class="img-circle"
                                            src="
                                        {{ asset('plantilla/images/user-7-69x69.jpg') }}
                                       "
                                            alt="" width="69" height="69" />
                                    </div>
                                    <div class="comment-box-main">
                                        <h5 class="comment-box-name">Miranda</h5>
                                        <!-- RD Mailform-->
                                        <form class="rd-mailform comment-box-form" data-form-output="form-output-global"
                                            data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                            <div class="form-wrap">
                                                <label class="form-label" for="comment-message">Tu comentario</label>
                                                <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                                            </div>
                                            <div class="form-button">
                                                <button class="button button-primary" type="submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Blog Alide-->
                    <div class="block-aside">
                        <div class="block-aside-item">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Categorias
                                    </h5>
                                </div>
                            </article>

                            <!--Block Categories-->
                            <div class="block-categories">
                                <ul class="list-marked list-marked-categories">
                                    <li><a href="#">Futbol</a><span class="list-marked-counter">68</span></li>
                                    <li><a href="#">Tenis</a><span class="list-marked-counter">16</span></li>
                                    <li><a href="#">Baloncesto</a><span class="list-marked-counter">20</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="block-aside-item">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">En el punto de mira
                                    </h5><a class="button button-xs button-gray-outline" href="{{ route('news') }}">Todas
                                        las noticias
                                    </a>
                                </div>
                            </article>

                            <!-- List Post Classic-->
                            <div class="list-post-classic">
                                <!-- Post Classic-->
                                <article class="post-classic">
                                    <div class="post-classic-aside"><a class="post-classic-figure"
                                            href="{{ route('blog-post') }}"><img
                                                src="
            
                                            {{ asset('plantilla/images/blog-element-1-94x94.jpg') }}
                                           "
                                                alt="" width="94" height="94" /></a></div>
                                    <div class="post-classic-main">
                                        <p class="post-classic-title"><a href="{{ route('blog-post') }}">predicciones:
                                                ¿Los Orioles llegarán a los playoffs?</a></p>
                                        <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2023">15 de abril de 2023</time>
                                        </div>
                                    </div>
                                </article>
                                <!-- Post Classic-->
                                <article class="post-classic">
                                    <div class="post-classic-aside">
                                        <a class="post-classic-figure" href="{{ route('blog-post') }}">
                                            <img src="{{ asset('plantilla/images/blog-element-2-94x94.jpg') }}"
                                                alt="" width="94" height="94" />
                                        </a>
                                    </div>
                                    <div class="post-classic-main">
                                        <p class="post-classic-title"><a href="{{ route('blog-post') }}">Estrellas de la
                                                próxima generación dando un impulso en la nueva temporada</a></p>
                                        <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2023">15 de abril de 2023</time>
                                        </div>
                                    </div>
                                </article>
                                <!-- Post Classic-->
                                <article class="post-classic">
                                    <div class="post-classic-aside">
                                        <a class="post-classic-figure" href="{{ route('blog-post') }}">
                                            <img src="{{ asset('plantilla/images/blog-element-3-94x94.jpg') }}"
                                                alt="" width="94" height="94" />
                                        </a>
                                    </div>
                                    <div class="post-classic-main">
                                        <p class="post-classic-title"><a href="{{ route('blog-post') }}">El GM de los
                                                Raptors emocionado con la firma de Monroe</a></p>
                                        <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2023">15 de abril de 2023</time>
                                        </div>
                                    </div>
                                </article>
                                <!-- Post Classic-->
                                <article class="post-classic">
                                    <div class="post-classic-aside">
                                        <a class="post-classic-figure" href="{{ route('blog-post') }}">
                                            <img src="{{ asset('plantilla/images/blog-element-4-94x94.jpg') }}"
                                                alt="" width="94" height="94" />
                                        </a>
                                    </div>
                                    <div class="post-classic-main">
                                        <p class="post-classic-title"><a href="{{ route('blog-post') }}">El Real Madrid
                                                tiene la menor asistencia en 10 años</a></p>
                                        <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2023">15 de abril de 2023</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="block-aside-item">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Siganos
                                    </h5>
                                </div>
                            </article>

                            <!-- Buttons Media-->
                            <div class="group-sm group-flex"><a class="button-media button-media-facebook"
                                    href="#">
                                    <h4 class="button-media-title">50k</h4>
                                    <p class="button-media-action">Like<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-facebook"></span>
                                </a><a class="button-media button-media-twitter" href="#">
                                    <h4 class="button-media-title">120k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-twitter"></span>
                                </a><a class="button-media button-media-google" href="#">
                                    <h4 class="button-media-title">15k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-google"></span>
                                </a><a class="button-media button-media-instagram" href="#">
                                    <h4 class="button-media-title">85k</h4>
                                    <p class="button-media-action">Follow<span
                                            class="icon material-icons-add_circle_outline icon-sm"></span></p><span
                                        class="button-media-icon fa-instagram"></span>
                                </a></div>
                        </div>
                        <div class="block-aside-item">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Ultimos comentarios
                                    </h5>
                                </div>
                            </article>

                            <!-- List Comments Classic-->
                            <div class="list-comments-classic">
                                <!-- Comment Classic-->
                                <div class="comment-classic">
                                    <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px"
                                        viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68"
                                        xml:space="preserve">
                                        <path fill="#171617"
                                            d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z">
                                        </path>
                                    </svg>
                                    <div class="comment-classic-header">
                                        <div class="comment-classic-header-aside"><img
                                                src="
                                            {{ asset('plantilla/images/user-1-63x63.jpg') }}
                                            "
                                                alt="" width="63" height="63" />
                                        </div>
                                        <div class="comment-classic-header-main">
                                            <p class="comment-classic-title">Amanda Norton</p>
                                            <time class="comment-classic-time" datetime="2023">hace 4 horas
                                            </time>
                                        </div>
                                    </div>
                                    <div class="comment-classic-body">
                                        <div class="comment-classic-text">
                                            <p>Realmente no soy un gran aficionado al fútbol, ​​pero incluso estoy seguro de
                                                que el Liverpool lo es.
                                                Lo lograremos esta vez tal como lo hicieron hace 3 años...</p>
                                        </div>
                                        <div class="comment-classic-post-title"><a href="{{ route('blog-post') }}">
                                                Seis grandes preguntas sobre el futuro del equipo actualizado de
                                                Manchester</a></div>
                                    </div>
                                </div>
                                <!-- Comment Classic-->
                                <div class="comment-classic">
                                    <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px"
                                        viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68"
                                        xml:space="preserve">
                                        <path fill="#171617"
                                            d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z">
                                        </path>
                                    </svg>
                                    <div class="comment-classic-header">
                                        <div class="comment-classic-header-aside"><img
                                                src="
                                            {{ asset('plantilla/images/user-2-63x63.jpg') }}

                                           "
                                                alt="" width="63" height="63" />
                                        </div>
                                        <div class="comment-classic-header-main">
                                            <p class="comment-classic-title">Robert Norton</p>
                                            <time class="comment-classic-time" datetime="2023">hace 14 horas
                                            </time>
                                        </div>
                                    </div>
                                    <div class="comment-classic-body">
                                        <div class="comment-classic-text">
                                            <p>El Real Madrid es mi equipo favorito...</p>
                                        </div>
                                        <div class="comment-classic-post-title">
                                            <a href="{{ route('blog-post') }}">¿Cuál es tu equipo favorito personal este
                                                año?</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Classic-->
                                <div class="comment-classic">
                                    <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px"
                                        viewbox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68"
                                        xml:space="preserve">
                                        <path fill="#171617"
                                            d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z">
                                        </path>
                                    </svg>
                                    <div class="comment-classic-header">
                                        <div class="comment-classic-header-aside">
                                            <img src="{{ asset('plantilla/images/user-3-63x63.jpg') }}" alt=""
                                                width="63" height="63" />
                                        </div>
                                        <div class="comment-classic-header-main">
                                            <p class="comment-classic-title">Rebecca Smith</p>
                                            <time class="comment-classic-time" datetime="2023">hace 20 horas</time>
                                        </div>
                                    </div>
                                    <div class="comment-classic-body">
                                        <div class="comment-classic-text">
                                            <p>Mi opinión sobre el tema es que los Rollers no tienen suficientes
                                                oportunidades para resistir...</p>
                                        </div>
                                        <div class="comment-classic-post-title">
                                            <a href="{{ route('blog-post') }}">Rollers: Algunos Datos Sobre las Nuevas
                                                Estrellas de la Premier League 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-aside-item">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Unase a nuestro boletin
                                    </h5>
                                </div>
                            </article>

                            <!-- Mail Form Modern-->
                            <form class="rd-mailform rd-mailform-modern" data-form-output="form-output-global"
                                data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <label class="form-label" for="subscribe-email">Ingrese tu correo electronico</label>
                                    <input class="form-input" id="subscribe-email" type="email" name="email"
                                        data-constraints="@Email @Required">
                                </div>
                                <div class="form-wrap">
                                    <button class="button button-block button-primary"
                                        type="submit">Subscribirse</button>
                                </div>
                            </form>
                        </div>
                        <div class="block-aside-item">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Etiquetas
                                    </h5>
                                </div>
                            </article>

                            <!-- List Tags-->
                            <ul class="list-tags">
                                <li><a href="#">Deporte</a></li>
                                <li><a href="#">Equipo</a></li>
                                <li><a href="#">Liga</a></li>
                                <li><a href="#">Copa</a></li>
                                <li><a href="#">Fútbol</a></li>
                                <li><a href="#">Jugador</a></li>
                                <li><a href="#">Campeonato</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
