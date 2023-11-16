@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Contenido</h3>
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
                        <td colspan="100%">No Data Found!</td>
                    </tr>        
                   
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



<script src="{{asset('js/contenido/contenidoMaterial.js')}}"></script>
@endsection