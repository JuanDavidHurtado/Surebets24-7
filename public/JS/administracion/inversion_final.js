document.addEventListener('DOMContentLoaded', function() {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.forEach((usu_inv, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
            <td>${index + 1}</td>
            <td>${"Fec. Inicial: "+ usu_inv.inv_fecha_inicio +"<br>Fec. Final: <span class='bg-primary'>"+ usu_inv.inv_fecha_final}</span></td>
            <td>${usu_inv.inv_dias}</td>
            <td>${usu_inv.usuDocumento+"<br>"+usu_inv.usuNombre +" "+ usu_inv.usuApellido}</span></td>
            <td>${'Banco: '+usu_inv.metBanco + '<br>Tipo: ' +usu_inv.metTipo + '<br>#: ' + usu_inv.metNumero}</td>
            <td>${usu_inv.invNombre +"<br>"+usu_inv.invValor} USD</td>
            <td>${usu_inv.usu_inv_estado}</td>
            <td>
            <button class="badge bg-primary" onclick="actualizar('FINALIZADO', ${usu_inv.id_usu_inv})">Finalizar Inversion</button>
            </td>

        `;
            tableBody.appendChild(row);
        });
    }

    // Utiliza la función fetch para realizar la petición fetch
    fetch('/api/lis_inv')
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
                noDataMessage.innerHTML = '<td colspan="8"><center>No hay inversiones pendientes por finalizar registrados en el sistema en este momento.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento de entrada al campo de búsqueda
    const filterStartDate = document.getElementById('filterStartDate');
    filterStartDate.addEventListener('input', function() {
        const searchValue = filterStartDate.value.toLowerCase();
        const filteredData = originalData.filter(usu_inv =>
            usu_inv.inv_fecha_final.toLowerCase().includes(searchValue)
        );
        fillTableWithData(filteredData);
    });

    // Función para actualizar el método al hacer clic en los botones
    window.actualizar = function(nuevoEstado, id) {

        //alert(nuevoEstado+" "+idMetodo)
        const confirmacion = confirm('¿Está seguro de que desea realizar esta acción en el sistema?');

        if (confirmacion) {
            // Realiza una solicitud Fetch para actualizar el estado
            fetch('/api/est_inv', {
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