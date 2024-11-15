@extends('layouts/dashboard')
<style>
    /* Estilos para el contenedor principal de los checkboxes */
    #posicionesDisponibles {
        display: flex;
        flex-wrap: wrap;
    }

    /* Estilos para cada contenedor de checkbox */
    .checkbox-container-nodo {
        flex: 1 1 calc(25% - 10px);
        /* Toma 25% del contenedor principal menos 10px de margen */
        box-sizing: border-box;
        margin: 5px;
    }

    /* Asegúrate de que los checkboxes y las etiquetas estén alineados */
    .checkbox-container-nodo input[type="checkbox"] {
        margin-right: 5px;
    }
</style>
@section('content')
<link href="{{ asset('customer_css/customer.css') }}" rel="stylesheet" type="text/css" />
<script src="https://d3js.org/d3.v7.min.js"></script>
<script>
    var imageUrl = "{{ asset('darkpurple/img/logoInversion/experto1K.png') }}";
</script>

<style>
    .banner-section {
        background-image: url(https://purple-hyip.bugfinder.net/assets/uploads/logo/partials_darkpurple_banner.png) !important;
        background-repeat: no-repeat;
    }

    circle {
        fill: #fff;
        stroke: rgb(230, 234, 238);
        stroke-width: 1.5px;
    }

    text {
        font: 20px sans-serif;
        text-anchor: middle;
    }

    line {
        fill: none;
        stroke: #e9e4e4;
        stroke-width: 0.5px;
    }


    svg {
        width: 100%;
        height: 50%;
    }
</style>
<div class="search-bar row" style=" margin-left: 10px;margin-right: 10px; background-color:#444746;">

    <!--section class="login-section banner-section"-->
    <div class="container h-100">
        <div class="row h-100 justify-content-center">
            <div class="col-lg-12">
                <div class="form-wrapper d-flex align-items-center h-100">
                    <form id="agregarUserReferidoForm">
                        <!--h4>Binario de referidos</h4-->

                        <div id="usuInvAlert" class="alert alert-info d-none" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div id="mensajeAlert" class="alert alert-info d-none" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="row g-4">
                            <div class="col-12">
                                <div id="successAlert" class="alert alert-success d-none" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>

                                <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <h4>Registro de usuario referido</h4>
                            </div>

                            <div class="input-box col-md-6">
                                <input type="text" name="documento" class="form-control" value=""
                                    placeholder="No Documento" required autocomplete="off">
                            </div>

                            <div class="input-box col-md-6">
                                <input type="text" name="login" class="form-control" value="" placeholder="Username"
                                    required autocomplete="off">
                            </div>

                            <div class="input-box col-md-6">
                                <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre(s)"
                                    required autocomplete="off">
                            </div>
                            <div class="input-box col-md-6">
                                <input type="text" name="apellido" class="form-control" value=""
                                    placeholder="Apellido(s)" required autocomplete="off">
                            </div>
                            <div class="input-box col-md-4">
                                <input type="email" name="correo" class="form-control" value=""
                                    placeholder="Correo electronico" required autocomplete="off">
                            </div>

                            <div class="input-box col-md-4">
                                <input type="text" name="telefono" class="form-control dialcode-set" value=""
                                    placeholder="Telefono" required autocomplete="off">
                            </div>
                            <div class="input-box col-md-4">
                                <input type="text" name="direccion" class="form-control dialcode-set" value=""
                                    placeholder="Direccion" autocomplete="off">
                            </div>

                            <div class="input-box col-md-6">
                                <input type="password" name="clave" class="form-control" placeholder="Password"
                                    required>
                            </div>
                            <div class="input-box col-md-6">
                                <input type="password" name="clave_confirmation" class="form-control"
                                    placeholder="Confirm Password" required>
                            </div>
                            <div class="input-box col-md-12">
                                <a id='buttonUsrPosicion'>Elegir posicion del nuevo referido</a>

                            </div>

                            <div id="posicionesDisponibles" class="input-box col-md-10">
                                <a type="hidden" id="msjCheckboxReferido"></a>
                                <input type="hidden" id="posicionSeleccionada" name="posicion_seleccionada" value="">
                                <!-- Aquí se mostrarán los checkbox con las posiciones disponibles -->
                            </div>

                            <div class="col-12">
                                <div class="links">

                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn-custom">
                            Register
                            <span id="buttonUsrReferidoSpinner" class="spinner-border spinner-border-sm d-none"
                                role="status" aria-hidden="true"></span>

                        </button>

                    </form>

                </div>
            </div>
        </div>


    </div>

</div>

<!-- Modal -->

<!--/section-->

<script src="{{ asset('js/referido/agregar.js') }}"></script>

@endsection