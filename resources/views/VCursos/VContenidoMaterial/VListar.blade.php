@extends('layouts/dashboard')

@section('content')
<style>
    .custom-modal-size {
        max-width: 80%;  /* Ancho del modal */
        margin: 10px auto;
    }

    .custom-modal-size .modal-content {
        height: 80vh; /* Alto del modal */
    }
</style>
<div class="main row">
    <div class="col-12">
        <div class="search-bar " id="return_listar_cursos">
            <a id="return_listar_contenido"  class="btn btn-custom text-white btn-custom-rounded " role="button"><< Listar contenido</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Material </h3>
        </div>

        <!-- table -->
        <div class="table-parent table-responsive">
            <table class="table" id="tabla-contenido-material">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Curso</th>
                        <th>Contenido</th>
                        <th>Material</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center" id="message-noFound">
                        <td colspan="100%">No se encontraron datos!</td>
                    </tr>        
                </tbody>
            </table>
            <nav>
                <ul class="pagination">
                   
                </ul>
            </nav>
        </div>
    </div>
    
 
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 80%; height: 80%;">
            <div class="modal-content">
                <div class="modal-body">
                    <video id="videoPlayer" width="100%" height="100%" controls>
                        <source src="" type="video/mp4">
                        Tu navegador no soporta la etiqueta video.
                    </video>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script type="module" src="{{asset('js/contenido/contenidoMaterial.js')}}"></script>
@endsection