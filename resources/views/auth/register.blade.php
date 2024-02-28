@extends('layouts.app')


@section('content')
<style>
    .login-section {
        background-image: url(https://purple-hyip.bugfinder.net/assets/uploads/logo/partials_darkpurple_banner.png) !important;
        background-repeat: no-repeat;
    }
</style>

    <!-- Register section -->
    <section class="login-section">
     
        <div class="container h-100">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-8">
                    <div class="form-wrapper d-flex align-items-center h-100">
                   
                        <form id="agregarUserForm">
                            
                            <div class="row g-4">
                                <div class="col-12">
                                    <div id="successAlert" class="alert alert-success d-none" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div> 
                                    <h4>Registro de usuario</h4>
                                </div>
                                <div class="input-box col-md-6">
                                    <input type="text" name="documento" class="form-control" value="" placeholder="No Documento" required  autocomplete="off">
                                </div>
                             
                                <div class="input-box col-md-6">
                                    <input type="text" name="login" class="form-control" value="" placeholder="Usuario" required autocomplete="off">
                                </div>
                              
                                <div class="input-box col-md-6">
                                    <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre(s)" required autocomplete="off">
                                </div>
                                <div class="input-box col-md-6">
                                    <input type="text" name="apellido" class="form-control" value="" placeholder="Apellido(s)" required autocomplete="off">
                                </div>
                                <div class="input-box col-md-6">
                                    <input type="email" name="correo" class="form-control" value="" placeholder="Correo electronico" required autocomplete="off">
                                </div>
                                {{-- <div class="input-box col-md-6">
                                    <input type="text" name="usuCodigo" class="form-control" value="" placeholder="Codigo" required>
                                </div> --}}
                                {{-- <div class="input-box col-md-4">
                                        @include('VReferidos/codPostal')
                                    
                                </div> --}}
                                <div class="input-box col-md-6">
                                    <input type="text" name="telefono" class="form-control dialcode-set" value="" placeholder="Telefono" required autocomplete="off">
                                </div>
                                <div class="input-box col-md-12">
                                    <input type="text" name="direccion" class="form-control dialcode-set" value="" placeholder="Direccion" autocomplete="off">
                                </div>
                                <div class="input-box col-md-6">
                                    <input type="password" name="clave" class="form-control" placeholder="Contraseña" required>
                                </div>
                                <div class="input-box col-md-6">
                                    <input type="password" name="clave_confirmation" class="form-control" placeholder="Confirmar Contraseña" required>
                                </div>
                                <div class="col-12">
                                    <div class="links">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Acepto <a href="{{asset('file/prueba.pdf')}}" target="_blank">términos y condiciones</a>.
                                            </label>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-custom">
                                Registrar
                                <span id="buttonUsrReferidoSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
    
                            </button>
                           
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('js/usuario/registro.js')}}"></script>
@endsection




