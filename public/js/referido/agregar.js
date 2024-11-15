document.addEventListener('DOMContentLoaded', function () {
    var usuInvMjs = document.getElementById('usuInvAlert');
    let idUsr = localStorage.getItem('id');
    fetch('/api/pro_usu/' + idUsr,
        {
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
                throw new Error('Network response was not ok ' + response.statusText);

            }
            return response.json();
        })
        .then(data => {
            if (data.data.length > 0) {
                submitAgregarUserReferidoForm();
            } else {
                displayInvitationAlert();
            }

        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    function displayInvitationAlert() {
        const usuInvAlert = document.getElementById('usuInvAlert');
        if (usuInvAlert) {
            usuInvAlert.innerHTML = ' Por favor realice una inversión para poder referir a otro usuario';
            usuInvAlert.classList.remove("d-none");
        }
    }

    function displayMsjCheckboxReferido() {
        var msjCheckboxReferido = document.getElementById('msjCheckboxReferido');
        if (msjCheckboxReferido) {
            msjCheckboxReferido.innerHTML = 'No tiene posiciones disponibles';
            msjCheckboxReferido.classList.remove('d-none')
        }

    }

    function submitAgregarUserReferidoForm() {
        var agregarUserReferidoForm = document.querySelector("#agregarUserReferidoForm");
        var buttonPosicionUsr = document.getElementById('buttonUsrPosicion');

        if (buttonPosicionUsr) {
            // buttonPosicionUsr.addEventListener('click', function () {
            idPatrocinador = localStorage.getItem('id')
            // Configurar el cuerpo de la solicitud

            fetch(`/api/buscar_posicion_ref/${idPatrocinador}`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                // body: JSON.stringify(requestBody)    
            }).then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
                .then(data => {

                    //console.log(data);
                    // Manejar la respuesta

                    var posicionesDisponibles = data.posiciones_disponibles;
                    var posicionesDisponiblesElement = document.getElementById('posicionesDisponibles');
                    if (posicionesDisponibles.length > 0) {
                        msjCheckboxReferido.classList.add('msjCheckboxReferido');
                        posicionesDisponiblesElement.innerHTML = '';

                        // Mostrar checkbox para cada posición disponible
                        posicionesDisponibles.forEach(function (posicion) {

                            var checkboxContainer = document.createElement('div');
                            checkboxContainer.classList.add('checkbox-container-nodo'); // Agrega la clase para aplicar estilos
                            var checkbox = document.createElement('input');
                            checkbox.type = 'checkbox';
                            checkbox.name = 'posicion_disponible';
                            checkbox.value = `${posicion.nivel}:${posicion.posicion}:${posicion.userInvId}:${posicion.usuNombre}`;
                            // Agregar evento de clic para actualizar el campo oculto
                            checkbox.addEventListener('click', function () {
                                // Desmarcar los otros checkboxes cuando se selecciona uno nuevo
                                var checkboxes = document.getElementsByName('posicion_disponible');
                                checkboxes.forEach(function (cb) {
                                    if (cb !== checkbox) {
                                        cb.checked = false;
                                    }
                                });

                            });

                           // console.log(posicion);

                            document.getElementById("posicionesDisponibles").appendChild(checkbox);
                            var label = document.createElement('label');
                            label.style.marginBottom = '0px';
                            label.appendChild(document.createTextNode(` ${posicion.usuLogin}-${posicion.posicion.substring(0, 3)} (Nivel ${posicion.nivel})`));
                            //label.appendChild(document.createTextNode(` ${posicion.usuNombre}-${posicion.posicion} (Nivel ${posicion.nivel})`));
                            checkboxContainer.appendChild(checkbox);
                            checkboxContainer.appendChild(label);
                            posicionesDisponiblesElement.appendChild(checkboxContainer);
                        });

                    } else {
                        displayMsjCheckboxReferido()
                    }



                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });
            // });

        }

        if (agregarUserReferidoForm) {
            var button = agregarUserReferidoForm.querySelector('button[type="submit"]');
            var buttonSpinner = document.getElementById('buttonUsrReferidoSpinner');
            var errorAlert = document.getElementById('errorAlert');

            agregarUserReferidoForm.addEventListener('submit', function (e) {


                e.preventDefault();

                button.disabled = true;

                if (buttonSpinner) {
                    buttonSpinner.classList.remove('d-none');
                } else {
                    console.error('buttonSpinner not found');
                }

                var formData = new FormData(this);
                var camposVacios = [];

                // Validar los campos
                formData.forEach((value, key) => {
                    console.log(key + ': ' + value);
                    if (!value) {
                        console.log("value", value)
                        camposVacios.push(key);
                    }
                });

                if (!formData.get('posicion_disponible')) {
                    buttonSpinner.classList.add('d-none');
                    errorAlert.textContent = 'Por favor seleccione la  posicion del usuario referido';
                    errorAlert.classList.remove('d-none');
                    setTimeout(() => {
                        errorAlert.classList.add('d-none'); // Ocultará el mensaje después de 5 segundos
                        button.disabled = false;

                    }, 3000);
                    return;

                }

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

                // Agregar el campo usuFecRegistro con la fecha y hora formateada a FormData
                idProtrocinador = localStorage.getItem('id')
                formData.append('patrocinador', idProtrocinador);

                var tiempoMinimoVisualizacion = 2000;

                // Mostrar el spinner mientras se procesa la solicitud
                document.getElementById('loading').style.display = 'block';

                setTimeout(function () {
                    fetch('/api/registro_usuario_ref', {
                        method: 'POST',
                        headers: {
                            'Authorization': `Bearer ${localStorage.getItem('token')}`,
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: formData
                    })
                        .then(response => {
                            if (!response.ok) {
                                errorAlert.textContent = 'Error en la solicitud al servidor ';
                                errorAlert.classList.remove('d-none');
                                setTimeout(function () {
                                    errorAlert.classList.add('d-none'); // Opcional: Oculta el alerta para el próximo uso
                                    // Limpia el valor del campo de entrada del nombre
                                }, 3000);
                                button.disabled = false;

                                throw new Error('Server responded with a status: ' + response.status);

                            }
                            return response.json();
                        })
                        .then(data => {

                            // Ocultar el spinner después de recibir la respuesta
                            document.getElementById('loading').style.display = 'none';

                            if (data.message) {
                                successAlert.textContent = data.message;
                                alert(data.message);

                            }

                            if (data.alertMsj) {
                                console.log("data alert ", data.alertMsj);
                                if (msjReferidoAlert) {
                                    msjReferidoAlert.innerHTML = data.alertMsj;
                                    msjReferidoAlert.classList.remove('d-none');
                                }

                            }
                            // Cierra el modal después de un pequeño retraso para permitir que el usuario vea el mensaje
                            setTimeout(function () {
                                successAlert.classList.add('d-none'); // Opcional: Oculta el alerta para el próximo uso
                                agregarUserReferidoForm.reset();
                                button.disabled = false;
                                location.reload();


                            }, 2000);

                        })
                        .catch(error => {
                            errorAlert.textContent = 'Error: ' + error.message;
                            errorAlert.classList.remove('d-none');
                            location.reload();

                        })
                        .finally(() => {
                            button.disabled = false;
                            buttonSpinner.classList.add('d-none');
                        });
                }, tiempoMinimoVisualizacion);
            });
        }

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
