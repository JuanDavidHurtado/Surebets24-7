@extends('layouts/dashboard')
@section('content')
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
    <div class="main row" >

        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Lista Referido</h3>
            </div>

            <div id="successAlert" class="alert alert-success d-none" role="alert"></div>


            <div class="col-xl-12 col-md-7">
                <div class="dashboard-box" style="background-color:#444746;">
                    <h5>Buscar por Nombre</h5>
                    <div class="input-group mb-3 cutom__referal_input__group">
                        <input type="text" class="form-control" id="filterStartName"
                            placeholder="Digite el Nombre">
                    </div>
                </div>
            </div>
            <!-- table -->
            <div class="table-parent table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Registro</th>
                            <th>Nivel</th>
                            <th>Nombres</th>
                            <th>Contacto</th>
                            <th>Estado</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">


                    </ul>
                </nav>

            </div>

            <div class="modal fade " id="AsignarPosicionModal" tabindex="-1" aria-labelledby="addListingmodal"
                data-bs-backdrop="static" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content"  style="background-color:#444746;">
                        <div class="modal-header modal-header-custom">
                            <h4 class="modal-title method-name text-white">Reasignar Posicion en el Arbol</h4>
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fal fa-times text-white" aria-hidden="true"></i>
                            </button>
                        </div>
                        <form id="formAsignarPosicion">
                            <div class="modal-body">

                                <div id="errorAlert" class="alert alert-danger d-none" role="alert"></div>

                                <div class="payment-form"></div>

                                <input hidden name="usr_referido" value="" id="id">

                                <div class="payment-form">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-box">

                                            <a id='buttonUsrPosicion'>Elegir posicion al usuario</a>

                                            <div id="posicionesDisponibles" class="input-box col-md-10">
                                                <a type="hidden" id="msjCheckboxReferido"></a>
                                                <input type="hidden" id="posicionSeleccionada" name="posicion_seleccionada"
                                                    value="">
                                                <!-- Aquí se mostrarán los checkbox con las posiciones disponibles -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-custom text-white btn-custom-rounded">
                                    Registrar
                                    <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script type="module" src="{{ asset('js/referido/referido.js') }}"></script>
@endsection
