@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Lista Comision Renta Bot</h3>
        </div>

        <div class="col-xl-12 col-md-7">
            <div class="dashboard-box" style="background-color:#444746;">
                <h5 class="white-text">Buscar por Nombre</h5>
                <div class="input-group mb-3 cutom__referal_input__group">
                    <input type="text" class="form-control" id="filterStartName" placeholder="Digite el Nombre">
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
                        <th>Usuario</th>
                        <th>Inversion</th>
                        <th>Comision</th>
                        <th>Porcentaje</th>
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
    </div>
</div>

<script type="module" src="{{ asset('js/comision/comision.js') }}"></script>

@endsection