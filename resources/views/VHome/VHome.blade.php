@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <!-- La alerta inicialmente oculta -->
        <div id="emptyDataAlert" class="alert alert-success alert-with-icon d-none" data-notify='container' onclick='redirect();'>
            <span data-notify='icon' class='tim-icons icon-paper'></span>
            <span data-notify='message'><strong>Paso 1.</strong> Por favor registre una opcion de pago, presione clic aqui</span>
        </div>
        
       
        <div class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start" role="alert">
            <div class="d-flex align-items-center">
                <i class="fal fa-info-circle me-2"></i> Bienvenido usuario
            </div>
        </div>


        <!-- table -->
        <div class="table-parent table-responsive" style="display: none;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Concepto</th>
                        <th>Bono</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ asset('js/home/home.js') }}"></script>
<script>

function redirect() {
    // Redirecciona solo cuando se hace clic en la alerta
    window.location.href = "{{ route('metodo_pago') }}";
}
</script>
@endsection