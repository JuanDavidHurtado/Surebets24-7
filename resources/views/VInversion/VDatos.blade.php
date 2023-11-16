@extends('layouts/dashboard')

@section('content')

<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Transferencia de saldo</h3>
        </div>

        <div class="search-bar">
            <form id="myForm">
                @php
                $id = request('id');
                @endphp
                <input type="hidden" name="id_pro" id="id_pro" value="<?= $id ?>" required>
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
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="input-box">
                            <label for="email" class="darkblue-text-bold">Fecha Inicial</label>
                            <input id="fecha_inicial" type="text" class="form-control" readonly value="<?= date('Y-m-d', time()); ?>" />
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="input-box">
                            <label for="email" class="darkblue-text-bold">Tiempo/Dias</label>
                            <select name="dias" id="dias" class="form-control" required>
                                <option value="" selected disabled class="text-white">[Seleccione]</option>
                                <option value="30" class="text-white">30 Dias</option>
                                <option value="90" class="text-white">90 Dias</option>
                                <option value="180" class="text-white">180 Dias</option>
                                <option value="300" class="text-white">300 Dias</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="input-box">
                            <label for="email" class="darkblue-text-bold">Fecha Final</label>
                            <input required type="text" class="form-control" readonly placeholder="Fecha Final" id="fecha_final" />
                        </div>
                    </div>

                    <span>Datos del pago</span>
                    <hr>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="input-box">
                            <label for="email" class="darkblue-text-bold">Fecha del Pago</label>
                            <input required type="datetime-local" id="fecha_pago" class="form-control" name="fecha_pago" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
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

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form = document.getElementById('myForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            // Recolecta los datos del formulario
            const formData = new FormData(form);

            // Realiza una solicitud Fetch a una URL específica
            fetch('/api/agregar_inversion', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {

                    //console.log(data);
                    if (data.status === 201) {
                        const Message = data.message;
                        const redirectUrl = `{{ route('lista_inversion') }}?Message=${encodeURIComponent(Message)}`;
                        window.location.href = redirectUrl;
                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                        const redirectUrl = `{{ route('lista_inversion') }}?Message=${encodeURIComponent(Message)}`;
                        window.location.href = redirectUrl;
                    }
                })
                .catch(error => {
                    // Maneja los errores, como problemas de red o del servidor
                    const Message = 'Error al enviar el formulario';
                    const redirectUrl = `{{ route('lista_inversion') }}?Message=${encodeURIComponent(Message)}`;
                    window.location.href = redirectUrl;
                    console.error('Error al enviar el formulario: ' + error);
                });
        });


        // Obtener el valor de ID de tu formulario
        const id = document.getElementById('id_pro').value;

        console.log(id);
        // Realizar la solicitud Fetch a tu API en api.php
        fetch(`/api/seleccion/${id}`)
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
                document.getElementById('nombre').value = data[0].invNombre;
                document.getElementById('valor').value = data[0].invValor + ' USD';
            })
            .catch(error => {
                console.error('Error fetching data: ', error);
            });

        const fechaInicialInput = document.getElementById('fecha_inicial');
        const diasSelect = document.getElementById('dias');
        const fechaFinalInput = document.getElementById('fecha_final');

        // Función para calcular la fecha final
        function calcularFechaFinal() {
            const fechaInicial = new Date(fechaInicialInput.value);
            const dias = parseInt(diasSelect.value, 10);
            const fechaFinal = new Date(fechaInicial.getTime() + (dias * 24 * 60 * 60 * 1000));

            // Formatea la fecha final como 'YYYY-MM-DD'
            const fechaFinalFormateada = fechaFinal.toISOString().split('T')[0];

            fechaFinalInput.value = fechaFinalFormateada;
        }

        // Escucha los cambios en el campo de selección de días
        diasSelect.addEventListener('change', calcularFechaFinal);
    });
</script>

@endsection