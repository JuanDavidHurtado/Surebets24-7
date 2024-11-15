import { actualizarPaginacion, cargarDatosOriginales } from "../paginacion/paginacion.js";

document.addEventListener('DOMContentLoaded', function () {

    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.data.forEach((usu_pun, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
            <td>${index + 1}</td>
            <td>${usu_pun.his_pun_fecha}</td>
            <td>${usu_pun.his_pun_puntos}</td>
            <td>${usu_pun.his_pun_descripcion}</td>`;
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

    // Utiliza la función fetch para realizar la petición fecth
    fetch('/api/his_pun/' + idUsuario,
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
                noDataMessage.innerHTML = '<td colspan="4"><center>No hay registro de puntos ganados por el usuario.</center></td>';

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
            // Realiza la búsqueda y muestra los resultados filtrados
            /*const filteredData = originalData.data.filter(usu_pun =>
                usu_pun.his_pun_fecha.toLowerCase().includes(searchValue)
            );
            const updatedData = { ...originalData, data: filteredData };
            fillTableWithData(updatedData);*/

            if (originalData && originalData.data) { // Asegura que originalData y originalData.data estén definidos

                const filteredData = originalData.data.filter(usu_pun =>
                    usu_pun.his_pun_fecha.toLowerCase().includes(searchValue)
                );
                const updatedData = { ...originalData, data: filteredData };
                fillTableWithData(updatedData);
            }
        }

    });
});
