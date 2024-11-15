@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Lista Renta de Bot</h3>
        </div>

        <div class="col-xl-12 col-md-7">
            <div class="dashboard-box" style="background-color:#444746">
                <h5>Buscar por Documento</h5>
                <div class="input-group mb-3 cutom__referal_input__group">
                    <input type="text" class="form-control" id="filterStartName" placeholder="Digite el Documento">
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="table-parent table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Fechas</th>
                        <th>Usuario</th>
                        <th>Datos Pago</th>
                        <th>Producto</th>
                        <!--th>Adelanto</th>
                        <th>Vlr A Pagar</th-->
                        <th>Pagar Mes</th>
                        <th>Estado</th>
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
        <!-- Modal -->
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="infoModalLabel">Información Pago Mensual</h5>
                        <button type="button" class="close" onclick="$('#infoModal').modal('hide');" aria-label="Close">
                            <span aria-hidden="true" style="font-size: 1.5rem; color: #ffffff;">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <p id="modalContent">Cargando...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            onclick="$('#infoModal').modal('hide');">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="module" src="{{ asset('js/administracion/inversion_final.js') }}"></script>

@endsection