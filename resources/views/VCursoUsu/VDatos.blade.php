@extends('layouts/dashboard')

@section('content')
    <div class="main row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Explora, Aprende, Crece en Nuestra Academia</h3>
            </div>


            <div class="alert alert-dismissible fade show d-none" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fal fa-info-circle me-2" id="alert-icon"></i>
                    <span id="msg"></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="search-bar" style="background-color:#444746;">
                        <form id="myForm">
                            @php
                                $id = request('id');
                            @endphp
                            <input hidden name="id_curso" id="id_curso" value="<?= $id ?>" required>
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="input-box">
                                        <label for="nombre" class="darkblue-text-bold">Curso</label>
                                        <input type="text" class="form-control" id="nombre" readonly />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="input-box">
                                        <label for="valor" class="darkblue-text-bold">Valor</label>
                                        <input type="text" id="valor" class="form-control" readonly />
                                    </div>
                                </div>
                                <span>Datos del pago</span>
                                <hr>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-box">
                                        <label for="metodo_pago" class="darkblue-text-bold">Metodo de Pago</label>
                                        <select name="metodo_pago" id="metodo_pago" class="form-control">
                                            <option value="">[SELECCIONE]</option>
                                            <option value="fichas">Fichas</option>
                                            <option value="criptomonedas">Criptomonedas</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 d-none" id="fecha-fields">
                                    <div class="input-box">
                                        <label for="fecha_pago" class="darkblue-text-bold">Fecha del Pago</label>
                                        <input type="datetime-local" id="fecha_pago" class="form-control"
                                            name="fecha_pago" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 d-none" id="hash-fields">
                                    <div class="input-box">
                                        <label for="hash" class="darkblue-text-bold">Hash de Pago</label>
                                        <input type="text" id="hash" class="form-control" name="hash"
                                            autocomplete="off" placeholder="Hash" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 d-none" id="fichas-fields">
                                    <div class="input-box">
                                        <label for="ficha" class="darkblue-text-bold">Fichas</label>
                                        <input type="text" id="ficha" class="form-control" name="ficha"
                                            autocomplete="off" placeholder="Fichas" readonly />
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

                    <div class="main row">
                        <div class="col">
                            <section class="profile-setting">


                                <div class="col-lg-12">
                                    <div class="edit-area" style="background-color:#444746;">
                                        <div class="profile-navigator">
                                            <button tab-id="tab1" class="darkblue-text-bold tab  active">
                                                BTC </button>
                                            <button tab-id="tab2" class="darkblue-text-bold tab ">
                                                USDT </button>
                                            <button tab-id="tab3" class="darkblue-text-bold tab ">
                                                Material </button>
                                        </div>

                                        <div id="tab1" class="content  active">
                                            <form id="form_2">
                                                <div class="row">
                                                    <h4>Realiza el pago mediante</h4>
                                                    <pre>Envíe BTC a la dirección:<br>bc1q43rj5wdlez42ytar4eapxqx7hvv8xp4a99dqpx</pre>
                                                    <pre>QR de pago:</pre>
                                                    <center><img src="{{ asset('darkpurple/img/qrbtc.jpeg') }}"
                                                            style="width: 80%;"></center>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab2" class="content ">
                                            <form id="form_3">
                                                <h4>Realiza el pago mediante</h4>
                                                <pre>Envíe USDT a la dirección:<br>TWCqnHa2WKuA712UVwfNi2YVnhwwwQyc3J</pre>
                                                <pre>QR de pago:</pre>
                                                <center><img src="{{ asset('darkpurple/img/qrusdt.jpeg') }}"
                                                        style="width: 80%;">
                                                </center>
                                            </form>
                                        </div>
                                        <div id="tab3" class="content ">
                                            <form id="form_4">
                                                <section class="faq-section faq-page" style="background-color:#444746;">
                                                    <div class="container">
                                                        <div class="col-lg-12">
                                                            <div class="accordion" id="accordionExample">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!--div class="col-lg-6 mb-4">
                                <section class="faq-section faq-page" style="background-color:#444746;">
                                    <div class="container">
                                        <div class="col-lg-12">
                                            <div class="accordion" id="accordionExample">

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div-->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Seleccionamos el elemento select
            var metodoPagoSelect = document.getElementById('metodo_pago');
            var fichasFields = document.getElementById('fichas-fields');
            var criptomonedasFechaPago = document.getElementById('fecha-fields');
            var criptomonedasHash = document.getElementById('hash-fields');
            var fecha = document.getElementById('fecha_pago');
            var hash = document.getElementById('hash');
            var ficha = document.getElementById('fic');
            var alertBox = document.querySelector('.alert');
            var messageBox = document.getElementById('msg');
            var alertIcon = document.getElementById('alert-icon');


            // Agregamos un listener para el evento de cambio

            metodoPagoSelect.addEventListener('change', function() {
                var seleccionado = metodoPagoSelect.value;

                if (seleccionado === 'fichas') {
                    fichasFields.classList.remove('d-none');
                    criptomonedasFechaPago.classList.add('d-none');
                    criptomonedasHash.classList.add('d-none');
                } else if (seleccionado === 'criptomonedas') {
                    fichasFields.classList.add('d-none');
                    criptomonedasFechaPago.classList.remove('d-none');
                    criptomonedasHash.classList.remove('d-none');
                } else {
                    // Si no se selecciona ninguna opción, ocultamos todos los campos
                    fichasFields.classList.add('d-none');
                    criptomonedasFechaPago.classList.add('d-none');
                    criptomonedasHash.classList.add('d-none');
                    // Limpiar campos cuando no se selecciona ninguna opción
                    fecha.value = '';
                    hash.value = '';
                }
            });

            const form = document.getElementById('myForm');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Evita que el formulario se envíe automáticamente

                 var button = this.querySelector('button[type="submit"]');


                if (metodoPagoSelect.value === '') {

                    messageBox.textContent = 'Por favor seleccione un metodo de pago.';
                    showAlert('warning');
                    button.disabled = false;
                    return;

                } else if (metodoPagoSelect.value === 'criptomonedas') {
                    if (fecha.value == '' || hash.value == '') {

                        messageBox.textContent =
                            'Los campos de Fecha del Pago y Hash de Pago son obligatorios.';
                        showAlert('warning');
                        button.disabled = false;
                        return;
                    }
                }

                // Mostrar el spinner mientras se procesa la solicitud
                document.getElementById('loading').style.display = 'block';
                var tiempoMinimoVisualizacion = 2000;

                button.disabled = true;
                // Recolecta los datos del formulario
                const formData = new FormData(form);
                formData.append('id', localStorage.getItem('id'));


                setTimeout(function() {
                    // Realiza una solicitud Fetch a una URL específica
                    fetch('/api/agregar_curso_usuario', {
                            method: 'POST', // O el método que necesites
                            headers: {
                                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {

                            // Ocultar el spinner después de recibir la respuesta
                            document.getElementById('loading').style.display = 'none';

                            if (data.status === 201) {
                                const Message = data.message;
                                const redirectUrl =
                                    `{{ route('form_lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                                form.reset();
                                button.disabled = false;
                                window.location.href = redirectUrl;
                            } else {
                                // Muestra un mensaje de error en el mensajeContainer
                                const Message =
                                    'Error: Ocurrió un problema al procesar la solicitud';
                                const redirectUrl =
                                    `{{ route('form_lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                                button.disabled = false;
                                window.location.href = redirectUrl;
                            }
                        })
                        .catch(error => {
                            // Maneja los errores, como problemas de red o del servidor
                            const Message = 'Error al enviar el formulario';
                            const redirectUrl =
                                `{{ route('form_lista_curso') }}?Message=${encodeURIComponent(Message)}`;
                            window.location.href = redirectUrl;
                            console.error('Error al enviar el formulario: ' + error);
                        });

                }, tiempoMinimoVisualizacion);
            });


            // Obtener el valor de ID de tu formulario
            const id = document.getElementById('id_curso').value;


            // Realizar la solicitud Fetch a tu API en api.php
            fetch(`/api/seleccion_curso_compra/${id}`, {
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
                    document.getElementById('ficha').value = data.data[0].curValor;


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


            function showAlert(type) {
                // Limpiar clases y establecer las nuevas según el tipo de alerta
                alertBox.classList.remove('alert-warning', 'alert-danger', 'alert-success');
                alertIcon.classList.remove('fa-info-circle', 'fa-times-circle', 'fa-check-circle');

                switch (type) {
                    case 'warning':
                        alertBox.classList.add('alert-warning');
                        alertIcon.classList.add('fa-times-circle');
                        break;
                    case 'danger':
                        alertBox.classList.add('alert-danger');
                        alertIcon.classList.add('fa-times-circle');
                        break;
                    case 'success':
                        alertBox.classList.add('alert-success');
                        alertIcon.classList.add('fa-check-circle');
                        break;
                    default:
                        break;
                }

                alertBox.classList.remove('d-none'); // Mostrar el alert
            }
        });
    </script>
@endsection
