document.addEventListener('DOMContentLoaded', function () {

    var id = localStorage.getItem('id');


    const form = document.getElementById('myForm');
   
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

         // Deshabilita el botón de envío para evitar múltiples envíos
        var button = this.querySelector('button[type="submit"]');
        button.disabled = true;

        // Recolecta los datos del formulario
        const formData = new FormData(form);

        formData.append('id', id)

        // Realiza una solicitud Fetch a una URL específica
        fetch('/api/agregar_metodo', {
            method: 'POST', // O el método que necesites
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
            },
            body: formData
        })
            .then(response => response.json())
            .then(data => {


                if (data.status === 201) {
                    const Message = data.message;
                    alert(Message)
                    button.disabled = false;
                    location.reload();
                } else {
                    // Muestra un mensaje de error en el mensajeContainer
                    const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                    alert(Message)
                    button.disabled = false;
                    // Recargar la página actual
                    location.reload();


                }
            })
            .catch(error => {
                // Maneja los errores, como problemas de red o del servidor
                const Message = 'Error al enviar el formulario';
                alert(Message)
                location.reload();
                console.error('Error al enviar el formulario: ' + error);
            }).finally(() => {
                button.disabled = false; // Habilitar el botón
            });
    });

    const mensajeContainer = document.querySelector('.mensaje-container');
    const contenidoTabla = document.querySelector('#tabla-contenido tbody');




    // Realizar la solicitud Fetch a tu API en api.php
    fetch(`/api/lista_metodo/` + id,
        {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }

        })
        .then(response => {
            if (!response.ok) {
                // Si la respuesta no es 200 OK, lanza un error
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.length > 0) {
                // Mostrar mensaje en espera
                //alert("Mayor a cero")
                mensajeContainer.style.display = 'block'; // Mostrar mensaje
                form.style.display = 'none'; // Ocultar el formulario
                data.forEach(metodoPago => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
            <td>${metodoPago.metTitular}</td>
            <td>${metodoPago.metBanco}</td>
            <td>${metodoPago.metTipo}</td>
            <td>${metodoPago.metNumero}</td>
            <td>${metodoPago.metDocumento}</td>
            <td><button class="badge bg-danger anular-metodo" data-id="${metodoPago.idMetodo}">Anular</button></td>
        `;
                    contenidoTabla.appendChild(row);
                });
            } else {
                const noDataMessage = document.createElement('tr');
                noDataMessage.innerHTML = '<td colspan="6"><center>No hay métodos de pago registrados en el sistema.</center></td>';
                contenidoTabla.appendChild(noDataMessage);
                mensajeContainer.style.display = 'none'; // Ocultar mensaje
                form.style.display = 'block'; // Mostrar el formulario

            }

        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });


    // Agregar un manejador de eventos para los botones "Anular"
    contenidoTabla.addEventListener('click', function (event) {
        if (event.target.classList.contains('anular-metodo')) {
            const button = event.target;
            const idMetodo = button.getAttribute('data-id');
            const nuevoEstado = 'INACTIVO'; // Estado que deseas establecer

            const confirmacion = confirm('¿Está seguro de que desea anular el metodo de pago?');

            if (confirmacion) {
                // Realiza una solicitud Fetch para actualizar el estado
                fetch('/api/actualizar_metodo', {
                    method: 'PUT',
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`,
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        id: idMetodo,
                        estado: nuevoEstado
                    }),
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok ' + response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Actualiza la tabla o realiza otras acciones según la respuesta
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
        }
    });
});