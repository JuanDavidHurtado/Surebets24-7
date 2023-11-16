@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Lista Inversion</h3>
        </div>

        <div class="col-xl-12 col-md-7">
            <div class="dashboard-box">
                <h5>Buscar por Fecha Final</h5>
                <div class="input-group mb-3 cutom__referal_input__group">
                    <input type="text" class="form-control copy__referal__input" id="filterStartDate" placeholder="Digite la Fecha">
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="table-parent table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Fechas</th>
                        <th>Dias</th>
                        <th>Usuario</th>
                        <th>Datos Pago</th>
                        <th>Producto</th>
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
<script src="{{ asset('js/administracion/inversion_final.js') }}"></script>

@endsection