@extends('layouts/dashboard')

@section('content')
    <div class="main row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Lista Renta de Bots</h3>
            </div>

            <div class="col-xl-12 col-md-7">
                <div class="dashboard-box" style="background-color:#444746;">
                    <h5>Buscar por Fecha Inicial</h5>
                    <div class="input-group mb-3 cutom__referal_input__group">
                        <input type="text" class="form-control" id="filterStartDate"
                            placeholder="Digite la Fecha">
                    </div>
                </div>
            </div>

            <!-- table -->
            <div class="table-parent table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Plan</th>
                            <th>Vlr. a Ganar</th>
                            <th>Tiempo Transcurrido</th>
                            <th>Total</th>
                            <th>Detalle</th>
                            <th>Estado</th>
                            <!--<th>Opcion</th>-->
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

            <div class="modal fade " id="solicitarAdelantoModal" tabindex="-1" aria-labelledby="addListingmodal"
                data-bs-backdrop="static" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="background-color:#444746;">
                        <div class="modal-header modal-header-custom">
                            <h4 class="modal-title method-name text-white">Solicitar Retiro</h4>
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fal fa-times text-white" aria-hidden="true"></i>
                            </button>
                        </div>
                        <form id="solicitarAdelantoForm">
                            <div class="modal-body">

                                <div id="successAlert" class="alert alert-success d-none" role="alert"></div>
                                <div id="errorAlert" class="alert alert-danger d-none" role="alert"></div>

                                <div class="payment-form"></div>
                                <input hidden name="id" value="" id="id">

                                <div class="payment-form">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-box">
                                            <label for="monto" class="darkblue-text-bold">Monto</label>
                                            <input type="text" id="monto" class="form-control" name="monto"
                                                placeholder="Monto" autocomplete="off" />
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
    <script type="module" src="{{ asset('js/usuario_inversion/historial.js') }}"></script>

    <script>
        function redirect(id) {
            //alert(id)

            var id = btoa(id);


            var url = "{{ route('adelanto_inversion', ['id' => ':id']) }}";
            url = url.replace(':id', id);
            window.location.href = url;
        }
    </script>
@endsection
