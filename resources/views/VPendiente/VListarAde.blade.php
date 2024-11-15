@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Lista Adelanto Inversion</h3>
        </div>

        <div class="col-xl-12 col-md-7">
            <div class="dashboard-box" style="background-color:#444746">
                <h5>Buscar por Documento</h5>
                <div class="input-group mb-3 cutom__referal_input__group">
                    <input type="text" class="form-control" id="filterStartDoc" placeholder="Digite el Documento">
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
                        <th>Usuario</th>
                        <th>Datos Pago</th>
                        <th>Monto Solicitado</th>
                        <th>Producto</th>
                        <th>Total Adelanto</th>
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
    </div>
</div>
<script type="module" src="{{ asset('js/pendiente/lista_adelanto.js') }}"></script>
@endsection