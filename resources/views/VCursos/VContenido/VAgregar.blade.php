@extends('layouts/dashboard')

@section('content')
<div role="alert" id="mensajeContenidoCurso"class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start d-none"><div class="d-flex align-items-center"><i aria-hidden="true" class="fal fa-info-circle me-2">
</i> Contenido Registrado.
</div> <button class="close-btn pt-1" id="buttonMensajeAlert"><i aria-hidden="true" class="fal fa-times text-white"></i></button>
</div>
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Agregar contenido de curso </h3>
        </div>
        <div id="successAlert" class="alert alert-success d-none" role="alert">
        <div id="errorAlert" class="alert alert-danger d-none" role="alert"></div>  
            
          </div>
        <div class="search-bar">
            <form id="agregarconteForm">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <label for="nombre" class="darkblue-text-bold">Nombre del contenido</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del contenido" required>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <label for="nombre" class="darkblue-text-bold">&nbsp</label>
                        <button class="btn-custom" type="submit">
                            Agregar
                            <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                    </div>
                </div>
                
            </form>
            
        </div>

        <div class="table-parent table-responsive">
            <table class="table table-material" id="tabla-contenido-curso">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nombre curso</th>
                    <th>Contenido</th>
                    <th>Material</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="text-center" id="message-noFound">
                        <td colspan="100%">No Data Found!</td>
                    </tr>
                </tbody>
            </table>
            
        </div>

        

    </div>
  
</div>


<div class="modal fade " id="addMaterialModal" tabindex="-1" aria-labelledby="addListingmodal" data-bs-backdrop="static" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modal-header-custom">
                <h4 class="modal-title method-name text-white">Agregar material</h4>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times text-white" aria-hidden="true"></i>
                </button>
            </div>
            <form id="agregarMaterialForm">
                <div class="modal-body">
                        <div id="successAlertMaterial" class="alert alert-success d-none" role="alert"></div>
                        <div id="errorAlertMaterial" class="alert alert-danger d-none" role="alert"></div>  
                        <div class="payment-form">
                             <!-- Asumiendo que tienes una manera de establecer el curso_id, por ejemplo, un input oculto -->
                            <input type="hidden" name="idContenido" value="" id="idContenido">
                            <div class="form-group mb-30 mt-3">
                                <div class="box">
                                    <h5 class="darkblue-text-bold">Nombre de material</h5>
                                    <div class="input-group">
                                        <div class="input-group mb-3 cutom__referal_input__group">
                                            <input type="text" class="form-control amount darkpurple__input__group__fixed" name="matNombre" id="matNombre" required>
                                        </div>
                                    </div>
                                </div>
                                <pre class="text-danger errors"></pre>
                            </div>
                            <div class="form-group mb-30 mt-3">
                                <div class="box">
                                    <h5 class="darkblue-text-bold">Adicionar</h5>
                                    <div class="input-group">
                                        <div class="input-group mb-3 input-box cutom__referal_input__group">
                                            <input type="file" name="matArchivo" id="matArchivo" class="form-control" multiple="" placeholder="Upload File" required accept="application/pdf, video/*">
                                        </div>
                                    </div>
                                </div>
                                <pre class="text-danger errors"></pre>
                            </div>
                        </div>

                        
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-custom text-white btn-custom-rounded">
                            Agregar material
                            <span id="buttonMaterialSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('js/contenido/cursoContenido.js')}}"></script>


@endsection
