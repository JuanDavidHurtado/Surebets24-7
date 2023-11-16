@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Lista Comision</h3>
        </div>

        <div class="col-xl-12 col-md-7">
            <div class="dashboard-box">
                <h5>Buscar por Nombre</h5>
                <div class="input-group mb-3 cutom__referal_input__group">
                    <input type="text" class="form-control copy__referal__input" id="filterStartName" placeholder="Digite el Nombre">
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

                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                        <span class="page-link" aria-hidden="true">‹</span>
                    </li>

                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>


                    <li class="page-item">
                        <a class="page-link" href="https://purple-hyip.bugfinder.net/user/transaction?page=2" rel="next" aria-label="Next »">›</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>

<script src="{{ asset('js/comision/comision.js') }}"></script>

@endsection