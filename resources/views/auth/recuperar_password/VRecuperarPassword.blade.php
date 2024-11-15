@extends('layouts/app')

@section('content')
    <!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap"
        data-parallax-img="{{ asset('plantilla/images/bg-breadcrumbs-1-1920x726.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Login Page</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('sports') }}">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Login Page</li>
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
                                <h5 class="card-title card-title-login">Recuperar contraseña</h5>
                            </div>
                        </div>
                        <div class="card-form card-form-login">

                            <form class="rd-form rd-mailform" id="resetPasswordForm">
                                <input type="hidden" type="text" name="token" value="{{ $token }}">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-login-name-1">Nueva Contraseña</label>
                                    <input class="form-input" id="form-login-name-1" type="password" name="clave"
                                        >
                                </div>
                                <div class="form-wrap">
                                    <label class="form-label" for="form-login-password-1">Repita Nueva Contraseña</label>
                                    <input class="form-input" id="form-login-password-1" type="password"
                                        name="clave_confirmacion">
                                </div>


                                <button class="button button-lg button-primary button-block" type="submit">
                                    Recuperar
                                    <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status"
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
<script src="{{ asset('js/usuario/recuperarPassword.js') }}"></script>
