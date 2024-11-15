@extends('layouts/dashboard')

@section('content')
    <div class="main row">

        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Lista Pagos</h3>
            </div>

            <div class="col-xl-12 col-md-7">
                <div class="dashboard-box" style="background-color:#444746;">
                    <h5>Buscar por Fecha</h5>
                    <div class="input-group mb-3 cutom__referal_input__group">
                        <input type="text" class="form-control" id="filterStartDate"
                            placeholder="Digite la Fecha">
                    </div>
                    <!--span>Nota: Recuerda que los adelantos de inversion estan disponibles unicamente si tienes un saldo acumulado de al menos 100 USD, ademas el feed de retiro es del 5% del valor solicitado.</span-->
                </div>
            </div>
           

            <!-- table -->
            <div class="table-parent table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!--th>No.</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Estado</th-->
                            <th>Pago #</th>
                            <th>Fecha</th>
                            <th>Monto</th>
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
                <a href="{{ route('historial_inversion') }}" class="btn-custom investNow">Regresar</a>
            </div>
        </div>
    </div>
    <script type="module" src="{{ asset('js/usuario_inversion/anticipo.js') }}"></script>
@endsection
