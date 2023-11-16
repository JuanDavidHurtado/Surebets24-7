document.addEventListener('DOMContentLoaded', function () {

    // Realizar la solicitud Fetch a tu API en api.php
    fetch(`/api/mi_perfil`)
        .then(response => {
            if (!response.ok) {
                // Si la respuesta no es 200 OK, lanza un error
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            // Autocompletar los campos con los datos obtenidos
            document.getElementById('nombre').value = data.usuario.usuNombre;
            document.getElementById('apellido').value = data.usuario.usuApellido;
            document.getElementById('telefono').value = data.usuario.usuTelefono;
            document.getElementById('correo').value = data.usuario.usuCorreo;
            document.getElementById('login').value = data.usuario.usuLogin;
            document.getElementById('documento').value = data.usuario.usuDocumento;
            document.getElementById('direccion').value = data.usuario.usuDireccion;
            //
            document.getElementById('miSpanLv').textContent = data.usuario.rolDescripcion;
            document.getElementById('fecha_union').textContent = 'Se Union En ' + data.usuario.usuFecRegistro;
            document.getElementById('usu_login').textContent = data.usuario.usuLogin;
            document.getElementById('usu_nom').textContent = data.usuario.usuNombre + ' ' + data.usuario.usuApellido;

            // Mostrar la imagen del usuario
            if (data.usuario.imgArchivo) {
                const imagenUsuario = document.getElementById('frame');
                imagenUsuario.src = `data:image/jpeg;base64, ${data.usuario.imgArchivo}`;

                // Ocultar el elemento "Elige imagen"
                const selectFileElement = document.querySelector('.select-file');
                selectFileElement.style.display = 'none';
            }
        })
        .catch(error => {
            console.error('Error fetching data: ' + error);
        });

    const form_2 = document.getElementById('form_2');

    form_2.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        const documento = document.getElementById('documento').value;
        const nombre = document.getElementById('nombre').value;
        const apellido = document.getElementById('apellido').value;
        const login = document.getElementById('login').value;
        const correo = document.getElementById('correo').value;
        const telefono = document.getElementById('telefono').value;
        const direccion = document.getElementById('direccion').value;

        if (documento === '' || nombre === '' || apellido === '' || login === '' || correo === '' || telefono === '' || direccion === '') {
            // Verifica si algún campo está vacío y muestra un mensaje de error
            alert('Todos los campos son obligatorios. Por favor, complete todo el formulario.');
        } else {

            // Recolecta los datos del formulario
            const formData = new FormData(form_2);

            // Realizar una solicitud Fetch para actualizar el usuario
            fetch('/api/actualizar_perfil', {
                method: 'PUT', // Mantener el método PUT
                body: JSON.stringify(Object.fromEntries(formData)), // Convierte FormData a un objeto y luego a JSON
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    // Actualizar la tabla o realizar otras acciones según la respuesta
                    if (data.status === 200) {
                        const Message = data.message;
                        alert(Message)
                        location.reload();
                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                        alert(Message)
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error al actualizar el estado del método: ', error);
                    // Maneja los errores, como problemas de red o del servidor
                    const Message = 'Error al enviar el formulario';
                    alert(Message)
                    location.reload();
                    console.error('Error al enviar el formulario: ' + error);


                });
        }
    });

    const form_3 = document.getElementById('form_3');

    form_3.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        const actualClave = document.getElementById('actual_clave').value;
        const nuevaClave = document.getElementById('clave').value;
        const claveConf = document.getElementById('clave_conf').value;

        if (actualClave === '' || nuevaClave === '' || claveConf === '') {
            // Verifica si algún campo está vacío y muestra un mensaje de error
            alert('Todos los campos son obligatorios. Por favor, complete todo el formulario.');
        } else if (nuevaClave !== claveConf) {
            // Verifica si las contraseñas no coinciden y muestra un mensaje de error
            alert('Las contraseñas no coinciden. Por favor, asegúrese de que las contraseñas coincidan.');
        } else {

            // Recolecta los datos del formulario
            const formData = new FormData(form_3);

            // Realizar una solicitud Fetch para actualizar el usuario
            fetch('/api/act_cont', {
                method: 'PUT', // Mantener el método PUT
                body: JSON.stringify(Object.fromEntries(formData)), // Convierte FormData a un objeto y luego a JSON
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    // Actualizar la tabla o realizar otras acciones según la respuesta
                    if (data.status === 200) {
                        const Message = data.message;
                        alert(Message)
                        location.reload();
                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                        alert(Message)
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error al actualizar el estado del método: ', error);
                    // Maneja los errores, como problemas de red o del servidor
                    const Message = 'Error al enviar el formulario';
                    alert(Message)
                    location.reload();
                    console.error('Error al enviar el formulario: ' + error);


                });
        }
    });

    const form_1 = document.getElementById('form_1');

    form_1.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        const inputElement = document.getElementById('imagen');
        const selectedFile = inputElement.files[0];

        if (!selectedFile) {
            alert('Selecciona un archivo antes de enviar.')
            console.error('Selecciona un archivo antes de enviar.');
            return;
        }

        // Crea un objeto FormData y agrega el archivo a él
        const formData = new FormData();
        formData.append('imagen', selectedFile);

        // Realizar una solicitud Fetch para actualizar la imagen del usuario
        fetch('/api/act_img', {
            method: 'POST',
            body: formData,
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('La respuesta de la red no fue exitosa: ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                // Actualizar la tabla o realizar otras acciones según la respuesta
                if (data.status === 200) {
                    const Message = data.message;
                    alert(Message)
                    location.reload();
                } else {
                    const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                    alert(Message)
                    location.reload();
                }
            })
            .catch(error => {
                console.error('Error al actualizar la imagen del usuario: ', error);
                const Message = 'Error al enviar el formulario';
                alert(Message)
                location.reload();
                console.error('Error al enviar el formulario: ' + error);
            });
    });

});
