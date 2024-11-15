document.addEventListener('DOMContentLoaded', function () {
    var contactForm = document.querySelector('#sendContactoEmailForm');


    if (contactForm) {
        var button = contactForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonSpinner');
        var successAlert = document.getElementById('successAlert');
        var errorAlert = document.getElementById('errorAlert');

        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Ocultar y limpiar los mensajes anteriores
            successAlert.classList.add('d-none');
            successAlert.textContent = '';
            errorAlert.classList.add('d-none');
            errorAlert.textContent = '';

            var formData = new FormData(this);

            // Validar que los campos no estén vacíos
            var isEmpty = false;
            formData.forEach(function (value) {
                if (!value.trim()) {
                    isEmpty = true;
                }
            });

            if (isEmpty) {
                errorAlert.textContent = 'Por favor, diligencia todos los campos.';
                errorAlert.classList.remove('d-none');
                button.disabled = false;

                return; // Detener la ejecución si el formulario está vacío
            }

            // Validar que el campo de teléfono contenga solo números
            var telefono = formData.get('telefono');
            var telefonoRegex = /^[0-9]+$/;
            if (!telefonoRegex.test(telefono)) {
                errorAlert.textContent = 'Por favor, ingresa un numero de telefono valido.';
                errorAlert.classList.remove('d-none');
                button.disabled = false;
                return; // Detener la ejecución si el teléfono es inválido
            }

            // Validar que el campo de correo tenga un formato válido
            var correo = formData.get('correo');
            var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!correoRegex.test(correo)) {
                errorAlert.textContent = 'Por favor, ingresa un correo electronico valido.';
                errorAlert.classList.remove('d-none');
                button.disabled = false;
                return; // Detener la ejecución si el correo es inválido
            }

            button.disabled = true;
            buttonSpinner.classList.remove('d-none');

            fetch('/api/pon_con', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {


                    button.disabled = false;
                    buttonSpinner.classList.add('d-none');

                    // Actualiza la tabla o realiza otras acciones según la respuesta
                    if (data.status === 200) {

                        contactForm.reset();
                        successAlert.textContent = data.message;
                        successAlert.classList.remove('d-none');


                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        errorAlert.textContent = errorMessage;
                        errorAlert.classList.remove('d-none');

                    }

                })
                .catch(error => {
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none');
                    errorAlert.textContent = 'Error al enviar el formulario, intentelo nuevamente';
                    errorAlert.classList.remove('d-none');
                });
        });
    }
});
