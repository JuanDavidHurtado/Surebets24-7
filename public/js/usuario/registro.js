document.addEventListener('DOMContentLoaded', function () {

    var agregarUserForm = document.querySelector('#agregarUserForm');
    if (agregarUserForm){
        var button = agregarUserForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonUsrReferidoSpinner');
        var successAlert = document.getElementById('successAlert'); 
        var errorAlert = document.getElementById('errorAlert'); 
        var mensajeRegistroUser = document.getElementById('mensajeRegistroUser')
        agregarUserForm.addEventListener('submit', function(e){
            e.preventDefault();
           
                button.disabled = true;

            if (buttonSpinner) {
                 buttonSpinner.classList.remove('d-none');
            } else {
                console.error('buttonSpinner not found');
            }
           
            var formData = new FormData(this);
            const password = formData.get('clave');
            const passwordConfirmation = formData.get('clave_confirmation');

              // Verifica si las contraseñas coinciden y si son válidas
              if (password !== passwordConfirmation) {
                errorAlert.textContent = 'Las contraseñas no coinciden.';
                errorAlert.classList.remove('d-none');
                buttonSpinner.classList.add('d-none');
                setTimeout(() => {
                    errorAlert.classList.add('d-none'); // Ocultará el mensaje después de 5 segundos
                    button.disabled = false;

                }, 3000);
                return; // Detiene la ejecución adicional del manejador
            }
            fetch('/api/registro_usuario', { // api URL 
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    errorAlert.textContent = 'Error en la solicitud al servidor ';
                    errorAlert.classList.remove('d-none');
                    setTimeout(function() {
                        errorAlert.classList.add('d-none'); // Opcional: Oculta el alerta para el próximo uso
                        // Limpia el valor del campo de entrada del nombre
                    }, 3000);
                    throw new Error('Server responded with a status: ' + response.status);
                   
                }
                return response.json();
            })
            .then(data => {
                
                if (data.message) {
                    successAlert.textContent = data.message;
                    successAlert.classList.remove('d-none');
                }
                // Cierra el modal después de un pequeño retraso para permitir que el usuario vea el mensaje
                setTimeout(function() {
                    agregarUserForm.reset();
                    successAlert.classList.add('d-none'); // Opcional: Oculta el alerta para el próximo uso
                    window.location.href = '/login'

                }, 2000);
             
            })
            .catch(error => {
                errorAlert.textContent = 'Error: ' + error.message;
                errorAlert.classList.remove('d-none');
            })
            .finally(() => {
                button.disabled = false;
                buttonSpinner.classList.add('d-none');
            });
        });
    }
    // Selecciona el botón usando la clase que le agregaste
    var closeButton = document.querySelector('#buttonMensajeAlert');
    // Asegúrate de que el botón existe antes de agregar el manejador de eventos
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            // Selecciona el elemento de alerta que deseas ocultar
            var alertMessage = document.getElementById('mensajeUserFerido');
            if (alertMessage) {
                // Agrega la clase 'd-none' para ocultar la alerta
                alertMessage.classList.add('d-none');
            }
        });
    }

})

function validarPassword(password) {
    const longitudMinima = 8;
    const tieneNumero = /\d/.test(password);
    const tieneLetra = /[a-zA-Z]/.test(password);
    const tieneCaracterEspecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);

    return (
        password.length >= longitudMinima &&
        tieneNumero &&
        tieneLetra &&
        tieneCaracterEspecial
    );
}