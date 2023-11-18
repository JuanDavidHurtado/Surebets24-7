@extends('layouts/dashboard')

@section('content')
<style>
    .banner-section {
        background-image: url(https://purple-hyip.bugfinder.net/assets/uploads/logo/partials_darkpurple_banner.png) !important;
        background-repeat: no-repeat;
    }
</style>
<div role="alert" id="mensajeUserFerido"class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start d-none"><div class="d-flex align-items-center"><i aria-hidden="true" class="fal fa-info-circle me-2">
    </i> Usuario referido registrado.
    </div> <button class="close-btn pt-1" id="buttonMensajeAlert"><i aria-hidden="true" class="fal fa-times text-white"></i></button>
</div>
<section class="login-section banner-section">
    <div class="container h-100">
        
        <div class="row h-100 justify-content-center">
            <div class="col-lg-8">
                 
                <div class="form-wrapper d-flex align-items-center h-100">
                   
                    <form id="agregarUserReferidoForm">
                       
                        
                        <div class="row g-4">
                            <div class="col-12">
                                <div id="successAlert" class="alert alert-success d-none" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div> 
                                <h4>Registro de usuario referido</h4>
                            </div>
                            <div class="input-box col-md-6">
                                <input type="text" name="documento" class="form-control" value="" placeholder="No Documento" required>
                            </div>
                         
                            <div class="input-box col-md-6">
                                <input type="text" name="login" class="form-control" value="" placeholder="Username" required>
                            </div>
                          
                            <div class="input-box col-md-6">
                                <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre(s)" required>
                            </div>
                            <div class="input-box col-md-6">
                                <input type="text" name="apellido" class="form-control" value="" placeholder="Apellido(s)" required>
                            </div>
                            <div class="input-box col-md-6">
                                <input type="email" name="correo" class="form-control" value="" placeholder="Correo electronico" required>
                            </div>
                          
                            {{-- <div class="input-box col-md-4">
                                    @include('VReferidos/codPostal')
                                
                            </div> --}}
                            <div class="input-box col-md-6">
                                <input type="text" name="telefono" class="form-control dialcode-set" value="" placeholder="Telefono" required>
                            </div>
                            <div class="input-box col-md-6">
                                <input type="text" name="direccion" class="form-control dialcode-set" value="" placeholder="Direccion">
                            </div>
                            <div class="input-box col-md-6">
                                <input type="password" name="clave" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="input-box col-md-6">
                                <input type="password" name="clave_confirmation" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <div class="col-12">
                                <div class="links">
                                    
                                </div>
                            </div>
                        </div>
                    
                        <button type="submit" class="btn-custom">
                            Register
                            <span id="buttonUsrReferidoSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>

                        </button>
                       
                    </form>
                 
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/referido/agregar.js')}}"></script>

@endsection