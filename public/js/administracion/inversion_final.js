import { actualizarPaginacion, cargarDatosOriginales } from "../paginacion/paginacion.js";


document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        //console.log(data.data);
        data.data.forEach((usu_inv, index) => {

            const row = document.createElement('tr');
            row.innerHTML = `
            <td>${"Inicial: " + usu_inv.inv_fecha_inicio + "<br>Final: <span class='bg-primary'>" + usu_inv.inv_fecha_final}</span></td>
            <td>${usu_inv.usuDocumento + "<br>" + usu_inv.usuNombre + " " + usu_inv.usuApellido}</span></td>
            <td>
                <span data-toggle="tooltip" title="Tipo: ${usu_inv.metTipo}, Número: ${usu_inv.metNumero}">
                    Banco: ${usu_inv.metBanco}
                </span>
            </td>
            <td>
                <span data-toggle="tooltip" title="Valor: ${usu_inv.invValor} USDT, Tiempo: ${usu_inv.inv_dias} dia(s)">
                    ${usu_inv.invNombre}
                </span>
            </td>
            <td>
                ${usu_inv.usu_inv_estado === 'EN PROCESO'
                    ? `<button class="badge bg-primary" data-id="${usu_inv.id_usu_inv}" data-bs-toggle="modal" data-bs-target="#infoModal">Ver Información</button>`
                    : usu_inv.usu_inv_estado}
            </td>
            <td>
                <span class="badge ${usu_inv.usu_inv_estado === 'EN PROCESO' ? 'bg-success' : 'bg-primary'}">
                    ${usu_inv.usu_inv_estado}
                </span>
            </td>
            `;
            /*<td>
            <button class="badge bg-primary" onclick="actualizar('FINALIZADO', ${usu_inv.id_usu_inv})">Finalizar</button>
            </td>*/

            tableBody.appendChild(row);
        });

        // Inicializa los tooltips nuevamente
        $('[data-toggle="tooltip"]').tooltip();

        // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
        actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
            originalData = data; // Actualiza originalData con los nuevos datos de paginación
        });
    }


    async function restoreOriginalData() {


        if (originalData && originalData.links) {
            const originalDataUrl = originalData.links.find(link => link.active).url;
            const dataOriginal = await cargarDatosOriginales(originalDataUrl);
            fillTableWithData(dataOriginal);
        }
    }


    // Utiliza la función fetch para realizar la petición fecth
    fetch('/api/lis_inv',
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
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {

            if (data.data.length > 0) {
                originalData = data; // Almacena los datos originales
                fillTableWithData(data); // Llena la tabla con los datos originales
                // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
                actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
                    originalData = data; // Actualiza originalData con los nuevos datos de paginación
                });
            } else {
                const noDataMessage = document.createElement('tr');
                noDataMessage.innerHTML = '<td colspan="8"><center>No hay datos para mostrar.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });


    // Agrega un evento de entrada al campo de búsqueda
    const filterField = document.getElementById('filterStartName');

    filterField.addEventListener('input', function () {
        const searchValue = filterField.value.toLowerCase();

        if (searchValue === '' || searchValue.trim() === '') {
            // Si el campo de búsqueda está vacío, restaura los datos originales
            restoreOriginalData();

        } else {


            if (originalData && originalData.data) { // Asegura que originalData y originalData.data estén definidos

                const filteredData = originalData.data.filter(usu_inv =>
                    usu_inv.usuDocumento.toLowerCase().includes(searchValue)
                );
                const updatedData = { ...originalData, data: filteredData };
                fillTableWithData(updatedData);
            }
        }

    });

    // Función para actualizar el método al hacer clic en los botones
    window.actualizar = function (nuevoEstado, id) {
        //alert(nuevoEstado + " " + id)
        //return;
        const confirmacion = confirm('¿Está seguro de que desea realizar esta acción en el sistema?');

        var tiempoMinimoVisualizacion = 2000;


        if (confirmacion) {

            // Mostrar el spinner mientras se procesa la solicitud
            document.getElementById('loading').style.display = 'block';

            setTimeout(function () {

                // Realiza una solicitud Fetch para actualizar el estado
                fetch('/api/est_inv_fin', {
                    method: 'PUT',
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`,
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
                        // Ocultar el spinner después de recibir la respuesta
                        document.getElementById('loading').style.display = 'none';
                        // Actualiza la tabla o realiza otras acciones según la respuesta
                        if (data.status === 200) {
                            alert(data.message);
                            location.reload();
                        } else if (data.status === 201) {

                            alert(data.message);

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
            }, tiempoMinimoVisualizacion);
        }
    };

    // Mantén el evento de apertura del modal para cargar los datos
    $('#infoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id'); // Extraer id

        cargarDatosModal(id); // Llama a la función para cargar los datos
    });

    function cargarDatosModal(id) {
        // Cargar los datos del modal nuevamente
        fetch(`/api/obt_pag_men/${id}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
        })
            .then(response => response.json())
            .then(data => {
                const modalContent = document.getElementById('modalContent');
                if (data && data.length > 0) {
                    let paymentDetails = `
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Pago ID</th>
                                    <th>Monto</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                    `;

                    let ultimoPagoPendiente = data.findIndex(payment => payment.status === 'pending');

                    paymentDetails += data.map((payment, index) => `
                        <tr>
                            <td>${payment.payment_number}</td>
                            <td>${payment.amount} USDT</td>
                            <td>${payment.payment_date}</td>
                            <td>
                            ${payment.status === 'paid'
                            ? `<span class="badge bg-success">Realizado</span>`
                            : index === ultimoPagoPendiente
                                ? `<button class="btn btn-primary" onclick="actualizar_pago('paid', ${payment.id_pag_inv}, ${id})">Pagar</button>`
                                : `<span class="badge bg-warning">Pendiente</span>`
                            }    
                            </td>
                        </tr>
                    `).join('');

                    paymentDetails += `
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-center">
                                    <button class="btn btn-primary" onclick="actualizar('FINALIZADO', ${id})">Finalizar</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    `;

                    modalContent.innerHTML = paymentDetails;
                } else {
                    modalContent.innerHTML = 'No se encontraron pagos para este ID.';
                }
            })
            .catch(error => {
                const modalContent = document.getElementById('modalContent');
                modalContent.innerHTML = 'Error al obtener la información.';
                console.error('Error:', error);
            });
    }


    /*$('#infoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Botón que activó el modal
        var id = button.data('id'); // Extraer id

        var modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = 'Cargando...'; // Mostrar mensaje de carga

        fetch(`/api/obt_pag_men/${id}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`, // Token de autenticación
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data && data.length > 0) {
                    let paymentDetails = `
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Pago ID</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                `;

                    // Encontrar el índice del último pago pendiente
                    let ultimoPagoPendiente = data.findIndex(payment => payment.status === 'pending');

                    // Generar la tabla de pagos
                    paymentDetails += data.map((payment, index) => `
                    <tr>
                        <td>${payment.payment_number}</td>
                        <td>${payment.amount} USDT</td>
                        <td>${payment.payment_date}</td>
                        <td>
                            ${payment.status === 'paid'
                            ? `<span class="badge bg-success">Realizado</span>`
                            : index === ultimoPagoPendiente
                                ? `<button class="btn btn-primary" onclick="window.actualizar_pago('paid', ${payment.id_pag_inv})">Pagar</button>`
                                : `<span class="badge bg-warning">Pendiente</span>`
                        }
                        </td>
                    </tr>
                `).join('');

                    // Agregar el pie de página con el botón "Finalizar"
                    paymentDetails += `
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-center">
                                <button class="btn btn-primary" onclick="actualizar('FINALIZADO',${id})">Finalizar</button>
                            </td>
                        </tr>
                    </tfoot>
                    </table>
                `;

                    modalContent.innerHTML = paymentDetails;
                } else {
                    modalContent.innerHTML = 'No se encontraron pagos para este ID.';
                }

            })
            .catch(error => {
                modalContent.innerHTML = 'Error al obtener la información.';
                console.error('Error:', error);
            });
    });*/



    window.actualizar_pago = function (nuevoEstado, id_pag_men, id_inv) {
        const confirmacion = confirm('¿Está seguro de que desea realizar esta acción en el sistema?');

        if (confirmacion) {
            // Mostrar el spinner mientras se procesa la solicitud
            document.getElementById('loading').style.display = 'block';

            // Realiza una solicitud Fetch para actualizar el estado
            fetch('/api/est_pag', {  // Asegúrate de que esta URL es la correcta
                method: 'PUT',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id: id_pag_men,
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
                    // Ocultar el spinner después de recibir la respuesta
                    document.getElementById('loading').style.display = 'none';

                    // Actualiza la tabla o realiza otras acciones según la respuesta
                    if (data.status === 200) {
                        alert(data.message);
                        cargarDatosModal(id_inv);

                        //location.reload(); // Recargar la página para reflejar los cambios
                    } else {
                        // Muestra un mensaje de error en el mensajeContainer
                        alert('Error: Ocurrió un problema al procesar la solicitud');
                        //location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error al actualizar el estado del pago: ', error);
                    alert('Error al enviar la solicitud de actualización');
                    document.getElementById('loading').style.display = 'none'; // Asegurarse de ocultar el spinner
                });
        }
    };

});


