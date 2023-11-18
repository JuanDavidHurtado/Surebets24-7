document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.forEach((usu_cur, index) => {
            console.log(usu_cur);
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${usu_cur.usuDocumento}</td>
                <td>${usu_cur.usuNombre + " " + usu_cur.usuApellido}</td>
                <td>${"Fecha: " + usu_cur.pagFecha + "<br>Hash: " + usu_cur.pagHash}</td>
                <td>${usu_cur.curNombre + "<br>" + usu_cur.curValor} USD</td>
                <td>${usu_cur.usu_cur_estado}</td>
                <td> 
                <button class="badge bg-primary" onclick="actualizar('FINALIZADO', ${usu_cur.id_usu_cur})">Aceptar</button>
                <button class="badge bg-danger" onclick="actualizar('ANULADO', ${usu_cur.id_usu_cur})">Anular</button>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Utiliza la función fetch para realizar la petición fetch
    fetch('/api/pendiente_curso',
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
            if (data.length > 0) {
                originalData = data; // Almacena los datos originales
                fillTableWithData(data); // Llena la tabla con los datos originales

            } else {
                const noDataMessage = document.createElement('tr');
                noDataMessage.innerHTML = '<td colspan="7"><center>No hay cursos pendientes registrados en el sistema en este momento.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento input al campo de entrada para búsqueda en tiempo real
    const sponsorURLInput = document.getElementById('filterStartDoc');
    sponsorURLInput.addEventListener('input', function () {
        const inputText = sponsorURLInput.value.toLowerCase(); // Convertir a minúsculas para coincidencia no sensible a mayúsculas
        const filteredData = originalData.filter(usu_cur =>
            usu_cur.usuDocumento.toLowerCase().includes(inputText)
        );
        fillTableWithData(filteredData);
    });

    // Función para actualizar el método al hacer clic en los botones
    window.actualizar = function (nuevoEstado, id) {

        //alert(nuevoEstado+" "+idMetodo)
        const confirmacion = confirm('¿Está seguro de que desea realizar esta acción en el sistema?');

        if (confirmacion) {
            // Realiza una solicitud Fetch para actualizar el estado
            fetch('/api/est_cur', {
                method: 'PUT',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
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
