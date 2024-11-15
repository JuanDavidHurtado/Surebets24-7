import { actualizarPaginacion, cargarDatosOriginales } from "../paginacion/paginacion.js";

document.addEventListener('DOMContentLoaded', function () {

    // Obtener la URL actual y eliminar cualquier barra final con .replace()
    var currentUrl = window.location.pathname.replace(/\/$/, '');
    // Dividir la URL en partes usando '/' como separador
    var urlParts = currentUrl.split('/');
    // Obtener el último segmento de la URL, que debería ser el ID
    var id_inv = urlParts[urlParts.length - 1];


    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');

    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.data.forEach((usu_ant, index) => {

            const row = document.createElement('tr');
            const estadoText = usu_ant.status === 'pending' ? 'Pendiente' : usu_ant.status === 'paid' ? 'Pagado' : 'Desconocido';

            /*row.innerHTML = `
                <td>${index + 1}</td>
                <td>${usu_ant.usu_pag_fecha}</td>
                <td>${usu_ant.usu_pag_monto}</td>
                <td>
                <span class="badge ${usu_ant.usu_pag_estado === 'REALIZADO' ? 'bg-success' : usu_ant.usu_pag_estado === 'ANULADO' ? 'bg-danger' : usu_ant.usu_pag_estado === 'PENDIENTE' ? 'bg-primary' : 'bg-warning'}">
                ${usu_ant.usu_pag_estado}</span>
                </td>
                `;*/
            row.innerHTML = `
                <td>${usu_ant.payment_number}</td>
                <td>${usu_ant.payment_date}</td>
                <td>${usu_ant.amount} USDT</td>
                <td>
                <span class="badge ${usu_ant.status === 'pending' ? 'bg-danger' : 'bg-primary'}">
                ${estadoText}</span>
                </td>
                `;
            tableBody.appendChild(row);
        });
        // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
        actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
            originalData = data; // Actualiza originalData con los nuevos datos de paginación
        });
    }

    async function restoreOriginalData() {
        /*var dataOriginal;
        if (originalData && originalData.links) {
            const originalDataUrl = originalData.links.find(link => link.active).url;
            // Luego puedes usar esta URL en tu función cargarDatos si es necesario
            dataOriginal = await cargarDatosOriginales(originalDataUrl);
        }

        fillTableWithData(dataOriginal);*/


        if (originalData && originalData.links) {
            const originalDataUrl = originalData.links.find(link => link.active).url;
            const dataOriginal = await cargarDatosOriginales(originalDataUrl);
            fillTableWithData(dataOriginal);
        }
    }
    // Obtener la URL actual
    var currentUrl = window.location.pathname;
    // Dividir la URL en partes usando '/' como separador
    var urlParts = currentUrl.split('/');
    // Obtener el último segmento de la URL, que debería ser el ID
    var id = urlParts[urlParts.length - 1];

    fetch('/api/ade_usu/' + id_inv,
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

            //console.log(data);
            if (data.data.length > 0) {
                originalData = data; // Almacena los datos originales
                fillTableWithData(data); // Llena la tabla con los datos originales
                // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
                actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
                    originalData = data; // Actualiza originalData con los nuevos datos de paginación
                });

            } else {
                const noDataMessage = document.createElement('tr');
                noDataMessage.innerHTML = '<td colspan="4"><center>No hay datos para mostrar.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento de entrada al campo de búsqueda
    const filterStartDate = document.getElementById('filterStartDate');

    filterStartDate.addEventListener('input', function () {
        const searchValue = filterStartDate.value.toLowerCase();

        if (searchValue === '' || searchValue.trim() === '') {
            // Si el campo de búsqueda está vacío, restaura los datos originales
            restoreOriginalData();

        } else {
            // Realiza la búsqueda y muestra los resultados filtrados
            /*const filteredData = originalData.data.filter(usu_ade =>
                usu_ade.usu_pag_fecha.toLowerCase().includes(searchValue)

            );
            const updatedData = { ...originalData, data: filteredData };
            fillTableWithData(updatedData);*/

            if (originalData && originalData.data) { // Asegura que originalData y originalData.data estén definidos

                const filteredData = originalData.data.filter(usu_ade =>
                    usu_ade.usu_pag_fecha.toLowerCase().includes(searchValue)
                );
                const updatedData = { ...originalData, data: filteredData };
                fillTableWithData(updatedData);
            }
        }
    });
});
