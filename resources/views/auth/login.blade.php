@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="{{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">PAGINA DE INICIO DE SESION</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">Panel</a></li>
                    <li><a href="#">Pagina</a></li>
                    <li class="active">PAGINA DE INICIO DE SESION</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section Login/register-->
    <section class="section section-variant-1 bg-gray-100">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <div id="successAlert" class="alert alert-success d-none" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="card-login-register" id="card-l-r">
                        <div class="card-top-panel">
                            <div class="card-top-panel-left">
                                <h5 class="card-title card-title-login">Usuario</h5>
                                <h6 class="card-title card-title-register">Recuperar contraseña</h6>
                            </div>
                            <div class="card-top-panel-right"><span class="card-subtitle"><span
                                        class="card-subtitle-login">Recuperar contraseña</span><span
                                        class="card-subtitle-register">Ingresar</span></span>
                                <button class="card-toggle" data-custom-toggle="#card-l-r"><span
                                        class="card-toggle-circle"></span></button>
                            </div>
                        </div>
                        <div class="card-form card-form-login">
                            <form class="rd-form rd-mailform" id="loginForm">
                                <input type="hidden" name="_token" value="t117n7DczbFhJ9Lovzun7NOYIow89NtB1kF6hl4w">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-login-name-1">Usuario</label>
                                    <input class="form-input" id="form-login-name-1" type="text" name="usuLogin"
                                        autocomplete="off">
                                </div>
                                <div class="form-wrap">
                                    <label class="form-label" for="form-login-password-1">Contraseña</label>
                                    <input class="form-input" id="form-login-password-1" type="password" name="usuClave">
                                </div>
                                <button class="button button-lg button-primary button-block" type="submit">
                                    Ingresar
                                    <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </form>
                        </div>
                        <div class="card-form card-form-register">
                            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                                id="sendLinkEmailForm">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-register-email">Correo Electronico</label>
                                    <input class="form-input" id="form-register-email" type="email" name="email" autocomplete="off">
                                </div>

                                <button class="button button-lg button-primary button-block" type="submit">
                                    Enviar
                                    <span id="buttonSpinnerEmail" class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="{{ asset('js/usuario/login.js') }}"></script>
