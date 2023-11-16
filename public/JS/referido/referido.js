document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.forEach((referido, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${referido.usuFecRegistro}</td>
                <td>${referido.rolNombre}</td>
                <td>${referido.usuNombre + ' ' + referido.usuApellido}</td>
                <td>${referido.usuCorreo}</td>
                <td>${referido.usuTelefono}</td>
                <td><span class="badge ${referido.estNombre === 'ACTIVO' ? 'bg-success' : 'bg-danger'}">${referido.estNombre}</span></td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Utiliza la función fetch para realizar la petición fecth
    fetch('/api/lista_referido')
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
                noDataMessage.innerHTML = '<td colspan="7"><center>No hay registro de referidos en el sistema en este momento.</center></td>';
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
        const filteredData = originalData.filter(referido =>
            (referido.usuNombre + ' ' + referido.usuApellido).toLowerCase().includes(searchValue)
        );
        fillTableWithData(filteredData);
    });
});
