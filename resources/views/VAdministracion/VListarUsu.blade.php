@extends('layouts/dashboard')

@section('content')
    <div class="main row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Lista Usuario</h3>
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
                            <th>No.</th>
                            <th>Registro</th>
                            <th>Cuenta</th>
                            <th>Nivel</th>
                            <th>Usuario</th>
                            <th>Contacto</th>
                            <th>Estado</th>
                            <th>Permiso Giro</th>
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
    <script type="module" src="{{ asset('js/administracion/lista_usuario.js') }}"></script>
@endsection
