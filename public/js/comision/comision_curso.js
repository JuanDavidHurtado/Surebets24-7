import { actualizarPaginacion, cargarDatosOriginales } from "../paginacion/paginacion.js";

document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');

    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.data.forEach((comision, index) => {

            const row = document.createElement('tr');
            row.innerHTML = `
            <td>${index + 1}</td>
            <td>${comision.cur_fecha}</td>
            <td>${comision.usuNombre + ' ' + comision.usuApellido}</td>
            <td>${comision.curNombre + ' ' + comision.curValor} USDT</td>
            <td>${comision.comValor} USDT</td>
            <td>${comision.curComision} %</td>
            <td><span class="badge ${comision.comEstado === 'FINALIZADO' ? 'bg-success' : 'bg-primary'}">${comision.comEstado}</span></td>
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

    var idUsuario = localStorage.getItem('id')

    fetch('/api/lista_comision_curso/' + idUsuario,
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
                noDataMessage.innerHTML = '<td colspan="7"><center>No hay comisiones registrados en el sistema en este momento.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento de entrada al campo de búsqueda
    const filterStartDate = document.getElementById('filterStartName');

    filterStartDate.addEventListener('input', function () {
        const searchValue = filterStartDate.value.toLowerCase();

        if (searchValue === '' || searchValue.trim() === '') {
            // Si el campo de búsqueda está vacío, restaura los datos originales
            restoreOriginalData();

        } else {
            // Realiza la búsqueda y muestra los resultados filtrados
            /*const filteredData = originalData.data.filter(comision =>
                (comision.usuNombre + ' ' + comision.usuApellido).toLowerCase().includes(searchValue)
            );
            const updatedData = { ...originalData, data: filteredData };
            fillTableWithData(updatedData);*/


            if (originalData && originalData.data) { // Asegura que originalData y originalData.data estén definidos

                const filteredData = originalData.data.filter(comision =>
                    (comision.usuNombre + ' ' + comision.usuApellido).toLowerCase().includes(searchValue)
                );
                const updatedData = { ...originalData, data: filteredData };
                fillTableWithData(updatedData);
            }
        }
    });
});



