@extends('layouts/dashboard')

@section('content')

<div class="main row">
    <div class="col-12">
        <div role="alert" id="mensajeCurso"class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start d-none"><div class="d-flex align-items-center"><i aria-hidden="true" class="fal fa-info-circle me-2">
        </i> Curso agregado.
        </div> <button class="close-btn pt-1" id="buttonMensajeAlert"><i aria-hidden="true" class="fal fa-times text-white"></i></button>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Agregar curso</h3>
        </div>
        <div id="successAlert" class="alert alert-success d-none" role="alert">
            
          </div>
        <div class="search-bar">
            <form id="agregarCursoForm">
                <div class="row g-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <label for="nombre" class="darkblue-text-bold">Nombre del curso</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del curso" required>
                        </div>
                    </div>
            
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="input-box">
                                <label for="valor" class="darkblue-text-bold">Valor del curso</label>
                                <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor curso" pattern="^\d+(\.\d{1,2})?$" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <button class="btn-custom" type="submit">
                            Agregar
                            <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </form>
            
        
            
        </div>

    </div>
</div>


<script type="module" src="{{asset('js/curso/cursos.js')}}"></script>


@endsection
