@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <!-- La alerta inicialmente oculta -->
        <div id="emptyDataAlert" class="alert alert-success alert-with-icon d-none" data-notify='container'
            onclick='redirect();'>
            <span data-notify='icon' class='tim-icons icon-paper'></span>
            <span data-notify='message'><strong>Paso 1.</strong> Por favor registre una opcion de pago, presione clic
                aqui</span>
        </div>


        <div class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start" role="alert">
            <div class="d-flex align-items-center">
                <i class="fal fa-user-circle me-2"></i><span id="usu_log"></span>
            </div>
        </div><br>

        <div class="row g-4 mb-4" id="plan_activo">
            <div class="col-xl-3 col-md-6 mb-3" style="cursor: pointer;"
                onclick="window.location.href = '{{ route('historial_inversion') }}';">
                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <div style="display: flex;">
                        <!-- Imagen -->
                        <img id="frame" src="" alt="inv img"
                            style="width: 50%; max-width: 80%; height: auto; float: left; margin-right: 10px;">
                        <!-- Texto -->
                        <div>
                            <h5 id="nom_plan"></h5>
                            <h4><small><sup>$</sup></small><span id="val_plan"></span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-3" style="cursor: pointer;"
                onclick="window.location.href = '{{ route('historial_inversion') }}';">
                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Dias Transcurridos</h5>
                    <h5 id="dias"></h5>
                    <i class="fal fa-calendar"></i>
                </div>
            </div>

            <!--div class="col-xl-3 col-md-6" style="cursor: pointer;"
                        onclick="window.location.href = '{{ route('historial_inversion') }}';">
                        <div class="dashboard-box box-2" style="background-color:#444746;">
                            <h5>Monto Renta de Bots</h5>
                            <h6 id="acumulado"></h6>
                            <h6 id="saldo"></h6>
                            <h6 id="Retiros"></h6>
                            <i class="fal fa-dollar-sign"></i>
                        </div>
                    </div-->

            <div class="col-xl-3 col-md-6 mb-3" style="cursor: pointer;"
                onclick="window.location.href = '{{ route('historial_inversion') }}';">
                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Dias Restantes</h5>
                    <h5 id="dia_res"></h5>
                    <i class="fal fa-calendar"></i>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3" style="cursor: pointer;"
                onclick="window.location.href = '{{ route('historial_inversion') }}';">
                <div class="dashboard-box box-2" style="background-color:#444746;">

                    <div style="display: flex; align-items: center;">
                        <!-- Texto -->
                        <div>
                            <h5>Total Cancelado</h5>
                            <h4><small><sup>+</sup></small><span id="total_pago_mensual"></span></h4>
                        </div>

                        <!-- Imagen -->

                        <i class="fal fa-dollar-sign"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="row g-4 mb-4">


            <!--div class="col-xl-3 col-md-6">
                    <div class="dashboard-box box-2" style="background-color:#444746;">

                        <div style="display: flex; align-items: center;">
                          
                            <div>
                                <h5 id="level"></h5>
                                <h5><span id="nom_lev"></span></h5>
                            </div>
                            <i class="fal fa-user" id="userIcon"></i>
                        </div>
                    </div>
                </div-->

            <div class="col-xl-3 col-md-6">

                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Balance General</h5>
                    <h3><small><sup>+</sup></small><span id="balance_general"></span></h3>
                    <i class="fas fa-chart-bar"></i>
                </div>
            </div>

            <!--div class="col-xl-3 col-md-6">
                    <div class="dashboard-box box-2" style="background-color:#444746;">
                        <h5>Mis Puntos</h5>
                        <h3><small><sup>+</sup></small><span id="punto"></span></h3>
                        <i class="fal fa-box-open"></i>
                        <a class="badge bg-primary" href="{{ route('historial_punto') }}">Detalle punto(s)</a>
                    </div>
                </div-->

            <!--div class="col-xl-3 col-md-6" id="card_total_binario" style="cursor: pointer;"
                    onclick="window.location.href = '{{ route('lista_comision_binario') }}';">

                    <div class="dashboard-box box-2" style="background-color:#444746;">
                        <h5>Total Bono en Binarios</h5>
                        <h3><small><sup>+</sup></small><span id="total_binario"></span></h3>
                        <i class="fas fa-network-wired"></i>
                        <a class="badge bg-primary" href="{{ route('lista_comision_binario') }}">Detalle</a>
                    </div>
                </div-->

            <!--div class="col-xl-3 col-md-6" id="card_total_inversion" style="cursor: pointer;"
                    onclick="window.location.href = '{{ route('form_lista_comision') }}';">

                    <div class="dashboard-box box-2" style="background-color:#444746;">
                        <h5>Balance General</h5>
                        <h3><small><sup>+</sup></small><span id="total_com_inversion"></span></h3>
                        <i class="fas fa-chart-bar"></i>
                        <a class="badge bg-primary" href="{{ route('form_lista_comision') }}">Detalle</a>
                    </div>
                </div-->
            <div class="col-xl-3 col-md-6" style="cursor: pointer;"
                onclick="window.location.href = '{{ route('lis_comi_cur') }}';">

                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Total Bono en Cursos</h5>
                    <h3><small><sup>+</sup></small><span id="total_com_cur"></span></h3>
                    <i class="fas fa-gift"></i>
                    <a class="badge bg-primary" href="{{ route('lis_comi_cur') }}">Detalle</a>
                </div>
            </div>
            <!--div class="col-xl-3 col-md-6" onclick="window.location.href = '{{ route('agregar_referido') }}';"
                style="cursor: pointer;">
                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Panel de Registro</h5>
                    <h3>Referir</h3>
                    <i class="fal fa-users"></i>
                </div>
            </div-->

            <div class="col-xl-3 col-md-6" style="cursor: pointer;"
                onclick="window.location.href = '{{ route('form_lista_comision') }}';">

                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Total Bono Renta Bots</h5>
                    <h3><small><sup>+</sup></small><span id="total_com_inv"></span></h3>
                    <i class="fas fa-gift"></i>
                    <a class="badge bg-primary" href="{{ route('form_lista_comision') }}">Detalle</a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" style="cursor: pointer;"
                onclick="window.location.href = '{{ route('lista_comision_bot') }}';">

                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Total Bono Bots</h5>
                    <h3><small><sup>+</sup></small><span id="total_com_bot"></span></h3>
                    <i class="fas fa-gift"></i>
                    <a class="badge bg-primary" href="{{ route('lista_comision_bot') }}">Detalle</a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-box box-2" style="background-color:#444746;">

                    <div style="display: flex; align-items: center;">
                        <!-- Texto -->
                        <div>
                            <h5>Mis Fichas</h5>
                            <h4><small><sup>+</sup></small><span id="ficha"></span></h4>
                        </div>

                        <!-- Imagen -->

                        <i class="fal fa-coins"></i>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" onclick="window.location.href = '{{ route('ver_arbol') }}';"
                style="cursor: pointer;">
                <div class="dashboard-box box-2" style="background-color:#444746;">
                    <h5>Visualizar Arbol</h5>
                    <h3>Mi Red</h3>
                    <i class="fal fa-tree"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/home/home.js') }}"></script>
<script>
    function redirect() {
        // Redirecciona solo cuando se hace clic en la alerta
        window.location.href = "{{ route('metodo_pago') }}";
    }
</script>
@endsection