import { actualizarPaginacion,  cargarDatosOriginales} from "../paginacion/paginacion.js";


document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');



    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.data.forEach((usu_inv, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${usu_inv.inv_fecha_inicio}</td>
                <td><span class="badge bg-success">${usu_inv.inv_fecha_final}</span></td>
                <td>${usu_inv.inv_dias}</td>
                <td>${usu_inv.invNombre}</td>
                <td>${usu_inv.invValor} USD</td>
                <td>${usu_inv.invPorcentaje} %</td>
                <td><span class="badge ${usu_inv.usu_inv_estado === 'FINALIZADO' ? 'bg-success' : usu_inv.usu_inv_estado === 'ANULADO' ? 'bg-danger' : usu_inv.usu_inv_estado === 'EN PROCESO' ? 'bg-primary' : 'bg-warning'}">${usu_inv.usu_inv_estado}</span></td>
            `;
            tableBody.appendChild(row);
        });
        // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
        actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
            originalData = data; // Actualiza originalData con los nuevos datos de paginación
        });

    }

    async function restoreOriginalData() {
        var dataOriginal;
        if (originalData && originalData.links ) {
            const originalDataUrl = originalData.links.find(link => link.active).url;
            // Luego puedes usar esta URL en tu función cargarDatos si es necesario
            dataOriginal= await cargarDatosOriginales(originalDataUrl);      
        }   
        
        fillTableWithData(dataOriginal);
        }
    // Utiliza la función fetch para realizar la petición fetch
    var id = localStorage.getItem('id')
    fetch('/api/pro_usu/'+ id,
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
                originalData = data; // Almacena los datos originales
                fillTableWithData(data); // Llena la tabla con los datos originales
                // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
                actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
                    originalData = data; // Actualiza originalData con los nuevos datos de paginación
                });

            } else {
                const noDataMessage = document.createElement('tr');
                noDataMessage.innerHTML = '<td colspan="8"><center>No hay inversiones registrados en el sistema en este momento.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento de entrada al campo de búsqueda
    const filterStartDate = document.getElementById('filterStartDate');
    // filterStartDate.addEventListener('input', function () {
    //     const searchValue = filterStartDate.value.toLowerCase();
    //     const filteredData = originalData.data.filter(usu_inv =>
    //         usu_inv.inv_fecha_inicio.toLowerCase().includes(searchValue)
            
    //     );
    //     // Crear una copia de originalData y actualizar su propiedad 'data'
    // const updatedData = {...originalData, data: filteredData};
    //     fillTableWithData(updatedData);
    // });
    filterStartDate.addEventListener('input', function () {
        const searchValue = filterStartDate.value.toLowerCase();
        
        if (searchValue === '' || searchValue.trim() === '') {
            // Si el campo de búsqueda está vacío, restaura los datos originales
            restoreOriginalData();
          
        } else {
            // Realiza la búsqueda y muestra los resultados filtrados
            const filteredData = originalData.data.filter(usu_inv =>
            usu_inv.inv_fecha_inicio.toLowerCase().includes(searchValue)
            
            );
            const updatedData = { ...originalData, data: filteredData };
            fillTableWithData(updatedData);
        }

    });
});
