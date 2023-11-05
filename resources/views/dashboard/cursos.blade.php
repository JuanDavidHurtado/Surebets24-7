@extends('layouts/dashboard')

@section('content')
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Cursos</h3>
        </div>

        <div class="search-bar">
            <form action="https://purple-hyip.bugfinder.net/user/transaction-search" method="get" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="input-box">
                            <input type="text" name="transaction_id" value="" class="form-control" placeholder="Search for Transaction ID">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="input-box">
                            <input name="remark" value="" class="form-control" placeholder="Remark" type="text">
                        </div>
                    </div>

                    <div class="input-box col-lg-3 col-md-3 col-sm-12">
                        <input type="text" class="form-control datepicker" name="datetrx" autocomplete="off" readonly="" placeholder="Select a date" value="">
                    </div>

                    <div class="input-box col-lg-3">
                        <button class="btn-custom w-100" type="submit">Search</button>
                    </div>

                </div>
            </form>
        </div>

        <!-- table -->
        <div class="table-parent table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    
                    <th>Curso</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                                            {{-- <tr>
                        <td>1</td>
                        
                        <td>
                                nombre
                        </td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button type="button" class="btn btn-sm infoButton payoutHistoryBtn"     data-bs-toggle="modal" data-bs-target="#infoModal">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm infoButton payoutHistoryBtn"     data-bs-toggle="modal" data-bs-target="#infoModal">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </td> --}}
                   
                    </tbody>
            </table>
            <nav>
                <ul class="pagination">
                    
                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                            <span class="page-link" aria-hidden="true">‹</span>
                        </li>
                    
                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        
                    
                        <li class="page-item">
                            <a class="page-link" href="https://purple-hyip.bugfinder.net/user/transaction?page=2" rel="next" aria-label="Next »">›</a>
                        </li>
                </ul>
            </nav>

        </div>
    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    // Utiliza la función fetch para realizar la petición AJAX
    fetch('/api/lista_curso') // Asegúrate de que la URL es correcta y tiene el prefijo '/api' si es necesario
    .then(response => {
        if (!response.ok) {
            // Si la respuesta no es 200 OK, lanza un error
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json(); // Convierte la respuesta en JSON
    })
    .then(data => {
        // Aquí manejas la respuesta. Por ejemplo, podrías llenar una tabla con los datos.
        const tableBody = document.querySelector('.table.table-striped tbody');
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.forEach((curso, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${curso.curNombre}</td>
                <td><span class="badge ${curso.curEstado === 'ACTIVO' ? 'bg-success' : 'bg-warning'}">${curso.curEstado}</span></td>
                <td>
                    <button type="button" class="btn btn-sm infoButton payoutHistoryBtn" data-bs-toggle="modal" data-bs-target="#infoModal" data-id="${curso.idCurso}">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </button>&nbsp
                        <button type="button" class="btn btn-sm infoButton payoutHistoryBtn"     data-bs-toggle="modal" data-bs-target="#infoModal">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>   
                </td>
            `;
            tableBody.appendChild(row);
        });
    })
    .catch(error => {
        // Aquí manejas cualquier error que ocurra durante la petición
        console.error('Error fetching data: ', error);
    });
});


</script>
@endsection