@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h3 class="mb-0">Academia de Aprendizaje</h3>
        </div>

        @if(request()->has('Message'))

        <div class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start" role="alert">
            <div class="d-flex align-items-center">
                <i class="fal fa-info-circle me-2"></i> {{ urldecode(request()->input('Message')) }}

            </div>
            <button class="close-btn pt-1" @click.prevent="skipNotification"><i class="fal fa-times text-white"></i>
            </button>
        </div>
        @endif

        <div class="col-xl-12 col-md-12">
            <div class="badge-box-wrapper">
                <div class="row g-4 mb-4" id="curso-cards">
                    <!-- Aquí se generarán las tarjetas de producto -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/usuario_curso/listar.js') }}"></script>

<script>
    function redirect(id) {
        //alert(id)
        var url = "{{ route('seleccion_curso_view', ['id' => ':id']) }}";
        url = url.replace(':id', id);
        window.location.href = url;
    }
</script>


@endsection