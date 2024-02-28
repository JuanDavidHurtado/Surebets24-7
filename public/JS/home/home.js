document.addEventListener('DOMContentLoaded', function() {


id = localStorage.getItem('id');

fetch('/api/lista_metodo/' + id,
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
            // Si la respuesta no es 200 OK, lanza un error
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        //console.log(data);
        if (data.length === 0) {
            // Si la data está vacía, muestra la alerta
            document.getElementById('emptyDataAlert').classList.remove('d-none'); // Muestra la alerta
        }
    })
    .catch(error => {
        console.error('Error fetching data: ', error);
    });

fetch('/api/lis_com_esp/'+id,
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
        const tableDiv = document.querySelector('.table-parent');
        const tableBody = document.querySelector('.table.table-striped tbody');

        if (data.length > 0) {
            tableDiv.style.display = 'block'; // Muestra la tabla si hay registros
            tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
            data.forEach((comision, index) => {
                console.log(comision);
                const row = document.createElement('tr');
                row.innerHTML = `
            <td>${index + 1}</td>
            <td style="font-size: x-small;">Reconocimiento y agradecimiento por tu excelente desempeño y dedicación. Tu contribución al crecimiento y éxito de la plataforma es invaluable. ¡Gracias por tu arduo trabajo</td>
            <td>${comision.comValor} USD</td>
            <td style="font-size: x-small;">${comision.comDescripcion}</td>
            <td><span class="badge ${comision.comEstado === 'FINALIZADO' ? 'bg-primary' : 'bg-success'}">${comision.comEstado}</span></td>
        `;
                tableBody.appendChild(row);
            });

        } else {
            tableDiv.style.display = 'none'; // Oculta la tabla si no hay registros
        }
    })
    .catch(error => {
        console.error('Error fetching data: ', error);
    });

});
