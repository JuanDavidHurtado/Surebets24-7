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
                <section class="faq-section faq-page">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="accordion" id="accordionExample">

                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!--div class="col-lg-6 mb-4">
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
                           
                        </tbody>
                    </table>
                </div>
            </div-->
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form = document.getElementById('myForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente
            
            // Deshabilita el botón de envío para evitar múltiples envíos
            var button = this.querySelector('button[type="submit"]');
            button.disabled = true;
            // Recolecta los datos del formulario
            const formData = new FormData(form);
            formData.append('id', localStorage.getItem('id') );
            // Realiza una solicitud Fetch a una URL específica
            fetch('/api/agregar_curso_usuario', {
                    method: 'POST', // O el método que necesites
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`,
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {

                    if (data.status === 201) {
                        const Message = data.message;
                        const redirectUrl = `{{ route('lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                        form.reset();
                        button.disabled = false;
                        window.location.href = redirectUrl;
                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                        const redirectUrl = `{{ route('lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                        button.disabled = false;
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

      
        // Realizar la solicitud Fetch a tu API en api.php
        fetch(`/api/seleccion_curso_compra/${id}`,
        { 
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }

        })
            .then(response => {
                if (!response.ok) {
                    // Si la respuesta no es 200 OK, lanza un error
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                // Actualizar los campos del formulario con los datos recibidos
                document.getElementById('nombre').value = data.data[0].curNombre;
                document.getElementById('valor').value = data.data[0].curValor + ' USD';

                // Aquí manejas la respuesta para construir el acordeón.
                const accordion = document.querySelector('.accordion');
                accordion.innerHTML = ''; // Limpiar el acordeón antes de agregar nuevos datos

                data.resultados.forEach((curso, index) => {
                    // Crear el encabezado del acordeón para cada curso
                    const accordionItem = document.createElement('div');
                    accordionItem.className = 'accordion-item';

                    const accordionHeader = document.createElement('h5');
                    accordionHeader.className = 'accordion-header';
                    accordionHeader.id = `heading${index + 1}`;

                    const accordionButton = document.createElement('button');
                    accordionButton.className = 'accordion-button collapsed';
                    accordionButton.type = 'button';
                    accordionButton.dataset.bsToggle = 'collapse';
                    accordionButton.dataset.bsTarget = `#collapse${index + 1}`;
                    accordionButton.setAttribute('aria-expanded', 'false');
                    accordionButton.setAttribute('aria-controls', `collapse${index + 1}`);
                    accordionButton.innerHTML = `${curso.curso.conNombre}`;

                    accordionHeader.appendChild(accordionButton);
                    accordionItem.appendChild(accordionHeader);

                    // Crear el cuerpo del acordeón para mostrar los materiales
                    const accordionCollapse = document.createElement('div');
                    accordionCollapse.id = `collapse${index + 1}`;
                    accordionCollapse.className = 'accordion-collapse collapse';
                    accordionCollapse.setAttribute('aria-labelledby', `heading${index + 1}`);
                    accordionCollapse.dataset.bsParent = '#accordionExample';

                    const accordionBody = document.createElement('div');
                    accordionBody.className = 'accordion-body';

                    // Agregar tabla para mostrar los materiales
                    const table = document.createElement('table');
                    table.className = 'table table-bordered';

                    // Crear encabezado de la tabla
                    const tableHeader = document.createElement('thead');
                    const headerRow = document.createElement('tr');
                    const headerCell1 = document.createElement('th');
                    headerCell1.textContent = '#';
                    const headerCell2 = document.createElement('th');
                    headerCell2.textContent = 'Nombre';

                    headerRow.appendChild(headerCell1);
                    headerRow.appendChild(headerCell2);
                    tableHeader.appendChild(headerRow);
                    table.appendChild(tableHeader);

                    const tableBody = document.createElement('tbody');

                    curso.materiales.forEach((material, materialIndex) => {
                        const row = document.createElement('tr');
                        const cell1 = document.createElement('td');
                        const cell2 = document.createElement('td');

                        cell1.textContent = materialIndex + 1;
                        cell2.textContent = material.matNombre;

                        row.appendChild(cell1);
                        row.appendChild(cell2);
                        tableBody.appendChild(row);
                    });

                    table.appendChild(tableBody);
                    accordionBody.appendChild(table);

                    accordionCollapse.appendChild(accordionBody);
                    accordionItem.appendChild(accordionCollapse);

                    accordion.appendChild(accordionItem);
                });

            })
            .catch(error => {
                console.error('Error fetching data: ', error);
            });
    });
</script>
@endsection