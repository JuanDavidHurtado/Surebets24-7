@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Cursos</h3>
        </div>

        <div class="search-bar" id="search-bar">
           <form>
                <div class="row g-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <input type="text" id ="searchInput" value="" class="form-control" placeholder="Buscar curso">
                        </div>
                    </div>
                    <div class="input-box col-lg-3">
                        <a class="btn-custom w-100" >Search</a>
                    </div>

                </div>
            </form>
        </div>
       
        <div class="search-bar d-none" id="return_listar_cursos">
            <a href="{{route('listar_curso')}}"  class="btn btn-custom text-white btn-custom-rounded " role="button">Listar cursos</a>
        </div>
        <!-- table -->
        <div class="table-parent table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    
                    <th>Curso</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th>Contenido</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="text-center" id="message-noFound">
                        <td colspan="100%">No Data Found!</td>
                    </tr>     
                   
                    </tbody>
            </table>

            <table class="table table-striped d-none" id="tabla-contenido-curso">
                <thead>
                <tr>
                    <th>No.</th>
                    
                    <th>Nombre curso</th>
                    <th>Contenido</th>
                    <th>Opcion</th>
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
                            <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                        </li>
                </ul>
            </nav>

        </div>
    </div>
 
</div>

<div class="modal fade " id="editEstadoModal" tabindex="-1" aria-labelledby="addListingmodal" data-bs-backdrop="static" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modal-header-custom">
                <h4 class="modal-title method-name text-white">Editar estado del curso</h4>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times text-white" aria-hidden="true"></i>
                </button>
            </div>
            <form id="editEstadoCursoForm">
                <div class="modal-body">
                    <div id="successAlertEstado" class="alert alert-success d-none" role="alert"></div>
                    <div id="errorAlertEstado" class="alert alert-danger d-none" role="alert"></div>  
                    <!-- Asumiendo que tienes una manera de establecer el curso_id, por ejemplo, un input oculto -->
                    <div class="payment-form"></div>
                    <input type="hidden" name="id" value="" id="id">
                    <input  type="hidden" id="estado" name="estado" value=""/>

                    <div class="payment-form">
                        <p class="darkblue-text depositLimit lebelFont">Desea cambiar el estado del curso?</p>
                        <label for="spanEstado" class="darkblue-text depositLimit lebelFont">Pasará a estado:</label>
                        <span id="spanEstado" class="estado-display"></span>
                    </div>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-custom text-white btn-custom-rounded">
                            Cambiar de estado
                            <span id="buttonSpinnerEstado" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade addFundModal" id="addFundModal" tabindex="-1" aria-labelledby="addListingmodal" data-bs-backdrop="static" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modal-header-custom">
                <h4 class="modal-title method-name text-white">Agregar contenido</h4>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times text-white" aria-hidden="true"></i>
                </button>
            </div>
            <form id="agregarContenidoForm">
                <div class="modal-body">
                    <div id="successAlert" class="alert alert-success d-none" role="alert"></div>
                        <div id="errorAlert" class="alert alert-danger d-none" role="alert"></div>  


                        <div class="payment-form">
                                <p class="darkblue-text depositLimit lebelFont">Adiciona el contenido que tendra el curso</p>
                            
                             <!-- Asumiendo que tienes una manera de establecer el curso_id, por ejemplo, un input oculto -->
                            <input type="hidden" name="id_curso" value="" id="id_curso">


                            <div class="form-group mb-30 mt-3">
                                <div class="box">
                                    <h5 class="darkblue-text-bold">Nombre de contenido</h5>
                                    <div class="input-group">
                                        <div class="input-group mb-3 cutom__referal_input__group">
                                            <input type="text" class="form-control amount darkpurple__input__group__fixed" name="nombre" id="nombre">
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
                            Agregar
                            <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal para Mensajes -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageModalLabel">Mensaje</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Aquí irá el mensaje que quieres mostrar -->
          <p id="messageContent"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-custom text-white btn-custom-rounded" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<script src="{{asset('js/curso/cursos.js')}}"></script>
@endsection