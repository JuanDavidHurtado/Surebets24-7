document.addEventListener('DOMContentLoaded', function () {
    var resetPasswordForm = document.querySelector('#resetPasswordForm');
    if (resetPasswordForm) {

        var button = resetPasswordForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonSpinner'); // Asegúrate de que este elemento exista
        var successAlert = document.getElementById('successAlert'); // Asegúrate de que este elemento exista
        var errorAlert = document.getElementById('errorAlert'); // Asegúrate de que este elemento exista

        resetPasswordForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Ocultar y limpiar los mensajes anteriores
            successAlert.classList.add('d-none');
            successAlert.textContent = '';
            errorAlert.classList.add('d-none');
            errorAlert.textContent = '';

            button.disabled = true;
            buttonSpinner.classList.remove('d-none');

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
                buttonSpinner.classList.add('d-none'); // Ocultar el spinner
                return; // Detener la ejecución si el formulario está vacío
            }

            const password = formData.get('clave');
            const passwordConfirmation = formData.get('clave_confirmacion');

            // Verifica si las contraseñas coinciden y si son válidas
            if (password !== passwordConfirmation) {
                errorAlert.textContent = 'Las contraseñas no coinciden.';
                errorAlert.classList.remove('d-none');
                setTimeout(() => {
                    errorAlert.classList.add('d-none'); // Ocultará el mensaje después de 5 segundos
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none'); // Ocultar el spinner
                }, 3000);
                return; // Detiene la ejecución adicional del manejador
            }

            fetch('/api/reset_password', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
                .then(response => response.json().then(data => ({ status: response.status, body: data })))
                .then(result => {
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none');

                    if (!result || result.status !== 200) {
                        let errorMessage = result.body.message || 'Error desconocido';
                        errorAlert.textContent = errorMessage;
                        errorAlert.classList.remove('d-none');

                        return Promise.reject('Error en la solicitud: ' + result.status);
                    } else {
                        resetPasswordForm.reset();
                        successAlert.textContent = result.body.message;
                        successAlert.classList.remove('d-none');
                    }
                })
                .catch(error => {
                    console.error('Error en la petición:', error);
                    buttonSpinner.classList.add('d-none');
                });
        });
    }
});
