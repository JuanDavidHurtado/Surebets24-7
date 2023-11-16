@extends('layouts/dashboard')

@section('content')

<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Explora, Aprende, Crece en Nuestra Academia</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="search-bar">
                    <form id="myForm">
                        @php
                        $id = request('id');
                        @endphp
                        <input hidden name="id_curso" id="id_curso" value="<?= $id ?>" required>
                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Inversion</label>
                                    <input type="text" class="form-control" id="nombre" readonly />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Valor</label>
                                    <input type="text" id="valor" class="form-control" readonly />
                                </div>
                            </div>
                            <span>Datos del pago</span>
                            <hr>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Fecha del Pago</label>
                                    <input required type="datetime-local" id="fecha_pago" class="form-control" name="fecha_pago" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Hash de Pago</label>
                                    <input required type="text" id="hash" class="form-control" name="hash" autocomplete="off" placeholder="Hash" />
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <button class="btn-custom" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="search-bar">
                    <span>Contenido</span>
                    <hr>
                    <table class="table table-striped" id="tabla-contenido">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Las filas se agregarán aquí -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form = document.getElementById('myForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            // Recolecta los datos del formulario
            const formData = new FormData(form);

            // Realiza una solicitud Fetch a una URL específica
            fetch('/api/agregar_curso_usuario', {
                    method: 'POST', // O el método que necesites
                    body: formData
                })
                .then(response => response.json())
                .then(data => {

                    //console.log(data);
                    if (data.status === 201) {
                        const Message = data.message;
                        const redirectUrl = `{{ route('lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                        window.location.href = redirectUrl;
                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                        const redirectUrl = `{{ route('lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                        window.location.href = redirectUrl;
                    }
                })
                .catch(error => {
                    // Maneja los errores, como problemas de red o del servidor
                    const Message = 'Error al enviar el formulario';
                    const redirectUrl = `{{ route('lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                    window.location.href = redirectUrl;
                    console.error('Error al enviar el formulario: ' + error);
                });
        });


        // Obtener el valor de ID de tu formulario
        const id = document.getElementById('id_curso').value;

        console.log(id);
        // Realizar la solicitud Fetch a tu API en api.php
        fetch(`/api/seleccion_curso/${id}`)
            .then(response => {
                if (!response.ok) {
                    // Si la respuesta no es 200 OK, lanza un error
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
                // Actualizar los campos del formulario con los datos recibidos
                document.getElementById('nombre').value = data[0].curNombre;
                document.getElementById('valor').value = data[0].curValor + ' USD';

                // Aquí manejas la respuesta. Por ejemplo, podrías llenar una tabla con los datos.
                const tableBody = document.querySelector('.table.table-striped tbody');
                tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
                data.forEach((curso, index) => {

                    console.log(curso);
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td>${index + 1}</td>
                <td>${curso.conNombre}</td>
                <td><span class="badge ${curso.conEstado === 'ACTIVO' ? 'bg-success' : 'bg-warning'}">${curso.conEstado}</span></td>     
            `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => {
                console.error('Error fetching data: ', error);
            });
    });
</script>
@endsection