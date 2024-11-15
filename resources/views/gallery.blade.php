@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="
    {{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Galeria</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">Panel</a></li>
                    <li><a href="#">Paginas</a></li>
                    <li class="active">Galería</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section Gallery-->
    <section class="section section-variant-1 bg-gray-100 text-center">
        <div class="container">
            <div class="row row-30" data-lightgallery="group">
                <div class="col-xs-8 col-sm-6 col-lg-4">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic"><a class="thumbnail-classic-figure"
                            href="
                            {{ asset('plantilla/images/gallery-image-2-1200x1200-original.jpg') }}
                            "
                            data-lightgallery="item"><img
                                src="
                                {{ asset('plantilla/images/gallery-image-1-370x340.jpg') }}
                                
                                "
                                alt="" width="370" height="340" /></a>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-panel-right"><span
                                    class="thumbnail-classic-panel-toggle mdi mdi-share-variant"></span>
                                <ul class="thumbnail-classic-list list-inline list-inline-xs">
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-instagram" href="#"></a></li>
                                    <li><a class="fa fa-pinterest-p" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="thumbnail-classic-panel-left">
                                <h6 class="thumbnail-classic-title">Foto #1</h6><span
                                    class="thumbnail-classic-subtitle">Compartir foto</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-8 col-sm-6 col-lg-4">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic"><a class="thumbnail-classic-figure"
                            href="
                            {{ asset('plantilla/images/gallery-image-1-1200x801-original.jpg') }}
                            "
                            data-lightgallery="item"><img
                                src="
                                {{ asset('plantilla/images/gallery-image-2-370x340.jpg') }}
                                "
                                alt="" width="370" height="340" /></a>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-panel-right"><span
                                    class="thumbnail-classic-panel-toggle mdi mdi-share-variant"></span>
                                <ul class="thumbnail-classic-list list-inline list-inline-xs">
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-instagram" href="#"></a></li>
                                    <li><a class="fa fa-pinterest-p" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="thumbnail-classic-panel-left">
                                <h6 class="thumbnail-classic-title">Foto #2</h6><span
                                    class="thumbnail-classic-subtitle">Compartir foto</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-8 col-sm-6 col-lg-4">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic"><a class="thumbnail-classic-figure"
                            href="
                            {{ asset('plantilla/images/gallery-image-3-1200x739-original.jpg') }}
                            "
                            data-lightgallery="item"><img
                                src="
                                
                                {{ asset('plantilla/images/gallery-image-3-370x340.jpg') }} 
                                "
                                alt="" width="370" height="340" /></a>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-panel-right"><span
                                    class="thumbnail-classic-panel-toggle mdi mdi-share-variant"></span>
                                <ul class="thumbnail-classic-list list-inline list-inline-xs">
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-instagram" href="#"></a></li>
                                    <li><a class="fa fa-pinterest-p" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="thumbnail-classic-panel-left">
                                <h6 class="thumbnail-classic-title">Foto #3</h6><span
                                    class="thumbnail-classic-subtitle">Compartir foto</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-8 col-sm-6 col-lg-4">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic"><a class="thumbnail-classic-figure"
                            href="
                            {{ asset('plantilla/images/gallery-image-5-1200x865-original.jpg') }}
                           "
                            data-lightgallery="item"><img
                                src="
                                {{ asset('plantilla/images/gallery-image-4-370x340.jpg') }}
                                
                                "
                                alt="" width="370" height="340" /></a>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-panel-right"><span
                                    class="thumbnail-classic-panel-toggle mdi mdi-share-variant"></span>
                                <ul class="thumbnail-classic-list list-inline list-inline-xs">
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-instagram" href="#"></a></li>
                                    <li><a class="fa fa-pinterest-p" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="thumbnail-classic-panel-left">
                                <h6 class="thumbnail-classic-title">Foto #4</h6><span
                                    class="thumbnail-classic-subtitle">Compartir foto</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-8 col-sm-6 col-lg-4">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic"><a class="thumbnail-classic-figure"
                            href="
                            {{ asset('plantilla/images/gallery-image-4-1200x918-original.jpg') }}
                            "
                            data-lightgallery="item"><img
                                src="
                                {{ asset('plantilla/images/gallery-image-5-370x340.jpg') }}
                                "
                                alt="" width="370" height="340" /></a>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-panel-right"><span
                                    class="thumbnail-classic-panel-toggle mdi mdi-share-variant"></span>
                                <ul class="thumbnail-classic-list list-inline list-inline-xs">
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-instagram" href="#"></a></li>
                                    <li><a class="fa fa-pinterest-p" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="thumbnail-classic-panel-left">
                                <h6 class="thumbnail-classic-title">Foto #5</h6><span
                                    class="thumbnail-classic-subtitle">Compartir foto</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-8 col-sm-6 col-lg-4">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic"><a class="thumbnail-classic-figure"
                            href="
                            {{ asset('plantilla/images/gallery-image-6-1200x800-original.jpg') }}
                            "
                            data-lightgallery="item"><img
                                src="
                                {{ asset('plantilla/images/gallery-image-6-370x340.jpg') }}
                                "
                                alt="" width="370" height="340" /></a>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-panel-right"><span
                                    class="thumbnail-classic-panel-toggle mdi mdi-share-variant"></span>
                                <ul class="thumbnail-classic-list list-inline list-inline-xs">
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-instagram" href="#"></a></li>
                                    <li><a class="fa fa-pinterest-p" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="thumbnail-classic-panel-left">
                                <h6 class="thumbnail-classic-title">Foto #6</h6><span
                                    class="thumbnail-classic-subtitle">Compartir foto</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div><a class="button button-lg button-primary" href="#">Cargar mas fotos</a>
        </div>
    </section>
@endsection
