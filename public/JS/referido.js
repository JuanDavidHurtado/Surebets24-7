document.addEventListener('DOMContentLoaded', function () {

    var agregarUserReferidoForm = document.querySelector("#agregarUserReferidoForm");
    if (agregarUserReferidoForm){
        var button = agregarUserReferidoForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonUsrReferidoSpinner');
        var successAlert = document.getElementById('successAlert'); 
        var errorAlert = document.getElementById('errorAlert'); 
        var mensajeUserReferido = document.getElementById('mensajeUserFerido')
        agregarUserReferidoForm.addEventListener('submit', function(e){
            e.preventDefault();

            // Crear un objeto de fecha
            var fecha = new Date();
            // Formatear la fecha y la hora en el formato deseado: AAAA-MM-DD HH:MM:SS
            var fechaFormato = fecha.getFullYear() + '-' +
                ('0' + (fecha.getMonth() + 1)).slice(-2) + '-' +
                ('0' + fecha.getDate()).slice(-2) + ' ' +
                ('0' + fecha.getHours()).slice(-2) + ':' +
                ('0' + fecha.getMinutes()).slice(-2) + ':' +
                ('0' + fecha.getSeconds()).slice(-2);
            
                button.disabled = true;

            if (buttonSpinner) {
                 buttonSpinner.classList.remove('d-none');
            } else {
                console.error('buttonSpinner not found');
            }
           
            var formData = new FormData(this);
            var fecha = new Date();
            const password = formData.get('password');
            const passwordConfirmation = formData.get('password_confirmation');

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
            
            // if (!validarPassword(password)) {
            //     errorAlert.textContent = 'La contraseña no cumple con los requisitos mínimos.';
            //     errorAlert.classList.remove('d-none');
            //     buttonSpinner.classList.add('d-none');

            //     setTimeout(() => {
            //         errorAlert.classList.add('d-none'); // Ocultará el mensaje después de 5 segundos
            //         button.disabled = false;


            //     }, 3000);
            //     return; // Detiene la ejecución adicional del manejador
            // }
            // Agregar el campo usuFecRegistro con la fecha y hora formateada a FormData
            formData.append('usuFecRegistro', fechaFormato);
            formData.append('usuPatrocinador', 1);
            formData.append('rol_idRol', 1);
            formData.append('estado_idEstado', 1);
            for (var pair of formData.entries()) {
                console.log(pair[0]+ ', ' + pair[1]); 
            }

            fetch('/api/agregar_usuario_referido', { // Asegúrate de que esta URL sea correcta y accesible en tu aplicación
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
                    mensajeUserReferido.classList.remove('d-none');
                }
                // Cierra el modal después de un pequeño retraso para permitir que el usuario vea el mensaje
                setTimeout(function() {
                    successAlert.classList.add('d-none'); // Opcional: Oculta el alerta para el próximo uso
                    agregarUserReferidoForm.reset();
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


});


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
  // Deberías llamar a esta función cuando el usuario envíe el formulario o cuando quieras realizar la validación.
  