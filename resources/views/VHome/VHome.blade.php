@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start" role="alert">
            <div class="d-flex align-items-center">
                <i class="fal fa-info-circle me-2"></i> Bienvenido usuario

            </div>
            <button class="close-btn pt-1" @click.prevent="skipNotification"><i class="fal fa-times text-white"></i>
            </button>
        </div>
    </div>
</div>

<script src="{{ asset('js/usuario/auth-redirect.js') }}"></script>
@endsection