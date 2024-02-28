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
                    
                    <form id="resetPasswordForm">
                        <div class="row g-4">
                            <div class="col-12">
                                <h4>Recuperar contraseña</h4>
                            </div>
                            <input type="hidden" type="text" name="token" value="{{$token}}">
                            <div class="input-box col-12">
                                <input type="password" name="clave" value="" class="form-control" id="usuClave" aria-describedby="emailHelp" placeholder="Escriba su contraseña" autocomplete="off">
                            </div>
                            <div class="input-box col-12">
                                <input type="password" name="clave_confirmacion" value="" class="form-control" id="usuClave_confirmacion" placeholder="Confirmar contraseña" autocomplete="off">
                                                                </div>

                            
                            <div class="col-12">
                                <div class="links">
                                    
                            </div>
                        </div>

                        <button class="btn-custom" type="submit">
                            Recuperar
                            <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        
                        </button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('js/usuario/recuperarPassword.js')}}"></script>

@endsection
