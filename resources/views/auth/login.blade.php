@extends('layouts/app')

@section('content')
<style>
    .login-section {
        background-image: url(https://purple-hyip.bugfinder.net/assets/uploads/logo/partials_darkpurple_banner.png) !important;
        background-repeat: no-repeat;
    }
</style>
<section class="login-section">
    <div class="container h-100">
        <div class="row h-100 justify-content-center">
            
            <div class="col-lg-6">
                <div id="successAlert" class="alert alert-success d-none" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <br>
                <div class="form-wrapper d-flex align-items-center h-100">
                    
                    <form id="loginForm">
                        <input type="hidden" name="_token" value="t117n7DczbFhJ9Lovzun7NOYIow89NtB1kF6hl4w">                            
                        <div class="row g-4">
                            <div class="col-12">
                                <h4>Inicio de sesión</h4>
                            </div>
                            <div class="input-box col-12">
                                <input type="text" name="usuLogin" value="" class="form-control" id="usuLogin" aria-describedby="emailHelp" placeholder="Usuario" autocomplete="off">
                            </div>
                            <div class="input-box col-12">
                                <input type="password" name="usuClave" value="" class="form-control" id="usuClave" placeholder="Contraseña" autocomplete="off">
                                                                </div>

                            
                            <div class="col-12">
                                <div class="links">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                        <label class="form-check-label" for="flexCheckDefault"> Recordar contraseña </label>
                                    </div>
                                    <a href="{{route('enviar_correo')}}">Olvisdastes tu contraseña?</a>
                                </div>
                            </div>
                        </div>

                        <button class="btn-custom" type="submit">
                            Ingresar
                            <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        
                        </button>
                        <div class="bottom">
                            No tienes una cuenta?
                            <a href="{{route('register')}}">Crear cuenta</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('js/usuario/login.js')}}"></script>

@endsection
