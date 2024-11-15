document.addEventListener('DOMContentLoaded', function () {
    var loginForm = document.querySelector('#loginForm');
    var logout = document.querySelector('#logout');
    var sendLinkEmailForm = document.querySelector('#sendLinkEmailForm');

    if (loginForm) {
        var button = loginForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonSpinner');
        var successAlert = document.getElementById('successAlert');
        var errorAlert = document.getElementById('errorAlert');

        loginForm.addEventListener('submit', function (e) {
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

            button.disabled = true;
            buttonSpinner.classList.remove('d-none');

            fetch('/api/auth_login', {
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
                    }

                    // Almacenar el token después de un inicio de sesión exitoso
                    localStorage.setItem('token', result.body.token);
                    localStorage.setItem('id', result.body.id);
                    window.location.href = '/home';
                })
                .catch(error => {
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none');
                    //console.error('Error en la petición:', error);
                });
        });
    }


    if (logout) {

        logout.addEventListener('click', function (e) {
            fetch('/api/logout', {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la solicitud de logout');
                    }
                    return response.json();
                })
                .then(data => {
                    // Limpiar localStorage
                    localStorage.removeItem('token');
                    localStorage.removeItem('id');

                    // Redirigir al usuario a la página de inicio de sesión o a la página principal
                    window.location.href = '/';
                })
                .catch(error => {
                    console.error('Error en logout:', error);
                });
        })
    }

    if (sendLinkEmailForm) {
        var button = sendLinkEmailForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonSpinnerEmail');
        var successAlert = document.getElementById('successAlert');
        var errorAlert = document.getElementById('errorAlert');

        sendLinkEmailForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Ocultar y limpiar los mensajes anteriores
            successAlert.classList.add('d-none');
            successAlert.textContent = '';
            errorAlert.classList.add('d-none');
            errorAlert.textContent = '';

            var formData = new FormData(this);

            // Validar que formData no esté vacío
            var isEmpty = true;
            for (var pair of formData.entries()) {
                if (pair[1].trim() !== "") {
                    isEmpty = false;
                    break;
                }
            }

            if (isEmpty) {
                errorAlert.textContent = 'Por favor, diligencia el formulario.';
                errorAlert.classList.remove('d-none');
                button.disabled = false;
                return; // Detener la ejecución si el formulario está vacío
            }

            button.disabled = true;
            buttonSpinner.classList.remove('d-none'); // Mostrar el spinner

            fetch('/api/enviar_correo', {
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
                    buttonSpinner.classList.add('d-none'); // Ocultar el spinner

                    if (!result || result.status !== 200) {
                        let errorMessage = result.body.message || 'Error desconocido';
                        errorAlert.textContent = errorMessage;
                        errorAlert.classList.remove('d-none');
                        return Promise.reject('Error en la solicitud: ' + result.status);
                    } else {
                        sendLinkEmailForm.reset();
                        successAlert.textContent = result.body.message;
                        successAlert.classList.remove('d-none');
                    }
                })
                .catch(error => {
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none'); // Ocultar el spinner
                    //console.error('Error en la petición:', error);
                });
        });
    }

});
