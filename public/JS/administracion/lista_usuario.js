document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');

    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.forEach((usuario, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${usuario.usuFecRegistro}</td>
                <td>${'Banco: ' + usuario.metBanco + '<br>Tipo: ' + usuario.metTipo + '<br>#: ' + usuario.metNumero}</td>
                <td>${usuario.rolNombre}</td>
                <td>${usuario.usuDocumento + "<br>" + usuario.usuNombre + ' ' + usuario.usuApellido}</td>
                <td>${usuario.usuCorreo + "<br>" + usuario.usuTelefono}</td>
                <td>${usuario.estNombre}</td>
                <td>
                ${usuario.estado_idEstado === 1
                    ? `<button class="badge bg-danger" onclick="actualizar(2, ${usuario.idUsuario})">Inactivar</button>`
                    : `<button class="badge bg-primary" onclick="actualizar(1, ${usuario.idUsuario})">Activar</button>`}
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Utiliza la función fetch para realizar la petición fecth
    fetch('/api/lis_usu',{ 
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${localStorage.getItem('token')}`,
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        }
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.length > 0) {
                originalData = data; // Almacena los datos originales
                fillTableWithData(data); // Llena la tabla con los datos originales

            } else {
                const noDataMessage = document.createElement('tr');
                noDataMessage.innerHTML = '<td colspan="8"><center>No hay usuarios registrados en el sistema en este momento.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento de entrada al campo de búsqueda
    const filterField = document.getElementById('filterStartDoc');
    filterField.addEventListener('input', function () {
        const searchValue = filterField.value.toLowerCase();
        const filteredData = originalData.filter(usuario =>
            (usuario.usuDocumento).toLowerCase().includes(searchValue)
        );
        fillTableWithData(filteredData);
    });


    // Función para actualizar el método al hacer clic en los botones
    window.actualizar = function (nuevoEstado, id) {

        //alert(nuevoEstado+" "+idMetodo)
        const confirmacion = confirm('¿Está seguro de que desea realizar esta acción en el sistema?');

        if (confirmacion) {
            // Realiza una solicitud Fetch para actualizar el estado
            fetch('/api/est_usu', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id: id,
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
                        alert(data.message);
                        location.reload();
                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        const Message = 'Error: Ocurrió un problema al procesar la solicitud';
                        alert(Message);
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error al actualizar el estado del método: ', error);
                    // Maneja los errores, como problemas de red o del servidor
                    const Message = 'Error al enviar el formulario';
                    alert(Message);
                    location.reload();
                    console.error('Error al enviar el formulario: ' + error);
                });
        }
    };
});