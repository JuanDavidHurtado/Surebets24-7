@extends('layouts/dashboard')

@section('content')
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Productos</h3>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="badge-box-wrapper" id="card_productos">
                <!-- Las tarjetas de productos se llenarán aquí dinámicamente -->
            </div>                               
        </div>
    </div>

    <script type="text/javascript">
        var assetBaseUrl = "{{ asset('') }}";
    </script>
<script src="{{ asset('js/producto.js') }}"></script>

@endsection


