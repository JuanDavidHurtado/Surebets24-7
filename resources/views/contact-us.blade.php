@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="{{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Contacto</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">Panel</a></li>
                    <li class="active">Contacto</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section Contact-->
    <section class="section section-variant-1 bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-7 col-xl-8">
                    <!-- Heading Component-->
                    <article class="heading-component" style="margin-bottom: 10px;">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">PONERSE EN CONTACTO
                            </h5>
                        </div>
                    </article>

                    <div id="successAlert" class="alert alert-success d-none" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form id="sendContactoEmailForm" class="rd-form rd-mailform" data-form-output="form-output-global"
                        data-form-type="contact">
                        <div class="row row-10 row-narrow">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-user-name-1">Nombre</label>
                                    <input autocomplete="off" class="form-input" id="form-user-name-1" type="text" name="nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-user-phone">Telefono</label>
                                    <input autocomplete="off" class="form-input" id="form-user-phone" type="text" name="telefono">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-message">Mensaje</label>
                                    <textarea class="form-input" id="form-message" name="mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-email">Correo Electronico</label>
                                    <input autocomplete="off" class="form-input" id="form-email" type="email" name="correo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="button button-lg button-primary button-block" type="submit">
                                    Enviar Mnesaje
                                    <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <!-- Heading Component-->
                    <article class="heading-component">
                        <div class="heading-component-inner">
                            <h5 class="heading-component-title">DETALLES DE CONTACTO
                            </h5>
                        </div>
                    </article>

                    <div class="contact-list">
                        <dl>
                            <dt>Correo Electronico</dt>
                            <dd><span class="icon icon-primary mdi mdi-email-outline"></span><a class="link"
                                    href="mailto:#">administracion@surebets24siete.com</a></dd>
                        </dl>
                        <dl>
                            <dt>Direccion</dt>
                            <dd><span class="icon icon-primary mdi mdi-map-marker"></span><a class="link"
                                    href="#">17-456 Main Street
                                    Christchurch, New Zeland
                                    MD 08011</a></dd>
                        </dl>
                        <dl>
                            <dt>Telefono</dt>
                            <dd><span class="icon icon-primary mdi mdi-phone"></span><a class="link link-md"
                                    href="tel:#">+1 (929)867-3569</a></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="{{ asset('js/contacto/ponerse_contacto.js') }}"></script>
