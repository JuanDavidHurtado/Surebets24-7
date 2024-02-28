@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Lista Comision Especial</h3>
        </div>

        <div class="col-xl-12 col-md-7">
            <div class="dashboard-box">
                <h5>Buscar por Documento</h5>
                <div class="input-group mb-3 cutom_referal_input_group">
                    <input type="text" class="form-control copy_referal_input" id="filterStartDoc" placeholder="Digite el Documento">
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="table-parent table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Paguese a</th>
                        <th>Datos Pago</th>
                        <th>Valor</th>
                        <th>Por concepto de</th>
                        <th>Estado</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/pendiente/lista_comision_especial.js') }}"></script>


@endsection