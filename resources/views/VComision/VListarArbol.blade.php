@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Lista Comision Red Binaria</h3>
        </div>

        <div class="col-xl-12 col-md-7">
            <div class="dashboard-box" style="background-color:#444746;">
                <h5>Buscar por Nivel del Nodo</h5>
                <div class="input-group mb-3 cutom__referal_input__group">
                    <input type="text" class="form-control" id="filterStartName" placeholder="Digite el nivel">
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="table-parent table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Comision</th>
                        <th>Descripcion</th>
                        <th>Nivel Nodo</th>
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

<script type="module" src="{{ asset('js/comision/comision_arbol.js') }}"></script>

@endsection