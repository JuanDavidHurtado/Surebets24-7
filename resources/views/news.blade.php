@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Noticias</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Panel</a></li>
                    <li><a href="#">Paginas</a></li>
                    <li class="active">Noticias</li>
                </ul>
            </div>
        </div>

    </section>

    <!-- News 1-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-8">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">En el punto de mira
                            </h5>
                        </div>
                    </article>

                    <!-- Publicación Corporativa-->
                    <article class="post-corporate">
                        <div class="post-corporate-content">
                            <div class="post-corporate-header">
                                <!-- Insignia-->
                                <div class="badge badge-primary">La Liga
                                </div>
                                <time class="post-corporate-time" datetime="2023">15 de abril de 2023</time>
                                <div class="post-corporate-view"><span class="icon fl-justicons-visible6"> </span>234
                                </div>
                            </div>
                            <h4 class="post-corporate-title"><a href="{{ route('blog-post') }}">En el aniversario de la
                                    derrota 8-2 ante el
                                    Manchester United, nada ha cambiado en el Arsenal</a></h4>
                            <div class="post-corporate-text">
                                <p>Hace seis años, el Arsenal sufrió quizás la peor humillación durante el tiempo de Arsene
                                    Wenger a cargo,
                                    una derrota 8-2 ante el Manchester United en Old Trafford que todavía deja cicatrices en
                                    muchos
                                    aficionados.</p>
                            </div>
                        </div><a class="post-corporate-figure" href="{{ route('blog-post') }}"><img
                                src="{{ asset('plantilla/images/post-corporate-1-768x414.jpg') }}" alt=""
                                width="768" height="414" /></a>
                        <div class="post-corporate-footer">
                            <div class="post-corporate-comment"><span class="icon mdi mdi-comment-outline"></span><a
                                    href="#">345
                                    Comentarios</a></div>
                            <div class="post-corporate-share">
                                <ul class="group">
                                    <li>Compartir</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>


                    <!-- Publicación Miranda-->
                    <article class="post-miranda">
                        <div class="post-miranda-content">
                            <div class="post-miranda-main">
                                <div class="post-miranda-header">
                                    <!-- Insignia-->
                                    <div class="badge badge-secondary">El Equipo
                                    </div>
                                    <time class="post-miranda-time" datetime="2023">15 de abril de 2023
                                    </time>
                                    <div class="post-miranda-view"><span class="icon fl-justicons-visible6"></span>234
                                    </div>
                                </div>
                                <h4 class="post-miranda-title"><a href="{{ route('blog-post') }}">El poco conocido Phil
                                        Jones ha tenido un
                                        inicio de temporada impresionante</a></h4>
                                <div class="post-miranda-text">
                                    <p>Si el Manchester United no hubiera empezado la temporada jugando un fútbol ofensivo
                                        tan
                                        eficazmente, habría habido... </p>
                                </div>
                            </div>
                            <div class="post-miranda-aside"><a class="post-miranda-figure"
                                    href="{{ route('blog-post') }}"><img
                                        src="{{ asset('plantilla/images/news-1-1-207x152.jpg') }}" alt=""
                                        width="207" height="152" /></a>
                            </div>
                        </div>
                        <div class="post-miranda-footer">
                            <div class="post-miranda-comment"><span class="icon mdi mdi-comment-outline"></span><a
                                    href="#">345
                                    Comentarios</a></div>
                            <div class="post-miranda-share">
                                <ul class="group">
                                    <li>Compartir</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- Post Corporate-->
                    <!-- Publicación Corporativa-->
                    <article class="post-corporate">
                        <div class="post-corporate-content">
                            <div class="post-corporate-header">
                                <!-- Insignia-->
                                <div class="badge badge-primary">La Liga
                                </div>
                                <time class="post-corporate-time" datetime="2023">15 de abril de 2023</time>
                                <div class="post-corporate-view"><span class="icon fl-justicons-visible6"> </span>234
                                </div>
                            </div>
                            <h4 class="post-corporate-title"><a href="{{ route('blog-post') }}">Everton y Brighton están
                                    luchando por
                                    fichar al delantero del Cardiff City, Kenneth Zohore</a></h4>
                            <div class="post-corporate-text">
                                <p>Zohore, de 23 años, terminó la temporada pasada como el máximo goleador del Cardiff con
                                    12 goles y ha
                                    florecido desde la llegada de Neil Warnock como entrenador. Ha marcado solo una vez esta
                                    temporada, pero ha
                                    estado... </p>
                            </div>
                        </div><a class="post-corporate-figure" href="{{ route('blog-post') }}"><img
                                src="{{ asset('plantilla/images/news-1-2-768x414.jpg') }}" alt="" width="768"
                                height="414" /></a>
                        <div class="post-corporate-footer">
                            <div class="post-corporate-comment"><span class="icon mdi mdi-comment-outline"></span><a
                                    href="#">345
                                    Comentarios</a></div>
                            <div class="post-corporate-share">
                                <ul class="group">
                                    <li>Compartir</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- Post Miranda-->
                    <!-- Publicación Miranda-->
                    <article class="post-miranda">
                        <div class="post-miranda-content">
                            <div class="post-miranda-main">
                                <div class="post-miranda-header">
                                    <!-- Insignia-->
                                    <div class="badge badge-secondary">El Equipo
                                    </div>
                                    <time class="post-miranda-time" datetime="2023">15 de abril de 2023
                                    </time>
                                    <div class="post-miranda-view"><span class="icon fl-justicons-visible6"></span>234
                                    </div>
                                </div>
                                <h4 class="post-miranda-title"><a href="{{ route('blog-post') }}">El Man City ofrecerá a
                                        Raheem Sterling y
                                        dinero por Alexis Sánchez - según fuentes</a></h4>
                                <div class="post-miranda-text">
                                    <p>El Manchester City está preparando una oferta de intercambio de jugador más dinero
                                        para fichar al
                                        delantero del Arsenal, Alexis Sánchez...</p>
                                </div>
                            </div>
                            <div class="post-miranda-aside"><a class="post-miranda-figure"
                                    href="{{ route('blog-post') }}"><img
                                        src="{{ asset('plantilla/images/news-1-3-207x152.jpg') }}" alt=""
                                        width="207" height="152" /></a>
                            </div>
                        </div>
                        <div class="post-miranda-footer">
                            <div class="post-miranda-comment"><span class="icon mdi mdi-comment-outline"></span><a
                                    href="#">345
                                    Comentarios</a></div>
                            <div class="post-miranda-share">
                                <ul class="group">
                                    <li>Compartir</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- Publicación Corporativa-->
                    <article class="post-corporate">
                        <div class="post-corporate-content">
                            <div class="post-corporate-header">
                                <!-- Insignia-->
                                <div class="badge badge-primary">La Liga
                                </div>
                                <time class="post-corporate-time" datetime="2023">15 de abril de 2023</time>
                                <div class="post-corporate-view"><span class="icon fl-justicons-visible6"> </span>234
                                </div>
                            </div>
                            <h4 class="post-corporate-title"><a href="{{ route('blog-post') }}">La NFL manejará
                                    internamente el uso de
                                    lenguaje profano por parte del árbitro Pete Morelli</a></h4>
                            <div class="post-corporate-text">
                                <p>La NFL abordará internamente el reciente error de micrófono del árbitro Pete Morelli,
                                    dijo un portavoz de
                                    la liga, pero no parece que Morelli enfrente una suspensión por el incidente.</p>
                            </div>
                        </div><a class="post-corporate-figure" href="{{ route('blog-post') }}"><img
                                src="{{ asset('plantilla/images/news-1-4-768x414.jpg') }}" alt="" width="768"
                                height="414" /></a>
                        <div class="post-corporate-footer">
                            <div class="post-corporate-comment"><span class="icon mdi mdi-comment-outline"></span><a
                                    href="#">345
                                    Comentarios</a></div>
                            <div class="post-corporate-share">
                                <ul class="group">
                                    <li>Compartir</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <nav class="pagination-wrap" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">14</a></li>
                        </ul>
                    </nav>
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
