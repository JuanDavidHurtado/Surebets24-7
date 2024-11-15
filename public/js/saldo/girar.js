document.addEventListener('DOMContentLoaded', function () {
    var id = localStorage.getItem('id');
    var alertBox = document.querySelector('.alert');
    var messageBox = document.getElementById('msg');
    var alertIcon = document.getElementById('alert-icon');

    const form = document.getElementById('girSal');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Validar que los campos sean obligatorios y que "Monto" sea un valor numérico
        const codigo = document.getElementById('codigo').value.trim();
        const monto = document.getElementById('monto').value.trim();
        const observacion = document.getElementById('observacion').value.trim();


        if (codigo === '' || monto === '' || observacion === '') {
            messageBox.textContent = 'Por favor, complete todos los campos obligatorios.';
            showAlert('warning');
            return;
        }

        if (isNaN(monto)) {
            messageBox.textContent = 'Por favor, ingrese un monto valido.';
            showAlert('warning');
            return;
        }

        // Mostrar el spinner mientras se procesa la solicitud
        document.getElementById('loading').style.display = 'block';
        var tiempoMinimoVisualizacion = 2000;

        // Deshabilita el botón de envío para evitar múltiples envíos
        var button = this.querySelector('button[type="submit"]');
        button.disabled = true;

        // Recolecta los datos del formulario
        const formData = new FormData(form);
        formData.append('id', id);

        setTimeout(function () {
            // Realiza una solicitud Fetch a una URL específica
            fetch('/api/gir_sal', {
                method: 'POST', // O el método que necesites
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    // Ocultar el spinner después de recibir la respuesta
                    document.getElementById('loading').style.display = 'none';

                    // Mostrar mensaje en la alerta
                    if (data.status === 200) {
                        messageBox.textContent = data.message;
                        showAlert('success');
                        button.disabled = false;
                        form.reset();
                    } else {
                        messageBox.textContent = data.message;
                        showAlert('danger');
                        button.disabled = false;
                    }
                })
                .catch(error => {
                    // Maneja los errores, como problemas de red o del servidor
                    messageBox.textContent = 'Error al enviar el formulario';
                    showAlert('danger');
                    console.error('Error al enviar el formulario: ' + error);
                }).finally(() => {
                    // Ocultar el spinner después de recibir la respuesta
                    document.getElementById('loading').style.display = 'none';
                    button.disabled = false; // Habilitar el botón
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
