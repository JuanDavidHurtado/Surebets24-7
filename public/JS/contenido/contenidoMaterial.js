document.addEventListener('DOMContentLoaded', function () {
   
 var contenidoMaterial = document.querySelector('#tabla-contenido-material tbody');
 if (contenidoMaterial){
    var path = window.location.pathname;
    var pathParts = path.split('/');
    var contenidoId = pathParts[pathParts.length - 1];
    console.log(contenidoId)
    fetch('/api/lista_material/' + contenidoId, {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
      
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la solicitud al servidor: ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        // Procesar los datos recibidos
        console.log(data); // Muestra los datos en la consola para depuración
        document.querySelector('#message-noFound').classList.add('d-none')

        if (Array.isArray(data) && data.length > 0) {
         // Limpiar la tabla antes de añadir los nuevos datos
         contenidoMaterial.innerHTML = '';
 
         // Iterar sobre los datos y añadirlos a la tabla
         data.forEach((item, index) => {
             const row = document.createElement('tr');
             row.innerHTML = `
                 <td>${index + 1}</td>
                 <td>${item.curNombre}</td>
                 <td>${item.conNombre}</td>
                 <td>${item.matNombre}</td>
                 <td>...opciones...</td>
             `;
             contenidoMaterial.appendChild(row);
         });
     } else {
         // Mostrar mensaje de "No Data Found"
         const noDataFoundRow = document.getElementById('message-noFound');
         if (noDataFoundRow) {
             noDataFoundRow.style.display = '';
         }
     }
    })
    .catch(error => {
        console.error('Error en la petición:', error);
    });
 }  



});