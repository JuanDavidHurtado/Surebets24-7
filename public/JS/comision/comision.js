document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.forEach((comision, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${comision.inv_fecha_inicio}</td>
                <td>${comision.usuNombre + ' ' + comision.usuApellido}</td>
                <td>${comision.invNombre + ' ' + comision.invValor}</td>
                <td>${comision.comValor} USD</td>
                <td>${comision.invPorcentajeComision} %</td>
                <td><span class="badge ${comision.comEstado === 'FINALIZADO' ? 'bg-success' : 'bg-primary'}">${comision.comEstado}</span></td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Utiliza la función fetch para realizar la petición fetch
    fetch('/api/lista_comision',
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
        const filteredData = originalData.filter(comision =>
            (comision.usuNombre + ' ' + comision.usuApellido).toLowerCase().includes(searchValue)
        );
        fillTableWithData(filteredData);
    });
});
