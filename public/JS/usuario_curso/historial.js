document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.forEach((usu_cur, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${usu_cur.cur_fecha}</td>
                <td>${usu_cur.curNombre}</td>
                <td>
                ${usu_cur.usu_cur_estado === 'FINALIZADO'
                    ? '<button class="badge bg-primary">Ver Contenido</button>'
                    : usu_cur.usu_cur_estado === 'ANULADO'
                        ? 'No hay contenido cargado'
                        : 'En Espera'}
                </td>
                <td><span class="badge ${usu_cur.usu_cur_estado === 'FINALIZADO' ? 'bg-success' : usu_cur.usu_cur_estado === 'ANULADO' ? 'bg-danger' : 'bg-warning'}">${usu_cur.usu_cur_estado}</span></td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Utiliza la función fetch para realizar la petición fetch
    fetch('/api/cur_usu',
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
                noDataMessage.innerHTML = '<td colspan="5"><center>No hay cursos registrados en el sistema en este momento.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento input al campo de entrada para búsqueda en tiempo real
    const sponsorURLInput = document.getElementById('sponsorURL');
    sponsorURLInput.addEventListener('input', function () {
        const inputText = sponsorURLInput.value.toLowerCase(); // Convertir a minúsculas para coincidencia no sensible a mayúsculas
        const filteredData = originalData.filter(usu_cur =>
            usu_cur.cur_fecha.toLowerCase().includes(inputText)
        );
        fillTableWithData(filteredData);
    });


});