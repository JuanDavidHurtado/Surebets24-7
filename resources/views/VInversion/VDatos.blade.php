@extends('layouts/dashboard')
@section('content')
<div class="main row">
    <div class="col-12 col-md-8">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Tu futuro empieza hoy, Invierte inteligentemente.</h3>
        </div>

        <div class="alert alert-dismissible fade show d-none" role="alert">
            <div class="d-flex align-items-center">
                <i class="fal fa-info-circle me-2" id="alert-icon"></i>
                <span id="msg"></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>

        <div class="search-bar" style="background-color:#444746;">
            <form id="myForm">
                @php
                    $id = request('id');
                @endphp
                <input type="hidden" name="id_pro" id="id_pro" value="<?= $id ?>" required>
                <div class="row g-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <label for="nombre" class="darkblue-text-bold">Valor</label>
                            <input type="text" class="form-control" id="nombre" readonly />
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <label for="valor" class="darkblue-text-bold">Valor</label>
                            <input type="text" id="valor" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <label for="ganancia" class="darkblue-text-bold">Vlr Neto Ganancia</label>
                            <input type="text" class="form-control" id="ganancia" readonly />
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="input-box">
                            <label for="total" class="darkblue-text-bold">Total</label>
                            <input type="text" id="total" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="input-box">
                            <label for="fecha_inicial" class="darkblue-text-bold">Fecha Inicial</label>
                            <input id="fecha_inicial" type="text" class="form-control" readonly
                                value="<?= date('Y-m-d', time()) ?>" />
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="input-box">
                            <label for="dias" class="darkblue-text-bold">Tiempo/Dias</label>
                            <input id="dias" type="text" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="input-box">
                            <label for="fecha_final" class="darkblue-text-bold">Fecha Final</label>
                            <input required type="text" class="form-control" readonly placeholder="Fecha Final"
                                id="fecha_final" />
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

                    <div class="col-lg-5 col-md-12 col-sm-12 d-none" id="fecha-fields">
                        <div class="input-box">
                            <label for="fecha_pago" class="darkblue-text-bold">Fecha del Pago</label>
                            <input type="datetime-local" id="fecha_pago" class="form-control" name="fecha_pago" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 d-none" id="hash-fields">
                        <div class="input-box">
                            <label for="hash" class="darkblue-text-bold">Hash de Pago</label>
                            <input type="text" id="hash" class="form-control" name="hash" autocomplete="off"
                                placeholder="Hash" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-none" id="fichas-fields">
                        <div class="input-box">
                            <label for="ficha" class="darkblue-text-bold">Fichas</label>
                            <input type="text" id="ficha" class="form-control" name="ficha" autocomplete="off"
                                placeholder="Fichas" readonly />
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <button class="btn-custom" type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="col-12 col-md-4">


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
                            </div>

                            <div id="tab1" class="content  active">
                                <form id="form_2">
                                    <div class="row">
                                        <h4>Realiza el pago mediante</h4>
                                        <pre>Envíe BTC a la dirección:<br>bc1q43rj5wdlez42ytar4eapxqx7hvv8xp4a99dqpx</pre>
                                        <pre>QR de pago:</pre>
                                        <center><img src="{{ asset('darkpurple/img/qrbtc.jpeg') }}"
                                                style="width: 100%;"></center>
                                    </div>
                                </form>
                            </div>
                            <div id="tab2" class="content ">
                                <form id="form_3">
                                    <h4>Realiza el pago mediante</h4>
                                    <pre>Envíe USDT a la dirección:<br>TWCqnHa2WKuA712UVwfNi2YVnhwwwQyc3J</pre>
                                    <pre>QR de pago:</pre>
                                    <center><img src="{{ asset('darkpurple/img/qrusdt.jpeg') }}" style="width: 100%;">
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>

    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

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

        metodoPagoSelect.addEventListener('change', function () {
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
        var intervaloDias; // Variable para almacenar el intervalo de días
        var fechaInicialInput = document.getElementById('fecha_inicial');
        var fechaFinalInput;

        // Obtener el valor de ID de tu formulario
        var id = document.getElementById('id_pro').value;

        // Realizar la solicitud Fetch a tu API en api.php
        fetch(`/api/seleccion/${id}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }

        }

        )
            .then(response => {
                if (!response.ok) {
                    // Si la respuesta no es 200 OK, lanza un error
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {

                // Actualizar los campos del formulario con los datos recibidos
                document.getElementById('nombre').value = data[0].invNombre;
                document.getElementById('valor').value = data[0].invValor + ' USDT';
                document.getElementById('dias').value = data[0].invDias;
                document.getElementById('ficha').value = data[0].invValor;
                document.getElementById('ganancia').value = data[0].invGanancia + ' USDT';

                var invValor = parseFloat(data[0].invValor);
                var invGanancia = parseFloat(data[0].invGanancia);

                // Calcular el total
                var total = invValor + invGanancia;

                document.getElementById('total').value = total + ' USDT';


                intervaloDias = parseInt(data[0].invDias); // Obtener el intervalo de días desde los datos

                // Calcular la fecha final sin contar los sábados y domingos
                var fechaInicial = new Date(fechaInicialInput.value);
                var diasLaborables = 0;
                var fechaFinal = new Date(fechaInicial);

                // Bucle para agregar los días laborables
                while (diasLaborables <= intervaloDias) {
                    // Incrementa la fecha en un día
                    fechaFinal.setDate(fechaFinal.getDate() + 1);


                    // Verifica si el día es laborable (lunes a viernes)
                    if (fechaFinal.getDay() !== 0 && fechaFinal.getDay() !== 6) {
                        diasLaborables++;
                    }
                }

                //alert(fechaFinal);

                // Formatea la fecha final como YYYY-MM-DD después de ajustar los días laborables
                var year = fechaFinal.getFullYear();
                var month = (fechaFinal.getMonth() + 1).toString().padStart(2,
                    '0'); // Sumamos 1 porque los meses van de 0 a 11
                var day = fechaFinal.getDate().toString().padStart(2, '0');

                var fechaFinalInput = `${year}-${month}-${day}`;


                // Asignar el valor al campo fechaFinalInput
                fechaInicial.setDate(fechaInicial.getDate() + intervaloDias);
                document.getElementById('fecha_final').value = fechaInicial.toISOString().split('T')[0]; // Formato YYYY-MM-DD

                //documento para cambio
                //document.getElementById('fecha_final').value = fechaFinalInput;

            })
            .catch(error => {
                console.error('Error fetching data: ', error);
            });


        form.addEventListener('submit', function (event) {
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

            // Deshabilita el botón de envío para evitar múltiples envíos
            //var button = this.querySelector('button[type="submit"]');
            button.disabled = true;
            var id = localStorage.getItem('id');
            // Recolecta los datos del formulario
            const formData = new FormData(form);
            formData.append('id', id);


            setTimeout(function () {

                // Realiza una solicitud Fetch a una URL específica
                fetch('/api/agregar_inversion', {
                    method: 'POST',
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

                        console.log(data.status);

                        // console.log(data.fecha_ini + '_' + data.fecha);
                        // Ocultar el spinner después de recibir la respuesta
                        document.getElementById('loading').style.display = 'none';

                        //console.log(data);
                        if (data.status === 201) {
                            const Message = data.message;
                            const redirectUrl =
                                `{{ route('form_lista_inversion') }}?Message=${encodeURIComponent(Message)}`;
                            form.reset();
                            button.disabled = false;

                            window.location.href = redirectUrl;
                        } else {
                            // Muestra un mensaje de error en el mensajeContainer
                            const Message =
                                'Error: Ocurrió un problema al procesar la solicitud';
                            const redirectUrl =
                                `{{ route('form_lista_inversion') }}?Message=${encodeURIComponent(Message)}`;
                            button.disabled = false;
                            window.location.href = redirectUrl;
                        }
                    })
                    .catch(error => {
                        // Maneja los errores, como problemas de red o del servidor
                        const Message = 'Error al enviar el formulario';
                        const redirectUrl =
                            `{{ route('form_lista_inversion') }}?Message=${encodeURIComponent(Message)}`;
                        window.location.href = redirectUrl;
                        console.error('Error al enviar el formulario: ' + error);
                    });

            }, tiempoMinimoVisualizacion);
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